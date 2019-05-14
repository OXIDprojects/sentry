# Installation

1. [Add our internal composer-repository](https://oxid-esales.atlassian.net/wiki/spaces/PS/pages/546799759/Gitlab-Composer-Repository) to your projects `composer.json` if you haven't already done this
1. Install this module via composer: `composer require oxid-professional-services/sentry`
1. Activate Module in Backend
1. Add your DSN to `PHP-API Url` (in module settings)
  * **you can find your DSN in your sentry-Dashboard here:**
  * Select project
  * Open the settings-tab (https://sentry-ps.oxid-esales.com/settings/sentry/<project-name>/)
  * Click on 'Client Keys (DSN)' (on the sidebar) (https://sentry-ps.oxid-esales.com/settings/sentry/<project-name>/keys/)
  * Copy the key from the DSN field (not the deprecated one)
1. Set your Environment Name (ProTip: do this via modules-config during the deployment)
1. Enjoy your error alerts, happy bugfixing!

