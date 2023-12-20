<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductVariantsTableSeeder extends Seeder
{
    
    /**
    * Auto generated seed file
    *
    * @return void
    */
    public function run()
    {
        
        
        \DB::table('product_variants')->delete();
        
        \DB::table('product_variants')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sku' => '999BlackS',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '130',
                'price_add_on' => '2',
                'status' => '1',
                'type' => '1',
                'created_at' => '2021-09-07 12:51:05',
                'updated_at' => '2021-09-07 14:28:30',
                'deleted_at' => NULL,
                'product_id' => 1,
                'color_id' => 1,
                'size_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'sku' => '999BlackM',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '130',
                'price_add_on' => '2',
                'status' => '1',
                'type' => '1',
                'created_at' => '2021-09-07 12:51:54',
                'updated_at' => '2021-09-07 12:51:54',
                'deleted_at' => NULL,
                'product_id' => 1,
                'color_id' => 1,
                'size_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'sku' => '999BlackL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '130',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '1',
                'created_at' => '2021-09-07 12:52:16',
                'updated_at' => '2021-09-07 12:52:16',
                'deleted_at' => NULL,
                'product_id' => 1,
                'color_id' => 1,
                'size_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'sku' => '999BlackXL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '130',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '1',
                'created_at' => '2021-09-07 12:53:04',
                'updated_at' => '2021-09-07 12:53:04',
                'deleted_at' => NULL,
                'product_id' => 1,
                'color_id' => 1,
                'size_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'sku' => '999BlackXXL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '130',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '1',
                'created_at' => '2021-09-07 12:53:52',
                'updated_at' => '2021-09-07 12:53:52',
                'deleted_at' => NULL,
                'product_id' => 1,
                'color_id' => 1,
                'size_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'sku' => '999StoneGreyS',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '140',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '2',
                'created_at' => '2021-09-07 14:26:52',
                'updated_at' => '2021-09-07 14:26:52',
                'deleted_at' => NULL,
                'product_id' => 1,
                'color_id' => 2,
                'size_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'sku' => '999StoneGreyM',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '140',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '2',
                'created_at' => '2021-09-07 16:38:02',
                'updated_at' => '2021-09-07 16:38:41',
                'deleted_at' => NULL,
                'product_id' => 1,
                'color_id' => 2,
                'size_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'sku' => '999StoneGreyL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '140',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '2',
                'created_at' => '2021-09-07 16:39:59',
                'updated_at' => '2021-09-07 16:40:19',
                'deleted_at' => NULL,
                'product_id' => 1,
                'color_id' => 2,
                'size_id' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'sku' => '999StoneGreyXL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '140',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '2',
                'created_at' => '2021-09-07 16:41:48',
                'updated_at' => '2021-09-07 16:41:48',
                'deleted_at' => NULL,
                'product_id' => 1,
                'color_id' => 2,
                'size_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'sku' => '999StoneGreyXXL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '140',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '2',
                'created_at' => '2021-09-07 16:42:52',
                'updated_at' => '2021-09-07 16:42:52',
                'deleted_at' => NULL,
                'product_id' => 1,
                'color_id' => 2,
                'size_id' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'sku' => '888DBlackS',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:44:30',
                'updated_at' => '2021-09-07 16:44:30',
                'deleted_at' => NULL,
                'product_id' => 2,
                'color_id' => 3,
                'size_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'sku' => '888DBlackM',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:45:28',
                'updated_at' => '2021-09-07 16:45:28',
                'deleted_at' => NULL,
                'product_id' => 2,
                'color_id' => 3,
                'size_id' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'sku' => '888DBlackL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:46:06',
                'updated_at' => '2021-09-07 16:46:06',
                'deleted_at' => NULL,
                'product_id' => 2,
                'color_id' => 3,
                'size_id' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'sku' => '888DBlackXL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:46:54',
                'updated_at' => '2021-09-07 16:46:54',
                'deleted_at' => NULL,
                'product_id' => 2,
                'color_id' => 3,
                'size_id' => 4,
            ),
            14 => 
            array (
                'id' => 15,
                'sku' => '888DBlackXXL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:47:33',
                'updated_at' => '2021-09-07 16:47:33',
                'deleted_at' => NULL,
                'product_id' => 2,
                'color_id' => 3,
                'size_id' => 5,
            ),
            15 => 
            array (
                'id' => 16,
                'sku' => '826SkyBlueS',
                'stock' => NULL,
                'sales_price' => '185',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:48:53',
                'updated_at' => '2021-09-07 16:48:53',
                'deleted_at' => NULL,
                'product_id' => 3,
                'color_id' => 5,
                'size_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'sku' => '826SkyBlueM',
                'stock' => NULL,
                'sales_price' => '185',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:49:37',
                'updated_at' => '2021-09-07 16:49:37',
                'deleted_at' => NULL,
                'product_id' => 3,
                'color_id' => 5,
                'size_id' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'sku' => '826SkyBlueL',
                'stock' => NULL,
                'sales_price' => '185',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:50:07',
                'updated_at' => '2021-09-07 16:50:07',
                'deleted_at' => NULL,
                'product_id' => 3,
                'color_id' => 5,
                'size_id' => 3,
            ),
            18 => 
            array (
                'id' => 19,
                'sku' => '826SkyBlueXL',
                'stock' => NULL,
                'sales_price' => '185',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:50:40',
                'updated_at' => '2021-09-07 16:50:40',
                'deleted_at' => NULL,
                'product_id' => 3,
                'color_id' => 5,
                'size_id' => 4,
            ),
            19 => 
            array (
                'id' => 20,
                'sku' => '826SkyBlueXXL',
                'stock' => NULL,
                'sales_price' => '185',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:51:15',
                'updated_at' => '2021-09-07 16:51:15',
                'deleted_at' => NULL,
                'product_id' => 3,
                'color_id' => 5,
                'size_id' => 5,
            ),
            20 => 
            array (
                'id' => 21,
                'sku' => '826LakeGreenS',
                'stock' => NULL,
                'sales_price' => '185',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:52:39',
                'updated_at' => '2021-09-07 16:52:39',
                'deleted_at' => NULL,
                'product_id' => 3,
                'color_id' => 6,
                'size_id' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'sku' => '826LakeGreenM',
                'stock' => NULL,
                'sales_price' => '185',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:53:12',
                'updated_at' => '2021-09-07 16:53:12',
                'deleted_at' => NULL,
                'product_id' => 3,
                'color_id' => 6,
                'size_id' => 2,
            ),
            22 => 
            array (
                'id' => 23,
                'sku' => '826LakeGreenL',
                'stock' => NULL,
                'sales_price' => '185',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:53:46',
                'updated_at' => '2021-09-07 16:53:46',
                'deleted_at' => NULL,
                'product_id' => 3,
                'color_id' => 6,
                'size_id' => 3,
            ),
            23 => 
            array (
                'id' => 24,
                'sku' => '826LakeGreenXL',
                'stock' => NULL,
                'sales_price' => '185',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:54:13',
                'updated_at' => '2021-09-07 16:54:13',
                'deleted_at' => NULL,
                'product_id' => 3,
                'color_id' => 6,
                'size_id' => 4,
            ),
            24 => 
            array (
                'id' => 25,
                'sku' => '826LakeGreenXXL',
                'stock' => NULL,
                'sales_price' => '185',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '150',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:54:59',
                'updated_at' => '2021-09-07 16:54:59',
                'deleted_at' => NULL,
                'product_id' => 3,
                'color_id' => 6,
                'size_id' => 5,
            ),
            25 => 
            array (
                'id' => 26,
                'sku' => '555PurpleM',
                'stock' => NULL,
                'sales_price' => '258',
                'merchant_president_price' => '158',
                'agent_director_price' => '168',
                'agent_executive_price' => '178',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:56:43',
                'updated_at' => '2021-09-07 16:57:07',
                'deleted_at' => NULL,
                'product_id' => 4,
                'color_id' => 7,
                'size_id' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'sku' => '555PurpleL',
                'stock' => NULL,
                'sales_price' => '258',
                'merchant_president_price' => '158',
                'agent_director_price' => '168',
                'agent_executive_price' => '178',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:57:45',
                'updated_at' => '2021-09-07 16:57:45',
                'deleted_at' => NULL,
                'product_id' => 4,
                'color_id' => 7,
                'size_id' => 3,
            ),
            27 => 
            array (
                'id' => 28,
                'sku' => '555PurpleXL',
                'stock' => NULL,
                'sales_price' => '258',
                'merchant_president_price' => '158',
                'agent_director_price' => '168',
                'agent_executive_price' => '178',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:58:14',
                'updated_at' => '2021-09-07 16:58:14',
                'deleted_at' => NULL,
                'product_id' => 4,
                'color_id' => 7,
                'size_id' => 4,
            ),
            28 => 
            array (
                'id' => 29,
                'sku' => '555PurpleXXL',
                'stock' => NULL,
                'sales_price' => '258',
                'merchant_president_price' => '158',
                'agent_director_price' => '168',
                'agent_executive_price' => '178',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:58:41',
                'updated_at' => '2021-09-07 16:58:41',
                'deleted_at' => NULL,
                'product_id' => 4,
                'color_id' => 7,
                'size_id' => 5,
            ),
            29 => 
            array (
                'id' => 30,
                'sku' => '555BlackM',
                'stock' => NULL,
                'sales_price' => '258',
                'merchant_president_price' => '158',
                'agent_director_price' => '168',
                'agent_executive_price' => '178',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:59:18',
                'updated_at' => '2021-09-07 16:59:18',
                'deleted_at' => NULL,
                'product_id' => 4,
                'color_id' => 3,
                'size_id' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'sku' => '555BlackL',
                'stock' => NULL,
                'sales_price' => '258',
                'merchant_president_price' => '158',
                'agent_director_price' => '168',
                'agent_executive_price' => '178',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 16:59:59',
                'updated_at' => '2021-09-07 16:59:59',
                'deleted_at' => NULL,
                'product_id' => 4,
                'color_id' => 3,
                'size_id' => 3,
            ),
            31 => 
            array (
                'id' => 32,
                'sku' => '555BlackXL',
                'stock' => NULL,
                'sales_price' => '258',
                'merchant_president_price' => '158',
                'agent_director_price' => '168',
                'agent_executive_price' => '178',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 17:00:30',
                'updated_at' => '2021-09-07 17:00:30',
                'deleted_at' => NULL,
                'product_id' => 4,
                'color_id' => 3,
                'size_id' => 4,
            ),
            32 => 
            array (
                'id' => 33,
                'sku' => '555BlackXXL',
                'stock' => NULL,
                'sales_price' => '258',
                'merchant_president_price' => '158',
                'agent_director_price' => '168',
                'agent_executive_price' => '178',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-07 17:01:00',
                'updated_at' => '2021-09-07 17:01:00',
                'deleted_at' => NULL,
                'product_id' => 4,
                'color_id' => 3,
                'size_id' => 5,
            ),
            33 => 
            array (
                'id' => 34,
                'sku' => '888EarthS',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-09 14:11:40',
                'updated_at' => '2021-09-09 14:12:04',
                'deleted_at' => NULL,
                'product_id' => 2,
                'color_id' => 4,
                'size_id' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'sku' => '888EarthM',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-09 14:12:34',
                'updated_at' => '2021-09-09 14:12:34',
                'deleted_at' => NULL,
                'product_id' => 2,
                'color_id' => 4,
                'size_id' => 2,
            ),
            35 => 
            array (
                'id' => 36,
                'sku' => '888BeigeL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-09 14:13:30',
                'updated_at' => '2021-09-09 14:13:30',
                'deleted_at' => NULL,
                'product_id' => 2,
                'color_id' => 4,
                'size_id' => 3,
            ),
            36 => 
            array (
                'id' => 37,
                'sku' => '888BeigeXL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-09 14:14:07',
                'updated_at' => '2021-09-09 14:14:07',
                'deleted_at' => NULL,
                'product_id' => 2,
                'color_id' => 4,
                'size_id' => 4,
            ),
            37 => 
            array (
                'id' => 38,
                'sku' => '888EarthXXL',
                'stock' => NULL,
                'sales_price' => '175',
                'merchant_president_price' => '90',
                'agent_director_price' => '100',
                'agent_executive_price' => '110',
                'vip_redeem_pv' => '200',
                'price_add_on' => '2',
                'status' => '2',
                'type' => '3',
                'created_at' => '2021-09-09 14:14:33',
                'updated_at' => '2021-09-09 14:14:33',
                'deleted_at' => NULL,
                'product_id' => 2,
                'color_id' => 4,
                'size_id' => 5,
            ),
        ));
        
        
    }
}