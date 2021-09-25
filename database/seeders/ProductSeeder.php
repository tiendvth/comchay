<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'image' => 'https://imgamp.travelmag.vn/center/1200x800/files/thuthuy/2020/06/02/lau-chay-lang-dai-hoc-1510.jpg,https://cdn.cet.edu.vn/wp-content/uploads/2018/12/lau-chay-chua-cay.jpg,https://img-global.cpcdn.com/recipes/095364a083a6e123/1200x630cq70/photo.jpg,https://cdn.tgdd.vn/Files/2019/08/17/1188661/lau-thai-chay-chua-chua-cay-cay-vua-an-vua-hit-ha-khen-ngon-202107231006472731.jpg',
                'price' => 270000,
                'name' => 'lẩu chay Thái chua cay',
                'description' => '<p><strong>Set 01 lẩu chay th&aacute;i chua cay</strong>:</p>

<p>-Nem cuốn: 3 chiếc d&agrave;i</p>

<p>&nbsp;</p>

<p>-1 nồi lẩu nấm đ&ocirc;ng c&ocirc;, nấm hương, củ quả&nbsp;</p>

<p>-1 đĩa rau: 4 loại nấm + 2 loại rau</p>

<p>-1 b&igrave;a đậu phụ + v&aacute;ng đậu</p>

<p>-B&uacute;n hoặc m&igrave; t&ocirc;m</p>

<p>-1 đĩa chả quế hấp</p>

<p><strong>Set lẩu d&ugrave;ng được :</strong> cho 3 người</p>
',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'image' => 'http://vilai.vn/data/media/1827/images/quan-lau-chay-1.jpg,https://massageishealthy.com/wp-content/uploads/2019/08/cach-nau-lau-chay-chua-ngot-thap-cam-ngon-nhat-don-gian-thumb.jpg,https://i.ytimg.com/vi/JKXvN_TYw38/maxresdefault.jpg,https://cdn.tgdd.vn/Files/2019/12/16/1227037/thanh-dam-bo-mat-cuoi-tuan-voi-2-mon-lau-nam-chay-thom-ngon-don-gian-va-de-lam-9.jpg',
                'price' => 450000,
                'name' => 'Lẩu chay nấm kiểu Nhật',
                'description' => '<p><strong>Set lẩu nấm kiểu Nhật gồm c&oacute; :</strong></p>

<p>-&nbsp; M&oacute;n khai vị: Nem T&acirc;m Tịnh gi&ograve;n rụm v&agrave; Salad Rong Biển Tươi Với Nấm</p>

<p>- C&aacute;c loại nấm qu&yacute;: Nấm Gan B&ograve; V&agrave;ng, Nấm Gan B&ograve; Mỹ Vị dịu ngọt, thanh bổ</p>

<p>&nbsp;- V&agrave; canh lẩu Tofu với đậu Nhật Kinoko Nabe b&ugrave;i ngậy thưởng thức c&ugrave;ng rau, nấm thanh đạm tạo n&ecirc;n hương vị dịu ngọt, an l&agrave;nh</p>

<p>&nbsp;- Bữa tiệc chay ho&agrave;n hảo kh&eacute;p lại với m&oacute;n kem tr&aacute;ng miệng m&aacute;t l&agrave;nh.</p>

<p><strong>Set lẩu n&agrave;y d&ugrave;ng được cho</strong> :4 người</p>',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'image' => 'http://vilai.vn/data/media/1827/images/quan-lau-chay-ngon-2(3).jpg,https://suckhoedoisong.qltns.mediacdn.vn/Images/thanhloan/2017/01/03/cach-lua-chon-rau-cho-phu-hop-voi-tung-loai-lau9.jpg,https://cafefcdn.com/2019/11/25/photo-3-15746461607551940049705.jpeg,https://afamilycdn.com/2019/12/1/photo-1575136571529-15751365715401305251893.png',
                'price' => 21000,
                'name' => 'Lẩu chay chua cay cải ngọt',
                'description' => '<p><strong>Set lẩu chua cay cải ngọt gồm c&oacute; :</strong></p>

<p>&nbsp;</p>

<p>- Nước lẩu chua cay v&agrave; c&aacute;c loại gia vị<br />
- V&aacute;ng đậu<br />
- Sườn chay<br />
- Khoai m&ocirc;n chi&ecirc;n<br />
- Đĩa hải sản: mực chay, t&ocirc;m chay, gầu b&ograve; chay, gi&ograve; lụa, đậu phụ</p>

<p>- Đĩa rau: phần lớn l&agrave; rau cải ngọt v&agrave; k&egrave;m theo 1 số rau kh&aacute;c như rau muống v&agrave; rau cải, s&uacute;p lơ trắng v&agrave; xanh</p>

<p>- Đĩa m&igrave;</p>

<p><strong>Set lẩu n&agrave;y d&ugrave;ng cho :</strong> 4 người</p>
',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'image' => 'http://vilai.vn/data/media/1827/images/quan-lau-chay-ngon-3.jpg,https://cdn.cet.edu.vn/wp-content/uploads/2019/06/lau-mam-chay.jpg,https://cdn.tgdd.vn/2020/09/CookProduct/CachNauLAUMAMCHAYTHOMNGONMonAnChayBaMeQue0-17screenshot-1200x676.jpg,https://haithuycatering.com/image/5c385c9451046d693ead04ee/original.jpg',
                'price' => 340000,
                'name' => 'Lẩu chay mắm',
                'description' => '<p><strong>Set ăn Họp mặt d&agrave;nh cho 06 người bao gồm:</strong></p>

<p>-B&aacute;nh tr&aacute;ng -Trảng B&agrave;ng cuốn thịt ba chỉ quay / b&ograve; tơ</p>

<p>-Củ ChiB&ograve; xi&ecirc;n tăm</p>

<p>-.Cơm ch&aacute;y kho quẹt</p>

<p>-Nem nướng lụi</p>

<p>-Rau thập cẩm kho quẹt</p>

<p>-Lẩu mắm miền T&acirc;y</p>
',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],[
                'id' => 5,
                'image' => 'http://vilai.vn/data/media/1827/images/quan-lau-chay-ngon-4.jpg,https://cdn.cet.edu.vn/wp-content/uploads/2018/12/lau-chay-chua-cay.jpg,https://cdn.daynauan.info.vn/wp-content/uploads/2020/05/lau-nam-chay-hap-dan.jpg,https://lh3.googleusercontent.com/proxy/bB_Tz9q6dFFkhcVBUf5XG6e0ZBXuhS6-D5d9gwA6KxJ2pP5Xz-Bq6aQxX3Pn7LGH3_xUQA8wmoRjPORNIXTPM41ankFnUCWBEzbzv18yFXuVeHGTY219IKOQ09ELidvXMX-vJcvfkuZ6kkGEWBq4h-OKGOCv2J8',
                'price' => 420000,
                'name' => 'Lẩu chay Vị Lai',
                'description' => '<p><strong>Set lẩu chua cay cải ngọt gồm c&oacute; :</strong></p>

<p>-Một số loại nấm: nấm kim ch&acirc;m, nấm đ&ocirc;ng c&ocirc;, nấm đ&ugrave;i g&agrave;, nấm rơm, nấm linh chi, nấm b&agrave;o ngư&hellip;</p>

<p>-C&aacute;c loại rau củ quả s&uacute;p lơ, khoai m&ocirc;n, ng&ocirc;, c&agrave; rốt,<a href="https://hitavegan.com/tau-hu-ky/">t</a>&agrave;u hũ kỹ, m&iacute;a lau, h&agrave;nh chay poa &ndash; r&ocirc;</p>

<p>- Nước lẩu chua cay v&agrave; c&aacute;c loại gia vị<br />
- V&aacute;ng đậu</p>

<p>- Đĩa m&igrave; hoặc&nbsp;l&agrave; b&uacute;n</p>

<p><strong>Set lẩu n&agrave;y d&ugrave;ng cho :</strong> 4 người</p>
',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'image' => 'https://wna.cdnxbvn.com/wp-content/uploads/2020/07/cach-nau-lau-thai-chay.jpg,https://massageishealthy.com/wp-content/uploads/2018/08/cach-nau-lau-thai-chay-5.jpg,https://img-global.cpcdn.com/recipes/3061dd97a2586a7e/1200x630cq70/photo.jpg,https://i.ytimg.com/vi/Bw7GzxTMb28/hqdefault.jpg',
                'price' => 500000,
                'name' => 'Lẩu chay thái',
                'description' => '<p><strong>Set lẩu th&aacute;i gồm c&oacute; :</strong></p>

<p>- Ng&ocirc; chi&ecirc;n</p>

<p>- Salad c&agrave; chua dưa chuột</p>

<p>- Đậu sốt nấm,</p>

<p>- Lẩu th&aacute;i. + Đậu phụ + Nấm c&aacute;c loại + Rau theo m&ugrave;a + B&uacute;n tươi hoặc m&igrave; chay</p>

<p>- Tặng 4 cốc nước gạo rang</p>

<p><strong>Set lẩu d&ugrave;ng được cho :</strong> 4 người</p>',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/lau-chay-chua-cay.jpg,https://i.ytimg.com/vi/kDV1HxG5AgQ/maxresdefault.jpg,https://cdn.beptruong.edu.vn/wp-content/uploads/2015/11/mon-lau-nam-chay.jpg,https://cdn.daotaobeptruong.vn/wp-content/uploads/2019/07/hoc-nau-lau-nam-chay.jpg',
                'price' => 340000,
                'name' => 'LẨU NẤM THIÊN NHIÊN CHUA CAY',
                'description' => '<p><strong>&nbsp;Chi tiết set:</strong></p>

<p>- Khoai t&acirc;y chi&ecirc;n : 1 đĩa</p>

<p>- Nước lẩu nấm</p>

<p>&nbsp;</p>

<p>- H&aacute; cảo chay : 1 c&aacute;i</p>

<p>- nấm rơm x&agrave;o&nbsp;: 1 dĩa&nbsp;</p>

<p>- Rau lẩu : 300gr</p>

<p>- Nấm kim ch&acirc;m : 100gr</p>

<p>- Đậu phụ 2 miếng</p>

<p>- M&igrave; t&ocirc;m : 2 g&oacute;i</p>

<p>- Coca : 2 cốc</p>

<p><strong>Set n&agrave;y d&ugrave;ng được cho :</strong> 2 người</p>
',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'image' => 'https://img-global.cpcdn.com/recipes/e798ffefbc386805/680x482cq70/l%E1%BA%A9u-nui-chay-recipe-main-photo.jpg,https://media.cooky.vn/recipe/g4/32925/s800x500/cooky-recipe-636653044147376593.jpg,https://img-global.cpcdn.com/recipes/89bba8ad31d99304/680x482cq70/nui-chay-recipe-main-photo.jpg,https://i.ytimg.com/vi/uDcVM2mOlOw/maxresdefault.jpg',
                'price' => 320000,
                'name' => 'Lẩu nui chay',
                'description' => '<p><strong>&nbsp;Chi tiết set:</strong></p>

<p>- khoai t&acirc;y, khoai m&ocirc;n, c&agrave; rốt (mỗi loại 1 củ)</p>

<p>- M&iacute;a: 2 kh&uacute;c</p>

<p>-Đậu hũ cắt miếng vừa ăn chi&ecirc;n v&agrave;ng</p>

<p>- 2 lạng nấm rơm bỏ ch&acirc;n, l&agrave;m sạch, để r&aacute;o</p>

<p>- 1 lạng&nbsp;<a href="https://hitavegan.com/nam-dui-ga/">nấm đ&ugrave;i g&agrave;</a>&nbsp;l&agrave;m sạch</p>

<p>- 1 miếng t&agrave;u hũ khu&ocirc;n cắt miếng vu&ocirc;ng</p>

<p>- 1 t&uacute;i nui luộc sơ</p>

<p><strong>Set n&agrave;y d&ugrave;ng được cho :</strong>&nbsp;4&nbsp;người</p>
',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'image' => 'https://wna.cdnxbvn.com/wp-content/uploads/2021/01/lau-chao-khoai-mon-nau-chay.jpg,https://cdn.tgdd.vn/2021/07/CookProduct/cooky-recipe-cover-r51860-1200x676.jpg,https://i.ytimg.com/vi/yRqR-4X3w6M/maxresdefault.jpg,https://lh3.googleusercontent.com/proxy/BHUlWUCj7PkYfF47SiOKGuzcSecTxBENABRv6lZ7z5b7Uh4vDwSEbQI_ZP3NT3khoXSJ0t-3fo8GoTo7bq1W1jG4r6xlvLCOedwkwM-Px5BqJ7FugRkRMV58G2WZAfo-7YAmJyXm',
                'price' => 210000,
                'name' => ' lẩu khoai môn nấu chao chay',
                'description' => '<p><strong>&nbsp;Chi tiết set:</strong></p>

<p>- M&iacute;a 1 kh&uacute;c, ng&ocirc; 1 bắp</p>

<p>- Nấm: kim ch&acirc;m, nấm rơm.</p>

<p>- Củ: khoai m&ocirc;n, su h&agrave;o, c&agrave; rốt.</p>

<p>- Rau: s&uacute;p lơ, h&agrave;nh,&nbsp;đậu, c&aacute;c loại rau kh&aacute;c như rau muống, rau cải ,rau x&agrave;lach</p>

<p><strong>Set n&agrave;y d&ugrave;ng được cho :</strong>&nbsp;4&nbsp;người</p>',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],[
                'id' => 10,
                'image' => 'https://cdn.huongnghiepaau.com/wp-content/uploads/2019/01/mon-canh-kim-chi-chay.jpg,https://cdn.cet.edu.vn/wp-content/uploads/2019/03/lau-kim-chi-hai-san.jpg,https://cachlammonngon.vn/wp-content/uploads/2016/08/lau-nam-kim-chi.jpg,https://emoi.vn/wp-content/uploads/2018/11/lau-kim-chi-1.jpg',
                'price' => 310000,
                'name' => 'Lẩu nấm kim chi',
                'description' => '<p><strong>&nbsp;Chi tiết set:</strong></p>

<p>+ Lẩu nấm : nấm hương tươi, nấm hải sản tươi, nấm kim ch&acirc;m, nấm s&ograve; trắng. Ngo&agrave;i ra c&oacute;: v&aacute;ng đậu, đậu phụ, ng&ocirc; tươi, c&agrave; chua, rau cải, rau muống, mồng tơi, c&agrave; rốt, khoai t&acirc;y.<br />
+ Nem cuốn : 4 chiếc<br />
+ Khoai m&ocirc;n lệ phố : 1 suất</p>

<p><strong>Set n&agrave;y d&ugrave;ng được cho :</strong>&nbsp;4&nbsp;người</p>',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],[
                'id' => 11,
                'image' => 'https://yummyday.vn/uploads/images/nam-rom-kho-dau-hu.jpg,https://monngonmoingay.tv/wp-content/uploads/2019/08/dau-phu-xao-nam-cay.jpg,https://monngonmoingay.tv/wp-content/uploads/2019/08/dau-hu-xao-nam-huong-ngon.jpg,https://lh3.googleusercontent.com/proxy/-QSc0oFSqf7lxMTmfoZyCooilq9TLcFkhiYgMHSL9t7DQU_hdQxi0Ky3pTCdkmMXfJvCWl-UVON4eRvpzDoUO8PzD1u1FGFlECBvMmBvuSfopHMsVVo',
                'price' => 50000,
                'name' => 'Đậu phụ xào nấm',
                'description' => '<p>Đậu hũ kho nấm rơm l&agrave; m&oacute;n ăn thanh đạm kh&aacute; quen thuộc đối với nhiều bữa cơm Việt của ch&uacute;ng ta, m&oacute;n ăn c&oacute; thể được chế biến v&agrave;o những ng&agrave;y rằm, lễ hay chỉ đơn giản l&agrave; bữa ăn h&agrave;ng ng&agrave;y. Bởi t&iacute;nh thơm ngon v&agrave; thanh đạm của m&oacute;n ăn cộng th&ecirc;m nguy&ecirc;n liệu cũng như c&aacute;ch chế biến dễ d&agrave;ng m&agrave; m&oacute;n đậu hũ kho nấm rơm ng&agrave;y c&agrave;ng được nhiều người ưa chuộng, m&oacute;n ăn kh&ocirc;ng chỉ đem lại cho ch&uacute;ng ta sự ngon, lạ miệng m&agrave; c&ograve;n chứa h&agrave;m lượng dinh dưỡng cao.</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'image' => 'https://image.thanhnien.vn/2048/uploaded/ngocthanh/2018_07_25/canh-muop-nam-rom-2_nbao.jpg,https://img-global.cpcdn.com/005_steps/fd2861603eabeab1/480x360cq70/photo.jpg,https://binhbung.files.wordpress.com/2010/09/1285034732-muop-xao.jpg,https://vcdn1-giadinh.vnecdn.net/2014/08/12/DSC-0041-JPG-7378-1407837350.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=HjV4u-mU-hP6e4ABieflig',
                'price' => 20000,
                'name' => 'mướp xào nấm rơm',
                'description' => '<p>Mưa m&ugrave;a hạ đ&atilde; về nhưng vắng b&oacute;ng trẻ thơ t&igrave;m nhặt nấm rơm như ch&uacute;ng t&ocirc;i thuở trước. Cuộc sống giờ sung t&uacute;c hơn n&ecirc;n c&aacute;c b&agrave; nội trợ thường mua nấm rơm cấy trồng về chế biến bữa cơm gia đ&igrave;nh. Với t&ocirc;i c&ugrave;ng những người bạn thuở thiếu thời, d&ugrave; được thưởng thức nhiều m&oacute;n ngon từ nấm rơm nhưng vẫn kh&ocirc;ng thể qu&ecirc;n t&ocirc; canh nấm rơm nấu với mướp hương phảng phất m&ugrave;i rơm rạ đồng qu&ecirc; ng&agrave;y ấy.</p>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'image' => 'https://monan.foodhub.vn/wp-content/uploads/2020/12/unnamed-1.jpg,https://baokhanhhoa.vn/dataimages/201907/original/images5370252_daubap.jpg,https://media.tuoitrexahoi.vn/mediav2/files/dau-bap-chien-bo-sua.jpg,https://3.bp.blogspot.com/-rxf6An4Z300/WKRgVPATeEI/AAAAAAAAGR8/3Ritwk6dg1c5h1_4NI7P8zqjRyTPB2m4gCLcB/s400/dau-bap-chien-bo.jpg',
                'price' => 15000,
                'name' => 'Đậu bắp nướng bơ chay',
                'description' => '<p>Đậu bắp kh&ocirc;ng c&ograve;n xa lạ với người nội trợ bởi lượng chất xơ dồi d&agrave;o, ổn định đường trong m&aacute;u, bảo vệ thận&hellip; Đậu bắp c&oacute; vị thơm ngọt, m&ugrave;i như bắp tự nhi&ecirc;n, thường được sử dụng c&ugrave;ng với nhiều m&oacute;n nướng. H&ocirc;m nay, Foodhub xin m&aacute;ch nhỏ bạn c&aacute;ch l&agrave;m Đậu bắp nướng chay v&ocirc; c&ugrave;ng đơn giản, một lựa chọn cho bữa ăn chay của gia đ&igrave;nh hoặc người c&oacute; nhu cầu ăn ki&ecirc;ng, giảm c&acirc;n&hellip;</p>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'image' => 'https://useful.vn/wp-content/uploads/2020/04/1551756183597_7922897.jpg,https://cdn.tgdd.vn/2021/03/CookRecipe/GalleryStep/thanh-pham-1008.jpg,https://img.chebienmonngon.net/2017/03/bunxaochay.jpg',
                'price' => 35000,
                'name' => 'Bún xào chay',
                'description' => '<pre>
Nếu đang muốn đổi vị bữa s&aacute;ng hay c&oacute; th&ecirc;m một c&ocirc;ng thức mới cho thực đơn ăn chay nh&agrave; m&igrave;nh, b&uacute;n x&agrave;o chay sẽ l&agrave; gợi &yacute; ph&ugrave; hợp cho bạn đấy. M&oacute;n ăn thanh đạm n&agrave;y c&oacute; c&aacute;ch l&agrave;m đơn giản với những nguy&ecirc;n liệu dễ mua nhưng vẫn rất gi&agrave;u dinh dưỡng v&agrave; cực k&iacute;ch th&iacute;ch vị gi&aacute;c.
Ng&agrave;y nay, ăn chay đang l&agrave; một xu hướng được đ&ocirc;ng đảo mọi người hưởng ứng v&agrave; phổ biến trong c&aacute;c bữa ăn của c&aacute;c gia đ&igrave;nh Việt. Ăn chay c&oacute; nhiều t&aacute;c dụng tốt cho sức khỏe, l&agrave; một biện ph&aacute;p giảm c&acirc;n hiệu quả v&agrave; ngăn ngừa được nhiều bệnh tật. M&oacute;n chay ngon v&igrave; thế cũng được s&aacute;ng tạo rất phong ph&uacute;, đa đạng để đ&aacute;p ứng nhu cầu ăn chay của c&aacute;c tầng lớp đa dạng.</pre>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 15,
                'image' => 'https://suckhoedoisong.qltns.mediacdn.vn/Images/nguyenkhanh/2016/11/11/an_chay.jpg,https://thucphamdongxanh.com/wp-content/uploads/2019/11/rau-c%E1%BB%A7-qu%E1%BA%A3-lu%E1%BB%99c.jpg,https://img-global.cpcdn.com/recipes/5f2d0e28d865d2c1/680x482cq70/cleaneating-v%E1%BB%9Bi-rau-c%E1%BB%A7-lu%E1%BB%99c-recipe-main-photo.jpg,https://img-global.cpcdn.com/recipes/5f2d0e28d865d2c1/680x482cq70/cleaneating-v%E1%BB%9Bi-rau-c%E1%BB%A7-lu%E1%BB%99c-recipe-main-photo.jpg',
                'price' => 10000,
                'name' => 'rau củ luộc',
                'description' => '<p>với cac loại rau củ quả quanh ta ch&uacute;ng ta sẽ c&oacute; ngay một đĩa rau củ quả luộc.kh&ocirc;ng những thanh đạm m&agrave; c&ograve;n bổ sung nhiều vitamin v&agrave; chất sơ để b&ugrave; đắp những kho&aacute;ng chất m&agrave; cơ thể cần</p>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 16,
                'image' => 'http://www.elle.vn/wp-content/uploads/2016/03/17/dau-phu-xot-nam-cay.jpg,https://kinhnghiemquy.com/upload/img/2019/10/02/nhung_mon_an_don_gian_de_lam_cho_sinh_vien_1_1570019291821.jpg,https://vncooking.com/files/cuisine/2019/02/09/dau-hu-sot-ca-chua-vg3y.jpg,https://monngonsaigon.net/wp-content/uploads/2018/12/%C4%90%E1%BA%ADu-h%C5%A9-s%E1%BB%91t-n%E1%BA%A5m-1200x900.jpg',
                'price' => 50000,
                'name' => 'Đậu hũ sốt chua ',
                'description' => '<p>Đậu sốt c&agrave; chua l&agrave; m&oacute;n ăn đơn giản trong bữa cơm của gia đ&igrave;nh. Mặc d&ugrave; kh&ocirc;ng c&oacute; nhiều chất đạm, chất b&eacute;o như trong thịt, c&aacute; nhưng m&oacute;n đậu sốt c&agrave; chua vẫn được nhiều gia đ&igrave;nh lựa chọn trong những bữa cơm nhất l&agrave; ng&agrave;y h&egrave; n&oacute;ng nực. Đậu phụ hay c&ograve;n gọi l&agrave; đậu hũ sốt c&agrave; chua kh&ocirc;ng những thơm ngon, hấp dẫn về hương vị m&agrave; c&ograve;n thanh m&aacute;t, nhẹ nh&agrave;ng, dễ ăn v&agrave; kh&ocirc;ng bị ng&aacute;n.</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 17,
                'image' => 'https://benhvienthammykangnam.vn/wp-content/uploads/2020/02/an-chay-giam-can.jpg,https://2sao.vietnamnetjsc.vn/images/2018/12/01/08/33/mon-ngon-ava2.jpg,https://congaiba.com/wp-content/uploads/2015/07/cach-nau-dau-phu-dau-hu-xao-hoa-lo.jpg,https://media.vneconomy.vn/w900/images/upload/2021/04/21/xao2-15526264001581354436124.jpg',
                'price' => 30000,
                'name' => 'Đậu hũ xào súp lơ',
                'description' => '<p>bạn nghĩ sao về 1 m&oacute;n ăn thơm ngon m&agrave; lại gi&ograve;n của s&uacute;p lơ</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'image' => 'https://toplist.vn/images/800px/dau-phu-cuon-la-lot-387855.jpg,https://www.hoidaubepaau.com/wp-content/uploads/2016/01/cham-dau-hu-cuon-la-lot-cung-nuoc-tuong.jpg,https://www.hoidaubepaau.com/wp-content/uploads/2016/01/dau-hu-cuon-la-lot.jpg,https://img-global.cpcdn.com/recipes/5fe7f2b0c963869c/1200x630cq70/photo.jpg',
                'price' => 35000,
                'name' => 'Đậu phụ cuốn lá lốt',
                'description' => '<p>Đậu phụ cuốn l&aacute; lốt rất th&iacute;ch hợp để bạn d&ugrave;ng l&agrave;m m&oacute;n chay đầu th&aacute;ng. Đậu phụ b&eacute;o ngậy, thoang thoảng m&ugrave;i nấm hương v&agrave; mộc nhĩ gi&ograve;n sần sật khiến bạn c&oacute; thể ăn rất nhiều m&agrave; kh&ocirc;ng ch&aacute;n. Theo Y học d&acirc;n tộc, l&aacute; lốt vị cay, m&ugrave;i thơm, t&iacute;nh rất ấm, c&oacute; t&aacute;c dụng trừ thấp, ấm bụng, ti&ecirc;u thực, hạ kh&iacute; trừ h&ocirc;i tanh n&ecirc;n rất tốt cho sứa khỏe. Khi ăn t&ugrave;y sở th&iacute;ch bạn c&oacute; thể d&ugrave;ng k&egrave;m tương ớt hoặc x&igrave; dầu chấm t&ugrave;y khẩu vị. Tuy l&agrave; một m&oacute;n chay nhưng đậu phụ cuốn l&aacute; lốt rất dễ ăn v&agrave; thơm ngon kh&ocirc;ng k&eacute;m g&igrave; chả l&aacute; lốt th&ocirc;ng thường n&ecirc;n bạn h&atilde;y l&agrave;m cho cả gia đ&igrave;nh được thưởng thức m&oacute;n ăn thanh đạm ng&agrave;y đầu th&aacute;ng nh&eacute;.</p>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 19,
                'image' => 'https://toplist.vn/images/800px/canh-dau-phu-rau-cu-41043.jpg,https://img-global.cpcdn.com/recipes/ae9f169898813d4f/680x482cq70/canh-d%E1%BA%ADu-h%E1%BB%A7-rau-c%E1%BB%A7-recipe-main-photo.jpg,https://ngaymoionline.com.vn/stores/news_dataimages/ngaymoionlinecomvn/062020/03/08/mat-lanh-canh-dau-phu-nau-rau-cu-don-gian-23-.6048.jpg,https://toplist.vn/images/800px/canh-dau-phu-rau-cu-41043.jpg',
                'price' => 40000,
                'name' => 'Canh đậu phụ rau củ',
                'description' => '<p>Canh đậu phụ rau củ l&agrave; m&oacute;n ăn chay kh&ocirc;ng chỉ tốt cho sức khỏe m&agrave; c&ograve;n rất th&iacute;ch hợp để ăn trong những ng&agrave;y h&egrave; n&oacute;ng bức, vị ngọt m&aacute;t từ đậu phụ v&agrave; c&aacute;c loại rau củ sẽ gi&uacute;p bạn giải nhiệt cơ thể một c&aacute;ch hiệu quả. C&aacute;ch l&agrave;m canh đậu phụ nấu rau củ ngon đơn giản dễ l&agrave;m cực thanh m&aacute;t lại đơn giản dễ thực hiện tại nh&agrave;. Với c&aacute;c nguy&ecirc;n liệu ch&iacute;nh l&agrave; đậu phụ v&agrave; c&aacute;c loại rau củ tự nhi&ecirc;n như c&agrave; rốt, s&uacute;p lơ,&hellip; rất tốt cho sức khỏe, c&aacute;c chị em sẽ tạo n&ecirc;n một m&oacute;n ăn cực ngon, cực m&aacute;t cho bạn đấy. Hơn nữa những loại rau củ n&agrave;y cực tốt gi&uacute;p lọc cơ thể loại bỏ những chất độc hại rất tốt cho cả gia đ&igrave;nh một cơ thể khỏe mạnh.</p>
 ',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 20,
                'image' => 'https://cdn.daynauan.info.vn/wp-content/uploads/2019/05/sup-chay.jpg,https://cdn.daynauan.info.vn/wp-content/uploads/2019/05/sup-ga-nam-huong.jpg,https://i-ngoisao.vnecdn.net/2018/12/17/39144034-300833310690456-61909-7223-3606-1545037702.jpg,https://i.ytimg.com/vi/Ld8ruLTVeQc/hqdefault.jpg',
                'price' => 100000,
                'name' => 'súp chay nấm',
                'description' => '<p>S&uacute;p chay dinh dưỡng c&oacute; nhiều c&aacute;ch nấu kh&aacute;c nhau. C&oacute; thể bạn vẫn chưa biết nhưng s&uacute;p chay cũng đa dạng kh&ocirc;ng k&eacute;m c&aacute;c loại s&uacute;p mặn. Bạn c&oacute; thể sử dụng c&aacute;c nguy&ecirc;n liệu phổ biến để nấu c&aacute;c m&oacute;n ăn chay h&agrave;ng ng&agrave;y như rau, củ, quả, c&aacute;c loại nấm để nấu th&agrave;nh m&oacute;n s&uacute;p.</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 21,
                'image' => 'https://giamcanantoan.com/images/minhquan/thuocgiamcan/11-2013/ha-cao-chay.jpg,https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/ha-cao-chay-thumbnail.jpg,https://tuthuoc24h.net/upload/images/cach-lam-ha-cao-chay.jpg,https://i.ytimg.com/vi/TsggIGacCqA/maxresdefault.jpg',
                'price' => 100000,
                'name' => 'há cảo chay',
                'description' => '<p>H&aacute; cảo chay l&agrave; m&oacute;n ngon gi&uacute;p giảm c&acirc;n hiệu quả được chọn cho thực đơn giảm c&acirc;n với c&aacute;c m&oacute;n chay cho bữa xế của gia đ&igrave;nh. Với vị thanh ngọt của rau củ, dai dai của b&aacute;nh h&aacute; cảo n&oacute;ng hổi chấm với nước sốt tương ớt rất hấp dẫn người thưởng thức.</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 22,
                'image' => 'https://product.hstatic.net/1000232601/product/c_ch-l_m-m_n-c_i-th_a-x_o-n_m-d_ng-c_-4_1024x1024.jpg,https://pastaxi-manager.onepas.vn/content/uploads/articles/thanhmai/cai-thia-xao-nam/cai-chip-xao-nam%C4%83%C4%83.jpg,https://yummyday.vn/uploads/images/cai-thia-xao-nam-dong-co-8.jpg,https://www.iunauan.com/images/400x-1/anh1-iunauan.com-465065.jpg',
                'price' => 120000,
                'name' => 'Cải thìa xào nấm đông cô',
                'description' => '<p>Sự kết hợp của hai loại nguy&ecirc;n liệu n&agrave;y trong m&oacute;n cải th&igrave;a x&agrave;o nấm đ&ocirc;ng c&ocirc; tạo n&ecirc;n m&oacute;n ăn v&ocirc; c&ugrave;ng tốt cho sức khỏe m&agrave; lại rất ngon miệng. Vị ngon của m&oacute;n ăn c&agrave;ng th&ecirc;m đậm đ&agrave; hơn khi th&ecirc;m nước xốt dầu h&agrave;o v&agrave; một &iacute;t vị mặn từ nước tương. Cải th&igrave;a v&agrave; nấm đ&ocirc;ng c&ocirc; v&ocirc; c&ugrave;ng tốt cho sức khỏe n&ecirc;n c&aacute;c bạn cũng n&ecirc;n bổ sung v&agrave;o thực đơn nấu ăn của m&igrave;nh nh&eacute;!</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 23,
                'image' => 'https://thucduongbaoan.com.vn/wp-content/uploads/2021/08/Nem-Lui-Chay.jpg,http://baokhanhhoa.vn/dataimages/201803/original/images5326315_Nem.jpg,https://img-global.cpcdn.com/recipes/d0e3b4695b76cc01/1200x630cq70/photo.jpg,https://anchay.vn/media/2021/03/n%E1%BB%81n-4.jpg',
                'price' => 50000,
                'name' => 'Nem lụi chay',
                'description' => '<p>Những chiếc nem lụi chay với m&ugrave;i thơm đặc trưng của sả, kết hợp với phần nh&acirc;n l&agrave;m từ bột gạo thực dưỡng, bột yến mạch, bột mỳ nguy&ecirc;n c&aacute;m, c&agrave; rốt, một số nguy&ecirc;n liệu v&agrave; gia vị thực dưỡng. L&agrave; một m&oacute;n ăn gi&agrave;u dinh dưỡng, c&oacute; thể d&ugrave;ng cho c&aacute;c bữa tiệc hoặc bữa cơm gia đ&igrave;nh h&agrave;ng ng&agrave;y.</p>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 24,
                'image' => 'https://afamilycdn.com/thumb_w/600/E88MOq9iOdccccccccccccjjVmV53G/Image/2016/09/Dau-hu-non-sot-chua-ngot%20(10)-571a1.jpg,https://sieungon.com/wp-content/uploads/2017/11/dau-phu-xao-nam-ot-review.jpg,https://media.healthplus.vn/thumb_x650x382/Images/Uploaded/Share/2017/06/26/mon-ngon-dau-tuan-dau-phu-chien-xao-ot-chuong11498451515.jpg,https://dichothongminh.com/wp-content/uploads/2020/12/dau-hu-sot-chua-ngot.jpg',
                'price' => 120000,
                'name' => 'Đậu phụ sốt ớt chuông chua ngọt',
                'description' => '<p>Đậu phụ sốt chua ngọt l&agrave; m&oacute;n ăn hấp dẫn rất nhiều t&iacute;n đồ ẩm thực, nhưng với những người ăn chay hay những ng&agrave;y ăn chay th&igrave; khẩu vị ấy được biến tấu thay thế bằng đậu phụ sốt chua ngọt để gi&uacute;p họ thỏa l&ograve;ng. M&oacute;n ăn chắc chắn sẽ &quot;h&uacute;t mắt&quot; c&aacute;c th&agrave;nh vi&ecirc;n trong nh&agrave; bởi m&agrave;u sắc tươi tắn v&agrave; nước sốt &oacute;ng ả, vị ngon th&igrave; miễn b&agrave;n rồi. Miếng đậu phụ chi&ecirc;n v&agrave;ng gi&ograve;n phủ đều một lớp sốt chua ngọt đẫm mượt tr&ocirc;ng v&ocirc; c&ugrave;ng hấp dẫn, ăn k&egrave;m ớt chu&ocirc;ng, dứa v&agrave; h&agrave;nh t&acirc;y đem đến sự ngon miệng pha ch&uacute;t th&iacute;ch th&uacute;.</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 25,
                'image' => 'https://cdn.tgdd.vn/Files/2018/12/14/1138156/cach-nau-xoi-lac-bang-noi-com-dien-cuc-nhanh-ma-ngon-6.jpg,https://i.ytimg.com/vi/4womCPN-Xvs/maxresdefault.jpg,https://bep360.net/wp-content/uploads/2021/09/cach-nau-xoi-lac.jpg,https://anh.eva.vn/upload/1-2017/images/2017-02-23/1487847277-cach-nau-xoi-dau.jpg',
                'price' => 1,
                'name' => 'Xôi lạc',
                'description' => '<p>Từng hạt x&ocirc;i căng b&oacute;ng, mềm dẻo quyện với lạc mềm, b&ugrave;i b&ugrave;i tạo n&ecirc;n m&oacute;n ăn s&aacute;ng thơm ngon, nhanh ch&oacute;ng trong thời kỳ gi&atilde;n c&aacute;ch.X&ocirc;i dẻo thơm, căng mọng, lạc mềm b&ugrave;i kh&ocirc;ng kh&aacute;c g&igrave; đồ x&ocirc;i bằng ch&otilde;.</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 26,
                'image' => 'https://toinayangi.vn/wp-content/uploads/2015/09/v%C3%A1ng-%C4%91%E1%BA%ADu-cu%E1%BB%99n-c%E1%BB%A7-t%E1%BB%AB.jpg,https://toinayangi.vn/wp-content/uploads/2015/09/v%C3%A1ng-%C4%91%E1%BA%ADu-cu%E1%BB%99n-c%E1%BB%A7-t%E1%BB%AB.jpg,http://imgs.emdep.vn/Share/Image/2019/10/08/page18sd465a-152249085.jpg,https://haithuycatering.com/image/5c3b030651046d57e272f842/original.jpg',
                'price' => 40000,
                'name' => 'Váng đậu cuộn chay',
                'description' => '<p>Nếu bạn muốn t&igrave;m hiểu một m&oacute;n ăn ngon cho ng&agrave;y rằm chay tịnh h&agrave;ng th&aacute;ng th&igrave; v&aacute;ng đậu cuộn củ từ l&agrave; một gợi &yacute; th&iacute;ch hấp dẫn đấy. V&aacute;ng đậu cuộn củ từ c&oacute; vị dai gi&ograve;n của v&aacute;ng đậu, vị mềm, b&ugrave;i ngậy của củ từ c&ugrave;ng vị chua ngọt k&iacute;ch th&iacute;ch vị gi&aacute;c của nước sốt b&ecirc;n ngo&agrave;i ngon miễn ch&ecirc;.</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 27,
                'image' => 'https://cdn.tuoitre.vn/thumb_w/586/2019/6/12/624279131944661881457794235875808796737536n-1560335838201357024960.jpg,https://cdn.tgdd.vn/2021/02/CookProduct/comhaplasen-1200x676.jpg,https://i-vnexpress.vnecdn.net/2019/10/14/com-la-sen-hue-2-4116-1571047058.jpg,https://haithuycatering.com/image/5c120aae51046d1d88a64914/original.jpg',
                'price' => 70000,
                'name' => 'Cơm hấp lá sen',
                'description' => '<p>Trong c&aacute;c loại hoa hiếm c&oacute; loại hoa n&agrave;o được sử dụng được tất cả c&aacute;c bộ phận một c&aacute;ch đa dạng như hoa sen: hoa để c&uacute;ng Phật v&agrave; trang tr&iacute;; l&aacute; để g&oacute;i v&agrave; hấp thực phẩm cho thơm; c&aacute;nh hoa d&ugrave;ng ướp tr&agrave;; hạt sen d&ugrave;ng l&agrave;m mứt, nấu ch&egrave;, trộn với cơm, ng&oacute; sen d&ugrave;ng l&agrave;m gỏi; củ sen để hầm thịt, nhồi t&ocirc;m thịt chi&ecirc;n; hoa sen để ướp tr&agrave;.... Sen cũng được sử dụng để l&agrave;m rất nhiều m&oacute;n trong cung đ&igrave;nh Huế; điển h&igrave;nh l&agrave; m&oacute;n cơm hấp l&aacute; sen m&agrave; ng&agrave;y nay đ&atilde; được phổ biến v&agrave; y&ecirc;u th&iacute;ch ở rất nhiều địa phương v&igrave; sự tinh tế v&agrave; thanh tao của m&oacute;n ăn n&agrave;y</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 28,
                'image' => 'https://cdn.tgdd.vn/Files/2018/03/21/1076224/cach-lam-com-gao-lut-cuon-rong-bien-don-gian-nhung-giau-dinh-duong4.jpg,https://cdn.tgdd.vn/2020/07/CookProduct/1112-1200x676-2.jpg,https://khaiminh.vn/wp-content/uploads/2016/06/sushi-2-500x500.jpg,https://khaiminh.vn/wp-content/uploads/2016/06/sushi-500x500.jpg',
                'price' => 40000,
                'name' => 'Cơm gạo lứt cuộn rong biển',
                'description' => '<p>Bạn thường xuy&ecirc;n phải ăn cơm ở văn ph&ograve;ng hay cơm ngo&agrave;i h&agrave;ng v&agrave; nhiều khi bạn cảm gi&aacute;c n&oacute; k&eacute;m vệ sinh v&agrave; thiếu dinh dưỡng. H&atilde;y thưởng thức cơm gạo lứt cuộn rong biển đơn giản nhưng gi&agrave;u dinh dưỡng cho bữa cơm văn ph&ograve;ng của m&igrave;nh nh&eacute;!</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 29,
                'image' => 'https://cdn.tgdd.vn/Files/2017/03/16/961372/ca-tim-chien-tam-nuoc-tuong-toi-la-mieng-dua-com-7_730x411.jpg,https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/ca-tim-chien-nuoc-mam-thumbnail-1.png,https://i.ytimg.com/vi/4PyE-JVdYoo/maxresdefault.jpg,https://info-imgs.vgcloud.vn/2020/05/27/14/ca-tim-nhoi-thit-chien-xot-toi-doi-mon.jpg',
                'price' => 35000,
                'name' => 'Cà tím chiên tỏi ớt',
                'description' => '<p>bạn cảm gi&aacute;c nh&agrave;m ch&aacute;n khi ăn chay h&atilde;y thử ngay c&agrave; t&iacute;m chi&ecirc;n tỏi ớt sẽ cho bạn 1 cảm gi&aacute;c ngon miệng hơn đấy!</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 30,
                'image' => 'https://atuankhang.vn/wp-content/uploads/2020/05/cach-lam-nam-dui-ga-kho.jpg,https://vcdn-giadinh.vnecdn.net/2020/12/11/nam-1-2264-1607674144.jpg,https://i.ytimg.com/vi/r7EUvJ8xo90/hqdefault.jpg,https://vcdn-ngoisao.vnecdn.net/2019/05/17/60922344-2430669853619354-3283-4482-5403-1558082148.jpg',
                'price' => 50000,
                'name' => 'nấm đùi gà kho',
                'description' => '<p>Nếu đ&atilde; qu&aacute; ch&aacute;n ngấy những m&oacute;n nhiều đạm như c&aacute; thịt th&igrave; h&atilde;y chuyển sang thưởng thức những m&oacute;n ăn l&agrave;m từ rau củ nh&eacute;. V&agrave; nấm đ&ugrave;i g&agrave; kho ch&iacute;nh l&agrave; một m&oacute;n ăn hấp dẫn kh&ocirc;ng k&eacute;m. Nấm đ&ugrave;i g&agrave; l&agrave; thực phẩm cũng c&oacute; nhiều chất dinh dưỡng như protein, vitamin rất tốt cho sức khỏe con người. Đặc biệt hơn, m&oacute;n ăn n&agrave;y bạn cũng c&oacute; thể thay đổi khẩu vị cho những ng&agrave;y ăn chay, ng&agrave;y rằm sắp tới.</p>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 31,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/11/Mi%E1%BA%BFn-x%C3%A0o-%C4%91%E1%BA%ADu-ng%E1%BB%B1-th%C6%A1m-ngon-cho-ng%C3%A0y-chay.jpg,https://monngonsaigon.net/wp-content/uploads/2018/11/Mi%E1%BA%BFn-x%C3%A0o-%C4%91%E1%BA%ADu-ng%E1%BB%B1-th%C6%A1m-ngon-cho-ng%C3%A0y-chay.jpg,https://123amthuc.net/wp-content/uploads/2014/10/cach-lam-mon-mien-xao-dau-ngu-hap-dan-thom-ngon-danh-cho-ngay-an-chay-cua-gia-dinh-2.jpg,https://monngonmoingay.com/wp-content/uploads/2015/08/Mien-xao-cua-1.png',
                'price' => 50000,
                'name' => 'miến xào đậu ngự',
                'description' => '<p>C&aacute;c m&oacute;n ăn chay kh&ocirc;ng chỉ c&oacute; mỗi rau củ quả m&agrave; c&ograve;n được chế biến đa dạng từ nhiều nguồn thực phẩm kh&aacute;c nhau, tạo n&ecirc;n nhiều m&oacute;n ăn mang hương vị hấp dẫn, thanh đạm v&agrave; gi&agrave;u dinh dưỡng. Nếu bạn vẫn băn khoăn kh&ocirc;ng biết n&ecirc;n nấu m&oacute;n chay g&igrave; cho ng&agrave;y rằm sắp tới th&igrave; h&atilde;y thử tham khảo qua m&oacute;n chay miến x&agrave;o đậu ngự để th&ecirc;m v&agrave;o thực đơn ăn uống h&agrave;ng ng&agrave;y. Gi&uacute;p bạn thay đổi khẩu vị v&agrave; cảm thấy lạ miệng, ăn ngon hơn.</p>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 32,
                'image' => 'https://cdn.tgdd.vn/2020/08/CookRecipe/GalleryStep/tha%CC%80nh-pha%CC%89m-50.jpg,https://yummyday.vn/uploads/images/hoanh-thanh-chay-2.jpg,https://danviet.mediacdn.vn/upload/1-2017/images/2017-02-08/148654833442605-wonton_soup_detail.jpg,https://pastaxi-manager.onepas.vn/content/uploads/articles/hoanh-thanh-chay-chien-gion/hoanh-thanh-chay-chien-gion-9.jpg',
                'price' => 45000,
                'name' => 'Hoành thánh chay',
                'description' => '<p>Bữa sáng c&acirc;̀n đ&acirc;̀y đủ ch&acirc;́t dinh dưỡng, hoành thánh chay rau củ vừa thơm ngon lại thanh đạm giúp cho cả ngày của bạn lu&ocirc;n tươi mát và đ&acirc;̀y năng lượng</p>
.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 33,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/Ch%E1%BA%BF-bi%E1%BA%BFn-m%C3%B3n-b%C3%BAn-g%E1%BA%A1o-x%C3%A0o-chao-%C4%91%E1%BB%8F-chay.png,https://chefofking.net/wp-content/uploads/2018/12/bun-gao-xao-chao-do-752x342.jpg,https://monngonmoingay.com/wp-content/uploads/2017/08/bun-mi-xao-tep-500.jpg,https://icdn.one/upload/2020/11/12/20201112104758-9170b737.jpg',
                'price' => 60000,
                'name' => 'Bún gạo xào chao đỏ',
                'description' => '<p>B&uacute;n gạo l&agrave; nguy&ecirc;n liệu kh&ocirc;ng thể thiếu trong c&aacute;c m&oacute;n ăn ngon h&agrave;ng ng&agrave;y. Chỉ với 1 bịch b&uacute;n gạo l&agrave; bạn c&oacute; thể chế biến th&agrave;nh đa dạng m&oacute;n ăn hấp dẫn để l&agrave;m mới thực đơn ăn uống h&agrave;ng ng&agrave;y. Nếu bạn qu&aacute; ng&aacute;n với b&uacute;n gạo x&agrave;o rau củ như h&agrave;ng ng&agrave;y th&igrave; h&atilde;y thử qua m&oacute;n b&uacute;n gạo x&agrave;o chao đỏ chay. Với m&oacute;n b&uacute;n gạo x&agrave;o chao đỏ, bạn c&oacute; thể thay thế cho bữa s&aacute;ng hoặc ăn v&agrave;o buổi chiều vừa gi&uacute;p no bụng, ngon miệng lại cung cấp đầy đủ dinh dưỡng thiết yếu cho một ng&agrave;y l&agrave;m việc tr&agrave;n đầy năng lượng.</p>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/S%C3%BAp-l%C3%A0-m%C3%B3n-%C4%83n-%C4%91%C6%B0%E1%BB%A3c-nhi%E1%BB%81u-ng%C6%B0%E1%BB%9Di-%C6%B0a-chu%E1%BB%99ng.jpg,https://thegioiamthuc.com/wp-content/uploads/2018/05/sup-chua-chay.jpg,https://6monngonmoingay.com/wp-content/uploads/2016/08/cach-nau-sup-chua-cay-chay-nong-hoi-thom-ngon-vua-thoi-vua-an.jpg,https://monngonmoingay.com/wp-content/uploads/2015/08/6_SupChuaCayChay_CQC5120.png',
                'price' => 23000,
                'name' => 'Súp chua cay chay',
                'description' => '<p>S&uacute;p chay l&agrave; m&oacute;n ăn kh&ocirc;ng thể thiếu trong thực đơn của những người muốn ăn chay. S&uacute;p chay thường được nấu từ c&aacute;c loại rau củ n&ecirc;n c&oacute; vị thanh m&aacute;t vừa c&oacute; t&aacute;c dụng bồi bổ sức khỏe vừa gi&uacute;p giải nhiệt cho những ng&agrave;y tiết trời se lạnh. Nếu bạn đang trong giai đoạn ăn chay v&agrave; muốn đổi khẩu vị với m&oacute;n s&uacute;p th&igrave; h&atilde;y thử qua m&oacute;n s&uacute;p chua cay chay. Kh&ocirc;ng chỉ dễ ăn m&agrave; s&uacute;p chua cay chay c&ograve;n gi&uacute;p c&acirc;n bằng đường huyết, l&agrave;m ấm cơ thể v&agrave; giải độc cơ quan ti&ecirc;u h&oacute;a.</p>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 35,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/C%C6%A1m-sen-c%E1%BB%91m.jpg,https://beptop.vn/wp-content/uploads/2018/12/C%C3%A1ch-l%C3%A0m-n%E1%BA%A5u-x%C3%B4i-c%E1%BB%91m-sen-d%E1%BB%ABa-th%C6%A1m-ngon-chu%E1%BA%A9n-v%E1%BB%8B.jpg,https://www.disneycooking.com/wp-content/uploads/2021/03/xoi-com.jpg,https://media.ex-cdn.com/EXP/media.golfviet.vn/files/content/2021/05/13/com-sen-1438.jpg',
                'price' => 45000,
                'name' => 'Cơm sen cốm',
                'description' => '<p>Cơm sen cốm l&agrave; m&oacute;n ăn với c&aacute;i t&ecirc;n vừa b&igrave;nh dị, d&acirc;n d&atilde; vừa mang lại sự cao sang, quyền qu&yacute;. Kh&ocirc;ng chỉ l&agrave; m&oacute;n ăn hấp dẫn cho người ăn chay m&agrave; ph&ugrave; hợp với mọi đối tượng muốn thay đổi khẩu vị h&agrave;ng ng&agrave;y. Đặc biệt cơm sen cốm c&ograve;n c&oacute; t&aacute;c dụng thanh nhiệt, giải độc v&agrave; rất tốt cho tim mạch,&hellip;M&oacute;n ăn được kết hợp h&agrave;i h&ograve;a từ hạt sen b&eacute;o ngậy, c&aacute;c loại rau củ thanh m&aacute;t v&agrave; c&oacute; m&ugrave;i hương phảng phất gi&uacute;p bữa cơm của gia đ&igrave;nh bạn tr&agrave;n ngập t&igrave;nh y&ecirc;u thương, sự gắn kết giữa c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh với nhau.</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 36,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/3-3.jpg,https://d1uz88p17r663j.cloudfront.net/original/1149f084911ca6580fb6c6d89c8fa762_Thumb-crop_(1).jpg,https://i.ytimg.com/vi/9AAKAeYO5wA/maxresdefault.jpg,https://ducankitchen.com/wp-content/uploads/2021/06/05_PumpkinSeaweedSoup_Action_Side.jpg',
                'price' => 55000,
                'name' => 'Canh bí đỏ rong biển',
                'description' => '<p>Canh b&iacute; đỏ rong biển l&agrave; m&oacute;n ăn kết hợp h&agrave;i h&ograve;a giữa hai nguy&ecirc;n liệu b&iacute; đỏ v&agrave; rong biển. Trong đ&oacute;, b&iacute; đỏ chứa h&agrave;m lượng vitamin cao, c&oacute; t&aacute;c dụng chữa bệnh n&ecirc;n ph&ugrave; hợp với nhiều người. Rong biển l&agrave; nguy&ecirc;n liệu chứa nhiều dinh dưỡng v&agrave; rất tốt cho sức khỏe n&ecirc;n được nhiều người chế biến th&agrave;nh nhiều m&oacute;n ăn hấp dẫn. Rong biển thường được nấu chung với nhiều loại nguy&ecirc;n liệu bổ dưỡng như: hạt sen, đậu hũ, b&iacute; đỏ, nấm,&hellip;</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 37,
                'image' => 'https://cdn.daotaobeptruong.vn/wp-content/uploads/2019/12/ha-cao.jpg,https://monngonsaigon.net/wp-content/uploads/2018/12/B%C3%A1nh-h%C3%A1-c%E1%BA%A3o.jpg,https://cachlambanh.vn/wp-content/uploads/2018/07/B%C3%A1nh-H%C3%A1-C%E1%BA%A3o-chay-nh%C3%A2n-rau-3.jpg,https://tuthuoc24h.net/upload/images/ha-cao-chay.jpg',
                'price' => 70000,
                'name' => 'Bánh há cảo chay',
                'description' => '<p>H&aacute; cảo (Shrimp Dumplings) hoặc dimsum. L&agrave; m&oacute;n ăn quen thuộc trong ẩm thực Trung Hoa, c&oacute; nguồn gốc từ Triều Ch&acirc;u, Trung Quốc v&agrave; được d&ugrave;ng phổ biến trong c&aacute;c bữa ăn s&aacute;ng, điểm t&acirc;m. H&aacute; cảo gồm 2 phần l&agrave; vỏ v&agrave; nh&acirc;n b&aacute;nh. Vỏ b&aacute;nh được l&agrave;m từ bột m&igrave;, bột năng, nh&acirc;n b&aacute;nh c&oacute; thể l&agrave; t&ocirc;m, thịt hoặc c&aacute;c loại rau, củ, quả. H&aacute; cảo dễ chế biến, dễ ăn, c&oacute; thể d&ugrave;ng l&agrave;m m&oacute;n khai vị, ăn chay hay ăn mặn đều hợp. Những chiếc h&aacute; cảo được chăm ch&uacute;t tỉ mỉ xuất hiện nhiều trong những dịp đặc biệt, lễ Tết của c&aacute;c gia đ&igrave;nh Trung Hoa v&igrave; họ quan niệm h&aacute; cảo tượng trưng cho sự may mắn, đo&agrave;n tụ, h&igrave;nh d&aacute;ng của những chiếc h&aacute; cảo ch&iacute;nh l&agrave; cầu nối cho tiền t&agrave;i, cuộc sống sung t&uacute;c, đủ đầy quanh năm.</p>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 38,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/1-7.jpg,https://monngonmoingay.com/wp-content/uploads/2017/10/sushi-dau-hu-500.jpg,https://congthuc.mokimart.vn/storage/images/cong-thuc/16885/sushi-dau-hu-sac-hong-2021-07-27-083249-sfgzyp.jpg,https://cdn.bepcuoi.com/media/650-425-sushi-dau-hu-bepcuoi-744.jpg',
                'price' => 1,
                'name' => 'Sushi đậu hũ',
                'description' => '<p>Sushi l&agrave; một trong những m&oacute;n ăn nổi tiếng của nền ẩm thực Nhật Bản được l&agrave;m từ c&aacute;c nguy&ecirc;n liệu tươi ngon, h&igrave;nh thức đẹp mắt v&agrave; hương vị đa dạng phong ph&uacute; khiến nhiều người m&ecirc; mẩn m&oacute;n ăn n&agrave;y. Nếu bạn l&agrave; t&iacute;n đồ của c&aacute;c m&oacute;n ăn chay th&igrave; bạn vẫn c&oacute; thể thưởng thức m&oacute;n sushi chay ngon miệng v&agrave; đầy đủ dinh dưỡng.</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 39,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/1-16.jpg,https://fsfamily.vn/wp-content/uploads/2018/12/mon-cu-sen-xao-ngu-vi-2.jpg,http://bestslim.org/wp-content/uploads/2015/05/cu-sen-xao-gion-cho-bua-com-giam-can-them-ngon-mieng-1.jpg',
                'price' => 90000,
                'name' => 'Củ sen xào ngũ vị',
                'description' => '<p>Củ sen l&agrave; một trong những nguy&ecirc;n liệu chứa nhiều c&ocirc;ng dụng tuyệt vời kh&ocirc;ng phải ai cũng biết. Nguy&ecirc;n liệu n&agrave;y vừa c&oacute; t&aacute;c dụng thanh nhiệt, ti&ecirc;u sưng, gi&uacute;p bổ kh&iacute; huyết, gi&uacute;p ăn ngon v&agrave; ngủ ngon c&ugrave;ng nhiều t&aacute;c dụng tuyệt vời đối với sức khỏe. Nhiều người thường sử dụng củ sen để chế biến th&agrave;nh nhiều m&oacute;n ăn hấp dẫn như chi&ecirc;n x&agrave;o, nướng, d&ugrave;ng nấu ch&egrave;,&hellip;Ch&iacute;nh v&igrave; chứa nhiều c&ocirc;ng dụng như vậy n&ecirc;n ch&uacute;ng t&ocirc;i xin giới thiệu m&oacute;n củ sen x&agrave;o ngũ vị v&ocirc; c&ugrave;ng hấp dẫn, cho bữa cơm h&agrave;ng ng&agrave;y của bạn đậm đ&agrave;, đầy đủ dinh dưỡng .</p>
',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 40,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/2-15.jpg,https://cdn.beptruong.edu.vn/wp-content/uploads/2018/06/goi-cuon-chay.jpg,https://i.pinimg.com/originals/db/dc/18/dbdc186bb2c93a0a664cf3585ba91bda.jpg,https://i2.wp.com/reluctantentertainer.com/wp-content/uploads/2016/08/Salmon-Spring-Rolls-Recipe-600x900.jpeg',
                'price' => 30000,
                'name' => 'gỏi cuốn chay',
                'description' => '<p>Gỏi cuốn chay l&agrave; m&oacute;n ăn thanh m&aacute;t được rất nhiều người ăn chay ưa chuộng bởi kh&ocirc;ng chỉ được l&agrave;m từ nguy&ecirc;n liệu rau củ tươi sạch, thuần chay đầy đủ chất dinh dưỡng m&agrave; c&ograve;n gi&uacute;p người ăn lu&ocirc;n cảm thấy nhẹ bụng, ăn ngon miệng kh&ocirc;ng k&eacute;m g&igrave; so với c&aacute;c loại gỏi cuốn mặn.Thay v&igrave; ăn cuốn từ c&aacute;c loại thịt, hải sản th&igrave; bạn h&atilde;y thử qua m&oacute;n cuốn rau đậu hũ để thay đổi khẩu vị v&agrave; thanh lọc cơ thể v&agrave; cải thiện sức khỏe tốt hơn.</p>',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 41,
                'image' => 'https://cdnmedia.thethaovanhoa.vn/Upload/tyTrfgkgEUQwPYuvZ4Kn1g/files/2020/03/2403/5ryuy.jpg,https://meta.vn/Data/image/2020/01/30/tet-han-thuc-banh-troi-banh-chay-3.jpg,http://media.kinhtedothi.vn//2021/04/13/bannhtroichay.jpg,https://cdnmedia.thethaovanhoa.vn/Upload/tyTrfgkgEUQwPYuvZ4Kn1g/files/2020/03/2403/5ryuy.jpg',
                'price' => 20000,
                'name' => 'Bánh trôi chay',
                'description' => '<p>Chắc chắn bạn sẽ cần một đĩa b&aacute;nh tr&ocirc;i chay v&agrave;o ng&agrave;y tết H&agrave;n thực</p>',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],[
                'id' => 42,
                'image' => 'https://banhchungngon.vn/wp-content/uploads/2015/09/banh-chung-chay.jpg,https://wna.cdnxbvn.com/wp-content/uploads/2018/11/Cach-lam-nhan-dau-banh-chung.jpg,https://yummyday.vn/uploads/images/banh-chung-chay-7.jpg,https://allimages.sgp1.digitaloceanspaces.com/vaobepkhogivn/2020/08/1596961335_213_Cach-lam-banh-chung-chay-nep-lut-nhan-nam-dau.jpg',
                'price' => 20000,
                'name' => 'bánh chưng nhân đậu ',
                'description' => '<p>B&aacute;nh Chưng chay l&agrave; b&aacute;nh Chưng cổ truyền, nh&acirc;n chay, vị ngọt, gồm c&aacute;c nguy&ecirc;n liệu: gạo nếp, đỗ xanh, gấc tươi, dừa, b&iacute; đao, hạt sen, vừng, nước hoa bưởi. Tất cả đều được l&agrave;m từ nguy&ecirc;n liệu sạch, kh&ocirc;ng d&ugrave;ng chất bảo quản, đảm bảo vệ sinh an to&agrave;n thực phẩm. B&aacute;nh ăn rất mềm, dẻo, thơm, ngọt dịu, b&agrave;y l&ecirc;n đẹp mắt.</p>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],[
                'id' => 43,
                'image' => 'https://thucthan.com/media/2018/05/banh-bao-chay/banh-bao-chay.jpg,https://cdn.tgdd.vn/Files/2020/04/21/1250758/cach-lam-banh-bao-chay-co-nhan-thom-ngon-don-gian--19.jpg,https://cdn.huongnghiepaau.com/wp-content/uploads/2019/04/banh-bao-chay-ngon.jpg,http://product.hstatic.net/200000278005/product/bbchay_30061cfc2a974d5a89da9dfa73b10475_grande.jpg',
                'price' => 10000,
                'name' => 'bánh bao chay',
                'description' => '<p>B&aacute;nh bao chay được người Trung Quốc ph&aacute;t minh từ kh&aacute; l&acirc;u rồi, m&oacute;n n&agrave;y thường d&ugrave;ng để mọi người l&agrave;m m&oacute;n điểm t&acirc;m hoặc l&agrave;m m&oacute;n ăn vặt. Đối với c&aacute;c Phật Tử th&igrave; việc d&ugrave;ng b&aacute;nh bao chay thay cho c&aacute;c bữa ăn ch&iacute;nh. Mặt kh&aacute;c c&aacute;ch l&agrave;m b&aacute;nh bao chay cũng kh&aacute; dễ v&agrave; đơn gian n&ecirc;n được nhiều người ưa th&iacute;ch, vả lại n&oacute; được l&agrave;m từ bột m&igrave; n&ecirc;n rất gần gủi với ch&uacute;ng ta n&ecirc;n ăn ho&agrave;i m&agrave; kh&ocirc;ng biết ch&aacute;n.</p>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 44,
                'image' => 'https://cdn.tgdd.vn/2020/10/CookRecipe/GalleryStep/thanh-pham-363.jpg,https://fujiocha.com/wp-content/uploads/2018/07/1-10.png,https://nauankhongkho.com/wp-content/uploads/2016/05/hap-banh.jpg,https://lambanhngon.com/news_pictures/igs1489032368.jpg',
                'price' => 10000,
                'name' => 'Bánh bao trà xanh',
                'description' => '<p>bạn muốn ăn chay m&agrave; kh&ocirc;ng nh&agrave;m ch&aacute;n ! bạn hay thử b&aacute;nh bao tr&agrave; xanh của ch&uacute;ng t&ocirc;i,được l&agrave;m 100% l&agrave; tr&agrave; xanh gi&uacute;p cho qu&iacute; kh&aacute;ch kh&ocirc;ng bị mức về c&aacute;c bệnh b&eacute;o ph&igrave;</p>',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 45,
                'image' => 'https://cdn.daylambanh.edu.vn/wp-content/uploads/2019/08/banh-ran-ngot-hap-dan-600x400.jpg,https://dvpmarket.com/resources/uploads/images/2018/06/Banh-ran-me-nhan-dau-xanh.jpg,https://i.ytimg.com/vi/Xeza6vtHzSY/maxresdefault.jpg,https://img-global.cpcdn.com/recipes/6db55328ba425e8c/680x482cq70/banh-ran-me-khoai-lang-tim-recipe-main-photo.jpg',
                'price' => 2000,
                'name' => 'Bánh rán mè ',
                'description' => '<p>Những h&ocirc;m trời se lạnh, được ngồi cạnh bếp than hồng vừa r&aacute;n b&aacute;nh vừa nh&acirc;m nhi chiếc b&aacute;nh tr&ograve;n nhỏ xinh, gi&ograve;n tan v&agrave; ngọt b&ugrave;i trong miệng th&igrave; th&uacute; vị kh&ocirc;ng g&igrave; bằng. B&aacute;nh r&aacute;n l&uacute;c lắc được l&agrave;m từ c&aacute;c nguy&ecirc;n liệu l&agrave; những sản vật từ đồng qu&ecirc; của Việt Nam như: bột nếp, đậu xanh, đường v&agrave; vừng trắng. Vỏ b&aacute;nh l&agrave;m bằng bột nếp, c&ograve;n nh&acirc;n b&aacute;nh l&agrave;m bằng đậu xanh.</p>',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 46,
                'image' => 'https://cdn.tgdd.vn/2020/11/CookRecipe/GalleryStep/thanh-pham-540.jpg,https://afamilycdn.com/thumb_w/600/Qalypm8xccccccccccccW2vZ1VroR/Image/2012/11/03/Tu-lam-banh-nep-(0)-c9a25.jpg,https://nghienbep.com/media/C%C3%B4ng-Th%E1%BB%A9c-C%C3%A1ch-l%C3%A0m-B%C3%81NH-R%E1%BB%A2M-B%C3%81NH-N%E1%BA%BEP-3.jpg,https://tuanminhgroup.com/wp-content/uploads/2020/07/b%C3%A1nh-r%E1%BB%A3m-1.jpg',
                'price' => 3000,
                'name' => 'Bánh nếp chay ',
                'description' => '<p>Những h&ocirc;m trời se lạnh, được ngồi cạnh bếp than hồng vừa r&aacute;n b&aacute;nh vừa nh&acirc;m nhi chiếc b&aacute;nh tr&ograve;n nhỏ xinh, gi&ograve;n tan v&agrave; ngọt b&ugrave;i trong miệng th&igrave; th&uacute; vị kh&ocirc;ng g&igrave; bằng. B&aacute;nh r&aacute;n l&uacute;c lắc được l&agrave;m từ c&aacute;c nguy&ecirc;n liệu l&agrave; những sản vật từ đồng qu&ecirc; của Việt Nam như: bột nếp, đậu xanh, đường v&agrave; vừng trắng. Vỏ b&aacute;nh l&agrave;m bằng bột nếp, c&ograve;n nh&acirc;n b&aacute;nh l&agrave;m bằng đậu xanh.</p>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 47,
                'image' => 'https://wikiohana.net/wp-content/uploads/2019/10/huong-dan-lam-banh-dau-xanh-nuong.jpg,https://i.ytimg.com/vi/d73ovmYWYhA/maxresdefault.jpg,http://yeunoitro.net/wp-content/uploads/2015/05/Cach-lam-banh-dau-xanh-nuong1.jpg,https://i.vietgiaitri.com/2016/12/20/tu-lam-banh-dau-xanh-bang-noi-com-dien-tuyet-ngon-cho-ngay-tet-f76b9c.jpg',
                'price' => 40000,
                'name' => 'Bánh đậu xanh nướng',
                'description' => '<pre>
B&aacute;nh đậu xanh l&agrave; một loại b&aacute;nh (b&aacute;nh ngọt) l&agrave;m từ bột đậu xanh quết nhuyễn với đường v&agrave; dầu thực vật hay mỡ động vật, thường l&agrave; mỡ lợn. B&aacute;nh được cắt th&agrave;nh từng khối vu&ocirc;ng nhỏ, g&oacute;i giấy bạc th&agrave;nh hộp nhỏ, lớn hay g&oacute;i giấy thấm mỡ th&agrave;nh từng thỏi v&agrave;ng. B&aacute;nh thường được d&ugrave;ng khi uống tr&agrave; t&agrave;u hay ch&egrave; xanh, khi đ&oacute; sẽ tạo cảm gi&aacute;c thư th&aacute;i. Địa phương l&agrave;m b&aacute;nh đậu xanh nổi tiếng l&agrave; Hải Dương.</pre>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 48,
                'image' => 'https://thanglongdaoquan.vn/wp-content/uploads/le-vu-lan-lam-banh-gi-1.jpg,https://images.foody.vn/res/g70/692772/s800/foody-le-ngoc-dung-banh-ngao-xoai-bao-tu-327-636510032353079501.jpg,https://media.cooky.vn/recipe/g2/12084/s/recipe12084-prepare-step5-635609941970585956.jpg,https://cdn.tgdd.vn/Files/2020/03/12/1241709/cach-lam-banh-ngao-xu-nghe-don-gian-hap-dan-nhanh-chong-ai-an-cung-me-4.jpg',
                'price' => 30000,
                'name' => 'Bánh mật',
                'description' => '<p>Xưa nay, qu&agrave; qu&ecirc; c&oacute; nhiều loại b&aacute;nh tr&aacute;i, như b&aacute;nh nếp, b&aacute;nh tẻ, b&aacute;nh sắn, b&aacute;nh khoai, b&aacute;nh gai, b&aacute;nh r&aacute;n&hellip; c&ugrave;ng những thứ b&aacute;nh th&ocirc;ng dụng kia, từ cầu chợ cho đến qu&aacute;n h&agrave;ng c&ograve;n phải kể đến b&aacute;nh mật. B&aacute;nh mật, t&ecirc;n gọi đ&atilde; dễ hiểu, l&agrave; l&agrave;m từ mật m&iacute;a. Trước kia, đường kh&ocirc;ng c&oacute; hoặc khan hiếm chỉ c&oacute; mật từ c&aacute;c l&agrave;ng nghề đem về b&aacute;n ở chợ phi&ecirc;n m&agrave; th&ocirc;i.</p>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 49,
                'image' => 'https://afamilycdn.com/k:thumb_w/400/Qalypm8xccccccccccccW2vZ1VroR/Image/2013/11/25/7-763a8/am-long-voi-mon-banh-mat-dan-da.jpg,https://suckhoedoisong.qltns.mediacdn.vn/Images/phamquynh/2020/04/17/93564221_3429799043703444_6330027417658195968_n.jpg,https://nhipsonghanoi.hanoimoi.com.vn/Uploads/images/thuhang/2019/12/17/A1.jpg,https://f1.vinhphuc.edu.vn/UploadImages/vinhphuc/ngant/2019_1/Banh%20te.jpg',
                'price' => 20000,
                'name' => ' Bánh mật vàng',
                'description' => '<p>B&aacute;nh v&agrave;ng &oacute;ng m&agrave;u mật m&iacute;a v&agrave; thơm m&ugrave;i gừng, ăn rất ấm bụng, đặc biệt đ&acirc;y l&agrave; một m&oacute;n ăn nhẹ đơn giản dễ l&agrave;m rất th&iacute;ch hợp trong tiết trời lạnh. B&aacute;nh mật ngon nhất khi ăn n&oacute;ng, xắn từng th&igrave;a nhỏ cho v&agrave;o miệng, h&iacute;t h&agrave; v&igrave; hơi n&oacute;ng, miếng b&aacute;nh dẻo thấm đẫm vị ngọt của mật m&iacute;a quyến luyến trong miệng, m&oacute;n n&agrave;y tuy ngọt m&agrave; kh&ocirc;ng dễ ng&aacute;n bởi c&ograve;n c&oacute; sự g&oacute;p mặt của vị cay nhẹ, thơm nồng từ gừng.</p>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 50,
                'image' => 'https://cdn.tgdd.vn/2020/06/CookProduct/1-1200x676-5.jpg,https://cdn.tgdd.vn/Products/Images/7301/239097/bhx/banh-bao-dau-xanh-bi-do-la-cusina-goi-300g-202105161638051234.jpg,https://cdn.tgdd.vn/Products/Images/7301/239097/bhx/banh-bao-dau-xanh-bi-do-la-cusina-goi-300g-202105161638055237.jpg,https://media.cooky.vn/recipe/g5/45180/s320x320/cooky-recipe-cover-r45180.jpg',
                'price' => 40000,
                'name' => ' Bánh bao nhân bí đỏ',
                'description' => '<p>M&oacute;n b&aacute;nh bao b&iacute; đỏ với phần nh&acirc;n thơm mịn c&ugrave;ng lớp vỏ b&aacute;nh mềm, ngọt ng&agrave;o chắc chắn sẽ l&agrave;m mọi thực kh&aacute;ch say m&ecirc; chỉ trong 1 lần thưởng thức</p>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 51,
                'image' => 'https://file.hstatic.net/200000079049/file/banh-kem-trai-cay-1_dd6ab0ea55844c1fa81071bdf6c1bcbf_grande.jpg,https://kenh14cdn.com/VrjQrRVrvjO2tRL0F3YRQihIfVbE/Image/2012/06/120603mbtbanhcamsp1_e7654.jpg,https://cdn.tgdd.vn/2020/07/CookProduct/1200-1200x676-7.jpg,https://daylambanhngon.com/public/backend/filemanager/source/banhkemcam/banh-kem-cam-400x600.jpg',
                'price' => 150000,
                'name' => 'Bánh kem cam',
                'description' => '<p>Hương vị tr&aacute;i c&acirc;y tươi chua ngọt h&ograve;a quyện với cốt b&aacute;nh mềm mịn, b&eacute;o ngậy. Mới nghe th&ocirc;i cũng đ&atilde; cảm thấy hấp dẫn rồi chẳng tr&aacute;ch tại sao b&aacute;nh kem tr&aacute;i c&acirc;y lại được nhiều người th&iacute;ch th&uacute; đến vậy.</p>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 52,
                'image' => 'https://cdn.huongnghiepaau.com/wp-content/uploads/2019/03/banh-trung-thu-dau-xanh.jpg,https://cdn.tgdd.vn/2020/08/CookProduct/75-1200x676.jpg,https://ytuongvietnam.com/wp-content/uploads/2019/07/banh-deo-trung-thu-nhan-dau-xanh.jpg,https://scontent.subi.vn/cmsmedia/banh-nuong-e41fe386a167a468797f315827d8f7de.jpg ',
                'price' => 40000,
                'name' => 'bánh trung thu',
                'description' => '<p>Tết Trung thu c&ograve;n gọi l&agrave; Tết Đo&agrave;n vi&ecirc;n, đ&acirc;y l&agrave; dịp để mọi người trong gia đ&igrave;nh sum vầy b&ecirc;n nhau c&ugrave;ng thưởng thức chiếc b&aacute;nh trung thu nhỏ xinh trong ng&agrave;y Rằm th&aacute;ng 8 nhưng kh&ocirc;ng phải ai cũng hiểu được &yacute; nghĩa của chiếc b&aacute;nh n&agrave;y. B&aacute;nh Trung thu c&oacute; nguồn gốc xuất xứ từ Trung Quốc v&agrave; được truyền b&aacute; đến Việt Nam. Cứ đến ng&agrave;y Rằm th&aacute;ng 8, người d&acirc;n Việt kh&ocirc;ng ai qu&ecirc;n mua những chiếc b&aacute;nh Trung thu nhỏ xinh về để c&uacute;ng b&agrave;n thờ tổ ti&ecirc;n, sau đ&oacute; c&ugrave;ng nhau thưởng thức. Ng&agrave;y Tết Trung thu cũng được coi l&agrave; ng&agrave;y lễ lớn thứ 3 trong năm tại Việt Nam.</p>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 53,
                'image' => 'http://www.vikybomi.com.vn/upload/images/info/lam-banh-xeo-chay-banh-khot-chay-trong-mua-vu-lan.jpg,https://mikkohuongxua.vn/wp-content/uploads/2020/11/Thi%E1%BA%BFt-k%E1%BA%BF-kh%C3%B4ng-t%C3%AAn-66.png,https://photo-cms-sggp.zadn.vn/w580/Uploaded/2021/bsugpivp/2020_02_29/baivinhthuanthubay-banhxeo824_qagm.jpg,https://hd1.hotdeal.vn/images/28-01-2015/untitled%20folder4/125557_body_them%20%283%29.jpg',
                'price' => 15000,
                'name' => 'Bánh xèo chay',
                'description' => '<p>Ăn chay trong th&aacute;ng Vu Lan (th&aacute;ng 7 &acirc;m lịch) đ&atilde; trở th&agrave;nh phong tục t&iacute;n ngưỡng của tất cả phật tử trong nước. M&oacute;n chay ng&agrave;y nay cũng phong ph&uacute; hơn v&agrave; được chế biến cầu kỳ hơn để đảm bảo dinh dưỡng v&agrave; nhu cầu đa dạng về h&igrave;nh thức trong văn h&oacute;a ẩm thực. B&aacute;nh x&egrave;o chay, b&aacute;nh khọt chay - một m&oacute;n b&aacute;nh truyền thống được cải bi&ecirc;n, tuy giản đơn nhưng hết sức hấp dẫn thực kh&aacute;ch trong m&ugrave;a Vu Lan.</p>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 54,
                'image' => 'https://pastaxi-manager.onepas.vn/content/uploads/articles/2amthuc/amthuccuocsong/9monchay16/9-mon-chay-2.jpg,https://dammenaunuong.com/wp-content/uploads/2019/10/2584396bb4ced2c262a744c2af56e243-cach-lam-nem-ran-sl.jpg,https://cdn.baogiaothong.vn/upload/images/2021-1/article_img/2021-02-01/img-bgt-2021-a-nh-chu-p-ma-n-hi-nh-2021-02-01-lu-c-23-1612196188-width555height400.jpg,https://lh3.googleusercontent.com/proxy/oYl4M-Hfp5BywkveidJc4UsDJYVa8yqMGieQBCz8rVGAPSs-Hp7GTP0hfS9OaliB6wjqAN-FeJC9Mwmd3oXqLOUNDG3SPPwttsP-9bivJW9LCcxuOnVCkNo9bNTM7bc0_B8FIbbpBL4LBK9XAkciVcySqbux6cM9KLex4A',
                'price' => 10000,
                'name' => 'Bánh đa nem chay',
                'description' => '<p>B&aacute;nh đa nem chay l&agrave; m&oacute;n ăn biến thể từ m&oacute;n nem với những loại nguy&ecirc;n liệu quen thuộc như miến, trứng, t&ocirc;m, thịt,... Đối với những bữa cơm chay th&igrave; đ&acirc;y l&agrave; m&oacute;n b&aacute;nh chay ngon kh&ocirc;ng thể thiếu bởi n&oacute; đại diện cho m&oacute;n nem truyền thống v&agrave; sức hấp dẫn kh&oacute; để chối từ.</p>
 ',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 55,
                'image' => 'https://afamilycdn.com/2019/8/5/banh-dau-xanh-5-15650159260661416119018.jpg,https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/ba%CC%81nh-da%CC%A3u-xanh-kho-thumbnail-1.jpg,https://i.ytimg.com/vi/ovRwCQ-Swi0/maxresdefault.jpg,https://vtv1.mediacdn.vn/2017/banhdauxanh-1487819314729.jpg',
                'price' => 1,
                'name' => 'Bánh đậu ngày vu lan',
                'description' => '<p>B&aacute;nh đậu xanh l&agrave; m&oacute;n b&aacute;nh ngọt được nhiều người y&ecirc;u th&iacute;ch. B&aacute;nh thơm ngon lại c&oacute; vị ngọt thanh nhẹ vừa miệng. Tạo h&igrave;nh b&aacute;nh kh&aacute; đẹp mắt, rất th&iacute;ch hợp chế biến v&agrave;o ng&agrave;y lễ Vu Lan.</p>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 56,
                'image' => 'https://bizweb.dktcdn.net/thumb/1024x1024/100/385/875/products/banhtechuan.jpg,http://lh3.ggpht.com/-yU6_Qt9W69Q/UUvTOAZftzI/AAAAAAAATOA/_wYx1P3dL8E/banhgio%252520%2525282%252529_thumb%25255B2%25255D.jpg,https://cdn1.ngonbonmua.com/wp-content/uploads/2016/12/Banh-gio-chay-4.jpg,https://tuvaobep.com/wp-content/uploads/2021/04/hap-banh-gio.jpg',
                'price' => 30000,
                'name' => 'Bánh giò chay',
                'description' => '<p>trong những ng&agrave;y tết vu lan b&aacute;o hiếu chắc kh&ocirc;ng thể thiếu m&oacute;n b&aacute;nh gi&ograve; chay.Với truyền th&ocirc;ng vu&ocirc;ng tượng trưng cho trời tr&ograve;n tượng trưng cho đất của người d&acirc;n việt nam n&ecirc;n ch&uacute;ng t&ocirc;i đ&atilde; l&agrave;m n&ecirc;n m&oacute;n b&aacute;nh để trưng thờ v&agrave;o dịp lễ n&agrave;y</p>
',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],[
                'id' => 57,
                'image' => 'https://tinlogi.com/wp-content/uploads/2020/03/cach-lam-banh-troi-banh-chay-ngu-sac-03-24-tinlogi.jpg,https://cdn.vietnammoi.vn/stores/news_dataimages/trangctm/042018/18/16/3331_3.jpg,https://lh3.googleusercontent.com/proxy/nqqjIP9jxiM-2EsDiOj1-BsNOWOOIaxfbze1c0Kvpai27mvScq3RrRUQbZjzSFVY-bzRwbnz1Rym-prVBOh4IRVltoJSYvgKpP1UTlj9YVsD5JAUL0J2yaHslAvjyDAfagVki1VQpGBC6VZaMnwgBggOkr_Lwt5Og526uOf3eis,https://healthplus.vn/Images/Uploaded/Share/2015/04/21/lam-banh-troi-banh-chay-ngu-sac-4-buoc-trong-30-phut-2.jpg',
                'price' => 1,
                'name' => 'Bánh trôi chay màu thập cẩm',
                'description' => '<p>M&acirc;m c&uacute;ng bạn sẽ sặc sỡ hơn khi c&oacute; những đĩa b&aacute;nh tr&ocirc;i chay được tẩm m&agrave;u tự nhi&ecirc;n.</p>
 ',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],[
                'id' => 58,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/kho-qua-xao-dau-hu-ca-rot-chay-recipe-main-photo.jpg,https://media.cooky.vn/recipe/g2/11288/s320x320/recipe11288-635711671133085161.jpg,https://cdn.tgdd.vn/2021/01/CookRecipe/Avatar/kho-qua-nhoi-dau-hu-kho-chay-thumbnail.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi0NbWatBTfgvkVn_Vfl-jJnxjEoaRbCt26Q&usqp=CAU',
                'price' => 45000,
                'name' => 'khổ qua xào đậu phụ',
                'description' => '<p>Rau củ l&agrave; m&oacute;n thường nhật c&oacute; mặt trong m&oacute;n chay, kết hợp c&agrave; rốt, bắp, khổ qua tạo một m&oacute;n rau củ cho bữa chay đủ chất. Bổ sung vitamin A, chất sắt từ c&agrave; rốt th&ecirc;m nguồn vitamin C dồi d&agrave;o, nguồn Protein thay thế thịt từ khổ qua sẽ gi&uacute;p người ăn chay c&oacute; một hệ miễn dịch tốt nhất.</p>',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 59,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/dua-chuot-muoi-chay.jpg,https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/dua-leo-dua-chuot-muoi-man-nguyen-qua-thumbnail.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS26C-1ZG5BVFAIbK6z1bpFGwJ6OcOQLLgyLg&usqp=CAU,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq5g1FpqknWXd-lcC2Z6lY5zs4fE-1uJxVOg&usqp=CAU',
                'price' => 70000,
                'name' => 'dưa chuột muối',
                'description' => '<p>Lượng nước chứa đến 90%, ngo&agrave;i ra l&agrave; h&agrave;ng loạt c&aacute;c kho&aacute;ng chất, vitamin cần bổ sung v&agrave;o cơ thể mỗi ng&agrave;y m&agrave; ăn chay cần c&oacute; như: &ndash; Chất xơ, vitamin C, vitamin B1, B2, B5, B6, vitamin V3, &ndash; Folic acid, magie, canxi, kali, sắt, kẽm&hellip;</p>',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 60,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/bap-cai-cuon-chay.jpg,https://i.ytimg.com/vi/SiSAl-mJ26o/maxresdefault.jpg,http://baokhanhhoa.vn/dataimages/201509/original/images1097270_3.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTwDKARWbsy1D6Ds8qXQoTP9jZ5yzRi1Ot7A&usqp=CAU',
                'price' => 30000,
                'name' => 'bắp cải cuốn',
                'description' => '<p>Thực phẩm n&agrave;y l&agrave; rất thấp trong chất b&eacute;o b&atilde;o h&ograve;a v&agrave; cholesterol. N&oacute; cũng l&agrave; một nguồn tốt của thiamin , canxi , sắt, magi&ecirc; , phốt pho v&agrave; kali. Đồng thời một nguồn rất tốt của chất xơ , Vitamin C , Vitamin K , Vitamin B6 , folate v&agrave; mangan.</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 61,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/khoai-tay-xao.jpg,https://cdn.tgdd.vn/2020/09/CookProduct/thumbcn-1200x676-12.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjjMU2vrs01g1aRS7TqBhYjF6YlD3uhnjZjA&usqp=CAU,https://i.ytimg.com/vi/tL-TvLisglc/maxresdefault.jpg',
                'price' => 35000,
                'name' => 'khoai tây xào',
                'description' => '<p>Trong củ khoai t&acirc;y chứa một nguồn dồi d&agrave;o xơ v&agrave; c&aacute;c kho&aacute;ng chất cần thiết như Vitamin B6 v&agrave; kali, v&agrave; một nguồn rất tốt của Vitamin C. Khoai t&acirc;y chứa &iacute;t Chất b&eacute;o b&atilde;o h&ograve;a, cholesterol v&agrave; natri n&ecirc;n rất tốt cho tim mạch.</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 62,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/dau-co-ve-xao-vung.jpg,https://media.tuoitrexahoi.vn/resize_x500x/mediav2/upload/2020/07/02/can-than-ngo-doc-khi-an-dau-co-ve-song-hoac-chua-nau-chin-ky_02072020165156.jpg,https://lh3.googleusercontent.com/proxy/-MeJ_hJtisxWYYgdPXCqKdYlXs8rZ3TZeq7xRGwDysAq0XPD11Vvj08dPO1W3mTl6sYl59zuQFqrU6Sk6bmHUlpmsCl_Njcekyhf4PiDM_waoxo7vr3250od0Z7OBok62NWRN8-rqhg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3uLIvayi6_TwAL1fi53Pb82mtklbk9b5PSQ&usqp=CAU',
                'price' => 35000,
                'name' => 'đậu cove xào gừng',
                'description' => '<p>Đậu c&ocirc; ve kh&ocirc;ng chỉ c&oacute; chứa nhiều nguy&ecirc;n tố vi lượng như protein, canxi, sắt, m&agrave; c&ograve;n c&oacute; nhiều kali, magie, &iacute;t natri.</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 63,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/dau-bap-xao-dau-hanh.jpg,https://3.bp.blogspot.com/-JD13prQMm1Y/Vn1mJlC90TI/AAAAAAAAQ-k/hXttfP0fnN4/s1600/dau-bap-hap-mo-hanh.jpg,https://maysaymactech.com/wp-content/uploads/2018/08/dau-bap-xao-thit-bo.jpghttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHLElIXjBOT8eTKc70IhbgyHODvbxHuRcGQQ&usqp=CAU',
                'price' => 30000,
                'name' => 'đậu bắp dầu hành',
                'description' => '<p>Đậu bắp rất gi&agrave;u vitamin K, vitamin B, sắt, kali, kẽm, canxi, mangan v&agrave; magi&ecirc;&hellip; gi&uacute;p tạo ra nhiều tế b&agrave;o hồng cầu trong cơ thể. Đ&acirc;y l&agrave; m&oacute;n gi&uacute;p bổ sung chất sắt cho người ăn chay thường rất thiếu.</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 64,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/nam-rom-kho-tieu.jpg,https://i.ytimg.com/vi/SqJHF0Sz9OA/maxresdefault.jpg,https://yummyday.vn/uploads/images/nam-rom-kho-tieu-7.jpg,https://cdn.daynauan.info.vn/wp-content/uploads/2016/03/nam-rom-kho-tieu-ngon.jpg',
                'price' => 60000,
                'name' => 'nấm rơm kho tiêu',
                'description' => '<p>một m&oacute;n ăn rất gi&agrave;u dinh dưỡng v&agrave; đầy sựu tinh tế chắc chắn bạn sẽ rất h&agrave;i l&ograve;ng về m&oacute;n n&agrave;y</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 65,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/canh-bi-do-nuoc-cot-dua.jpg,https://img.vuinauan.net/images/wna/cach-nau-canh-bi-do-chay/cach-nau-canh-bi-do-chay_cach-nau-canh-bi-do-nuoc-cot-dua.jpg,https://anh.24h.com.vn/upload/1-2015/images/2015-01-07/1420606232-bihamdua.jpg,http://2.bp.blogspot.com/-PyMWBIbk_HI/VPaKjJzIlGI/AAAAAAAASwE/jjQ5FDcrOF0/s280/bi%2Bh%C3%A2m%2Bd%E1%BB%ABa.JPG',
                'price' => 90000,
                'name' => 'Canh bí đỏ nước cốt dừa',
                'description' => '<p>một m&oacute;n ăn rất bổ cho m&aacute;u v&agrave; mắt được lấy nguy&ecirc;n liệu từ những g&igrave; xung quanh ta v&agrave; th&acirc;n thuộc nhất với người d&acirc;n việt nam</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 66,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/nam-rom-chien-gion.jpg,https://cdn.tgdd.vn/2021/04/CookRecipe/Avatar/nam-rom-chien-xu-thumbnail.jpg,https://nauankhongkho.com/wp-content/uploads/2016/06/cach-lam-nam-rom-tam-bot-ran.jpg,https://baokhanhhoa.vn/dataimages/202002/original/images5394011_nam.jpg',
                'price' => 1,
                'name' => 'nấm rơm chiên chay',
                'description' => '<p>Thực đơn tiếp tục đến m&oacute;n nấm rơm chi&ecirc;n chay .nấm rơm rất gi&agrave;u dinh dưỡng dừ chi&ecirc;n qua dầu nhưng vẫn dữ nguy&ecirc;n độ dinh dưỡng cần thiết</p>
 ',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 67,
                'image' => 'https://img-global.cpcdn.com/recipes/a72a12103f3d6f8a/680x482cq70/mi-xao-n%E1%BA%A5m-h%C6%B0%C6%A1ng-rau-c%E1%BB%A7-chay-recipe-main-photo.webp,https://img-global.cpcdn.com/recipes/a72a12103f3d6f8a/680x482cq70/mi-xao-n%E1%BA%A5m-h%C6%B0%C6%A1ng-rau-c%E1%BB%A7-chay-recipe-main-photo.jpg,https://afamilycdn.com/2018/9/22/4-1537588231598859416815.jpg,https://www.hoidaubepaau.com/wp-content/uploads/2018/05/mi-xao-chow-mein.jpg',
                'price' => 50000,
                'name' => 'Mì xào nấm hương rau củ (chay)',
                'description' => '<p>sự kết hợp giữa m&igrave; v&agrave; nấm cho ta một m&oacute;n ăn gi&agrave;u dinh dưỡng v&agrave; thơm ngon .qu&iacute; kh&aacute;ch c&oacute; thể lựa chọn c&uacute;a loại nấm v&agrave; c&aacute;c loại m&igrave; t&ugrave;y v&agrave;o khẩu vị của qu&iacute; kh&aacute;ch</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 68,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/2-xao-300x199.jpg.webp,https://cdn.bepcuoi.com/media/650-425-rau-cu-xao-thap-cam-kieu-thai-bepcuoi-114.jpg,https://lh3.googleusercontent.com/proxy/VMW1JKGHB0NAi7ooO8l8J4SnbW9Uy4ESKtruZpNbhvDiAe-6oSUb7eAOIoXaYfKWq4hpaGq9evF8P-54t6oMWCisEfncaVtmG4De9CJk-eIY7C_RIfrEJcnRBn_H,https://cdn.beptruong.edu.vn/wp-content/uploads/2013/05/thit-xao-rau-cu.jpg',
                'price' => 60000,
                'name' => 'Rau quả xào chay',
                'description' => '<p>Từ l&acirc;u m&oacute;n ăn chay kh&ocirc;ng c&ograve;n xa lạ đối với ch&uacute;ng ta nữa ,n&oacute; xuất hiện h&agrave;ng ng&agrave;y tr&ecirc;n m&acirc;m cơm gia đ&igrave;nh kh&ocirc;ng phải chỉ những ng&agrave;y ăn chay ,những ng&agrave;y đầu th&aacute;ng nữa.M&oacute;n chay hiện nay được chế biến rất c&ocirc;ng phu v&agrave; trang tr&iacute; đẹp mắt khiến người nh&igrave;n l&agrave; muốm ăn ngay kh&ocirc;ng chỉ thế m&agrave; c&ograve;n rất ngon rất lạ nữa nh&eacute;.Đ&atilde; xuất hiện những nh&agrave; h&agrave;ng đồ ăn chay ở khắp mọi nơi v&agrave; nh&agrave; h&agrave;ng n&agrave;o cũng h&uacute;t kh&aacute;ch v&agrave; đem lại sự ưng &yacute; cho kh&aacute;ch.M&oacute;n chay ng&agrave;y c&agrave;ng độc đ&aacute;o đ&atilde; c&oacute; rất nhiều chuy&ecirc;n gia nghi&ecirc;n cứu chế biến ra m&oacute;n ăn ngon v&agrave; hấp dẫn .Trong gia đ&igrave;nh ,c&oacute; rất nhiều gia đ&igrave;nh đ&atilde; sử dụng m&oacute;n chay để đ&atilde;i kh&aacute;ch trong những ng&agrave;y đặc biệt như giỗ tết,cưới hỏi,..v&agrave; được thực kh&aacute;ch đ&oacute;n nhận hết sức nhiệt t&igrave;nh v&agrave; vui vẻ.Thực đơn m&oacute;n chay v&ocirc; c&ugrave;ng đa dạng cũng c&oacute; g&agrave; ,c&aacute;, v&agrave; v&ocirc; v&agrave;n những m&oacute;n ăn đặc sắc kh&aacute;c.H&ocirc;m nay ch&uacute;ng t&ocirc;i sẽ giới thiệu với c&aacute;c bạn một m&oacute;n chay v&ocirc; c&ugrave;ng đơn giản m&agrave; ngon ph&ugrave; hợp với những m&oacute;n ăn h&agrave;ng ng&agrave;y đ&oacute; l&agrave; m&oacute;n rau củ x&agrave;o thập cẩm.Nghe đ&atilde; thấy ngon v&agrave; hấp dẫn đ&uacute;ng kh&ocirc;ng c&aacute;c bạn.</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 69,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/3-chien-300x223.jpg.webp,https://i.ytimg.com/vi/fKiJyXnVJ9Y/hqdefault.jpg,https://i.ytimg.com/vi/OVDpj-KwIb4/hqdefault.jpg,https://cdn-gd-v1.webbnc.net/useruploads/userfiles//508613/images/nam_bao_ngu_chien_gion_grande.jpg',
                'price' => 120.00,
                'name' => 'nấm bào ngư chiên giòn',
                'description' => '<p>Kh&ocirc;ng thể thiếu trong danh s&aacute;ch ch&iacute;nh l&agrave; m&oacute;n nấm b&agrave;o ngư lăn bột chi&ecirc;n gi&ograve;n. M&oacute;n ăn n&agrave;y dễ g&acirc;y nghiện với vị ngọt ngọt, dai ngon của nấm. Ưu điểm kh&aacute;c nữa l&agrave; thời gian chế biến cũng cực kỳ nhanh. M&oacute;n ăn n&agrave;y sẽ l&agrave; đồ nhắm tuyệt vời c&ugrave;ng với bia trong c&aacute;c buổi tụ họp đồng nghiệp, bạn b&egrave;.</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 70,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/10-mon-cai-thao.jpg.webp,https://cdn.cet.edu.vn/wp-content/uploads/2019/01/cai-thao-xao-nam.jpg,https://cdn.tgdd.vn/2021/06/CookRecipe/Avatar/cai-thao-xao-nam-dui-ga-thumbnail-1.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-_B44VAxSb3avUuudz5cIBARkIVLl4kvdw57FBpFmnt9S0Yx8Tk3bWOrbByfrliGVwJw&usqp=CAU',
                'price' => 50000,
                'name' => 'cải thảo xào dấm',
                'description' => '<p>Cải thảo l&agrave; loại rau c&oacute; chứa nhiều chất dinh dưỡng, vừa c&oacute; c&ocirc;ng hiệu thanh nhiệt vừa gi&uacute;p chữa bệnh hiệu quả, th&iacute;ch hợp d&ugrave;ng v&agrave;o những ng&agrave;y nắng n&oacute;ng.v&igrave; thế cải thảo rất được ưa chuộng ở H&agrave;n Quốc cải thảo x&agrave;o dấm sẽ loại bỏ được vị hăng của cải thảo gi&uacute;p ho&agrave;n thiện m&oacute;n ăn hơn</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 71,
                'image' => 'https://media.cooky.vn/recipe/g6/51467/s320x320/cooky-recipe-637127054246059487.JPG,https://static.kenhphatphap.com/photos/11/2019/06/thumb2/5d0e66fdcb330.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFJCBN1KJ-7zbMcdELJepWFxOqwh84m2wrjuSZj3eYSVc-hCtk8QhTEeaZYn7dUBaAeG0&usqp=CAU,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z6xisjStjF8IxDd7STXclTX2KHzPpWP59eJZ_O1H6IObrqZoQ4wiuO2f8hHW27BuutU&usqp=CAU',
                'price' => 45000,
                'name' => 'đậu bắp xào chay',
                'description' => '<p>Một m&ugrave;a h&egrave; nữa sắp đến, nắng h&egrave; tuy v&agrave;ng ruộm, rực rỡ nhưng cũng mang theo c&aacute;i n&oacute;ng nực v&agrave; oi ả đặc trưng. L&agrave; thực đơn thanh nhiệt kh&ocirc;ng thể thiếu trong m&ugrave;a n&agrave;y, c&aacute;c m&oacute;n x&agrave;o chay l&agrave; lựa chọn h&agrave;ng đầu của nhiều gia đ&igrave;nh. Vậy m&oacute;n đậu bắp x&agrave;o chay n&ecirc;n nấu theo c&ocirc;ng thức n&agrave;o sao cho thật nhanh ch&oacute;ng m&agrave; vẫn ngon miệng</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 72,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/ca-tim-kho-tieu-chay-thumbnail.jpg,https://afamilycdn.com/Images/Uploaded/Share/2011/04/17/110418afamily-AN-ca-tim-sot-tom-thit-8.jpg,https://cdn.tgdd.vn/2021/03/CookProductThumb/CaTimXaoOc-EggplantrecipesandSnails5-39screenshot-620x620.jpg,https://cdn.tgdd.vn/Files/2020/05/03/1253179/2-cach-lam-ca-tim-xao-chao-ca-tim-xao-nuoc-tuong--23-760x367.jpg',
                'price' => 50000,
                'name' => 'cà tím xào chay',
                'description' => '<p>bạn muốn 1 m&oacute;n ăn vừa ngon miệng vừa quen thuộc ? c&agrave; t&iacute;m x&agrave;o chay sẽ l&agrave; 1 lựa chọn ho&agrave;n hảo</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 73,
                'image' => 'https://img-global.cpcdn.com/recipes/5f2d0e28d865d2c1/680x482cq70/cleaneating-v%E1%BB%9Bi-rau-c%E1%BB%A7-lu%E1%BB%99c-recipe-main-photo.jpg,https://hoiquanamthuc.com/wp-content/uploads/2015/04/giu-rau-cu-co-mau-sac-tuoi-dep-mat.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnA8KoS-eh78CIdGd3fG9P1IGgPP4che13Er2Ml1KlZWfaAQ9cukdMddPKLZVRi82tFpc&usqp=CAU,http://product.hstatic.net/1000355079/product/rau_2523dfb4a1dc426da576ae78182b93d1_grande.jpg',
                'price' => 40000,
                'name' => 'rau củ quả luộc',
                'description' => '<p>một đĩa rau củ quả luộc gi&uacute;p bạn dễ d&agrave;ng trang tr&iacute; cho m&acirc;m cơm của bạn. V&agrave; chắc chắn l&agrave; n&oacute; c&oacute; đủ c&aacute;c dưỡng chất thiết yếu cho cơ thể</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 74,
                'image' => 'https://nhahanghuongsen.com.vn/wp-content/uploads/2018/04/mang-tay-nuong-gion-2.jpg,https://lisadofoods.com.vn/wp-content/uploads/2020/05/cach-lam-mang-tay-nuong-bo-toi-va-nuong-pho-mai-min.png,https://www.lisado.vn/wp-content/uploads/2020/05/mang-tay-nuong-3-min.png,https://lisadofoods.com.vn/wp-content/uploads/2020/05/cach-lam-mang-tay-nuong-bo-toi-va-nuong-pho-mai-3-min.png',
                'price' => 200000,
                'name' => 'măng tây nướng',
                'description' => '<p>Măng t&acirc;y được coi l&agrave; thứ rau &quot;ho&agrave;ng đế&quot; v&igrave; chứa lượng dinh dưỡng cao v&agrave; c&oacute; khả năng chống ph&ograve;ng chống ung thư. Măng t&acirc;y thường được sử dụng như một m&oacute;n ăn đơn thuần nhưng với c&aacute;ch nướng n&agrave;y sẽ đem lại cho măng t&acirc;y vị mới lạ</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 75,
                'image' => 'https://img-global.cpcdn.com/recipes/aeee251061b3d3fa/1200x630cq70/photo.jpg,https://cdn.tgdd.vn/2021/07/CookProduct/Cachlammangtayxaotoithomngoncucdongian-1200x676.jpg,https://img-global.cpcdn.com/recipes/aeee251061b3d3fa/1200x630cq70/photo.jpg,https://phamvuduongson.com/wp-content/uploads/2021/04/mang-tay-xao-bao-lau-thi-chin.jpg',
                'price' => 250000,
                'name' => 'măng tây xào',
                'description' => '<p>Măng t&acirc;y x&agrave;o chay l&agrave; một m&oacute;n ăn chay d&acirc;n gi&atilde; với hương vị đậm đ&agrave; kh&ocirc;ng k&eacute;m g&igrave; những m&oacute;n chế biến từ t&ocirc;m, thịt, c&aacute;,.. Với m&oacute;n ăn n&agrave;y, m&acirc;m cỗ ng&agrave;y Tết sẽ chẳng c&ograve;n ng&aacute;n ngẩm với đầy ắp thịt nữa m&agrave; đảm bảo đ&acirc;y sẽ l&agrave; m&oacute;n hết đầu ti&ecirc;n đ&oacute;. Đĩa măng t&acirc;y x&agrave;o thơm ngon, gi&ograve;n gi&ograve;n. Từng ngọn măng t&acirc;y được xếp gọn g&agrave;ng, đẹp mắt, l&agrave;m tăng vẻ sang trọng cho b&agrave;n ăn ng&agrave;y Tết ai cũng phải khen ngợi đ&oacute;.</p>
 ',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 76,
                'image' => 'https://chefofking.net/wp-content/uploads/2019/03/C%E1%BA%A3i-th%C3%ACa-x%C3%A0o-n%E1%BA%A5m-%C4%91%C3%B9i-g%C3%A0-1.jpg,https://i.vietgiaitri.com/2019/3/17/cai-thia-xao-nam-dui-ga-0c39ed.jpg,https://img-global.cpcdn.com/recipes/86eaf3d0f94ac789/680x482cq70/c%E1%BA%A3i-chip-vao-t%E1%BB%8Fi-n%E1%BA%A5m-h%C6%B0%C6%A1ng-n%E1%BA%A5m-dui-ga-recipe-main-photo.jpg,https://haithuycatering.com/image/5c3988b951046d57e109cee5/original.jpg',
                'price' => 70000,
                'name' => 'cải thìa xào nấm đùi gà',
                'description' => '<p>Nấm v&agrave; rau, sự kết hợp tưởng chừng đơn điệu nhưng đầy đủ dưỡng chất cho bữa cơm gia đ&igrave;nh. Kh&ocirc;ng cần qu&aacute; nhiều chất đạm trong một thực đơn, đ&acirc;y l&agrave; sự chọn lựa l&yacute; tưởng nhất của bạn.</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 77,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/10-mon-an-cha-bap.jpg.webp,https://cdn.tgdd.vn/Files/2020/05/04/1253529/cach-lam-cha-bap-chien-thit-gion-ngon-don-gian-an-la-ghien-8-760x367.jpg,https://2monngonmoingay.com/wp-content/uploads/2017/08/bap7.jpg,https://2monngonmoingay.com/wp-content/uploads/2017/08/bap8.jpg',
                'price' => 60000,
                'name' => 'chả bắp',
                'description' => '<p>Chả bắp thơm gi&ograve;n cho cơm chay ng&agrave;y Rằm th&ecirc;m ngon.M&oacute;n chả bắp gi&ograve;n nhẹ, dẻo dẻo vị bắp non, kết hợp với vị bơ b&eacute;o b&eacute;o thơm m&ugrave;i h&agrave;nh l&aacute; quả thực v&ocirc; c&ugrave;ng hấp dẫn!</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ], [
                'id' => 78,
                'image' => 'https://cdn.tgdd.vn/2020/08/CookProduct/thum-1200x676-2.jpg,https://vietnammenyeu.com/vietnam/uploads/2020/07/Kho%CC%82%CC%89-Qua-Ca%CC%80-O%CC%9B%CC%81t-DON-CA-BASA-ngon-la.xx&oh=7b11c9ccbb76547b7cef246bf166f98e&oe=5F4371DD.jpeg,https://img-global.cpcdn.com/recipes/f0541c5dc6f0437f/1200x630cq70/photo.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOmiyZMPq8nmNKGhz8q0rqgs7C66tq6ZJ0Ivhg457PyL0kXlJOva2F4z4WYfsqBVnB4tM&usqp=CAU',
                'price' => 90000,
                'name' => 'khổ qua cà ớt',
                'description' => '<p>được du hưởng từ người hoa nhưng về việt nam đặc biệt l&agrave; miền nam khi phong tr&agrave;o ăn chay v&agrave;o nhưng ng&agrave;y lẽ lớn th&igrave; 1 nồi khổ qua c&agrave; ớt sẽ cho tay thấm sự &acirc;m em của ng&agrave;y lẽ tết</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ], [
                'id' => 79,
                'image' => 'https://mynuong.com/giachanh/?qa=blob&qa_blobid=5437840590598784916,https://www.iunauan.com/images/480x360/anh-blognauanngon.com-yevunc508706251.jpg?1525923578925,https://img-global.cpcdn.com/005_steps/2282453_7b9a268000feae87/480x360cq70/photo.jpg,https://cookbeo.com/media/2021/05/bap-cai-xao-ca-chua/bap-cai-xao-ca-chua-5x7.jpg',
                'price' => 40000,
                'name' => 'bắp cải xào cà chua',
                'description' => '<p>Bắp cải x&agrave;o c&agrave; chua l&agrave; m&oacute;n ăn đơn giản, c&oacute; thể xếp v&agrave;o nh&oacute;n m&oacute;n ăn chay v&igrave; kh&ocirc;ng c&oacute; thịt c&aacute;. M&oacute;n n&agrave;y c&oacute; c&agrave; chua chua ngọt ngọt, bắp cải gi&ograve;n, ngon ngọt, khi kết hợp với nhau sẽ rất ngon miệng v&agrave; giảm cảm gi&aacute;c ngon miệng, vị ngon hơn gấp đ&ocirc;i so với bắp cải b&agrave;o sợi v&agrave; trứng x&agrave;o c&agrave; chua.</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ], [
                'id' => 80,
                'image' => 'https://cdn.beptruong.edu.vn/wp-content/uploads/2019/07/su-hao-ca-rot-muoi-chua.jpg,https://image-us.24h.com.vn/upload/2-2018/images/2018-04-10/1523339127-127-_mg_9514-1523239855-width650height975.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaOK_QiR2z0n5QRUNz2UnP33Oz6_1y05o9PGP3eoHsm7oEah14xhebs4K-udCH_-YnwF8&usqp=CAU,https://t.vietgiaitri.com/2019/12/2/7-cach-muoi-su-hao-ca-rot-dua-gop-ngon-bat-bai-thanh-mat-gion-tan-409.jpg',
                'price' => 60000,
                'name' => 'su hào muối',
                'description' => '<p>C&aacute;ch muối su h&agrave;o c&agrave; rốt giới thiệu dưới đ&acirc;y với hương vị tươi m&aacute;t, chua ngọt nhẹ dịu, gi&ograve;n dai sẽ hấp dẫn người ăn một c&aacute;ch kh&oacute; cưỡng. C&ograve;n chần chừ g&igrave; m&agrave; bạn kh&ocirc;ng thử ngay để bữa ăn thường ng&agrave;y trở n&ecirc;n ngon miệng hơn bao giờ hết.</p>
',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ], [
                'id' => 81,
                'image' => 'https://monngonbinhdinh.vn/Images/files/c%C3%A1%20chay%20gi%E1%BA%A3%20m%E1%BA%B7n.jpg,https://navicdn.com/nakk/images_article/2018/09/20/268FCPzHzr9tYmugqGIfNpKvqVj5Iylir7ye6UZ4.jpeg,https://huongdanabc.zzz.vn/uploads/files/ca-chay.jpg,https://dacsandantoc.net/wp-content/uploads/2014/08/esc23.jpg',
                'price' => 120000,
                'name' => 'Cá chay giả mặn',
                'description' => '<p>ng&agrave;y nay c&oacute; rất nhiều người giảm b&eacute;o hoặc đi theo phật gi&aacute;o kh&ocirc;ng chuy&ecirc;n thường sử dụng c&aacute;c m&oacute;n ăn giả mặn để cho một cảm giấc gần gũi khi ăn chay cũng như mất đi cảm gi&aacute;c th&egrave;m ăn mặn .c&aacute; giả mặn l&agrave; m&oacute;n ăn được l&agrave;m ho&agrave;n to&agrave;n từ bột v&agrave; c&aacute;c loại rau củ hay sử dụng trong phật m&ocirc;n</p>
',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ], [
                'id' => 82,
                'image' => 'https://phatphapungdung.com/wp-content/uploads/2019/03/co-nen-dat-ten-mon-chay-gia-man-hay-khong.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRoih7sOdYBp2Ok4HUL4iTxTVI3Wq7e1ZExn7QLv_8pijg7DZzGuPFqxgG7T5pN8JHGzA&usqp=CAU,http://nguoiphattu.com/upload/21232f297a57a5a743894a0e4a801fc3/thang%2012_1/mon_chay_gia_man_2.jpg,https://photo-cms-kienthuc.zadn.vn/zoom/800/Uploaded/yenp/2016_02_22/Mon%20chay%20gia%20man/5_DVXP.jpg',
                'price' => 160000,
                'name' => 'gà chay giả mặn',
                'description' => ' <p>bạn cần một cỗ g&agrave; nhưng gia đ&igrave;nh bạn ăn chay v&agrave;o ng&agrave;y lễ tết h&atilde;y thử ngay g&agrave; chay giả mặn của chung t&ocirc;i sẽ khiến bạn h&agrave;i l&ograve;ng</p>',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ], [
                'id' => 83,
                'image' => 'https://photo-cms-kienthuc.zadn.vn/zoomh/800/uploaded/yenp/2016_02_22/Mon%20chay%20gia%20man/9-mon-chay-gia-man-cho-ngay-ram-thang-gieng-Hinh-9.jpg,https://blog.wikilady.vn/wp-content/uploads/2019/09/bo-vien-chien-bang-noi-chien-khonng-dau-1-1280x720.jpg,https://cf.shopee.vn/file/2fb891b7fa9b40aa64d672e1f535e064,https://cf.shopee.vn/file/a4b3d0b4d6f1db11c04930337984a2ca',
                'price' => 110000,
                'name' => 'bò viên chay kho thập cẩm',
                'description' => '<p>M&oacute;n n&agrave;y được chế bi&ecirc;n bằng c&aacute;ch kho c&aacute;c vi&ecirc;n thịt b&ograve; chay đ&oacute;ng g&oacute;i với c&aacute;c loại rau củ quả như dứa, dưa leo, c&agrave; chua, h&agrave;nh t&acirc;y&hellip; gi&uacute;p c&acirc;n bằng chất khi kh&ocirc;ng c&oacute; thịt hay l&agrave; c&aacute; ở trong m&oacute;n ăn nhưng vẫn đảm bảo đủ chất</p>
',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ], [
                'id' => 84,
                'image' => 'https://photo-cms-kienthuc.zadn.vn/zoomh/800/uploaded/yenp/2016_02_22/Mon%20chay%20gia%20man/9-mon-chay-gia-man-cho-ngay-ram-thang-gieng.jpg,https://cachnaumonngon.com/uploads/images/editor/thit%20chay.JPG,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGarbN9spUVrThZsOk3R_5MIMXFFLm7H-OczRub9lvP0VISTq1PlbD0km3nBpjACq8wDk&usqp=CAU,https://cudat.vn/wp-content/uploads/2017/05/cach-lam-kho-muc-chien-nuoc-mam-7-600x458.jpg',
                'price' => 150000,
                'name' => 'thịt chay',
                'description' => 'Thịt quay chay: Món chay giả mặn này có lớp vỏ ngoài làm từ bánh mỳ, lớp mỡ từ bột cốt dừa và phần thịt nạc là chả lụa chay.Rất phù hợp cho các bữa ăn chay lâu ngày hoặc các ngyaf lễ tết',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ], [
                'id' => 85,
                'image' => 'https://photo-cms-kienthuc.zadn.vn/zoomh/800/uploaded/yenp/2016_02_22/Mon%20chay%20gia%20man/9-mon-chay-gia-man-cho-ngay-ram-thang-gieng-Hinh-2.jpg,https://anh.eva.vn/upload/4-2016/images/2016-10-05/1475628188-avata.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROdokfr0D4zaWrOZCh92j_KjT_SUzzGzDPR33lraxzi87i0lfrCL76bVm5LhEspBfzFEA&usqp=CAU,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl2YOM8WUvp_nIHZGuNG8uApxLDxtAL4E4GQFJ1tsp9OPqvWYH7lApd41RCYAi5Cy7hcI&usqp=CAU',
                'price' => 50000,
                'name' => 'mề chay',
                'description' => '<p>Mề chay: Nguy&ecirc;n liệu ch&iacute;nh của m&oacute;n n&agrave;y l&agrave; c&aacute;c loại bột được tạo h&igrave;nh tương tự như mề g&agrave; th&aacute;i hoa. Mề chay thường được chế biến th&agrave;nh m&oacute;n mề chay x&agrave;o thập cẩm.thay v&igrave; d&ugrave;ng mề g&agrave; hoặc vịt ch&uacute;ng t&ocirc;i sủ dung c&aacute;c loại n&acirc;m c&oacute; hương vị v&agrave; độ dai giống như l&agrave; mề ga để tạo sự ho&agrave;n hảo nhất của m&oacute;n ăn</p>
',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ], [
                'id' => 86,
                'image' => 'https://meta.vn/Data/image/2019/07/24/cach-nau-pho-chay-1.jpg,https://daubepgiadinh.vn/wp-content/uploads/2018/05/pho-chay-ngon-mieng-cho-bua-sang.jpg,http://vilai.vn/data/media/1827/images/nau-pho-chay-ngon.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6bLV6-z_WRJuG4phFfn7ik1BoyQ0CM8oUKOBTmpWFvalFxaZo4yqKZFaWvFQc5eKjyYM&usqp=CAU',
                'price' => 30000,
                'name' => 'Phở chay nấm hương',
                'description' => '<p>Phở chay l&agrave; m&oacute;n ăn thơm ngon, rất th&iacute;ch hợp cho những người ăn chay hoặc phật tử phật gi&aacute;o v&agrave;o những ng&agrave;y rằm, m&ugrave;ng một</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 87,
                'image' => 'http://linhsonphatgiao.com/static/2018/09/phochay.jpg,https://tuthuoc24h.net/upload/images/Pho-chay-4.jpg,https://i.ytimg.com/vi/EkfZd-aF-t8/maxresdefault.jpg,http://nauanchay.com/wp-content/uploads/2019/12/pho-chay-voi-nam-dong-co.jpg',
                'price' => 35000,
                'name' => 'phở chay nấm đùi gà',
                'description' => '<p>nước ta phở được coi l&agrave; m&oacute;n ăn quốc d&acirc;n của mọi người .phở thường được nấu từ nuocs cốt b&ograve; hoặc lơn .đối với người ăn chay ch&uacute;ng t&ocirc;i đ&atilde; len sẵn thực đơn :phở chay nấm đ&ugrave;i g&agrave; một m&oacute;n ăn kh&ocirc;ng thẻ thiếu cho người ăn chay v&agrave;o những ng&agrave;y đầu th&aacute;ng</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 88,
                'image' => 'https://cdn.tgdd.vn/Files/2020/04/24/1251567/cach-nau-pho-chay-don-gian-thanh-dam-thom-ngon-k.jpg,https://yeunoitro.net/wp-content/uploads/ph%E1%BB%9F-chay-ngon-1280x720.jpg,http://nauanchay.com/wp-content/uploads/2019/12/pho-chay-voi-nam-dong-co.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSli4muq2JIBjjYWPQPft2NDXNSg5VHUJGWKD15hlX-acPJoR-19wF89k7mOiyVYP-XG3g&usqp=CAU',
                'price' => 40000,
                'name' => 'phở chay',
                'description' => '<p>Phở chay với nước d&ugrave;ng thanh ngọt từ rau củ hầm v&agrave; c&aacute;c loại hương liệu sẽ l&agrave; m&oacute;n ngon mới để bạn c&oacute; thể th&ecirc;m v&agrave;o sổ tay m&oacute;n ăn ng&agrave;y Lễ Vu Lan năm nay. Với c&aacute;ch l&agrave;m đơn giản bạn sẽ c&oacute; ngay một t&ocirc; phở chay thơm ngon cho bữa điểm t&acirc;m s&aacute;ng, vừa lạ miệng lại vừa bổ dưỡng.</p>',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 89,
                'image' => 'https://thegioihinhanh.com/uploads/images/news/1431617751_news_2475.png,http://hanoimoi.com.vn/Uploads/anhthu/2011/11/7/pho.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS1kp8GdUWFvnpEFO39X_ytLks8LxZ4Joji5e9g3XxCaUQBOpPZgfcXTmvvdvOt5B4wvg&usqp=CAU,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0rl3X7QidmnnZUW1pLT5Zv1RXHXlZ1BreNS8hEEpTxLY47mba-V8QQvXLP3d09gyc2Kw&usqp=CAU',
                'price' => 40000,
                'name' => 'phở chay tái',
                'description' => '<p>M&oacute;n phở chay từ l&acirc;u đ&atilde; được nhiều thực kh&aacute;ch y&ecirc;u th&iacute;ch bởi hương vị thơm ngon, thanh đạm từ c&aacute;c loại rau củ lại dinh dưỡng. Ch&iacute;nh v&igrave; thế d&ugrave; kh&ocirc;ng phải l&agrave; ng&agrave;y rằm hay mồng 1, nhiều người vẫn lựa chọn phở chay để chế biến v&agrave; chi&ecirc;u đ&atilde;i gia đ&igrave;nh. Hiểu được nhu cầu n&agrave;y, ch&uacute;ng t&ocirc;i xin được gửi đến bạn c&aacute;ch nấu phở chay ngon từ rau củ đơn giản</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 90,
                'image' => 'https://noinauphodien.vn/wp-content/uploads/2018/10/C%C3%A1ch-n%E1%BA%A5u-ph%E1%BB%9F-chay-n%E1%BA%A5m-la-h%C3%A1n-th%C6%A1m-ng%E1%BB%8Dt-711x400.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTX22LrAipS3GDB6o7qTbbVQtbA1k_h8ouRTA&usqp=CAU,http://linhsonphatgiao.com/static/2018/09/phochay.jpg,https://toinayangi.vn/wp-content/uploads/2016/02/pho-chay.jpg',
                'price' => 40000,
                'name' => 'phở chay nấm',
                'description' => '<p>Đầu th&aacute;ng l&agrave; l&uacute;c bạn cần những m&oacute;n chay để t&acirc;m hồn thanh tịnh. Đ&ocirc;i khi cũng vừa gi&uacute;p bạn c&oacute; thể thay đổi khẩu vị khi đ&atilde; qu&aacute; ch&aacute;n với những m&oacute;n dầu mỡ h&agrave;ng ng&agrave;y. Trong b&agrave;i viết n&agrave;y, Bếp Top sẽ hướng dẫn bạn 3 c&aacute;ch nấu phở chay thơm ngon chả kh&aacute;c g&igrave; phở thường m&agrave; lại kh&ocirc;ng bị &ldquo;ngấy&rdquo; do dầu mỡ.</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 91,
                'image' => 'https://image.cooky.vn/recipe/g6/53893/s/864abb8b-5edb-4dce-838f-0f6d566f3d48.jpeg',
                'price' => 40000,
                'name' => 'phở chay',
                'description' => '<p>Phở chay l&agrave; một trong những m&oacute;n ngon được rất nhiều gia đ&igrave;nh y&ecirc;u th&iacute;ch v&agrave; thường xuy&ecirc;n chế biến cho m&acirc;m cơm của gia đ&igrave;nh. M&oacute;n ăn vừa thơm ngon lại chứa đầy đủ chất dinh dưỡng. C&aacute;ch thức thực hiện th&igrave; lại v&ocirc; c&ugrave;ng đơn giản. C&aacute;c bạn h&atilde;y c&ugrave;ng theo d&otilde;i b&agrave;i viết dưới đ&acirc;y để hiểu r&otilde; hơn về c&aacute;ch thực hiện m&oacute;n phở chay nh&eacute;.</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 92,
                'image' => 'https://cosopho.com/wp-content/uploads/2020/12/Cach-nau-pho-chay-0.jpg',
                'price' => 50000,
                'name' => 'phở chay',
                'description' => ' <p>Phở chay l&agrave; m&oacute;n ăn tuyệt ngon trong những ng&agrave;y rằm, m&ugrave;ng 1. C&aacute;ch nấu phở chay thơm ngon, đậm đ&agrave; sẽ gi&uacute;p mọi người c&ugrave;ng gia đ&igrave;nh m&igrave;nh thưởng thức m&oacute;n ăn tuyệt ngon n&agrave;y c&ugrave;ng gia đ&igrave;nh.</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 93,
                'image' => 'https://cdn.huongnghiepaau.com/wp-content/uploads/2019/01/pho-xao-chay.jpg',
                'price' => 1,
                'name' => 'miến chay',
                'description' => '<p>Phở x&agrave;o chay được thực hiện theo phương ph&aacute;p Hướng Nghiệp &Aacute; &Acirc;u (HNAAu) giới thiệu b&ecirc;n dưới, chắc chắn sẽ trở n&ecirc;n v&ocirc; c&ugrave;ng hấp dẫn v&agrave; ngon miệng đấy. Với từng sợi phở mềm thơm ăn k&egrave;m c&ugrave;ng c&aacute;c loại rau, củ, nấm, đậu thanh đạm, phở x&agrave;o chay thực sự l&agrave; một m&oacute;n ăn tuyệt vời d&agrave;nh cho những ng&agrave;y rằm m&agrave; bất kỳ ai cũng kh&ocirc;ng n&ecirc;n bỏ qua.</p>
 ',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 94,
                'image' => 'https://phohuynhtram.com/wp-content/uploads/2018/06/anh_2_151.jpg',
                'price' => 40000,
                'name' => 'phở chay đậu hũ',
                'description' => '<p>Phở chay l&agrave; một trong những m&oacute;n ngon được rất nhiều gia đ&igrave;nh y&ecirc;u th&iacute;ch v&agrave; thường xuy&ecirc;n chế biến cho m&acirc;m cơm của gia đ&igrave;nh. M&oacute;n ăn vừa thơm ngon lại chứa đầy đủ chất dinh dưỡng. C&aacute;ch thức thực hiện th&igrave; lại v&ocirc; c&ugrave;ng đơn giản. C&aacute;c bạn h&atilde;y c&ugrave;ng theo d&otilde;i b&agrave;i viết dưới đ&acirc;y để hiểu r&otilde; hơn về c&aacute;ch thực hiện m&oacute;n phở chay nh&eacute;.</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 95,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWzIKR6-UdIfwpxh_vjx2o3mj9tWwm-JxXHA&usqp=CAU,https://i.ytimg.com/vi/EkfZd-aF-t8/maxresdefault.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI6_Quj8mVcz1r9lRNL7PgIWpprEA5XWxT8V0QfPKtVlB3TfZCg3FEfDcygdqkJTmvFT4&usqp=CAU,https://cosopho.com/wp-content/uploads/2020/12/Cach-nau-pho-chay-0.jpg',
                'price' => 40000,
                'name' => 'phở chay gia truyền GM',
                'description' => '<p>l&agrave;m phở chay l&agrave; truyền thống của bao gia đ&igrave;nh đặc trưng của phở lu&ocirc;n l&agrave; giữu được c&aacute;i thuần t&uacute;y của phở</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 96,
                'image' => 'https://danviet.mediacdn.vn/upload/1-2019/images/2019-02-14/Cach-lam-mien-xao-chay-cho-ngay-ram-cach-lam-mien-xao-chay-1-1550116798-width960height912.jpg,https://lh3.googleusercontent.com/proxy/ws3Xn1QtP6TrShcSDucCquCyhySnq9OrpHyf3w4-uYoGogqYr7bZc0ikJKhaukckAI5D2tQ5tO8Svpfrgv_JzATe4r51xJwAlrCc0NiJamjxov2Bcycpt-hHaig9KQwe_ws,https://vanduchay.com/wp-content/uploads/2021/06/96-MienXaoThapCam.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSflUUhWAE1GPr5JU8oXE0XbHZBvYBDxGOQ0NNs52UOCI5XzgazGGFfcNZbAypX3RCTNrk&usqp=CAU',
                'price' => 25000,
                'name' => 'miến xào chay',
                'description' => '<p>trong thời gian ăn chay rất dễ c&oacute; cảm gi&aacute;c nh&agrave;m ch&aacute;n giữa c&aacute;c m&oacute;n .vậy n&ecirc;n nh&agrave; h&agrave;ng ch&uacute;ng t&ocirc;i luốn xen kẽ c&aacute;c thực đơn gi&uacute;p kh&aacute;ch h&agrave;ng lu&ocirc;n giữ được mạch ăn chắc chắn sẽ c&oacute; m&oacute;n miến x&agrave;o</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 97,
                'image' => 'https://i.ytimg.com/vi/lGYsgVZP94U/maxresdefault.jpg,https://lh3.googleusercontent.com/proxy/4PRH8JBHfOESXsFdU68uuj_1nPNi8yOGsMXA7xTucdB0HbOoBN2PE3xpWzsG_gpTBwNDpNe0jjnFT-PmWCYPunS6tiNKs4Wg8Tu3OgQLajc2B33RJsFYTLs,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZRCt6cxzLbjF-FX0rfNK_3sRQbkxbIZygUr0rRSBKzqMKl_HaYgKxWWCXpJDloY1gpiQ&usqp=CAU,https://danviet.mediacdn.vn/upload/1-2019/images/2019-02-14/Cach-lam-mien-xao-chay-cho-ngay-ram-cach-lam-mien-xao-chay-1-1550116798-width960height912.jpg',
                'price' => 40000,
                'name' => 'miến trộn chay',
                'description' => '<p>Miến trộn hay gỏi Miến l&agrave; Miến trộn với c&aacute;c loại rau củ quả v&agrave; Nấm thập cẩm. M&oacute;n ăn n&agrave;y hơi giống Miến trộn H&agrave;n Quốc v&agrave; cũng hơi giống Miến trộn Th&aacute;i Lan. M&oacute;n Miến trộn Chay rất ngon n&agrave;y d&agrave;nh cho người ăn chay lẫn ăn mặn đều được. Đ&acirc;y l&agrave; m&oacute;n ăn để d&agrave;nh cho những ng&agrave;y sau Tết khi ch&uacute;ng ta đ&atilde; ăn kh&aacute; nhiều thịt v&agrave; Mỡ</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 98,
                'image' => 'https://img.chebienmonngon.net/2017/04/mien-xao-chay-4.jpg,https://cdn.tgdd.vn/2020/10/CookRecipe/Avatar/mien-xao-cha-chay-thumbnail-1.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGY8Ql-yCT5S5NpAlZDHJJ7Rs4DqfQd-LXmIA0JNg9vlGISgPZ1ipSLKXoBvWpKhnxiTg&usqp=CAU,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSk_vfwjVa0HzMwyxvvIvR_NvalgPQ8hE69FYJByfyM28-gViww73DELJEXq_R1olziB3g&usqp=CAU',
                'price' => 35000,
                'name' => 'miến xào chay',
                'description' => '<p>Miến x&agrave;o chay l&agrave; m&oacute;n ăn ngon v&agrave; thanh đạm, n&oacute; rất th&iacute;ch hợp cho những ng&agrave;y m&ugrave;ng 1, ng&agrave;y rằm hay những ng&agrave;y gia đ&igrave;nh bạn muốn cải thiện thực đơn. Bắt mắt với nhiều sắc m&agrave;u rau củ, thơm thơm m&ugrave;i nước tương, lại nhẹ bụng v&agrave; tốt cho sức khỏe, đ&acirc;y l&agrave; một lựa chọn l&yacute; tưởng cho gia đ&igrave;nh bạn.</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 99,
                'image' => 'https://monngonmoingay.com/wp-content/uploads/2015/08/8_MienXaoChay_CQC4935.png,http://duhoc.thanhgiang.com.vn/sites/default/files/mien-tron-hq.jpg,https://monngonmoingay.com/wp-content/uploads/2020/11/bun-xao-cai-chua-500.jpg,https://cdn.tgdd.vn/2021/02/CookRecipe/GalleryStep/thanh-pham-271.jpg',
                'price' => 30.00,
                'name' => 'miến xào chay',
                'description' => '<p>Bạn đang t&igrave;m một c&ocirc;ng thức m&oacute;n chay dễ nấu? H&atilde;y thử chi&ecirc;u đ&atilde;i cả nh&agrave; m&oacute;n Miến x&agrave;o chay nh&eacute;! Bắt mắt với nhiều sắc m&agrave;u rau củ, thơm thơm m&ugrave;i nước tương, lại nhẹ bụng v&agrave; tốt cho sức khỏe, đ&acirc;y l&agrave; một lựa chọn l&yacute; tưởng cho những ng&agrave;y ăn chay.</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 100,
                'image' => 'https://img-global.cpcdn.com/recipes/6750cba2190dc788/1200x630cq70/photo.jpg,https://emvaobep.com/wp-content/uploads/2018/03/cach-nau-canh-mien-ngon.jpg,https://cookbeo.com/media/2020/12/canh-mang-suon/canh-mang-suon.jpg,https://image-us.eva.vn/upload/1-2020/images/2020-01-21/muon-nau-mien-ngon-chuan-khong-bi-nat-nhun-thi-khong-the-bo-qua-nhung-bi-quyet-nay-mienlongga_final-1024x683-1579594203-456-width640height427.jpg',
                'price' => 50000,
                'name' => 'canh miến',
                'description' => '<p>Ng&agrave;y nay, c&aacute;c m&oacute;n chay đ&atilde; kh&ocirc;ng c&ograve;n xa lạ đối với mọi người nữa rồi, bởi kh&ocirc;ng những l&agrave; sự đổi vị thanh đạm, mới lạ m&agrave; c&ograve;n tốt cho sức khỏe th&igrave; ai m&agrave; kh&ocirc;ng th&iacute;ch m&ecirc; cơ chứ!nh&acirc;n đ&acirc;y nh&agrave; h&agrave;ng xin giới thiệu về m&oacute;n canh miến chay</p>
',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 101,
                'image' => 'https://cdn.tgdd.vn/2020/09/CookRecipe/Avatar/chao-nam-chay-thumbnail.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDr_edx1lQsYAOYVqeOpctjU7_dconfNbBpOOCJkDTVfWPoqAXeFyKUzENmvSyZTZRf_g&usqp=CAU,https://thuocchuabenh.vn/wp-content/uploads/chao-nam-tram.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzXbDVDJHt0Ba6lTgh3O-zfazIUkvPrpWg5TPpDFUXJUyAs1je1jjtXzo3QQ0Vdt1YOpk&usqp=CAU',
                'price' => 30000,
                'name' => 'cháo chay nấm bào ngư',
                'description' => '<p>M&oacute;n ch&aacute;o nấm b&agrave;o ngư chay c&oacute; vị ngọt thanh vừa thơm ngon, lạ miệng lại gi&agrave;u dinh dưỡng gi&uacute;p cung cấp chất đạm v&agrave; nhiều kho&aacute;ng chất kh&aacute;c cho cơ thể.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 102,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookProduct/Webp.net-resizeimage(7)-1200x676-1.jpg,https://cachlambep.net/wp-content/uploads/2021/04/1-55.jpg,https://emvaobep.com/wp-content/uploads/2018/05/cach-nau-chao-rau-cu-cho-be-1.jpg,https://i0.wp.com/suminhchau.vn/wp-content/uploads/2018/03/chao-rau-cu-4.jpg?resize=600%2C400&ssl=1',
                'price' => 40000,
                'name' => 'cháo rau củ chay',
                'description' => '<p>M&oacute;n ch&aacute;o nhẹ bụng nhưng lại chứa nhiều chất xơ cực tốt cho hệ ti&ecirc;u h&oacute;a v&agrave; sức khỏe mọi người đấy. Nghe đ&atilde; hấp dẫn rồi đ&uacute;ng kh&ocirc;ng n&agrave;o</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 103,
                'image' => 'https://img-global.cpcdn.com/recipes/461ca1b4edec5be0/1200x630cq70/photo.jpg,https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/chao-ga-nam-huong-thumbnail.jpg,https://chaosach.com/wp-content/uploads/2016/09/Huong-dan-nau-chao-tom-thit-bam.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuMhFbHSi-nIDwmyTBqmX8zmnvjjfQF8nR2_ZIHaizNFTs0Qt6M7mr6woGEKc8E54BGbQ&usqp=CAU',
                'price' => 40000,
                'name' => 'cháo nấm đông cô',
                'description' => '<p>Ch&aacute;o nấm Đ&ocirc;ng c&oacute; th&agrave;nh phần ch&iacute;nh từ gạo chất lượng được chọn lựa kỹ lưỡng với quy tr&igrave;nh sản xuất hiện đại gi&uacute;p ch&aacute;o nở đều, ch&iacute;n mềm sau khi nấu. Nấm Đ&ocirc;ng c&ocirc; v&agrave; gia vị như muối ăn, đường, dầu cọ, nước tương, h&agrave;nh, tỏi, rau sấy,&hellip; tạo n&ecirc;n hương vị ch&aacute;o đậm đ&agrave;, k&iacute;ch th&iacute;ch vị gi&aacute;c, ph&ugrave; hợp khẩu vị của đa số người ti&ecirc;u d&ugrave;ng. Sản phẩm sử dụng nguy&ecirc;n liệu tự nhi&ecirc;n, đảm bảo sức khỏe người ti&ecirc;u d&ugrave;ng.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 104,
                'image' => 'http://cdn.tgdd.vn/Files/2017/12/29/1054201/cach-nau-chao-thap-cam-chay-thom-ngon-tot-cho-suc-khoe1_760x367-300x200.jpg,https://daubepgiadinh.vn/wp-content/uploads/2019/01/chao-ngo-thit-lon-bam.jpg,https://amthucdochay.com/wp-content/uploads/2021/08/imager_143548.jpg,https://cdn.tgdd.vn/2021/05/CookRecipe/GalleryStep/cuon-ca-tim-voi-thit-vien-4.jpg',
                'price' => 40000,
                'name' => 'cháo bắp chay',
                'description' => ' <p>Chỉ với những nguy&ecirc;n liệu đơn giản, dễ mua như gạo, bắp, nấm, đậu hủ, khoai t&acirc;y, hạt sen&hellip; l&agrave; ch&uacute;ng ta đ&atilde; c&oacute; thể bắt tay v&agrave;o bếp nấu m&oacute;n ngon thanh đạm n&agrave;y rồi. Tuy l&agrave; đồ chay nhưng độ thơm ngon v&agrave; gi&aacute; trị dinh dưỡng của m&oacute;n ch&aacute;o chay thập cẩm vẫn kh&ocirc;ng thua k&eacute;m g&igrave; c&aacute;c m&oacute;n ch&aacute;o mặn.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 105,
                'image' => 'https://chefofking.net/wp-content/uploads/2018/12/chao-nam-cot-dua-chay.jpg,https://tieudung.vn/upload_images/images/2021/09/08/chao1.jpg,https://cdn1.ngonbonmua.com/wp-content/uploads/2015/10/chao-nam-chay.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbJf82WnpHEnFvx_frr4YQdGutiAEYCT0PMiUwqL0xm3xfDuNVPF3I_okR-s4sJdrJP10&usqp=CAU',
                'price' => 30000,
                'name' => 'cháo nấm cốt dừa',
                'description' => '<p>c&aacute;c loại nấm v&agrave; rau củ nấu ch&aacute;o chay với nước cốt dừa l&agrave; một m&oacute;n phổ biến ở miền T&acirc;y. M&igrave;nh c&oacute; dịp về xứ dừa Bến Tre ở nh&agrave; của một gia đ&igrave;nh theo đạo Cao Đ&agrave;i ăn chay trường, được c&aacute;c c&ocirc; nấu cho ăn m&oacute;n ch&aacute;o n&agrave;y, l&acirc;u l&acirc;u nhớ m&ugrave;i vị đ&oacute; n&ecirc;n thực h&agrave;nh lại. Đổi vị với m&oacute;n chay ngon miệng với m&oacute;n ch&aacute;o ngồ ngộ n&agrave;y bạn nh&eacute;.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 106,
                'image' => 'http://monchay.com/wp-content/uploads/2014/10/c%C3%A1ch-n%E1%BA%A5u-ch%C3%A1o-th%E1%BA%ADp-c%E1%BA%A9m-chay.jpg,https://nauzi.com/caches/large/cover/7586/thom-bui-hap-dan-voi-cach-nau-chao-thap-cam-chay-4c43fd5e0f95d879bd7d4eb0d964c3d7.png,https://img-global.cpcdn.com/recipes/273fbc7ec6fb3065/1200x630cq70/photo.jpg,https://hocnauan.edu.vn/wp-content/uploads/2018/12/chao-tom.jpg',
                'price' => 50000,
                'name' => 'cháo thập cẩm chay',
                'description' => '<p>B&aacute;t ch&aacute;o chay n&oacute;ng hổi với vị ngọt thơm của hạt sen b&ugrave;i b&ugrave;i, th&ecirc;m m&ugrave;i thơm của nấm hương v&agrave; đậu phụ r&aacute;n, điểm th&ecirc;m hạt gạo mềm v&agrave; b&eacute;o b&eacute;o của đỗ xanh sẽ l&agrave; m&oacute;n chay ngon thay thế tốt cho những bữa cơm chay. Thi thoảng c&aacute;c bạn cũng n&ecirc;n thay đổi thực đơn ăn chay của m&igrave;nh bằng những m&oacute;n như ch&aacute;o chay thập cẩm dưới đ&acirc;y chẳng hạn. Với nguy&ecirc;n liệu v&agrave; c&aacute;ch chế biến m&oacute;n ch&aacute;o chay n&agrave;y vẫn đảm bảo cả về độ thơm ngon cũng như th&agrave;nh phần dinh dưỡng, đặc biệt với những người ăn thuần chay.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 107,
                'image' => 'https://media.healthplus.vn/thumb_x650x382/Images/Uploaded/Share/2015/12/26/am-long-chao-nam-chay-mua-dong11451284353.jpg,https://tuthuoc24h.net/upload/images/Cach-nau-chao-chay-3.jpg,https://chaosach.com/wp-content/uploads/2021/07/chao-nam-bao-ngu-800x600.jpg',
                'price' => 45000,
                'name' => 'cháo nấm đùi gà',
                'description' => '<p>thay v&agrave;o c&aacute;c loại thịt th&igrave; ch&uacute;ng t&ocirc;i đưa v&agrave;o đ&oacute; l&agrave; c&aacute;c loại nấm v&agrave;o để thay thế hương vị cũng như c&aacute;c chất cần c&oacute; trong m&oacute;n ch&aacute;o</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' =>108,
                'image' => 'https://khds.1cdn.vn/thumbs/562x331/2021/04/28/chao-hoa-cuc-muop-dang-tri-kiet-ly.jpg,https://stc.bindo.vn//files/ch%C3%A1o%20hoa.jpg,https://image-us.24h.com.vn/upload/4-2019/images/2019-12-14/1576292431-811ddf88594b58756fe137d636fa742e.jpg,https://phongkhamdakhoathegioi.vn/upload/hinhanh/HINHBAIVIET/cach-chua-di-tieu-ra-mau-hieu-qua-tai-nha.jpg',
                'price' => 30000,
                'name' => 'cháo hoa cúc',
                'description' => '<p>Ch&aacute;o hoa c&uacute;c, mướp đắng gi&uacute;p thanh nhiệt giải độc, nhuận phế sinh t&acirc;n, d&ugrave;ng l&agrave;m đồ ăn trong những ng&agrave;y n&oacute;ng nực, bị đi kiết, phiến kh&aacute;t</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 109,
                'image' => 'https://afamilycdn.com/Images/Uploaded/Share/2009/09/26/chaobi.jpg,https://afamilycdn.com/Qalypm8xccccccccccccW2vZ1VroR/Image/2013/03/02/A-b49d2.jpg,https://chaosach.com/wp-content/uploads/2016/10/chao-cua-1.jpg,https://tintuc.vnshop.vn/wp-content/uploads/2020/01/ch%C3%A1o-b%E1%BB%93-c%C3%A2u-cho-b%C3%A9-%C4%83n-d%E1%BA%B7m_5.jpg',
                'price' => 40000,
                'name' => 'cháo đậu xanh bí đỏ',
                'description' => '<p>Ch&aacute;o b&iacute; đỏ nấu với đậu xanh, gạo nếp rất bổ dưỡng, gi&agrave;u vitamin l&agrave;m đẹp da v&agrave; t&oacute;c. M&oacute;n n&agrave;y th&iacute;ch hợp cho bữa ăn s&aacute;ng hoặc ăn nhẹ buổi chiều.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 110,
                'image' => 'https://emvaobep.com/wp-content/uploads/2018/04/cach-nau-hat-sen-tuoi.jpg,https://vuonhat.com/wp-content/uploads/2021/06/chao-hat-oc-cho.jpg,https://cdn.cet.edu.vn/wp-content/uploads/2019/04/chao-y-di-hat-sen.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGTjrxgoUVtQZBTRO17rb3Pguas6IWkZOq0NqnRll6V6MffvN0bhvxZfO0SUwgA-K-1KQ&usqp=CAU',
                'price' => 60000,
                'name' => 'cháo hạt sen',
                'description' => '<p>h&aacute;o hạt sen nấm chay c&oacute; hương vị thanh nhẹ m&agrave; rất kh&oacute; qu&ecirc;n, rất ph&ugrave; hợp để chế biến v&agrave;o những ng&agrave;y &yacute; nghĩa hay những buổi s&aacute;ng đầu th&aacute;ng, ng&agrave;y rằm</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 111,
                'image' => 'https://www.sendaiviet.com/wp-content/uploads/2016/06/chao-hat-sen.png,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqW-2GcyaeQsCi18uk0dUyEaea-SUsM79x_g&usqp=CAU,http://baogialai.com.vn/dataimages/201707/original/images2549048_cach_lam_chao_hat_sen_bap_bo.jpg,https://cachnaumonngon.com/uploads/images/news/1481945100_news_1475.jpg',
                'price' => 100000,
                'name' => 'cháo nấm hạt sen',
                'description' => '<p>Hạt sen l&agrave; một trong những nguy&ecirc;n liệu được sử dụng phổ biến trong nhiều m&oacute;n ăn v&agrave; rất bổ dưỡng cho sức khỏe.Nhưng phổ biến nhất chắc l&agrave; ch&aacute;o hạt sen</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 112,
                'image' => 'https://daubepgiadinh.vn/wp-content/uploads/2019/01/chao-ngo-thit-lon-bam.jpg,https://nauzi.com/caches/large/cover/98/huong-dan-nau-chao-ngo-cho-be-an-dam-don-gian-thom-ngon-3d3e8e5e3fb3c2e8582d7a5fe63b86bf.png,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjgayDwjT0cV81Yk8yAIIXPAeC_Mbut2zj0w&usqp=CAU,https://kenh14cdn.com/2018/9/14/chu-chen-3-15369233005101445386953.jpg',
                'price' => 35000,
                'name' => 'cháo ngô giã nhuyễn',
                'description' => '<p>Ng&ocirc; kh&ocirc;ng phải l&agrave; một loại thực phẩm hiếm thấy trong bữa cơm gia đ&igrave;nh h&agrave;ng ng&agrave;y. Nhiều mẹ đ&atilde; biết đến m&oacute;n ch&aacute;o ng&ocirc; ngọt cho b&eacute; ăn dặm để gi&uacute;p b&eacute; bổ sung dinh dưỡng. Trong ng&ocirc; c&oacute; rất nhiều dưỡng chất tốt cho sức khỏe. Ng&ocirc; c&oacute; lợi &iacute;ch ngang với nhiều loại ngũ cốc kh&aacute;c, gi&agrave;u chất xơ, vitamin, c&aacute;c kho&aacute;ng chất v&agrave; chất chống oxy h&oacute;a</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 113,
                'image' => 'https://2.bp.blogspot.com/-mOW5kXt3lSo/WMJj7cFy70I/AAAAAAAABB8/Uo2TuCXEMxwlNyTDBcD59eNfgyD4KAUHACLcB/s320/Yen%2BMach.jpg,https://dulinuts.com/uploads/cach-nau-chao-yen-mach-voi-hat-oc-cho-va-hanh-nhan-md.jpg,https://cdn.daynauan.info.vn/wp-content/uploads/2018/12/chao-yen-mach-nau-voi-trung-ga.jpg,https://media.phunutoday.vn/files/news/2018/04/26/cach-nau-chao-yen-mach-ngon-092443.jpg',
                'price' => 40000,
                'name' => 'cháo yến mạch chay',
                'description' => '<p>Đ&acirc;y l&agrave; loại yến mạch được tuốt trực tiếp từ th&acirc;n l&aacute; v&agrave; đ&atilde; b&oacute;c sạch vỏ n&ecirc;n bạn c&oacute; thể chế biến v&agrave; d&ugrave;ng được ngay. Để yến mạch ch&iacute;n đều v&agrave; kh&ocirc;ng bị dai th&igrave; bạn n&ecirc;n nấu với thật nhiều nước (tỷ lệ 3 phần nước 1 phần yến mạch) v&agrave; thường mất khoảng 50 ph&uacute;t để yến mạch ch&iacute;n ho&agrave;n to&agrave;n.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 164,
                'image' => 'https://hitavegan.com/wp-content/uploads/2019/10/hita-chay-chao-yen-mach-1.jpg,https://img-global.cpcdn.com/recipes/ad955077ad92fea2/680x482cq70/chao-y%E1%BA%BFn-m%E1%BA%A1ch-bi-d%E1%BB%8F-mix-chia-recipe-main-photo.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_ZNqGqLh9Dk_GcweDd4m8_E0qvq5Woq3_9g&usqp=CAU,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbYNMRqmW8ll77C1FEEkXiQ9766V1t_w0GeA&usqp=CAU',
                'price' => 40000,
                'name' => 'cháo yến mạch bí đỏ',
                'description' => '<p>d&ugrave; chỉ th&ecirc;m v&agrave;o b&iacute; đỏ nhưng về h&agrave;m lượng dinh dưỡng sẽ tăng l&ecirc;n rất nhiều</p>',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 114,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv5LMhRcyDe5fU49Q7K9vWBqdSavbksLpK4A&usqp=CAU,https://hd1.hotdeal.vn/hinhanh/HCM/43819_0_body_05.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMEMiIS9jp4aW4np5vK4byWihNE3ZmSSMY7w&usqp=CAU,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_hhamjjQv1vdXX31RL6-pK_EssSAfb8tLXA&usqp=CAU',
                'price' => 70000,
                'name' => 'cháo chay Ngọc Bích',
                'description' => 'Giống như cái tên của nó vậy rất đẹp mắt và thơm ngon tạo ra sự quý phái khi gọi tên',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 115,
                'image' => 'http://img.over-blog-kiwi.com/2/00/37/06/20160910/ob_85fca6_chao-nam-dau-phu.JPG,https://songmoi.vn/public/upload_editor/posts/images/dau-phu-ca-muoi-8.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCcw6PEVO65-IC7ElctJtzxmwwh2uY7FhiGovI7i59rNQjO5kfSmwL5Bm2ngq0-2F2Qvg&usqp=CAU,https://image-us.eva.vn/upload/2-2018/images/2018-05-28/chao-dau-phu-ca-muoi-gian-di-thoi-ma-mat-ruoi-ca-ngay-he-img_2631-1527524321-908-width1000height563.jpg',
                'price' => 50000,
                'name' => 'cháo chao nấu đậu phụ',
                'description' => '<p>ch&aacute;o nấu ch&acirc;u đậu phụ rất phổ biến với người d&acirc;n miền bắc .nấu với chao sẽ gi&uacute;p người ăn cam thấy bớt nh&agrave;m ch&aacute;n khi thưởng thức</p>',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 116,
                'image' => 'https://ducankitchen.com/wp-content/uploads/2017/12/supbido-featured.jpg,https://cdn.tgdd.vn/2021/04/CookRecipe/GalleryStep/thanh-pham-822.jpg,https://cookbeo.com/media/2021/07/chao-bi-do-thit-bam/chao-bi-do-thit-bam-5x7.jpg,https://cdn.bepcuoi.com/media/720-chao-bi-do-bepcuoi-762.jpg',
                'price' => 37000,
                'name' => 'cháo bí đỏ',
                'description' => '<p>Cứ đến m&ugrave;a đ&ocirc;ng l&agrave; bụng dạ m&igrave;nh lại th&egrave;m b&iacute; đỏ. Hết b&aacute;nh m&igrave; b&iacute; đỏ thơm nức một g&oacute;c ph&ograve;ng đến m&oacute;n m&igrave; &yacute; sốt b&iacute; đỏ ngon l&agrave;nh. M&agrave; chẳng hiểu sao, ăn b&iacute; m&atilde;i kh&ocirc;ng thấy ng&aacute;n. S&aacute;ng ra lạnh bụng, m&igrave;nh nghĩ ngay đến m&oacute;n s&uacute;p n&oacute;ng hổi, vừa thổi vừa ăn.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 117,
                'image' => 'https://www.choxom.vn/fileserver/images/smartweb_default/resize-1200x0/upload/media/M5b1f9558ec971/chaonamtram.jpg,https://i.ytimg.com/vi/7EoMDvGe1c0/maxresdefault.jpg,https://2.bp.blogspot.com/-J0a3Ppq3i_I/WrI75F7TM1I/AAAAAAAAecE/HDelM8fzyBcec33odwXNDBCLGUmNiU1_gCLcBGAs/s1600/Picture1.jpg,https://lh3.googleusercontent.com/proxy/x53D-aeeofusglgcaFCgn4YNUwtqyysx9eewlJPmqA7qQsZgyXdZtDr5PCZ8ZIduHR9GmheCYF9QhkprzD9X3cHK0_k1QGb2vXZR6uLSbTpZllO0ofnoq8ZFnH1XMT5Umiic2VOVXSRFOhtpcjdZ4ySR',
                'price' => 40000,
                'name' => 'cháo nấm tràm',
                'description' => '<p>những ai đ&atilde; thưởng thức m&oacute;n ch&aacute;o n&agrave;y chắc sẽ kh&ocirc;ng b&agrave;o giờ qu&ecirc;n m&ugrave;i vị của n&oacute;</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 118,
                'image' => 'https://i.vietgiaitri.com/2020/5/24/nau-chao-nam-rom-thanh-dam-thom-ngon-ai-an-cung-me-047-4955637.jpg,https://i-ngoisao.vnecdn.net/2018/06/22/topchao2-1529630350_680x0.jpg,https://chaosach.com/wp-content/uploads/2021/07/mon-chao-ga-862x478.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTofRMEiQgnKwIeKolR-5bVGBmOjnvVFpF9yQ&usqp=CAU',
                'price' => 50000,
                'name' => 'cháo nấm',
                'description' => '<p>bạn sẽ kh&ocirc;ng cảm thấy nh&agrave;n ch&aacute;n khi nhưng ng&agrave;y lễ ăn chay k&eacute;o d&agrave;i</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 119,
                'image' => 'https://congthucmonngon.com/wp-content/uploads/2021/09/chao-nam-moi-ngot-thom-thanh-dam.jpg,https://img-global.cpcdn.com/recipes/35d9f0519148f9e3/680x482cq70/chao-h%E1%BA%A1t-sen-n%E1%BA%A5m-m%E1%BB%91i-den-recipe-main-photo.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxS7eKPPM0Ng6GJq8sgli9sdDgHdduDYlNAg&usqp=CAU,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx7f6P0OHftrZ91bccswK-7fBDJzOPOWOGuw&usqp=CAU',
                'price' => 70000,
                'name' => 'cháo nấm mối',
                'description' => '<p>Kh&ocirc;ng cần thịt th&agrave;, chỉ cần t&uacute;i nấm mối l&agrave; bạn cũng đủ gi&uacute;p nồi ch&aacute;o thơm ngon lại đủ chất rồi.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],[
                'id' => 120,
                'image' => 'http://dauanchotre.com.vn/wp-content/uploads/2016/02/chao_nam_cho_be1.jpg,https://bizweb.dktcdn.net/thumb/large/100/042/260/files/chao-bao-ngu-1292da15-59a6-47c7-9548-0bbc9a8f6241.jpg?v=1606556782517,https://mynuong.com/giachanh/?qa=blob&qa_blobid=3424113680583693106,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkljUMbSVibIj1-O8ILcRECXQIorx79o2D7Q&usqp=CAU',
                'price' => 70000,
                'name' => 'cháo nấm đông cô',
                'description' => '<p>v&igrave; sao bạn n&ecirc;n chọn ch&aacute;o nấm đ&ocirc;ng c&ocirc; ư ?? Nấm đ&ocirc;ng c&ocirc; c&oacute; t&aacute;c dụng hỗ trợ hệ ti&ecirc;u h&oacute;a, tăng cường hệ miễn dịch n&ecirc;n đ&acirc;y l&agrave; một thực phẩm l&yacute; tưởng trong m&ugrave;a lạnh</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],[
                'id' => 121,
                'image' => 'https://monngonmoingay.com/wp-content/uploads/2021/01/goi-cuon-chay-cham-xot-dau-phong-500.jpg,https://tuthuoc24h.net/upload/images/cach-lam-goi-cuon.jpg,https://i.ytimg.com/vi/d_bznxbRfMk/maxresdefault.jpg,https://nuocmamquochai.vn/uploads/details/2019/08/images/news-46.jpg',
                'price' => 30000,
                'name' => 'gỏi cuốn',
                'description' => '<p>Với c&aacute;c nguy&ecirc;n liệu thanh đạm, v&agrave; đặc biệt l&agrave; nước chấm &ldquo;xốt đậu phộng&rdquo; b&eacute;o b&eacute;o, b&ugrave;i b&ugrave;i l&agrave;m m&oacute;n Gỏi Cuốn Chay th&ecirc;m ngon, ăn ho&agrave;i kh&ocirc;ng ch&aacute;n đ&oacute; nha!</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 122,
                'image' => 'https://media.cooky.vn/images/blog-2016/cach-lam-goi-cuon-chay-cho-ngay-ram-7.JPG,https://monngonmoingay.com/wp-content/uploads/2015/08/banh-cuon-chay_CQC8751.png,https://monchay.net/app_images/news/2019/9/26/cach-lam-banh-cuon-nong-chay-1-800-93433.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWctmar6-MgNN5kaCIyIC_lA4Tx4a-Oz21Lg&usqp=CAU',
                'price' => 25000,
                'name' => 'bánh cuốn',
                'description' => '<p>Gỏi cuốn chay bạn đ&atilde; được thưởng thức chưa? Ng&agrave;y rằm sắp đến thử l&agrave;m m&oacute;n gỏi cuốn chay n&agrave;y cho cả nh&agrave; thưởng thức đổi vị xem sao nh&eacute;! Nước chấm l&agrave; linh hồn của m&oacute;n gỏi cuốn, trong c&ocirc;ng thức n&agrave;y, Cooky sẽ hướng dẫn bạn c&aacute;ch l&agrave;m gỏi cuốn v&agrave; cả b&iacute; quyết l&agrave;m nước chấm ngon đến giọt cuối c&ugrave;ng.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 123,
                'image' => 'https://cdn.24h.com.vn/upload/3-2018/images/2018-08-21/Bi-quyet-lam-goi-cuon-chay-thanh-mat-cho-bua-toi-la-mieng-1-1534842005-227-width500height332.jpg,https://gotrangtri.vn/wp-content/uploads/2018/03/mon-ngon-moi-ngay5-1.jpg,https://cf.shopee.vn/file/0db17f9cc8d20a9110dcf291394ef081,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3CTUxdnTSCsPKz4ewco6hFs8RFBRCFUq4tA&usqp=CAU',
                'price' => 50000,
                'name' => 'bánh cuốn chay ngày vu lan',
                'description' => '<p>M&oacute;n gỏi cuốn chay l&agrave; sự kết hợp h&agrave;i h&ograve;a của nhiều loại rau củ mang đến vị ngon lạ miệng. Chưa kể, m&oacute;n ăn n&agrave;y cũng dễ thực hiện n&ecirc;n n&oacute; trở th&agrave;nh sự lựa chọn của nhiều b&agrave; nội trợ trong m&ugrave;a Vu Lan</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 124,
                'image' => 'https://cdn.beptruong.edu.vn/wp-content/uploads/2018/06/goi-cuon-chay.jpg,https://lh3.googleusercontent.com/proxy/kxocOVQuYlCBrrNPY6gWjqOBKjqPcoJit1qhI0nAQbOdLZmHG31A2lPLF_mS9m41XCHLCdVtVLyhthfiR5iACWSl63rAkwj4Pd5yXRMyQz2jJuBQ_3A,https://danviet.mediacdn.vn/upload/2-2016/images/2016-04-06/1459950984-banh-uot-da-lat-1.jpg,https://vnn-imgs-f.vgcloud.vn/2021/08/22/09/goi-cuon-chay-de-lam-cho-le-vu-lan.jpg',
                'price' => 40000,
                'name' => 'gỏi cuốn chay',
                'description' => '<p>Gỏi cuốn chay l&agrave; m&oacute;n ăn vặt rất dễ l&agrave;m m&agrave; bạn ho&agrave;n to&agrave;n c&oacute; thể tự thực hiện tại nh&agrave; v&agrave;o những ng&agrave;y rằm. C&ugrave;ng với hướng dẫn c&aacute;ch l&agrave;m gỏi cuốn chay ngon, Beptruong.edu.vn sẽ gi&uacute;p bạn c&aacute;ch l&agrave;m tương chấm gỏi cuốn cũng hấp dẫn kh&ocirc;ng k&eacute;m. Những ng&agrave;y rằm ăn chay, d&ugrave;ng th&ecirc;m v&agrave;i cuốn gỏi l&oacute;t bụng bữa xế hoặc ăn vặt c&ugrave;ng mọi người cũng rất ngon đấy, đ&uacute;ng kh&ocirc;ng n&agrave;o?</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 125,
                'image' => 'https://bep360.net/wp-content/uploads/2016/07/cach-lam-goi-cuon-chay.jpg,https://dacsanbanhcuon.com/wp-content/uploads/2018/04/banh-cuon-chay-600x400.jpg,https://dulichnga.info/view/at_banh-cuon-leningrad_441cf98f3dc0cf3185c764e2d765935f.jpg,https://bep360.net/wp-content/uploads/2020/02/cach-lam-banh-cuon.jpg',
                'price' => 40000,
                'name' => 'gỏi cuốn Thanh Nga',
                'description' => '<p>L&agrave; một m&oacute;n ăn chay ngon với c&aacute;ch l&agrave;m đơn giản, gỏi cuốn chay chắc chắn sẽ l&agrave;m gia đ&igrave;nh bạn bất ngờ về độ ngon của n&oacute;</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 126,
                'image' => 'https://cdn.beptruong.edu.vn/wp-content/uploads/2013/09/nom-thap-cam-chay.jpg,https://tapchinhabep.net/wp-content/uploads/2019/09/c%C3%A1ch-l%C3%A0m-n%E1%BB%99m-rau-c%E1%BB%A7-qu%E1%BA%A3.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9Z8u1HikjLxp5YGx_R6vlIqIrn0Nz7TbBWA&usqp=CAU,https://danviet.mediacdn.vn/upload/1-2019/images/2019-03-15/Cach-lam-mon-nom-ngon-nom-ga-thap-cam-cach-lam-nom-ga-thap-cam-6-1552632517-width600height576.jpg',
                'price' => 50000,
                'name' => 'nộm rau củ',
                'description' => 'Nộm luôn là một trong những món khai vị phổ biến được rất nhiều người yêu thích vì vừa dễ ăn lại kích thích vị giác cực kỳ tốt. Với cách làm nộm thập cẩm chay ngon đơn giản sau đây, chị em sẽ có thêm bí quyết mới trổ tài khéo tay nội trợ khiến cả nhà ai cũng phải trầm trồ thán phục đấy!',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 127,
                'image' => 'https://wna.cdnxbvn.com/wp-content/uploads/2020/12/10-mon-goi-chay-tuyet-dinh.jpg,https://i.ytimg.com/vi/sOzT0ygAJ0M/maxresdefault.jpg,https://cdn.huongnghiepaau.com/wp-content/uploads/2017/03/a8d0dd35ac3aeaea0c447d40f598ed01.jpg,https://static.kenhphatphap.com/photos/15/2019/10/a/C__ch_l__m_g___i_ng___sen_chay_gi__n_ngon_h___t_s___y.jpg',
                'price' => 70000,
                'name' => 'gỏi ngó sen',
                'description' => '<p>Gỏi ng&oacute; sen trộn với nước mắm chay vị chua chua, ngọt ngọt, gi&ograve;n rất thơm ngon</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 128,
                'image' => 'http://imgs.vietnamnet.vn/Images/vnn/2014/08/06/16/20140806162854-8.jpg,http://bizweb.dktcdn.net/thumb/grande/100/037/492/products/goi-du-du-chay.png?v=1536814006157,https://monngonsaigon.net/wp-content/uploads/2018/12/G%E1%BB%8Fi-chay-1200x675.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu2nsdlGZcUCHShkUkzkVcxX1DT82wrwtRSA&usqp=CAU',
                'price' => 45000,
                'name' => 'nộm chay thập cẩm',
                'description' => '<p>M&oacute;n nộm chay thập cẩm vừa ngon lại thanh m&aacute;t, dễ l&agrave;m, nếu th&iacute;ch chị em h&atilde;y đặt mua trong ng&agrave;y rằm sắp tới nh&eacute;!</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 129,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/goi-mit-non-chay-thumbnail.jpg,https://monngonbinhdinh.vn/Images/files/M%C3%ADt%20non%20tr%E1%BB%99n%201.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVDL9tz24TJuY_lhAeyuy-RUlBGBClKYCbYlM34kXztAzrw2nekVv2dyso6mQub6IDBrk&usqp=CAU,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjd05LCh76BB31hbu-vcmyv0lwFdItZP4aULWgrssn8ob-haD0-22CeZkS2spa2HWAuYA&usqp=CAU',
                'price' => 50000,
                'name' => 'gỏi mít non chay',
                'description' => '<p>ỏi m&iacute;t non chay l&agrave; m&oacute;n gỏi trộn ngon v&agrave; lạ miệng, c&aacute;ch l&agrave;m lại hết sức đơn giản</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 130,
                'image' => 'https://cdn.bepcuoi.com/media/650-425-nom-chay-tam-sac-bepcuoi-2.jpg,https://cdn.bepcuoi.com/media/720-nom-chay-tam-sac-bepcuoi-991.jpg,https://cdn.bepcuoi.com/media/720-nom-chay-tam-sac-bepcuoi-838.jpg,https://lh3.googleusercontent.com/proxy/w4gtHCeE_eVTQItl21c49b-HnfRzVwU7O4lmL8u1bCWxOLs1nA8R8Ne2dBANk9Wi76ZSHZmLUQ8cPmOlUa3FAVth-lIIPIN14ojDBA5lF44ogQ',
                'price' => 60000,
                'name' => 'nộm chay tam sắc',
                'description' => '<p>Cuối tuần l&agrave; dịp bạn b&egrave; tụ họp để t&acirc;m sự ăn uống vui vẽ....để suy nghĩ m&oacute;n ăn n&agrave;o để hấp dẫn cũng l&agrave; điều kh&oacute; khăn, m&oacute;n nộm hay c&ograve;n gọi l&agrave; gỏi th&igrave; l&agrave; lựa chọn xuất sắc phải kh&ocirc;ng n&agrave;o. Biến tấu 1 ch&uacute;t l&agrave; ta trộn gia vị đều hết c&aacute;c nguy&ecirc;n liệu rồi trang tr&iacute; thật đẹp khi n&agrave;o ăn th&igrave; ch&uacute;ng ta mới trộn đều v&agrave; thưởng thức th&ocirc;i... n&agrave;o c&ugrave;ng v&agrave;o bếp với mẹ chinhtruong l&agrave;m m&oacute;n nộm chay tam sắc nhe, m&oacute;n n&agrave;y khi ăn th&igrave; rất đậm đ&agrave;, rau củ th&igrave; vẫn gi&ograve;n gi&ograve;n... đảm bảo sẽ rất th&uacute; vị.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 131,
                'image' => 'https://cdn.beptruong.edu.vn/wp-content/uploads/2018/05/goi-du-du-chay.jpg,https://amthucnamchau.org/wp-content/uploads/2018/12/cach-lam-goi-du-du-thai-som-tum-thai-chua-gion-thanh-mat.jpg,https://media.cooky.vn/recipe/g2/16513/s800x500/recipe16513-635887994876513694.jpg,https://www.unileverfoodsolutions.com.vn/dam/global-ufs/mcos/phvn/vietnam/calcmenu/recipes/VN-recipes/salads/papaya-salad/main-header.jpg',
                'price' => 50000,
                'name' => 'gỏi đu đu',
                'description' => '<p>Gỏi đu đủ chay thường được sử dụng để l&agrave;m m&oacute;n khai vị trong c&aacute;c bữa tiệc, cỗ. Với t&iacute;n đồ Phật gi&aacute;o, gỏi đu đủ chay c&ograve;n l&agrave; m&oacute;n ăn d&ugrave;ng c&ugrave;ng cơm ngon miệng v&agrave;o ng&agrave;y Rằm. M&oacute;n gỏi chay n&agrave;y c&oacute; đầy đủ c&aacute;c vị chua cay mặn ngọt, k&iacute;ch th&iacute;ch vị gi&aacute;c người ăn. Th&ocirc;ng thường, gỏi đu đủ chay thường được d&ugrave;ng k&egrave;m với b&aacute;nh tr&aacute;ng hoặc b&aacute;nh phồng t&ocirc;m để th&ecirc;m phần ngon miệng.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 132,
                'image' => 'https://i.pinimg.com/originals/88/9c/c5/889cc5499b1d91ee7e23628bda98d500.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrQxN1zjk09iCBPw-7wsKW8UZcFkE_FZTji0KojWGn82Z-gTfGQ08V3zpzxEK2oj-LbCQ&usqp=CAU,https://images.squarespace-cdn.com/content/v1/574bdd288259b5de67365fe5/1469093343430-52EN4HNEJNAT9E6U8J6M/image-asset.png,https://media.cooky.vn/recipe/g1/5209/s320x320/recipe5209-636403123817277873.jpg',
                'price' => 60000,
                'name' => 'goi thập cẩm nấm',
                'description' => '<p>thay v&igrave; d&ugrave;ng c&aacute;c loại thịt th&ocirc;ng thường chung t&ocirc;i thay v&agrave;o đ&oacute; l&agrave; c&aacute;c loại nấm kh&aacute;c nhau để tạo ra m&ugrave;i huongw ri&ecirc;ng biệt</p>',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 133,
                'image' => 'https://lacongaithattuyet.vn/wp-content/uploads/2019/07/cach-lam-nom-hoa-chuoi-chay-ngon-1.jpg,https://cdn.beptruong.edu.vn/wp-content/uploads/2020/03/nom-hoa-chuoi.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmEiQdT16n18v0QopWcHlfFexBGZTj-WbNYJWzQRjcrOCpzi0yhnKsabSVxSoUEns5gQQ&usqp=CAU,https://hitasanti.com/wp-content/uploads/2020/05/hita-chay-nom-hoa-chuoi-4.jpg',
                'price' => 60000,
                'name' => 'nộm hoa chuối',
                'description' => '<p>chắc hoa chuối kh&ocirc;ng c&ograve;n xa lạ g&igrave; với người d&acirc;n Việt Nam kh&ocirc;ng những cho kinh tế về quả m&agrave; hoa chuối c&ograve;n được tận dụng để l&agrave;m c&aacute;c m&oacute;n nộm gỏi</p>',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 134,
                'image' => 'https://cdn.jamja.vn/blog/wp-content/uploads/2018/01/cach-lam-nom-hoa-chuoi-chay-voi-lac-5.jpg,https://photo-cms-baocaobang.zadn.vn/Uploaded/baichuyen/2018_08_09/nom_IPYK.JPG,https://cdn.tgdd.vn/2020/07/CookProduct/thumbcn-1200x676-3.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0LtT7UYVGQ0c6niWSRpTvjDTexRvS8Y9vOXanmJvfhI8vgIXUGb_7ACUWYYqmN2a9sxk&usqp=CAU',
                'price' => 70000,
                'name' => 'nộm hoa chuối',
                'description' => '<p>Trong c&aacute;c ng&agrave;y rằm hoặc ng&agrave;y cuối th&aacute;ng &acirc;m lịch th&igrave; m&oacute;n ăn d&acirc;n d&atilde; nộm hoa chuối chay lu&ocirc;n được c&aacute;c b&agrave; nội trợ lựa chọn l&agrave;m một m&oacute;n tr&ecirc;n b&agrave;n ăn. M&oacute;n ăn thanh đạm m&agrave; d&acirc;n d&atilde; n&agrave;y đ&atilde; được biết đến qua rất nhiều đời nay nhưng đến thời điểm b&acirc;y giờ n&oacute; vẫn lu&ocirc;n chiếm được sự y&ecirc;u th&iacute;ch của rất nhiều người. Hiện nay, d&ugrave; cuộc sống c&oacute; đầy đủ kh&ocirc;ng thiếu c&aacute;c m&oacute;n ăn sang trọng v&agrave; đắt tiền nhưng người ta kh&ocirc;ng thể bỏ qua m&oacute;n nộm hoa chuối chay vừa thanh đạm vừa dễ l&agrave;m m&agrave; kh&ocirc;ng thấy ch&aacute;n. Ngo&agrave;i ra c&ograve;n c&oacute; thể sử dụng c&aacute;c nguy&ecirc;n liệu kh&aacute;c kết hợp với hoa chuối một c&aacute;ch ph&ugrave; hợp cũng sẽ tạo ra một m&oacute;n nộm độc đ&aacute;o v&agrave; bổ dưỡng.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 135,
                'image' => 'https://image.meovathay.vn/upload/2020/06/09/660/nom-goi-rau-ma-chay-thom-ngon-bo-duong-0.jpg,https://thongtinmebe.com/wp-content/uploads/2021/04/cach-lam-nom-rau-ma-19.jpg,https://thongtinmebe.com/wp-content/uploads/2021/04/cach-lam-nom-rau-ma-1.jpg,https://fsfamily.vn/wp-content/uploads/2018/12/mon-nom-rau-ma-chay-3.jpg',
                'price' => 40000,
                'name' => 'gỏi rau má',
                'description' => '<p>Gỏi rau m&aacute; gi&ograve;n ngon, bổ dưỡng sẽ l&agrave;m phong ph&uacute; th&ecirc;m thực đơn bữa chay của gia đ&igrave;nh bạn</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 163,
                'image' => 'https://cdn.beptruong.edu.vn/wp-content/uploads/2020/03/nom-hoa-chuoi.jpg,https://hitavegan.com/wp-content/uploads/2019/11/hita-chay-nom-hoa-chuoi-3.png,https://product.hstatic.net/1000356613/product/1_40fa64b217e2405ebc9f7431a48d4655_master.jpg,https://media.cooky.vn/recipe/g3/28893/s320x320/recipe-cover-r28893.jpg',
                'price' => 50000,
                'name' => 'nộm hoa chuối',
                'description' => '<p>Nộm hoa chuối l&agrave; m&oacute;n ăn d&acirc;n d&atilde;, mang đậm hương vị th&ocirc;n qu&ecirc; n&ecirc;n được nhiều người ưa chuộng. Thậm ch&iacute; n&oacute; c&ograve;n phổ biến trong thực đơn của c&aacute;c nh&agrave; h&agrave;ng, qu&aacute;n ăn lớn nhỏ tr&ecirc;n cả nước. C&ugrave;ng v&agrave;o bếp để biết c&aacute;ch l&agrave;m nộm hoa chuối gi&ograve;n ngon, thanh m&aacute;t cho bữa cơm ng&agrave;y h&egrave; nh&eacute;.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 136,
                'image' => 'https://nhahangmocnhien.vn/webs_image/uploads/goi-cuon-chay.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6YXg3BdQz-MGDCjQ7T108pAKsq7in2dVsWQ&usqp=CAU,https://static.kenhphatphap.com/photos/15/2020/06/C__ch_l__m_m__n_g___i_cu___n_chay_th__m_ngon_______p_m___t_cho_ng__y_chay_thanh_t___nh.jpg,https://i.ytimg.com/vi/IWrIlOwKv7A/maxresdefault.jpg',
                'price' => 50000,
                'name' => 'gỏi cuốn chay',
                'description' => '<p>Bạn đ&atilde; từng thưởng thức qua m&oacute;n gỏi cuốn chay chưa? Nếu chưa th&igrave; tại sao bạn kh&ocirc;ng thử l&agrave;m m&oacute;n gỏi cuốn chay n&agrave;y cho gia đ&igrave;nh thưởng thức để đổi khổi vị xem sao nh&eacute;</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 137,
                'image' => 'https://media.loveitopcdn.com/5823/20-banh-hoi-cuon-chay-min.jpg,https://i.ytimg.com/vi/FTE0fNmamW0/maxresdefault.jpg,https://image.cooky.vn/recipe/g5/46861/s640/cooky-recipe-cover-r46861.jpg,https://haithuycatering.com/image/5c38576951046d693ead04bf/original.jpg',
                'price' => 60000,
                'name' => 'gỏi cuốn cải ',
                'description' => '<p>B&aacute;nh cuốn chay ch&iacute;n vừa, kh&ocirc;ng bị kh&ocirc; m&agrave; tr&ocirc;ng ươn ướt rất đẹp, nh&acirc;n b&aacute;nh th&igrave; khỏi ch&ecirc;, chả lụa, củ sắn, c&agrave; rốt, nấm m&egrave;o, nấm hương x&agrave;o lẫn v&agrave;o nhau tạo th&agrave;nh một loại nh&acirc;n thơm ngon, chấm cả miếng b&aacute;nh v&agrave;o ch&eacute;n nước tương c&oacute; ớt xắt l&aacute;t thơm lừng&hellip; &Ocirc;i th&ocirc;i mới nghe th&ocirc;i đ&atilde; th&egrave;m lắm rồi.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 138,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/lam-pho-cuon-chay-thom-ngon-1024x564-1.jpg,https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/pho-cuon-chay-thumbnail.jpg,https://img-global.cpcdn.com/recipes/b5fb49b59e7382fe/680x482cq70/ph%E1%BB%9F-cu%E1%BB%91n-recipe-main-photo.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7QPjhS6aa34T5IKRqgTX4EW0kp_DwM9yX80t58i7UKdUTClOgfh3HTq5kUWXLQ19t7NM&usqp=CAU',
                'price' => 50000,
                'name' => 'phở cuốn chay',
                'description' => '<p>M&oacute;n phở cuốn chay l&agrave; m&oacute;n ăn chay ngon được nhiều người ưa th&iacute;ch bởi hương vị thơm ngon cũng như c&aacute;ch chế biến đơn giản</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 139,
                'image' => 'https://monngonmoingay.tv/wp-content/uploads/2019/01/cach-lam-mon-nem-cuon-chay-ngon-khong-an-mot-lan-se-hoi-han.jpg,https://img-global.cpcdn.com/recipes/bee6376aeba9c7fd/1200x630cq70/photo.jpg,https://bizweb.dktcdn.net/thumb/1024x1024/100/385/875/products/d5c1aae3180fff51a61e.jpg?v=1589511660177,https://cdn1.ngonbonmua.com/wp-content/uploads/2016/12/cuon-chay-1-2.jpg',
                'price' => 60000,
                'name' => 'nem cuốn chay',
                'description' => '<p>M&oacute;n nem cuốn chay được rất nhiều người cả ăn chay lẫn ăn mặn đều rất ưa th&iacute;ch, bởi sự gi&ograve;n ngon kết hợp c&ugrave;ng với c&aacute;c gia vị ăn k&egrave;m. Nhất l&agrave; những ng&agrave;y lễ vu lang hay ng&agrave;y rằm c&aacute;c m&acirc;m cơm c&uacute;ng chay kh&ocirc;ng thể thiếu m&oacute;n nem cuốn chay n&agrave;y. T&ocirc;i n&oacute;i c&oacute; thể c&aacute;c bạn kh&ocirc;ng tin nhưng nếu ăn thử một lần th&igrave; sẽ kh&ocirc;ng c&ograve;n nghi ngờ g&igrave; nữa.</p>
 ',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 140,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/batch20180722173550-1536309838680804711868.jpg.webp,https://img-global.cpcdn.com/recipes/82ae137829303898/1200x630cq70/photo.jpg,https://media.cooky.vn/recipe/g1/194/s800x500/Recipe194-635365405119606094.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR84RCNSM1mmo73UpMU3SJM92eBjo7IXKgMdx3kcPH7BtJvmaYVui7k8PveszGJAQncH1E&usqp=CAU',
                'price' => 70000,
                'name' => 'nộm măng',
                'description' => '<p>Nộm măng l&agrave; một trong những m&oacute;n nộm chay ngon v&agrave; dễ d&agrave;ng thực hiện nhất. Nộm măng thanh m&aacute;t, bổ sung c&aacute;c nh&oacute;m chất cần thiết như chất xơ, ngăn ngừa c&aacute;c bệnh tim mạch v&agrave; giảm thiểu cholesterol trong cơ thể.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 141,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/nom-rau-muong-recipe-main-photo.jpg,https://www.iunauan.com/images/650x385/anh1-iunauan.com-wjwbui149065000.jpg?1528167017885,https://giadinh.mediacdn.vn/2018/7/11/photo-0-1531274432842331419332.jpg,https://i.ytimg.com/vi/CmK3xz_VB5s/hqdefault.jpg',
                'price' => 40000,
                'name' => 'nộm rau muống',
                'description' => '<p>Nộm rau muống l&agrave; m&oacute;n ăn kh&aacute; quen thuộc với nhiều gia đ&igrave;nh. M&oacute;n nộm chay n&agrave;y cung cấp những vitamin thiết yếu như vitamin A, ngăn ngừa tiểu đường, v&agrave; đặc biệt tốt cho những người bị bệnh thiếu m&aacute;u.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 142,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/nom-xoai-kho.jpg.webp,https://www.lauductroc.com/Upload/image/product/450x450/nom-xoai-nom-xoai-min_10-01-2018-01-57-39.jpg,https://yt.cdnxbvn.com/medias/uploads/156/156332-cach-lam-nom-xoai.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO6EF9QMk6H58NuZwlb6I_tXsCdBg_ALK5lw&usqp=CAU',
                'price' => 60000,
                'name' => 'nộm xoài khô',
                'description' => '<p>Một trong những m&oacute;n nộm chay kh&ocirc;ng thể thiếu đ&oacute; l&agrave; nộm xo&agrave;i kh&ocirc;. M&oacute;n ăn n&agrave;y được rất nhiều bạn trẻ ưa chuộng v&igrave; hương vị tuyệt vời của n&oacute;. B&ecirc;n cạnh đ&oacute;, lutein c&oacute; trong xo&agrave;i gi&uacute;p bảo vệ mắt, v&agrave; c&aacute;c nh&oacute;m vitamin gi&uacute;p chắc khỏe xương, đẹp da.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 143,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/0bfaefe4b0a559fb00b4.jpg.webp,https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/phuong-phap-trong-rau-cai-xoong-nhan-tenh_17d56c7c3f.jpg,https://thuocthang.com.vn/vnt_upload/news/nhung-mon-ngon-tu-rau-cai-xoong-tot-cho-suc-khoe.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZg5P7NfCzs4eTFI1919ZFX92jK0Fdr37z5CYvKxGSTzV0_0_Al7CsbWoCzSowq6WaqUs&usqp=CAU',
                'price' => 50000,
                'name' => 'nộm xà lách xoong',
                'description' => '<p>X&agrave; l&aacute;ch xoong với đặc t&iacute;nh l&agrave;nh v&agrave; m&aacute;t, cung cấp lượng chất xơ dồi d&agrave;o cho cơ thể v&agrave; gi&uacute;p l&agrave;m m&aacute;t gan. Vitamin K v&agrave; magie c&oacute; trong loại rau n&agrave;y c&oacute; lợi cho việc chắc khỏe xương, cải thiện thị lực. Đ&acirc;y l&agrave; m&oacute;n ăn hết sức ph&ugrave; hợp trong m&acirc;m cơm gia đ&igrave;nh v&agrave;o những ng&agrave;y h&egrave; n&oacute;ng nực.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 144,
                'image' => 'http://media.doisongphapluat.com/601/2020/8/30/goi-y-mot-so-mon-chay-de-lam-cung-ram-thang-7-dep-mat.jpg,https://monngonmoingay.net.vn/wp-content/uploads/2019/11/goi-oi-chay-22-480x275.jpg,https://hitavegan.com/wp-content/uploads/2019/09/hita-vegan-cac-mon-goi-chay-1.jpg,https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/goi-oi-chay-thumbnail.jpg',
                'price' => 30000,
                'name' => 'nộm ổi',
                'description' => '<p>Nạo sợi 1 quả ổi to v&agrave; 1 củ c&agrave; rốt to, th&ecirc;m đường, ch&uacute;t x&iacute;u muối, nước cốt 1 quả chanh (gia vị tuỳ khẩu vị của gia đ&igrave;nh), th&ecirc;m rau thơm th&aacute;i nhỏ, ớt tươi v&agrave;o trộn đều cho ngấm gia vị. Sau đ&oacute;, rắc lạc rang l&ecirc;n l&agrave; c&oacute; m&oacute;n nộm chay rất thơm ngon v&agrave; lạ miệng.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 145,
                'image' => 'https://cdn.staticaly.com/img/monchay.com/wp-content/uploads/2015/06/nom-cu-sen-chay-9.jpg,https://cdn.tgdd.vn/2021/03/CookProduct/BeFunky-collage(1)-1200x676.jpg,https://6monngonmoingay.com/wp-content/uploads/2016/08/cach-lam-mon-goi-cu-sen-ngon-that-la-ngon-cho-nhung-ngay-chay.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlZWNDfEAcG_QOB0JCgcnoygmH_w5-q9Nqj0pzzEfCVsKVy809VGZIhb0sxxjTy2N6XmI&usqp=CAU',
                'price' => 100000,
                'name' => 'nộm gỏi củ sen',
                'description' => '<p>C&aacute;c m&oacute;n nộm ngon thường được chọn l&agrave;m m&oacute;n khai vị cho bữa ăn bởi ch&uacute;ng thường l&agrave; rau củ v&agrave; c&oacute; vị chua cay để k&iacute;ch th&iacute;ch khẩu vị m&agrave; kh&ocirc;ng l&agrave;m bạn no bụng. Với m&oacute;n chay nộm củ sen n&agrave;y th&igrave; vị gi&aacute;c sẽ thực sự được k&iacute;ch th&iacute;ch để bữa cơm trở n&ecirc;n ngon miệng hơn. Nộm củ sen cay gi&ograve;n sần sật với vị cay x&eacute; lại nghe thơm m&ugrave;i vừng rang rất hấp dẫn.</p>
',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 146,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/sup-bap-chay-thumbnail.jpg,http://lh5.ggpht.com/-84szxmY2oao/VAzrHjXeUgI/AAAAAAAAapo/eJ0raRetCeI/corn-soup_thumb%25255B1%25255D.jpg?imgmax=800,https://hitavegan.com/wp-content/uploads/2019/10/hita-chay-cach-nau-sup-chay-3.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8rjGINozDHJRPTJ8uqje0CmIHGtnAMpBsJw&usqp=CAU',
                'price' => 60000,
                'name' => 'súp bắp chay',
                'description' => '<p>S&uacute;p bắp chay sẽ l&agrave; lựa chọn tuyệt vời cho bạn để c&oacute; một bữa ăn chay thật thanh đạm. Với c&aacute;ch nấu đơn giản nhưng th&agrave;nh phẩm cho ra v&ocirc; c&ugrave;ng thơm ngon, đảm bảo ai nấy đều xu&yacute;t xoa khen ngợi. M&ugrave;i thơm lừng của bắp quyện với c&aacute;c loại nấm, rau củ gi&ograve;n gi&ograve;n. Kết cấu s&uacute;p sền sệt v&agrave; đặc nhẹ được n&ecirc;m nếm vừa miệng rất dễ ăn</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 147,
                'image' => 'https://cdn.tgdd.vn/2020/06/CookRecipe/Avatar/sup-khoai-tay-thumbnail-1.jpg,https://i.pinimg.com/474x/f5/93/03/f593039811f377463c45e35a556bc8c6.jpg,https://cdn1.ngonbonmua.com/wp-content/uploads/cooky-recipe-cover-r39557-2.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFMVf1sSEhzBjJa7r8DpVbJt7VPev-Ry3nyg&usqp=CAU',
                'price' => 70000,
                'name' => 'súp bí đỏ chay',
                'description' => '<p>Nạp đầy năng lượng cho cả gia đ&igrave;nh, trước khi bước v&agrave;o một ng&agrave;y l&agrave;m việc với m&oacute;n s&uacute;p b&iacute; đỏ chay thơm ngon. S&uacute;p b&iacute; đỏ với vị ngọt tự nhi&ecirc;n từ b&iacute;, một ch&uacute;t b&eacute;o b&eacute;o, chất s&uacute;p rất mịn v&agrave; nhừ, vị mặn ngọt vừa phải, đảm bảo cả nh&agrave; sẽ th&iacute;ch m&ecirc;</p>
.
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 148,
                'image' => 'https://cdn.tgdd.vn/2020/09/CookRecipe/Avatar/sup-rong-bien-thumbnail.jpg,https://cdn.daotaobeptruong.vn/wp-content/uploads/2020/04/canh-nam-rong-bien-chay-600x400.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVJnhqQKwmkC0iPEuKoT6eEQjdrRE8X0jy1V8nyahLcY8QfwKJxTj0gK97Juvz_O9h7dM&usqp=CAU,https://thucphamchayngon.cdn.vccloud.vn/wp-content/uploads/2019/09/canh-rong-bien-chay.jpg',
                'price' => 80000,
                'name' => 'súp rong biển',
                'category_id' => '9',
                'description' => '<p><strong>C&aacute;ch nấu canh rong biển chay</strong>&nbsp;hấp dẫn, lạ miệng c&oacute; vị ngọt thanh tự nhi&ecirc;n đem lại cho người d&ugrave;ng cảm gi&aacute;c tươi m&aacute;t m&agrave; kh&ocirc;ng k&eacute;m phần thanh đạm. Canh rong biển chay bổ sung rất nhiều chất dinh dưỡng, Vitamin c&oacute; lợi cho sức khỏe, th&iacute;ch hợp cho những người ăn chay trường, b&agrave; bầu v&agrave; sản phụ mới sinh muốn bồi bổ cơ thể.</p>
',
                'created_at' => Carbon::now()
            ],[
                'id' => 149,
                'image' => 'https://cdn.tgdd.vn/2020/09/CookRecipe/Avatar/sup-cua-chay-thumbnail.jpg,https://i.ytimg.com/vi/DGUkvzR3yU4/maxresdefault.jpg,https://tutrithuc.com/upload/img/post_content_avata/16262.jpg,https://i.ytimg.com/vi/AwWiaPeUm0w/maxresdefault.jpg',
                'price' => 100000,
                'name' => 'súp cua chay',
                'description' => '<p>S&uacute;p cua chay nhưng thơm ngon đậm đ&agrave;, tr&ocirc;ng kh&ocirc;ng kh&aacute;c g&igrave; s&uacute;p cua th&ocirc;ng thường đ&acirc;u nha. M&oacute;n s&uacute;p n&agrave;y sền sệt, c&oacute; vị ngọt thanh từ rau củ v&agrave; nấm đ&ugrave;i g&agrave;. Khi ăn sẽ cảm nhận được độ gi&ograve;n sừn sựt của nấm tuyết, t&agrave;u hủ ky mềm mại v&ocirc; c&ugrave;ng ngon.</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 150,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/sup-chay-thap-cam-thumbnail.jpg,https://vcdn-ngoisao.vnecdn.net/2018/08/24/39211598-235919470394994-54217-3114-1340-1535085327.jpg,https://img-global.cpcdn.com/recipes/19f434095c6abf37/1200x630cq70/photo.jpg,https://photo-2-baomoi.zadn.vn/w700_r1/2018_10_21_251_28248817/a974ba02f043191d4052.jpg',
                'price' => 90000,
                'name' => 'súp chay thập cẩm',
                'description' => '<p>Một t&ocirc; s&uacute;p chay với đầy đủ m&agrave;u sắc từ c&aacute;c loại rau củ v&agrave; nấm, rắc th&ecirc;m &iacute;t ti&ecirc;u xay v&agrave; h&agrave;nh ng&ograve; l&ecirc;n tr&ecirc;n th&igrave; tuyệt vời. M&ugrave;i thơm của s&uacute;p lan tỏa khắp căn bếp, vị ngọt từ nấm v&agrave; bắp quyện với m&ugrave;i thơm của h&agrave;nh phi, một ch&uacute;t gi&ograve;n gi&ograve;n của rau củ. Tất cả nguy&ecirc;n liệu tạo n&ecirc;n một m&oacute;n ăn ngon v&ocirc; c&ugrave;ng.</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 151,
                'image' => 'https://cdn.tgdd.vn/2020/06/CookRecipe/Avatar/sup-bi-do-thumbnail-1.jpg,https://6monngonmoingay.com/wp-content/uploads/2015/07/cach-nau-sup-khoai-tay-cho-tre-em-den-tuoi-an-dam1.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXKbhLByrlBM16dWPVMbkgIBld-t_oZtQU6MNP2XSF49M6IuO0LK_GOgA7mWFZKvSLG_Q&usqp=CAU,https://cdn.bepcuoi.com/media/720-sup-khoai-tay-nghien-bepcuoi-484.jpg',
                'price' => 70000,
                'name' => 'súp khoai tây',
                'description' => '<p>S&uacute;p khoai t&acirc;y chay sẽ l&agrave; lựa chọn tuyệt vời cho những người theo đuổi chế độ ăn chay c&oacute; sữa! Với c&aacute;ch l&agrave;m đơn giản, kh&ocirc;ng cần tốn qu&aacute; nhiều thời gian l&agrave; đ&atilde; c&oacute; thể ho&agrave;n th&agrave;nh m&oacute;n s&uacute;p si&ecirc;u dinh dưỡng. S&uacute;p mềm mịn, b&eacute;o b&eacute;o v&agrave; rất thơm m&ugrave;i của sữa tươi c&ugrave;ng với v&aacute;ng sữa, chắc chắn bạn sẽ th&iacute;ch m&ecirc;</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 152,
                'image' => 'https://cdn.tgdd.vn/2020/06/CookRecipe/Avatar/sup-ca-rot-thumbnail-1.jpg,https://cdn.bepcuoi.com/media/720-sup-ca-rot-bo-duong-bepcuoi-403.jpg,https://lh3.googleusercontent.com/proxy/dVlt2YligZbnaCDOJw5PATKNbb-Pc3dM3uLBmnz9yy0p2NnScga1poCe5UzUsH5ef9BImapzHcMsHiGVWF8O7dhcQDYFCuOPJYxP-zPyMov6t9ERyV9TGzpzYZj5_pj8XgQ,https://www.kidsplaza.vn/blog/wp-content/uploads/2019/07/sup-ca-rot-cu-cai-duong.jpg',
                'price' => 90000,
                'name' => 'súp cà rốt',
                'description' => '<p>S&uacute;p c&agrave; rốt chay kh&ocirc;ng chỉ ngon m&agrave; c&ograve;n gi&uacute;p đẹp da, s&aacute;ng mắt, cung cấp chất xơ v&agrave; c&aacute;c vitamin cho cả nh&agrave; c&ugrave;ng khỏe. S&uacute;p c&oacute; kết cấu mềm mịn rất c&oacute; lợi cho đường ruột, c&agrave; rốt l&agrave;m cho s&uacute;p c&oacute; m&agrave;u cam rất đẹp mắt. Kh&ocirc;ng chỉ thơm lừng, m&oacute;n s&uacute;p c&ograve;n c&oacute; vị ngọt thanh tự nhi&ecirc;n, khi ăn n&ecirc;m th&ecirc;m t&iacute; hạt n&ecirc;m chay v&agrave; hạt ti&ecirc;u xay l&agrave; ngon tuyệt vời!</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 162,
                'image' => 'https://cdn.tgdd.vn/2021/03/CookRecipe/Avatar/sup-dau-do-thumbnail-1.jpg,https://cachnaumonngon.com/uploads/images/news/1446000749_news_71.jpg,https://www.anchay.org/wp-content/uploads/2015/02/sup-dau-do-chay-anchay-org.jpg,https://yhoccotruyenvn.com/wp-content/uploads/2018/01/cong-dung-cua-hat-dau-do.jpg',
                'price' => 100000,
                'name' => 'súp đậu đỏ chay',
                'description' => '<p>Gi&uacute;p cả nh&agrave; giải nhiệt ng&agrave;y h&egrave; với m&oacute;n s&uacute;p đậu đỏ chay thanh đạm. Với c&aacute;ch chế biến đơn giản, m&oacute;n s&uacute;p đậu đỏ v&ocirc; c&ugrave;ng hấp dẫn với nhiều loại rau củ h&ograve;a quyện với nhau. Tất cả được nấu vừa ch&iacute;n tới, vẫn giữ được vị ngọt v&agrave; gi&ograve;n. Nước s&uacute;p ngọt thanh rất ngon, d&ugrave; l&agrave; ăn kh&ocirc;ng hay ăn với cơm đều hợp l&yacute; cả.</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 153,
                'image' => 'https://cdn.tgdd.vn/2020/08/CookRecipe/Avatar/su%CC%81p-ga%CC%80-chay-thumbnail-1.jpg,https://img-global.cpcdn.com/recipes/2d29841b958f2faa/680x482cq70/soup-ga-chay-recipe-main-photo.jpg,https://bepxua.vn/wp-content/uploads/2020/07/cach-nau-sup-ga-nam-ngon-7.jpg,https://i1.wp.com/naungon.net/wp-content/uploads/2019/08/cach-nau-sup-ga-nam-tuyet-thom-ngon-thanh-mat.jpg?ssl=1',
                'price' => 60000,
                'name' => 'súp gà chay',
                'description' => '<p>Thưởng thức một t&ocirc; s&uacute;p g&agrave; chay n&oacute;ng hổi trong ng&agrave;y mưa gi&oacute; th&igrave; c&ograve;n g&igrave; bằng. Kh&ocirc;ng cần qu&aacute; nhiều nguy&ecirc;n liệu hay c&ocirc;ng đoạn phức tạp, bạn vẫn c&oacute; thể tự nấu một nồi s&uacute;p thơm ngon. Vị s&uacute;p đậm đ&agrave;, rau củ ch&iacute;n tới gi&ograve;n gi&ograve;n rất đ&atilde; miệng, rắc l&ecirc;n 1 t&iacute; ti&ecirc;u xay v&agrave; h&agrave;nh ng&ograve; rồi bắt đầu thưởng thức l&agrave; ấm bụng ngay.</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 154,
                'image' => 'https://cdn.tgdd.vn/2020/09/CookRecipe/Avatar/sup-thit-vien-chay-thumbnail.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLC6fLEsgrWfhpw6caLCtY-JXJdQK1i9SX2w&usqp=CAU,https://enbaccdn.com/df0392b6/thumb_w/600/i:up_new/2013/10/23/item/800877/20131023112554/Hu-Tieu-Bo-Vien-935-Anh-so-30227387.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWaTVs_G93nU8OyjyP4q32ZzD9CoC88dlkOkIlb19bsT7KzLYSmyvvAgP-g_KnpecKRZ8&usqp=CAU',
                'price' => 70000,
                'name' => 'súp thịt viên chay',
                'description' => '<p>C&ugrave;ng v&agrave;o bếp trổ t&agrave;i nấu một m&oacute;n s&uacute;p chay cho cả nh&agrave; c&ugrave;ng thưởng thức n&agrave;o! S&uacute;p thịt vi&ecirc;n chay với sự ho&agrave; quyện của v&ocirc; số rau củ như bắp, b&iacute; đỏ, c&agrave; rốt rất thanh ngọt, dịu m&aacute;t. S&uacute;p được n&ecirc;m nếm vừa miệng, thơm phức, cực hấp dẫn. Ăn hết một ch&eacute;n l&agrave; bảo đảm muốn ăn th&ecirc;m ch&eacute;n nữa!</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 155,
                'image' => 'https://cdn.tgdd.vn/2021/01/CookRecipe/Avatar/sup-hoa-dau-biec-chay-thumbnail.jpg,https://cdn.tgdd.vn/2021/01/CookRecipe/GalleryStep/nau-sup-10.jpg,https://i.ytimg.com/vi/bmvmexUBTps/maxresdefault.jpg,http://data.voh.com.vn/voh/Image/2021/05/31/mon-ngon-tu-dau-biec-3.jpg',
                'price' => 120000,
                'name' => 'súp hoa đậu biếc chay',
                'description' => '<p>Đẹp mắt với m&agrave;u s&uacute;p hoa đậu biếc cực lạ, ngon miệng với m&ugrave;i vị s&uacute;p thơm ngon đặc trưng. S&uacute;p hoa đậu biếc hứa hẹn sẽ khiến cả nh&agrave; th&iacute;ch th&uacute;, củ sen th&igrave; gi&ograve;n ngon, nấm ngọt v&agrave; mềm thấm vị, c&aacute;c rau củ kh&aacute;c c&agrave;ng l&agrave;m cho m&oacute;n s&uacute;p th&ecirc;m hấp dẫn th&ecirc;m</p>',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 156,
                'image' => 'https://cdn.tgdd.vn/2020/10/CookRecipe/Avatar/sup-ca-chua-nuong-thuan-chay-thumbnail.jpg,https://cdn.bepcuoi.com/media/650-425-sup-ca-chua-va-toi-nuong-bepcuoi-552.jpg,https://cdn.tgdd.vn/2020/10/CookRecipe/Avatar/sup-ca-chua-nuong-pho-mai-thumbnail.jpg,https://cdn.bepcuoi.com/media/720-sup-ca-chua-ot-nuong-bepcuoi-427.jpg',
                'price' => 80000,
                'name' => 'súp cà chua nướng',
                'description' => '<p>Th&ecirc;m v&agrave;o thực đơn m&oacute;n s&uacute;p c&agrave; chua nướng thuần chay lạ mắt, thơm ngon độc đ&aacute;o n&agrave;y. Với c&ocirc;ng thức nấu đặc biệt mang lại một chất s&uacute;p đậm đ&agrave;, nguy&ecirc;n liệu th&igrave; thấm vị. C&agrave; chua được nướng cho v&agrave;ng thơm. M&oacute;n s&uacute;p đặc biệt sẽ rất ngon hơnnếu ăn k&egrave;m với b&aacute;nh m&igrave; đấy!</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 157,
                'image' => 'https://cdn.daynauan.info.vn/wp-content/uploads/2019/05/trang-tri-sup-hoanh-thanh.jpg,https://cdn.tgdd.vn/2021/07/CookProduct/thumg-1200x676.jpg,https://cosopho.com/wp-content/uploads/2020/12/cach-nau-hoanh-thanh-chay-thanh-dam-1-1.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyAEt-_F-6niqqKhVLrptkeKrsbFwt-VIshCSK_7qJQUHePijTg4Qg8NNEhuVw4NeSC9E&usqp=CAU',
                'price' => 90000,
                'name' => 'súp hoành chiên rau củ quả',
                'description' => '<p>Đ&atilde;i cả nh&agrave; một m&oacute;n s&uacute;p ho&agrave;nh th&aacute;nh nh&acirc;n rau củ chay v&agrave;o dịp cuối tuần, để gi&uacute;p mọi người vừa ăn ngon, vừa tốt cho sức khoẻ nh&eacute;! Lớp ho&agrave;nh th&aacute;nh b&ecirc;n ngo&agrave;i c&oacute; độ gi&ograve;n nhẹ, hơi c&oacute; vị b&eacute;o thơm đặc trưng của ho&agrave;nh th&aacute;nh. B&ecirc;n trong nh&acirc;n rau củ được n&ecirc;m nếm vừa ăn, ăn c&ugrave;ng với nước d&ugrave;ng ngọt thanh v&ocirc; c&ugrave;ng ngon.</p>',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 158,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/sup-mang-chay-thumbnail.jpg',
                'price' => 75000,
                'name' => 'súp măng chay',
                'description' => '<p>Măng lu&ocirc;n được chế biến th&agrave;nh nhiều m&oacute;n ăn bởi m&ugrave;i vị thơm ngon đặc trưng. Thử ngay kh&aacute;m ph&aacute; ngay m&oacute;n s&uacute;p măng chay thật thanh đạm cho cả nh&agrave; nh&eacute;! M&ugrave;i vị của m&oacute;n s&uacute;p n&agrave;y si&ecirc;u thơm ngon bởi sự kết hợp của những nguy&ecirc;n liệu tươi m&aacute;t như măng, c&aacute;ch loại nấm, mướp, su su,... M&uacute;c ra ch&eacute;n l&uacute;c s&uacute;p c&ograve;n n&oacute;ng hổi, cho th&ecirc;m t&iacute; ng&ograve; v&agrave; ti&ecirc;u xay v&agrave;o, vừa thổi vừa ăn th&igrave; đ&uacute;ng tuyệt!</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 159,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/sup-mai-tuyet-bao-ngu-chay-thumbnail.jpg,https://static.kenhphatphap.com/photos/editors/2020/03/16/cach-lam-mon-sup-mai-tuyet-nhi-bao-ngu-giai-nhiet-cho-nhung-ngay-nang-nong-5e6f1b217139f.jpg,https://static.kenhphatphap.com/photos/15/2020/09/C__ch_l__m_m__n_s__p_n___m_h___t_sen_chay_thanh______m_v___b____d_____ng.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXLDskVmYgTXQWsuYK6oCRtT95dI5BLulXN2aFVcvWGzcQIcT07_f2TwnUNLsmt0DBmQs&usqp=CAU',
                'price' => 300000,
                'name' => 'súp mai tuyết bào ngư',
                'description' => '<p>S&uacute;p mai tuyết b&agrave;o ngư chay chắc chắn sẽ khiến cả nh&agrave; m&ecirc; mẩn, bởi s&uacute;p l&agrave; sự kết hợp của nấm mai tuyết nhĩ gi&ograve;n tan, c&ugrave;ng với c&aacute;c loại rau củ ngon ngọt. Nước s&uacute;p th&igrave; thanh đạm nhưng vẫn mang vị ngon đậm đ&agrave;, hương thơm hấp dẫn, ăn một lần l&agrave; nhớ m&atilde;i. Thật tiếc nếu bạn bỏ qua một m&oacute;n chay ngon như vậy đ&oacute;!</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 160,
                'image' => 'https://ameovat.com/wp-content/uploads/2018/10/cach-lam-soup-chay-thap-cam-01-1.jpg,https://yummyday.vn/uploads/images/sup-chay.jpg,https://i.vietgiaitri.com/2020/4/4/cach-lam-sup-chay-ngon-mieng-cho-ngay-cuoi-tuan-444-4818439.jpg,https://cachnaumonngon.com/uploads/images/news/1482117295_news_1483.jpg',
                'price' => 100000,
                'name' => 'súp chay thập cẩm Phổ Nhĩ',
                'description' => '<p>Soup chay thập cẩm thơm ngon bổ dưỡng c&oacute; vị ngọt đậm đ&agrave; h&ograve;a quyện giữa rau củ, c&aacute;c nguy&ecirc;n liệu chay. M&oacute;n ăn đơn giản m&agrave; dễ l&agrave;m n&agrave;y rất ph&ugrave; hợp với trẻ nhỏ v&igrave; n&oacute; kh&ocirc;ng những dễ ăn m&agrave; c&ograve;n chứa đầy đủ dinh dưỡng cần thiết cho sự ph&aacute;t triển của trẻ nhỏ. Soup chay thập cẩm cũng l&agrave; sự lựa chọn đ&uacute;ng đắn để l&agrave;m m&oacute;n khai vị trong c&aacute;c bữa tiệc hay những bữa ăn nh&agrave; h&agrave;ng.</p>
',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 161,
                'image' => 'https://i.pinimg.com/564x/17/6f/21/176f2152a190ba1bce328486f7cf55e6.jpg,https://29foods.com/media/news/111_sup_rong_bien_hao_san.jpghttp://rongbiendaiduong.com/wp-content/uploads/2018/08/sup-rong-bien-3.jpg,http://yeunoitro.net/wp-content/uploads/2015/01/So-che-rong-bien.jpg',
                'price' => 190000,
                'name' => 'súp rong biển',
                'description' => '<p>Bật m&iacute; c&aacute;ch l&agrave;m m&oacute;n s&uacute;p cực k&igrave; bổ dưỡng cho gia đ&igrave;nh bạn. C&ocirc;ng thức s&uacute;p rong biển chay với nguy&ecirc;n liệu ch&iacute;nh đương nhi&ecirc;n l&agrave;....rong biển hay c&ograve;n gọi l&agrave; t&oacute;c ti&ecirc;n.chắc chắn bạn sẽ đame bảo về độ dinh dưỡng</p>',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 165,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/hita-chay-chao-yen-mach-1.jpg,https://media.ex-cdn.com/EXP/media.suckhoecongdongonline.vn/files/content/2020/12/23/cach-nau-chao-yen-mach-cho-be-0937.jpg,https://sodafoods.com/wp-content/uploads/2015/08/chao-qua-oc-cho-voi-yen-mach.jpg,https://suckhoetretho.info/wp-content/uploads/2018/08/chao-yen-mach-bi-do-min.jpg',
                'price' => 70000,
                'name' => 'cháo yến mạch',
                'description' => '<p>Một c&aacute;ch nấu ch&aacute;o chay ngon v&agrave; rất đơn giản kh&aacute;c m&agrave; bạn kh&ocirc;ng n&ecirc;n bỏ qua đ&oacute; ch&iacute;nh l&agrave; m&oacute;n ch&aacute;o yến mạch chay. So với c&aacute;c m&oacute;n ch&aacute;o chay kh&aacute;c, ch&aacute;o yến mạch cho người ăn chay l&agrave; m&oacute;n ch&aacute;o c&oacute; hương vị rất lạ miệng, n&ecirc;n sẽ khiến bạn một khi được thưởng thức rồi sẽ lưu luyến m&atilde;i.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 166,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/chao-bi-do-nam-chay-recipe-main-photo.jpg,https://cdn.tgdd.vn/2020/08/CookRecipe/Avatar/cha%CC%81o-ngo-ngo%CC%A3t-philippines-thumbnail.jpg,https://yhoccotruyenvn.com/wp-content/uploads/2017/10/s.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg7seHef_cu-V4DcyMF2BuLBlYxyC1Zw0YwDSp9Wxh20MKn5RYsLFLyPpNzGfizVztAX4&usqp=CAU,https://blogmeyeucon.com/wp-content/uploads/2020/09/chao-ngo-thit-ga.jpg',
                'price' => 50000,
                'name' => 'cháo ngô ',
                'description' => '<p>Sự kết hợp giữa ng&ocirc; ngọt c&ugrave;ng với nấm rơm tươi mang đến cho bạn một m&oacute;n ch&aacute;o chay thơm ngon kh&oacute; cưỡng, lại cực kỳ bổ dưỡng cho sức khỏe. Nếu như bạn chưa biết c&aacute;ch nấu m&oacute;n ch&aacute;o chay từ hai loại nguy&ecirc;n liệu n&agrave;y như thế n&agrave;o cho vừa nhanh, vừa ngon th&igrave; c&ocirc;ng thức chi tiết dưới đ&acirc;y sẽ l&agrave; gợi &yacute; m&agrave; bạn kh&ocirc;ng thể bỏ qua.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 167,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/cach-nau-chao-tom-rong-bien-1.jpg,https://img-global.cpcdn.com/recipes/e4e7c96e9dff66a7/1200x630cq70/photo.jpg,https://tintuc.vnshop.vn/wp-content/uploads/2020/01/82381985_448597846046899_4472123285231894528_n.png,https://yeunoitro.net/wp-content/uploads/2015/01/Cach-nau-sup-rong-bien1-1280x720.jpg',
                'price' => 170000,
                'name' => 'cháo rong biển',
                'description' => '<p>Kh&ocirc;ng chỉ sở hữu hương vị thơm ngon, m&oacute;n ch&aacute;o chay rong biển c&ograve;n c&oacute; t&aacute;c dụng ti&ecirc;u đờm, lợi tiểu, thanh nhiệt, giải độc, trị đau đầu, ch&oacute;ng mặt rất hiệu quả.</p>',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 168,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/cach-nau-chao-gao-lut-chay.jpg,https://amthucvanho.com.vn/wp-content/uploads/2019/11/huong-dan-lam-cha-ruoi-ngon-chuan-vi-bac-thom-nuc-mui-tai-nha5.jpg,https://sohanews.sohacdn.com/zoom/480_300/160588918557773824/2020/10/26/photo1603703983649-16037039838171869513848.jpg,https://cdn.tgdd.vn/Files/2020/02/12/1236091/3-cach-nau-chao-chay-thom-ngon-thanh-dam-cho-gia-dinh-2.jpg',
                'price' => 100000,
                'name' => 'cháo gao lứt',
                'description' => '<p>Gạo lứt l&agrave; một loại gạo c&oacute; chứa rất nhiều chất dinh dưỡng, tốt cho sức khỏe. Ngo&agrave;i c&aacute;c m&oacute;n chay quen thuộc như gạo lứt muối m&egrave;, cơm gạo lứt rang hạt điều, ch&egrave; gạo lứt, b&aacute;nh bao gạo lứt&hellip;, bạn c&ograve;n c&oacute; thể nấu m&oacute;n ch&aacute;o chay gạo lứt vừa thơm ngon lại bổ dưỡng. C&aacute;ch nấu ch&aacute;o chay bằng gạo lứt sẽ l&acirc;u hơn một ch&uacute;t so với nấu ch&aacute;o từ gạo tẻ th&ocirc;ng thường, nhưng th&agrave;nh quả chắc chắn sẽ l&agrave;m bạn thấy xứng đ&aacute;ng với c&ocirc;ng sức bỏ ra.</p>

',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 169,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/lau-chao-chay.jpg,https://cdn.tgdd.vn/2021/07/CookProduct/cooky-recipe-cover-r51860-1200x676.jpg,https://thegioiamthuc.com/wp-content/uploads/2020/08/lau-chao.jpg,http://chumngayduoclieu.com/wp-content/uploads/2017/03/lau-chao-chum-ngay-chay-1.jpg',
                'price' => 350000,
                'name' => 'lẩu cháo chay',
                'description' => '<p>Lẩu ch&aacute;o chay l&agrave; sự biến tấu th&uacute; vị v&agrave; v&ocirc; c&ugrave;ng ngon miệng khi c&oacute; sự kết hợp vị ngon ngọt của c&aacute;c loại rau củ quả c&ugrave;ng vị thơm đặc trưng của gạo nếp, gạo tẻ c&ugrave;ng c&aacute;c thức nh&uacute;ng ri&ecirc;ng biệt. C&ograve;n g&igrave; tuyệt vời hơn khi tiết trời se lạnh, cả nh&agrave; qu&acirc;y quần b&ecirc;n nồi lẩu ch&aacute;o thanh đạm m&agrave; ngon tuyệt, c&ugrave;ng nhau thưởng thức hương vị lạ miệng lại &ecirc;m bụng, kh&ocirc;ng bị ng&aacute;n ngấy như c&aacute;c loại lẩu ch&aacute;o mặn kh&aacute;c.</p>
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 170,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/chao-nam-chay.jpg,https://bekhoemevui.vn/wp-content/uploads/2014/10/chao-ga-nam-huong-cho-tre.jpg,http://yeunoitro.net/wp-content/uploads/2015/01/chao-nam-thit-bo-vien_0-1280x720.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyHJmH4wSBsOsV44UYEEnkw9XEomsm6fDumg&usqp=CAU',
                'price' => 130000,
                'name' => 'cháo nấm hương',
                'description' => '<p>Nấm hương hay c&ograve;n gọi l&agrave; nấm đ&ocirc;ng c&ocirc; l&agrave; một trong những loại nấm kh&ocirc;ng chỉ c&oacute; hương thơm đặc trưng m&agrave; c&ograve;n chứa nhiều dưỡng chất tốt cho sức khỏe. Do đ&oacute;, nấm hương rất được ưa chuộng để chế biến c&aacute;c m&oacute;n chay ngon, đặc biệt l&agrave; m&oacute;n ch&aacute;o chay. V&igrave; m&oacute;n ch&aacute;o chay n&agrave;y vừa nhẹ bụng, lại chứa nhiều chất xơ tốt cho đường ruột, hệ ti&ecirc;u h&oacute;a m&agrave; c&aacute;ch l&agrave;m cũng rất đơn giản, thuận tiện, kh&ocirc;ng l&agrave;m bạn mất nhiều thời gian.</p>

',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],[
                'id' => 171,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/nui-xao-bo-sot-ca-chua-2-cach-lam-cuc-nhanh-cho-bua-sang-dinh-duong_nui-xao-bo-sot-ca-chua-pho-mai.jpg,https://cdn.cet.edu.vn/wp-content/uploads/2018/05/nui-xao.jpg,https://nauankhongkho.com/wp-content/uploads/2016/12/rrrf.png',
                'price' => 200000,
                'name' => 'nui sốt cà chua ',
                'description' => '<p>M&oacute;n nui chay sốt c&agrave; chua l&agrave; c&ocirc;ng thức nấu ăn kết hợp nhiều nguy&ecirc;n liệu gi&agrave;u dinh dưỡng, ngon miệng gi&uacute;p bạn chăm s&oacute;c bữa ăn gia đ&igrave;nh ho&agrave;n hảo. Đặc biệt, nguy&ecirc;n liệu chế biến kh&ocirc;ng qu&aacute; cầu k&igrave; v&agrave; thời gian nấu cũng rất nhanh. Vậy n&ecirc;n, bắt tay v&agrave;o l&agrave;m thử c&ocirc;ng thức nui sốt c&agrave; chua chay n&agrave;y ngay nh&eacute;.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 172,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/nui-xao-nam-chay2.jpg,https://cdn.tgdd.vn/2021/01/CookRecipe/Avatar/nui-xao-chay-sot-cay-thumbnail.jpg,http://4.bp.blogspot.com/-0TNNMoljdvo/Vhck4JqJsGI/AAAAAAAABKo/5zaExOBxU0w/s1600/nui-xao-bo-imonanngon.jpg,https://img-global.cpcdn.com/recipes/88e8b790eb243a0f/680x482cq70/nui-xao-n%E1%BA%A5m-m%E1%BB%91i-recipe-main-photo.jpg',
                'price' => 250000,
                'name' => 'nui xào nấm',
                'description' => '<p>Đổi vị cho bữa cơm chay gia đ&igrave;nh với nguy&ecirc;n liệu mới l&agrave; &ldquo;nui&rdquo; . M&oacute;n nay x&agrave;o với c&aacute;c loại rau củ cũng rất ngon. Ăn gi&ograve;n gi&ograve;n th&ecirc;m t&iacute; rau củ thanh thanh. L&agrave;m m&acirc;m cơm c&agrave;ng th&ecirc;m thanh đạm. C&ugrave;ng với ẩm thực đồ chay l&agrave;m qua c&aacute;c m&oacute;n nui x&agrave;o chay ngon dưới đ&acirc;y nh&eacute;. Từ nui x&agrave;o nấm, nui x&agrave;o c&agrave; chua, nui x&agrave;o b&ograve; cho đến..nui x&agrave;o thập cẩm.</p>',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 173,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/dau-phu-sot-chua-ngot11504841142.jpg,https://ameovat.com/wp-content/uploads/2019/06/cach-lam-mon-dau-phu-sot-chua-ngot-6-600x375.jpg,https://anh.eva.vn/upload/4-2017/images/2017-11-14/chi-20-nghin-dong-co-ngay-mon-dau-phu-sot-chua-ngot-vua-ngon-lai-re-tien-5-1510664257-234-width650height433.jpg,https://www.iunauan.com/images/500x-1/anh1-iunauan.com-phjfof866983750.jpg',
                'price' => 90000,
                'name' => 'đậu chua ngọt chay',
                'description' => '<p>Nếu bạn muốn đổi vị cho bữa ăn quen thuộc của gia đ&igrave;nh nhưng lại kh&ocirc;ng muốn mất qu&aacute; nhiều thời gian cho những m&oacute;n ăn c&oacute; c&aacute;ch nấu cầu kỳ, phức tạp th&igrave; h&atilde;y thử ngay m&oacute;n ăn chay từ đậu phụ c&oacute; t&ecirc;n đậu sốt chua ngọt chay dưới đ&acirc;y nh&eacute;! Đ&acirc;y l&agrave; một trong c&aacute;c m&oacute;n chay từ đậu phụ non rất được y&ecirc;u th&iacute;ch v&igrave; vừa c&oacute; hương vị thơm ngon, lại vừa chế biến nhanh ch&oacute;ng.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 174,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/117059886-3450730661613264-665-4114-1512-1596627907.jpg,https://cachlam9.com/wp-content/uploads/2015/05/Cach-lam-dau-phu-xao-nam.jpg,https://thegioiamthuc.com/wp-content/uploads/2017/12/dau-xao-gia-do.jpg,https://amthucviet18.com/wp-content/uploads/2020/11/1-62.jpg',
                'price' => 60000,
                'name' => 'đậu hũ xào nấm chay',
                'description' => '<p>Đậu hũ x&agrave;o nấm chay l&agrave; một m&oacute;n chay đậu phụ rất hấp dẫn, ngon miệng m&agrave; lại tốt cho sức khỏe. Từng miếng đậu phụ được chi&ecirc;n v&agrave;ng gi&ograve;n, x&agrave;o c&ugrave;ng với c&aacute;c loại nấm dai dai gi&ograve;n gi&ograve;n, n&ecirc;m nếm vừa miệng chắc chắn sẽ l&agrave; m&oacute;n &ldquo;đinh&rdquo; trong m&acirc;m cơm gia đ&igrave;nh.</p>',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 175,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/maxresdefault-20.jpg,http://data.voh.com.vn/voh/Image/2020/02/03/phongngualoangxuongbangdauhunonxaomuophuongvoh3_20200203142259.jpg,https://media.ex-cdn.com/EXP/media.cpcs.vn/files/content/2020/06/22/canhmuopdau-2142.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8Xchk8VHBq1KPLOk4RN1_sWmurTfHrZ4TwA&usqp=CAU',
                'price' => 40000,
                'name' => 'đẫu hũ xào mướp',
                'description' => '<p>Đậu phụ được l&agrave;m từ đậu n&agrave;nh l&agrave; loại nguy&ecirc;n liệu thực phẩm sạch v&agrave; rất tốt cho sức khỏe. M&oacute;n chay từ đậu hũ x&agrave;o với mướp lại c&agrave;ng tuyệt vời hơn khi c&ograve;n c&oacute; thể ph&ograve;ng chống bệnh lo&atilde;ng xương. C&ugrave;ng xem qua v&agrave; l&agrave;m thử c&ocirc;ng thức m&oacute;n đậu hũ x&agrave;o mướp chay n&agrave;y nh&eacute;. Để m&acirc;m cơm th&ecirc;m ngon v&agrave; gia đ&igrave;nh c&agrave;ng th&ecirc;m &ldquo;chắc khỏe</p>
” .',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 176,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/dau-hu-non-sot-nam-kim-cham-recipe-main-photo.jpg,https://cdn.tgdd.vn/2021/02/CookProduct/BeFunky-collage(15)-1200x676-2.jpg,https://anh.eva.vn/upload/3-2017/images/2017-09-06/dau-phu-sot-nam-de-an-dau-sot-nam-8-1504658479-width650height366.jpg,https://cdn.bepcuoi.com/media/650-425-dau-hu-sot-nam-huong-bepcuoi-77.jpg',
                'price' => 50000,
                'name' => 'đậu phụ sốt nấm',
                'description' => '<p>C&oacute; thể khẳng định được đậu phụ sốt nấm c&agrave; chua l&agrave; m&oacute;n ăn được nhiều b&agrave; nội trợ lựa chọn nhất. Cũng dễ hiểu v&igrave; đ&acirc;y được đ&aacute;nh gi&aacute; l&agrave; m&oacute;n ăn rất ngon, l&ocirc;i quấn đặc biệt mất kh&ocirc;ng qu&aacute; nhiều thời gian để thực hiện. C&ugrave;ng xem qua c&ocirc;ng thức m&oacute;n chay với đậu phụ n&agrave;y do ẩm thực đồ chay đề xuất nh&eacute;.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 178,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/su-su-xao-toi.jpg,https://img-global.cpcdn.com/recipes/b384b5c593f06719/1200x630cq70/photo.jpg,https://cdn1.ngonbonmua.com/wp-content/uploads/2016/01/ngon-su-su-xao-toi.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxVFkv29xdzU3PXimOMxESStaW4DZjlcVUyg&usqp=CAU',
                'price' => 45000,
                'name' => 'susu xào tỏi',
                'description' => '<p>Tr&aacute;i su su với h&agrave;m lượng calo v&agrave; cholesterol thấp, nhiều nước c&ugrave;ng l&agrave;m lượng chất xơ cao đặc biệt ph&ugrave; hợp cho c&aacute;c người đang giảm c&acirc;n. H&agrave;m lượng kali cao, &iacute;t natri g&oacute;p phần ổn định &aacute;p lực m&aacute;u trong hệ tuần ho&agrave;n. Kh&ocirc;ng những thế, su su c&ograve;n sản xuất th&ecirc;m lượng vitamin v&agrave; kho&aacute;ng chất cấp thiết cho cơ thể như vitamin C, B1, B2, B6, B9, canxi,&hellip; Th&agrave;nh phần luteolin v&agrave; apigenin c&ograve;n c&oacute; t&aacute;c dụng loại bỏ c&aacute;c gốc tự do ảnh hưởng tới sức khỏe con người.</p>',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 179,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/dia-rau-tien-vua-xao-thap-cam-2.jpg,http://monngonmoingay.com/wp-content/uploads/2015/08/IMG-2315-rau-tien-vua-ngam-chua.png,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZb5fYdffRgofT0pYPYAtU-03ZUrdOq4shUQ&usqp=CAU,https://1.bp.blogspot.com/-iG2TyLUeLzU/YFlpZ08LTUI/AAAAAAAAD94/T_PFF0Wzwt8uWzoLN7omhdg4M030VTpYgCPcBGAYYCw/s511/loi%2Bich%2Bcua%2Brau%2Btien%2Bvua%2Bshop%2Bmama%2Bthang-3.jpg',
                'price' => 70000,
                'name' => 'rau tiến vua xào chay',
                'description' => '<p>Rau tiến vua kh&ocirc;ng chỉ ngon, gi&ograve;n m&agrave; c&ograve;n rất gi&agrave;u dinh dưỡng cũng như c&oacute; thể chế biến theo nhiều kiểu kh&aacute;c nhau. Nếu đ&atilde; ng&aacute;n ngấy với c&aacute;c m&oacute;n rau tiến vua x&agrave;o thịt b&ograve;, rau tiến vua x&agrave;o thịt lợn, x&agrave;o với t&ocirc;m, chả&hellip; th&igrave; h&atilde;y thử ngay m&oacute;n rau tiến vua x&agrave;o chay dưới đ&acirc;y</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 180,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/rau-cai-7.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPEGmHJvC2ITb3S8mww7vNWxHOisAaPccL9g&usqp=CAU,https://cdn3.ivivu.com/2020/12/cai-thia-xao-nam-rom-ivivu-1.jpeg,https://www.iunauan.com/images/700x330/anh1-iunauan.com-jchvvz559340714.jpg',
                'price' => 60000,
                'name' => 'rau cải xào nấm',
                'description' => '<p>Rau cải x&agrave;o nấm l&agrave; một m&oacute;n x&agrave;o chay đơn giản v&agrave; rất dễ l&agrave;m. Bạn chẳng cần phải tốn qu&aacute; nhiều thời gian chế biến hay chi ph&iacute; mua nguy&ecirc;n liệu, chỉ với 15 ph&uacute;t cả chuẩn bị v&agrave; chế biến, bạn đ&atilde; c&oacute; ngay một đĩa rau x&agrave;o xanh m&aacute;t mắt, đậm đ&agrave; thơm ngon chi&ecirc;u đ&atilde;i cả gia đ&igrave;nh.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 181,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/mang-xao-chay-1.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVczBazzAtOuNWjArQTfivCN77XWwGLx1KqQ&usqp=CAU,https://cdn.tgdd.vn/2021/05/CookProduct/t-1200x676-4.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCyutoc0_FcHX6NayAgpgHSqgIFcy0XhxgmA&usqp=CAU',
                'price' => 80000,
                'name' => 'măng xào chay',
                'description' => '<p>C&aacute;ch nấu m&oacute;n chay với măng n&agrave;y kh&ocirc;ng qu&aacute; kh&oacute; khăn trong giai đoạn mua sắm rau củ quả . Chỉ cần nguy&ecirc;n liệu l&agrave; măng tươi v&agrave; mộc nhĩ. C&aacute;ch chế biến th&igrave; v&ocirc; cũng nhanh v&agrave; cho hương vị v&ocirc; c&ugrave;ng đặc trưng, hấp dẫn. Mong mọi người thưởng thức .</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 182,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/photo-1576136852847-15761368528491314630370.jpg,https://media.cooky.vn/recipe/g5/45025/s320x320/cooky-recipe-cover-r45025.jpg,https://img-global.cpcdn.com/005_steps/8ef0390cd7d3a4e4/480x360cq70/photo.jpg,https://media.cooky.vn/recipe/g2/13491/s320x320/cooky-recipe-cover-r13491.jpg',
                'price' => 30000,
                'name' => 'súp lơ xào chay',
                'description' => '<p>S&uacute;p lơ x&agrave;o chay l&agrave; một m&oacute;n chay ngon lại rất đơn giản, dễ l&agrave;m, vừa bổ dưỡng, tốt cho sức khỏe</p>
.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 183,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/su-hao-xao-trung.jpg,https://cdn.tgdd.vn/2021/02/CookProduct/CachLamRauSuHaoXaosNgonNhatRauSuHaoTap19-3screenshot-1200x675.jpg,https://2monngonmoingay.com/wp-content/uploads/2017/03/su-hao-xao-chay.jpg,https://daubepgiadinh.vn/wp-content/uploads/2019/01/su-hao-xao-trung.jpg',
                'price' => 20000,
                'name' => 'xu hào xào chay',
                'description' => '<p>Su h&agrave;o &ndash; một trong những loại rau củ qu&aacute; quen thuộc trong gian bếp của mỗi gia đ&igrave;nh sẽ l&agrave; nguy&ecirc;n liệu ch&iacute;nh của m&oacute;n su h&agrave;o x&agrave;o chay ng&agrave;y h&ocirc;m nay.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 184,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/maxresdefault-4-1.jpg,https://cdn.bepcuoi.com/media/720-hu-tieu-xao-thit-bo-rau-cu-bepcuoi-498.png,https://monngondongian.com/wp-content/uploads/2019/07/M%C3%AC-x%C3%A0o-h%E1%BA%A3i-s%E1%BA%A3n.jpg,https://tuthuoc24h.net/upload/images/hu-tieu-xao-chay.jpg,https://cdn.daynauan.info.vn/wp-content/uploads/2019/01/hu-tieu-xao-gia-he-thanh-dam.jpg',
                'price' => 35000,
                'name' => 'hủ tiếu xào rau củ',
                'description' => '<p>Nếu bạn đ&atilde; thấy ng&aacute;n ngấy c&aacute;c m&oacute;n thịt c&aacute; trong bữa cơm gia đ&igrave;nh thường ng&agrave;y th&igrave; h&atilde;y thử ngay m&oacute;n hủ tiếu x&agrave;o chay nh&eacute;! M&oacute;n hủ tiếu chay n&agrave;y kh&ocirc;ng chỉ c&oacute; hương vị thơm ngon m&agrave; c&ograve;n tốt cho sức khỏe v&igrave; c&oacute; rất nhiều rau của quả x&agrave;o c&ugrave;ng. Vậy bạn đ&atilde; biết c&aacute;ch l&agrave;m hủ tiếu x&agrave;o thập cẩm chay như thế n&agrave;o chưa?</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 185,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/151348-rau-den-xao-toi.jpg,https://yt.cdnxbvn.com/medias/uploads/159/159004-rau-muong-xao-toi-500x340.jpg,https://img.websosanh.vn/v2/users/review/images/d0u5sk0ge54q0.jpg?compress=85,https://cdn.tgdd.vn/2021/03/CookRecipe/GalleryStep/xao-mon-an-14.jpg',
                'price' => 20000,
                'name' => 'rau dền xào tỏi',
                'description' => '<p>Rau dền x&agrave;o chay l&agrave; m&oacute;n ăn thường thấy trong bữa cơm gia đ&igrave;nh v&agrave;o m&ugrave;a h&egrave;. Đ&ocirc;i khi chỉ cần một đĩa rau dền x&agrave;o chay với h&agrave;nh tỏi, b&aacute;t nước canh chua dầm sấu, th&ecirc;m đĩa đậu phụ r&aacute;n gi&ograve;n l&agrave; cả nh&agrave; đ&atilde; c&oacute; một bữa cơm ngon trong trưa h&egrave; n&oacute;ng nực.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 186,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/thanh-pham-710.jpg,https://baothuathienhue.vn/image/fckeditor/upload/2018/20180330/images/nho-du.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsrF38tVuYapPztYTpVqP_jcHeZ78shtv52NNTWaKsfF-TfVaN2oM2hDiZcp67I1Dx3bc&usqp=CAU,https://cdn-www.vinid.net/2020/05/e3bec2ea-n-%C4%91u-%C4%91%E1%BB%A7-xanh-c%C3%B3-t%C3%A1c-d%E1%BB%A5ng-g%C3%AC-1.jpg',
                'price' => 40000,
                'name' => 'đu đủ xào',
                'description' => '<p>Trong số c&aacute;c m&oacute;n x&agrave;o chay ngon dễ nấu lại ngon miệng, kh&ocirc;ng thể kh&ocirc;ng nhắc tới m&oacute;n đu đủ xanh x&agrave;o chay. Nguy&ecirc;n liệu của m&oacute;n chay x&agrave;o n&agrave;y ngo&agrave;i đu đủ xanh th&igrave; chỉ cần th&ecirc;m ch&uacute;t h&agrave;nh l&aacute;, rau m&ugrave;i l&agrave; bạn đ&atilde; c&oacute; ngay một đĩa x&agrave;o chay lạ miệng.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 187,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/dua-xao-chay-2.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD2KTeX9dvisEHz6Rx8azw9KVaFI_IVsEN1w&usqp=CAU,https://i.ytimg.com/vi/f_kY2oITWf4/maxresdefault.jpg,https://static.kenhphatphap.com/photos/15/2020/02/C__ch_l__m_m__n______u_h___chi__n_gi__n_s___t_chua_ng___t_ngon______m______c___c_h___p_d___n.jpg',
                'price' => 40000,
                'name' => 'dứa xào đậu phụ',
                'description' => '<p>Nếu bạn đ&atilde; ch&aacute;n c&aacute;c m&oacute;n đồ x&agrave;o chay từ rau, củ th&ocirc;ng thường th&igrave; h&atilde;y thử ngay m&oacute;n dứa x&agrave;o chay với đậu phụ nh&eacute;! M&oacute;n kh&oacute;m dứa x&agrave;o chay n&agrave;y rất hấp dẫn, l&ocirc;i cuốn kh&ocirc;ng chỉ bởi sắc v&agrave;ng ươm của từng miếng thơm m&agrave; vị dứa chua chua ngọt ngọt kết hợp c&ugrave;ng với đậu phụ gi&ograve;n ruộm chắc chắn sẽ khiến cho mọi th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh bạn phải tấm tắc ngợi khen ngay khi thưởng thức miếng đầu ti&ecirc;n.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 188,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/cach-lam-mon-xao-chay-14.jpg,https://img-global.cpcdn.com/recipes/9e86e87260e409c3/1200x630cq70/photo.jpg,https://img-global.cpcdn.com/005_steps/66cc47b2dcc6ad32/480x360cq70/photo.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMYuB_RHylUIldQGjajb6NQzUxFf2qgRz7gg&usqp=CAU',
                'price' => 40000,
                'name' => 'dứa xào chay ngũ vị',
                'description' => '<p>Nếu bạn đ&atilde; ch&aacute;n c&aacute;c m&oacute;n đồ x&agrave;o chay từ rau, củ th&ocirc;ng thường th&igrave; h&atilde;y thử ngay m&oacute;n dứa x&agrave;o chay với đậu phụ nh&eacute;! M&oacute;n kh&oacute;m dứa x&agrave;o chay n&agrave;y rất hấp dẫn, l&ocirc;i cuốn kh&ocirc;ng chỉ bởi sắc v&agrave;ng ươm của từng miếng thơm m&agrave; vị dứa chua chua ngọt ngọt kết hợp c&ugrave;ng với đậu phụ gi&ograve;n ruộm chắc chắn sẽ khiến cho mọi th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh bạn phải tấm tắc ngợi khen ngay khi thưởng thức miếng đầu ti&ecirc;n.</p>

Image',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 189,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/bap-xao-bo.jpg,https://img-global.cpcdn.com/recipes/a81b65b64d2e046a/1200x630cq70/photo.jpg,https://i.ytimg.com/vi/8ZSMixNvCS4/hqdefault.jpg,http://yeunoitro.net/wp-content/uploads/bap-xao-bo.jpg',
                'price' => 60000,
                'name' => 'bắp xào chay',
                'description' => '<p>Nếu bạn đang t&igrave;m kiếm một m&oacute;n x&agrave;o chay đơn giản m&agrave; lại th&iacute;ch hợp cho cả việc ăn vặt. Cũng như d&ugrave;ng k&egrave;m với cơm th&igrave; m&oacute;n ng&ocirc; non x&agrave;o chay chắc chắn sẽ l&agrave; gợi &yacute; m&agrave; bạn kh&ocirc;ng thể bỏ qua. Vậy c&aacute;ch l&agrave;m ng&ocirc; ngọt x&agrave;o bơ chay như thế n&agrave;o, c&oacute; mất nhiều thời gian kh&ocirc;ng? C&acirc;u trả lời l&agrave; c&aacute;ch l&agrave;m bắp x&agrave;o chay.</p>
 ',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 190,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/photo-9-1.jpg,https://baodansinh.mediacdn.vn/2020/4/24/avatar1587709853346-15877098546001967959313.jpg,https://img-global.cpcdn.com/recipes/e0366a20da66b48e/1200x630cq70/photo.jpg,https://media.cooky.vn/recipe/g1/1592/s800x500/recipe1592-635688355107279580.jpg',
                'price' => 60000,
                'name' => 'giá đỗ xào đậu phụ',
                'description' => '<p>Một m&oacute;n x&agrave;o chay dễ l&agrave;m, ăn ngon m&agrave; bạn kh&ocirc;ng thể bỏ qua đ&oacute; ch&iacute;nh l&agrave; m&oacute;n gi&aacute; đỗ x&agrave;o chay với đậu phụ. Tương tự như m&oacute;n gi&aacute; hẹ x&agrave;o chay hay m&oacute;n gi&aacute; mướp x&agrave;o đậu chay, nguy&ecirc;n liệu chủ đạo của m&oacute;n chay n&agrave;y ch&iacute;nh l&agrave; gi&aacute; đỗ &ndash; vốn được Đ&ocirc;ng y đ&aacute;nh gi&aacute; rất cao về khả năng thanh nhiệt, giải độc, cũng như khả năng bổ sung &ldquo;sinh lực&rdquo; cho ph&aacute;i mạnh. Vậy c&aacute;ch l&agrave;m gi&aacute; x&agrave;o chay như thế n&agrave;o?</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 191,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/nam-rom-xao-rau-cu.jpg,https://hocnauan.edu.vn/wp-content/uploads/2016/07/nam-xao-rau-cu-chay.jpg,https://songkhoe.medplus.vn/wp-content/uploads/2020/06/nam-rom-xao-rau-cu.png,https://img-global.cpcdn.com/recipes/f492bdaed5ec797b/680x482cq70/n%E1%BA%A5m-r%C6%A1m-xao-rau-c%E1%BB%A7-recipe-main-photo.jpg',
                'price' => 80000,
                'name' => 'nấm rơm xào rau củ luộc',
                'description' => '<p>Nấm rơm l&agrave; loại nguy&ecirc;n liệu mang trong m&igrave;nh rất nhiều c&ocirc;ng dụng v&agrave; rất tốt cho sức khỏe. C&aacute;c m&oacute;n chay từ nấm rơm cũng rất đa dạng v&agrave; dễ l&agrave;m. C&oacute; thể kể đến c&aacute;ch l&agrave;m m&oacute;n nấm rơm x&agrave;o chay.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 192,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/mien-xao-chay-kieu-han-quoc-2-1.jpg,https://hocnauan.edu.vn/wp-content/uploads/2018/11/Mon-mien-xao-chay.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSavvEJwRp0DR6Vod54gTq5cp-zikmTLOn3uT1ur1bqqmdC4nnzB3_9U4za976b2-Mes6M&usqp=CAU,https://img.chebienmonngon.net/2017/04/mien-xao-chay-4.jpg',
                'price' => 70000,
                'name' => 'miến xào chay hàn quốc',
                'description' => '<p>H&agrave;n Quốc nổi tiếng với m&oacute;n miến trộn chapchae. M&oacute;n miền n&agrave;y cũng rất nổi tiếng tại Việt Nam v&agrave; thường được d&ugrave;ng ở c&aacute;c nh&agrave; h&agrave;ng H&agrave;n. Sau đ&acirc;y, với c&aacute;ch l&agrave;m miến x&agrave;o chay kiểu H&agrave;n Quốc do ẩm thực đồ chay đề xuất dưới đ&acirc;y, bạn sẽ c&oacute; m&oacute;n miến kh&ocirc;ng thua g&igrave; qu&aacute;n đ&acirc;u nh&eacute;. C&ugrave;ng thử n&agrave;o.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 193,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/photo-7-1.jpg,https://atuankhang.vn/wp-content/uploads/2020/05/nam-dong-co-xao-sup-lo.jpg,https://cdn.bepcuoi.com/media/720-nam-dong-co-xao-bong-cai-dau-hao-bepcuoi-84.jpeg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfkK3H41sF42DxVsJrrdD2nqxawY13EcdSMnFNqSCqzh4X1v_CCI3uNlQtsfkgDgBlE9c&usqp=CAU',
                'price' => 60000,
                'name' => 'nấm đông cô xào rau củ cải',
                'description' => '<p>M&oacute;n rau củ x&agrave;o nấm chay kh&ocirc;ng chỉ c&oacute; hương vị thơm ngon m&agrave; c&ograve;n rất bổ dưỡng, tốt cho sức khỏe. M&oacute;n chay thanh đạm n&agrave;y c&ograve;n c&oacute; m&agrave;u sắc hấp dẫn nhờ sự kết hợp của nhiều loại rau củ quả.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 194,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/maxresdefault-27.jpg,https://img-global.cpcdn.com/recipes/67e8518293be5348/1200x630cq70/photo.jpg,https://i.ytimg.com/vi/VFggbsS4iEI/maxresdefault.jpg,https://i.ytimg.com/vi/s5OXy52NNuE/maxresdefault.jpg',
                'price' => 70000,
                'name' => 'nấm đông cô xào đậu đũa',
                'description' => '<p>M&oacute;n rau củ x&agrave;o nấm chay kh&ocirc;ng chỉ c&oacute; hương vị thơm ngon m&agrave; c&ograve;n rất bổ dưỡng, tốt cho sức khỏe.</p>
 ',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 195,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/photo-4-1.jpg,https://toinayangi.vn/wp-content/uploads/2015/01/cu-dau-xao-tom-1-180x155.jpg,https://img-global.cpcdn.com/recipes/b7069be8f6dbae07/1200x630cq70/photo.jpg,https://2monngonmoingay.com/wp-content/uploads/2017/03/rau-cu-qua-kho-chay-thap-cam-ngon.jpg',
                'price' => 50000,
                'name' => 'củ đậu xào chay',
                'description' => '<p>Củ sắn (hay c&ograve;n gọi l&agrave; củ đậu) c&oacute; t&iacute;nh m&aacute;t, vị ngọt thanh, rất dễ ăn. Loại củ n&agrave;y kh&ocirc;ng chỉ c&oacute; thể ăn sống, hay &eacute;p nước m&agrave; c&ograve;n c&oacute; thể chế biến th&agrave;nh m&oacute;n x&agrave;o chay ăn vừa lạ miệng, vừa tốt cho sức khỏe.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 196,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/img_7921_45150.jpg,http://khoahocphattrien.vn/Images/Uploaded/Share/2017/03/22/123.jpg,https://yummyday.vn/uploads/images/cach-lam-dau-phu-sot-cay.jpg,https://yummyday.vn/uploads/images/dau-hu-sot-ca-chua-chay.jpg',
                'price' => 50000,
                'name' => 'đậu phụ sốt cà chua cay',
                'description' => '<p>Đậu phụ hay c&ograve;n g&oacute;i l&agrave; đậu hũ l&agrave; m&oacute;n nguy&ecirc;n liệu bổ dưỡng với hương vị nhẹ nh&agrave;ng. Thường được kết hợp với c&aacute;c loại nước sốt để tạo n&ecirc;n m&oacute;n ăn đậm đ&agrave;, đưa cơm. Sau đ&acirc;y ẩm thực đồ chay sẽ chia sẻ c&aacute;c c&aacute;ch l&agrave;m m&oacute;n đậu phụ sốt c&agrave; chua m&agrave; ai ai cũng m&ecirc;. Từ m&oacute;n đậu chay vị cay tới ngọt. Từ m&oacute;n Việt Nam cho đến đậu sốt kiểu Nhật.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 197,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/dau-que-xao-nam-thom-dau-hu-recipe-main-photo.jpg,https://yt.cdnxbvn.com/medias/uploads/136/136394-dau-hu-xao-dau-que.jpg,https://daubepgiadinh.vn/wp-content/uploads/2018/12/dau-que-xao-dau-hu.jpg,https://hitavegan.com/wp-content/uploads/2019/08/hita-vegan-mon-chay-de-lam-tu-dau-phu-xao-que-ca-rot.png',
                'price' => 60000,
                'name' => 'đẫu que xào đậu phụ',
                'description' => '<p>Sau đ&acirc;y l&agrave; c&ocirc;ng thức m&oacute;n đậu que x&agrave;o với đậu hũ ngon tại nh&agrave;.C&aacute;ch nấu m&oacute;n chay với đậu c&ocirc; ve v&agrave; đậu phụ n&agrave;y kh&ocirc;ng qu&aacute; phức tạp ở đoạn mua sắm nguy&ecirc;n liệu cũng như c&aacute;ch chế biến nhưng sở hữu vị hương rất ngon v&agrave; thơm, hấp dẫn.</p>',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 198,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/dau-hu-xao-la-lot.jpg,http://yeunoitro.net/wp-content/uploads/2015/04/dau-phu-xao-sa-ot.jpg,https://img-global.cpcdn.com/recipes/e9cd0230b3c1b184/680x482cq70/d%E1%BA%ADu-hu-xao-la-l%E1%BB%91t-recipe-main-photo.jpg,https://afamilycdn.com/k:thumb_w/600/Qalypm8xccccccccccccW2vZ1VroR/Image/2013/07/01/Dau-phu-(1)-3f3c1/dau-phu-cuon-la-lot-thanh-dam-cho-ngay-ram.jpg',
                'price' => 50000,
                'name' => 'đậu phụ xào lá lốt',
                'description' => '<p>Hương vị b&ugrave;i b&ugrave;i, thanh thanh của đậu hũ kết hợp với l&aacute; lốt sẽ tạo th&agrave;nh m&oacute;n ngon tuyệt vời v&agrave; mới lạ cho bữa cơm gia đ&igrave;nh nh&agrave; bạn.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 199,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/nui-xao-thap-cam-chay-1.jpg,http://monngonviet.net/images/news/2010-11-23/nui-xao-ga-cho-nhung-ngay-ban-ron.jpg,https://photo.famicook.com/image/nui-xao-thap-cam-i3698-640w.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi_J4WZL_mKVTwUG8mPR6AW8EJf1GkKZfIbg&usqp=CAU',
                'price' => 60000,
                'name' => 'nui xào rau củ',
                'description' => '<p>Đổi vị cho bữa cơm chay gia đ&igrave;nh với nguy&ecirc;n liệu mới l&agrave; &ldquo;nui&rdquo; . M&oacute;n nay x&agrave;o với c&aacute;c loại rau củ cũng rất ngon. Ăn gi&ograve;n gi&ograve;n th&ecirc;m t&iacute; rau củ thanh thanh. L&agrave;m m&acirc;m cơm c&agrave;ng th&ecirc;m thanh đạm. C&ugrave;ng với ẩm thực đồ chay l&agrave;m qua c&aacute;c m&oacute;n nui x&agrave;o chay ngon dưới đ&acirc;y nh&eacute;. Từ nui x&agrave;o nấm, nui x&agrave;o c&agrave; chua, nui x&agrave;o b&ograve; cho đến..nui x&agrave;o thập cẩm.</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 200,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/dau-hu-hap-la-han-ten-dep-an-ngon-ma-lai-de-lam.jpeg,https://toinayangi.vn/wp-content/uploads/2015/03/mon-chay-dau-hu-la-han-hap-dan-2.jpg,https://img-global.cpcdn.com/recipes/299040015029f1cb/1200x630cq70/photo.jpg,https://static.kenhphatphap.com/photos/15/2020/02/C__ch_l__m_m__n______u_h___la_h__n_m__n___n_chay_r___t_ngon_v________p_m___t.jpg',
                'price' => 100000,
                'name' => 'đậu hũ hấp la hán',
                'description' => '<p>Trong số c&aacute;c m&oacute;n chay ngon dễ l&agrave;m từ đậu phụ, đậu hũ hấp chay được rất nhiều người y&ecirc;u th&iacute;ch. Từng miếng đậu phụ trắng n&otilde;n n&agrave; được hấp một c&aacute;ch kh&eacute;o l&eacute;o kh&ocirc;ng hề vỡ n&aacute;t, m&agrave; vẫn giữ nguy&ecirc;n được trọn vẹn h&igrave;nh d&aacute;ng cũng như hương vị thơm ngon, thanh m&aacute;t, thuần khiết chắc chắn sẽ khiến bạn cảm thấy bất ngờ khi thưởng thức</p>
',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ]



        ]);
    }
}
