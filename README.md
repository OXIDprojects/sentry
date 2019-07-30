# Installation

1. Install this module via composer: `composer require oxid-professional-services/sentry`
1. Activate Module in Backend
1. Add your DSN to `PHP-API Url` (in module settings)
  * **you can find your DSN in your sentry-Dashboard here:**
  * Select project
  * Open the settings-tab (e.g. for PS developers https://sentry-ps.oxid-esales.com/settings/sentry/<project-name>/)
  * Click on 'Client Keys (DSN)' (on the sidebar) (e.g. https://sentry-ps.oxid-esales.com/settings/sentry/<project-name>/keys/)
  * Copy the key from the DSN field (not the deprecated one)
1. Set your Environment Name (ProTip: do this via modules-config during the deployment)
1. Enjoy your error alerts, happy bugfixing!

