<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::insert(<<<SQL
REPLACE INTO `settings` (`id`, `section`, `type`, `title`, `active`, `key`, `value`, `created_at`, `updated_at`) VALUES
	(NULL, '1menu', 'image', 'لوگو', 1, 'logo_png', NULL, '2022-08-02 04:44:57', '2022-08-02 04:44:57'),
	(NULL, '2top', 'text', 'عنوان قسمت اصلی', 1, 'top1text', 'محصولات پر فروش', '2022-08-02 04:53:04', '2022-08-02 05:23:03'),
	(NULL, '2top', 'cat', 'دسته قسمت اصلی', 1, 'top1cat', '1', '2022-08-02 04:53:35', '2022-08-02 05:23:57'),
	(NULL, '2top', 'text', 'عنوان قسمت بالا', 1, 'top2text', '33%', '2022-08-02 04:53:04', '2022-08-02 05:24:06'),
	(NULL, '2top', 'cat', 'دسته قسمت بالا', 1, 'top2cat', '1', '2022-08-02 04:53:35', '2022-08-02 05:24:06'),
	(NULL, '2top', 'text', 'عنوان قسمت پایین', 1, 'top3text', '15%', '2022-08-02 04:53:04', '2022-08-02 05:24:06'),
	(NULL, '2top', 'cat', 'دسته قسمت پایین', 1, 'top3cat', '1', '2022-08-02 04:53:35', '2022-08-02 05:24:06'),
	(NULL, '3top', 'text', 'عنوان قسمت دوم', 1, 'sectext', 'سایر محصولات', '2022-08-02 04:53:04', '2022-08-02 05:24:06'),
	(NULL, '3top', 'cat', 'دسته قسمت دوم', 1, 'seccat', '1', '2022-08-02 04:53:35', '2022-08-02 05:24:06'),
	(NULL, '4sec', 'text', 'عنوان قسمت سوم فیلتر دار', 1, '3text', 'لوازم جانبی', '2022-08-02 05:03:47', '2022-08-02 05:24:06'),
	(NULL, '4sec', 'cat', 'دسته قسمت سوم فیلتر دار', 1, '3cat', '1', '2022-08-02 05:04:35', '2022-08-02 05:24:06'),
	(NULL, '5sec', 'cat', 'دسته برند', 1, '4cat', '1', '2022-08-02 05:04:35', '2022-08-02 05:24:06'),
	(NULL, '6footer', 'category', 'دسته فوتر سمت راست', 1, 'footer1', '1', '2022-08-02 05:08:10', '2022-08-02 05:24:06'),
	(NULL, '6footer', 'category', 'فوتر وسط', 1, 'footer2', '4', '2022-08-02 05:08:42', '2022-09-12 05:57:55'),
	(NULL, '6footer', 'code', 'فوتر سمت راست', 1, 'footer3', '<img src="http://parsavps.com/enamad.png" width="145px" />', '2022-08-02 05:10:14', '2022-08-02 05:31:52'),
	(NULL, '6footer', 'text', 'شبکه اجتماعی ایستاگرام', 1, 'soc_in', NULL, '2022-08-02 05:11:20', '2022-08-02 05:11:20'),
	(NULL, '6footer', 'text', 'شبکه اجتماعی تلگرام', 1, 'soc_tg', NULL, '2022-08-02 05:11:20', '2022-08-02 05:11:20'),
	(NULL, '6footer', 'text', 'شبکه اجتماعی توییتر', 1, 'soc_tw', 'https://twitter.com/a1gard', '2022-08-02 05:11:20', '2022-08-02 05:24:06'),
	(NULL, '6footer', 'text', 'شبکه اجتماعی واستاپ (شماره با کد کشور)', 1, 'soc_wp', '+989121234567', '2022-08-02 05:11:20', '2022-08-02 05:27:02'),
	(NULL, '6footer', 'text', 'شبکه اجتماعی یوتویب', 1, 'soc_yt', NULL, '2022-08-02 05:11:20', '2022-08-02 05:11:20'),
	(NULL, '7seo', 'text', 'کد رنگ سایت', 1, 'color', '#3593D2', '2022-08-02 05:18:38', '2022-08-02 05:24:06'),
	(NULL, '7seo', 'text', 'سئو کلمات کلیدی', 1, 'keywords', 'فروشگاه، فروش آنلاین', '2022-08-02 05:19:10', '2022-08-02 05:24:06'),
	(NULL, '7seo', 'text', 'سئو جزئیات', 1, 'desc', 'توضیحات فروشگاه شما', '2022-08-02 05:20:08', '2022-08-02 05:24:06'),
	(NULL, '7seo', 'text', 'متن کپی رایت', 1, 'copyright', 'کلیه حقوق برای وبسایت فروشگاه محفوظ است', '2022-08-02 05:40:18', '2022-08-02 05:40:37'),
	(NULL, '1menu', 'text', 'تلفن', 1, 'tel', NULL, '2023-02-23 00:21:33', '2023-02-23 00:21:33'),
	(NULL, '1menu', 'text', 'ایمیل', 1, 'email', NULL, '2023-02-23 00:21:53', '2023-02-23 00:21:53');
SQL
);
        \DB::insert(<<<SQL
insert into settings (`id`, `section`, `type`, title, `active`, `key`, `value`, `created_at`, `updated_at`)
values  (null, 'seo', 'text', 'نام سایت', 1, 'site_name', 'فروشگاه ایکس شاپ', '2022-09-14 09:46:58', '2022-09-14 09:47:20'),
        (null, 'seo', 'text', 'توضیح کوتاه سایت(SEO)', 1, 'site_description', 'به روزترین گوشی ها با کمترین قیمت', '2022-09-14 09:48:23', '2022-09-14 09:48:39'),
        (null, 'seo', 'text', 'کلمات کلیدی سایت (SEO- با کاما از هم جدا کنید)', 1, 'site_keywords', 'گوشی،ارزان،خرید،ایکس شاپ', '2022-09-14 09:52:56', '2022-09-14 09:53:41'),
        (null, 'seo', 'text', 'کد گوگل وب مستر', 1, 'site_webmaster_google', null, '2022-09-14 09:59:17', '2022-09-14 09:59:17'),
        (null, 'seo', 'image', 'تصویر سایت(SEO)', 1, 'site_image', null, '2022-09-14 10:00:51', '2022-09-14 10:00:51');
SQL
);
    }
}
