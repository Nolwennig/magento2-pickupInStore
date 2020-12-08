## Synopsis

An extension to add Shipping carrier. This extension add "In-Store Pickup" shipping carrier.
Several pickup locations can be configured with this shipping carrier.

## Technical feature

[Carrier class](Model/Carrier.php) implements CarrierInterface and represents a shipping carrier. Shipping carrier should have one or more shipping methods.
Shipping method should have carrier code, carrier title, method code, method title and price. Shipping method represented by \Magento\Quote\Model\Quote\Address\RateResult\Method class. 
[Carrier class](Model/Carrier.php) has 'collectRates' method used to get applicable shipping methods.
[Configuration](etc/config.xml) 'registers' [Carrier class](Model/Carrier.php) as a shipping carrier.
[system.xml](etc/adminhtml/system.xml) makes our module configurable in the admin panel.

## Installation

This module is intended to be installed using composer.  After including this component and enabling it, you can verify it is installed by going the backend at:

STORES -> Configuration -> ADVANCED/Advanced ->  Disable Modules Output

Once there check that the module name shows up in the list to confirm that it was installed correctly.
