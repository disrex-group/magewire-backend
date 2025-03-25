<?php
/**
 * Disrex V.O.F.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Disrex.nl license that is
 * available through the world-wide-web at this URL:
 * https://www.disrex.nl/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @author Disrex V.O.F
 * @category Modules
 * @copyright Copyright (c) Disrex V.O.F. (https://www.disrex.nl, support@disrex.nl)
 * @year 2025
 */

namespace Composer\MagewirePatchPlugin;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\Event;

class Plugin implements PluginInterface, EventSubscriberInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        // Nothing needed on activate for now
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'post-install-cmd' => 'applyMagewirePatch',
            'post-update-cmd' => 'applyMagewirePatch'
        ];
    }

    public function applyMagewirePatch(Event $event): void
    {
        $io = $event->getIO();

        $rootDir = getcwd();
        $patchPath = $rootDir . '/vendor/disrex/magewire-backend/patches/magewire-backend.patch';
        $targetPath = $rootDir . '/vendor/magewirephp/magewire';

        if (!file_exists($patchPath)) {
            $io->writeError("<error>Disrex Magewire patch file not found: $patchPath</error>");
            return;
        }

        if (!is_dir($targetPath)) {
            $io->writeError("<error>magewirephp/magewire not found at: $targetPath</error>");
            return;
        }

        $io->write("<info>Applying Disrex Magewire Backend patch...</info>");

        $cmd = "patch -p1 -d " . escapeshellarg($targetPath) . " < " . escapeshellarg($patchPath);
        exec($cmd, $output, $exitCode);

        if ($exitCode === 0) {
            $io->write("<info>✅ Magewire patch applied successfully.</info>");
        } else {
            $io->writeError("<error>⚠️ Magewire patch failed or already applied.</error>");
        }
    }
}
