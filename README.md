# Woocommerce-Pennycoin-Payment
Pennycoin Payment Method for Woocommerce 
 
**Benefits**
- Fully automatic operation.
- Accept payments in Pennycoin directly into your Pennycoin wallet.
- Accept payments in Pennycoin for physical and digital downloadable products.
- Add Pennycoin option to your existing online store with alternative main currency.
Flexible exchange rate calculations fully managed via administrative settings.
- Zero fees and no commissions for Pennycoin processing from any third party.
- Set main currency of your store in USD, PK or BTC.
- Automatic conversion to Pennycoin (PK) via realtime exchange rate feed and calculations.

**Installation Plugin**
1. Install WooCommerce plugin and configure your store (if you haven't done so already - http://wordpress.org/plugins/woocommerce/).
2. Install "Woocommerce-Pennycoin-Payment" wordpress plugin just like any other Wordpress plugin.
3. Activate.

**PennyCLI aka PKCli requirement**
**Option #1 Run full node on your VPS - need level 3 technique**
1. Download and Build PKCli from soure https://github.com/Pennykoin-Dev-Team/PKCli
2. Run Daemon and wait for blockchain syncing is completed, then run Wallet-Cli with your bindip/port option.
3. Within your site's Wordpress admin, navigate to: WooCommerce -> Settings -> Payments -> Pennycoin Gateways
- Check on "Enable this payment gateway"
- Check on "Use PennyCLI"
- Your PK wallet address into "Wallet Address" field
- Pennycoin wallet cli host/ip
- Pennycoin wallet cli port
- Press [ Save changes ]
4. If you do not see any errors - your store is ready for operation and to access payments in Pennycoin! Else, please check all fields/options again.

**Option #2 Rent a Remote Wallet - need level 1 technique (Will provide soon)**
If you are running Wordpress from a regular webhost, you will need to host a wallet on a remote server. www.pennyno.de, one our sponsors can host it for as little as $15 per year.
1. Contact www.pennyno.de to rent a remote wallet.
2. Within your site's Wordpress admin, navigate to: WooCommerce -> Settings -> Payments -> Pennycoin Gateways
- Check on "Enable this payment gateway"
- Check on "Use PennyCLI"
- Your PK wallet address into "Wallet Address" field
- Pennycoin wallet cli host/ip (Will be provided by www.pennyno.de)
- Pennycoin wallet cli port (Will be provided by www.pennyno.de)
- Press [ Save changes ]
3. If you do not see any errors - your store is ready for operation and to access payments in Pennycoin! Else, please check all fields/options again.

**Remove plugin**
1. Deactivate plugin through the 'Plugins' menu in WordPress
2. Delete plugin through the 'Plugins' menu in WordPress
