<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'parameter_name' => 'BOSalesCRCommission',
                'account_id' => 159,
                'ledger_name' => 'COMMISION RECEIVED',
                'numeric_value' => 0,
                'transaction_type' => 'BOSALES',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'BOSalesCRCounterExempted',
                'account_id' => 0,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'BOSALES',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'BOSalesCRLedgerCash',
                'account_id' => 110,
                'ledger_name' => 'SALES ACCOUNT',
                'numeric_value' => 0,
                'transaction_type' => 'BOSALES',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'BOSalesCRLedgerCredit',
                'account_id' => 110,
                'ledger_name' => 'SALES ACCOUNT',
                'numeric_value' => 0,
                'transaction_type' => 'BOSALES',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'BOSalesCRLedgerCreditCard',
                'account_id' => 110,
                'ledger_name' => 'SALES ACCOUNT',
                'numeric_value' => 0,
                'transaction_type' => 'BOSALES',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'BOSalesCRLedgerOverseas',
                'account_id' => 110,
                'ledger_name' => 'SALES ACCOUNT',
                'numeric_value' => 0,
                'transaction_type' => 'BOSALES',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'BOSalesDRCommission',
                'account_id' => 158,
                'ledger_name' => 'COMMISION  PAID',
                'numeric_value' => 0,
                'transaction_type' => 'BOSALES',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'BOSalesDRDiscountLedger',
                'account_id' => 137,
                'ledger_name' => 'DISCOUNT ALLOWED',
                'numeric_value' => 0,
                'transaction_type' => 'BOSALES',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'BOSalesDRRoundingLedger',
                'account_id' => 137,
                'ledger_name' => 'DISCOUNT ALLOWED',
                'numeric_value' => 0,
                'transaction_type' => 'BOSALES',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'OutPutTax5%',
                'account_id' => 130,
                'ledger_name' => 'OUTPUT VAT 5%',
                'numeric_value' => 0,
                'transaction_type' => 'BOSALES',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'SalesEntryBOVoucherName',
                'account_id' => 102,
                'ledger_name' => 'SALES TRADING',
                'numeric_value' => 0,
                'transaction_type' => 'BOSALES',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'DayCloseCashINHand',
                'account_id' => 125,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'DAYCLOSE',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'PaymentVoucherNameCashPurchase',
                'account_id' => 103,
                'ledger_name' => 'PAYMENT TRADING',
                'numeric_value' => 0,
                'transaction_type' => 'PAYMENT',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'PaymentVoucherNameSupplier',
                'account_id' => 103,
                'ledger_name' => 'PAYMENT TRADING',
                'numeric_value' => 0,
                'transaction_type' => 'PAYMENT',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'CustomerLedger',
                'account_id' => 17,
                'ledger_name' => 'SUNDRY DEBTORS',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'POSOutPutTax5%',
                'account_id' => 130,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'POSSalesCRCounterExempted',
                'account_id' => 0,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'POSSalesCRLedgerCash',
                'account_id' => 110,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'POSSalesCRLedgerCreditCard',
                'account_id' => 110,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'POSSalesDRDiscountLedger',
                'account_id' => 137,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'POSSalesDRLedgerCash',
                'account_id' => 125,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'POSSalesDRLedgerCreditCard',
                'account_id' => 126,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'POSSalesDRLedgerVoucher',
                'account_id' => 126,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'POSSalesDRRoundingLedger',
                'account_id' => 137,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'POSVoucherType',
                'account_id' => 105,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'SupplierLedger',
                'account_id' => 18,
                'ledger_name' => 'SUNDRY CREDITORS',
                'numeric_value' => 0,
                'transaction_type' => 'POS',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'INPutTax5%',
                'account_id' => 136,
                'ledger_name' => 'INPUT VAT 5%',
                'numeric_value' => 0,
                'transaction_type' => 'PURCHASE',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'PurchaseCRDiscountLedger',
                'account_id' => 150,
                'ledger_name' => 'DISCOUNT RECEIVED',
                'numeric_value' => 0,
                'transaction_type' => 'PURCHASE',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'PurchaseCRRoundingLedger',
                'account_id' => 150,
                'ledger_name' => 'DISCOUNT RECEIVED',
                'numeric_value' => 0,
                'transaction_type' => 'PURCHASE',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'PurchaseDRExempted',
                'account_id' => 0,
                'ledger_name' => '',
                'numeric_value' => 0,
                'transaction_type' => 'PURCHASE',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'PurchaseDRLedgerCash',
                'account_id' => 111,
                'ledger_name' => 'PURCHASE ACC',
                'numeric_value' => 0,
                'transaction_type' => 'PURCHASE',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'PurchaseDRLedgerCredit',
                'account_id' => 111,
                'ledger_name' => 'PURCHASE ACC',
                'numeric_value' => 0,
                'transaction_type' => 'PURCHASE',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'PurchaseDRLedgerCreditCard',
                'account_id' => 111,
                'ledger_name' => 'PURCHASE ACC',
                'numeric_value' => 0,
                'transaction_type' => 'PURCHASE',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'PurchaseDRLedgerOverseas',
                'account_id' => 111,
                'ledger_name' => 'PURCHASE ACC',
                'numeric_value' => 0,
                'transaction_type' => 'PURCHASE',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'PurchaseEntryVoucherName',
                'account_id' => 101,
                'ledger_name' => 'PURCHASE TRADING',
                'numeric_value' => 0,
                'transaction_type' => 'PURCHASE',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'ReceiptVoucherNameCashSales',
                'account_id' => 104,
                'ledger_name' => 'RECEIPT TRADING',
                'numeric_value' => 0,
                'transaction_type' => 'RECEIPT',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_name' => 'ReceiptVoucherNameCustomer',
                'account_id' => 104,
                'ledger_name' => 'RECEIPT TRADING',
                'numeric_value' => 0,
                'transaction_type' => 'RECEIPT',
                'description' => '',
                'station_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('accounts_parameters')->insert($data);
    }
}
