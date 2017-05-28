<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 12/05/17
 * Time: 16:35
 */

namespace Miky\Bundle\InstallerBundle;


final class MikyInstallerEvents
{
    const INSTALL_INITIALIZE = 'miky_installer.install.initialize';

    const INSTALL_COMPLETED = 'miky_installer.install.completed';

    const UPDATE_INITIALIZE = 'miky_installer.update.initialize';

    const UPDATE_COMPLETED = 'miky_installer.update.completed';

}