# BlockSwap-magento2
Simple widget to allow you to hide one block and show another on a click. Useful with catalogWidgetPlus-magento2 to give a category landing page (with best sellers) but also allow access to the normal category interface.

# Installation
- Extract over your magento installation.
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy

# Usage
Add the widget to a text block. Reference the initially visible block id and the initially hidden block id. Clicking the resulting link will perform the swap. Pressing back will undo it.
