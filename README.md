# CryptoTrader
To place buy/ sell orders in bittrex

##Functionalities to include
- [ ] Ticker for specific coin at 'x' seconds
- [ ] show the % of up/ down
- [ ] Add multiple accounts of bittrex
- [ ] Place buy/ sell orders
- [ ] Calculate profit or loss of a coin

####Calculate profit or loss of a coin

Logic goes something like this.
Profit gained = [sum(price where orderType = 'limit_sell' and exchange = 'BTC_LTC') - sum(price where orderType = 'limit_buy' and exchange = 'BTC_LTC')] - sum(commission)
