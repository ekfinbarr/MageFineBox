[![Magento 2](https://img.shields.io/badge/Magento2-yes-green.svg)](https://github.com/mSengera/Magento-2-Clear-Cache-with-Cronjob)

# [Magento 2] MageFineBox/CronCacheRefresh
A Magento2 module to clear cache using Cron job.
You can specify the execution times in app/code/MageFineBox/CronCacheRefresh/etc/crontab.xml

Default is 12:00AM, every day.

Installation
------------

1. Copy module to your Magento2 installation directory.
2. Run `bin/magento setup:upgrade`
3. Depending on your Workspace, you may decide to run `bin/magento setup:di:compile` and redeploy `static-content` if needed
4. Clear cache (Console `bin/magento cache:clear`" or via Backend)
5. Set up Cron job in Magento 2, if not done yet. (https://devdocs.magento.com/guides/v2.0/config-guide/cli/config-cli-subcommands-cron.html)
6. Test extension.

May the Code be with you!
