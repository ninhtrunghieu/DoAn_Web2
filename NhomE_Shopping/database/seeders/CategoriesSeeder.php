<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 71, 'category_name' => 'Nội thất phòng tắm', 'parentId' => 0, 'alias' => 'noi-that-phong-tam', 'created_at' => '2024-10-10 10:23:48', 'updated_at' => '2024-10-10 10:25:18'],
            ['id' => 72, 'category_name' => 'Nội thất phòng khách', 'parentId' => 0, 'alias' => 'noi-that-phong-khach', 'created_at' => '2024-10-10 10:23:56', 'updated_at' => '2024-10-10 10:23:56'],
            ['id' => 73, 'category_name' => 'Nội thất phòng ăn', 'parentId' => 0, 'alias' => 'noi-that-phong-an', 'created_at' => '2024-10-10 10:24:02', 'updated_at' => '2024-10-10 10:24:02'],
            ['id' => 74, 'category_name' => 'Nội thất phòng làm việc', 'parentId' => 0, 'alias' => 'noi-that-phong-lam-viec', 'created_at' => '2024-10-10 10:24:10', 'updated_at' => '2024-10-10 10:24:10'],
            ['id' => 75, 'category_name' => 'Nội thất phòng ngủ', 'parentId' => 0, 'alias' => 'noi-that-phong-ngu', 'created_at' => '2024-10-10 10:24:17', 'updated_at' => '2024-10-10 10:24:17'],
            ['id' => 76, 'category_name' => 'Nội thất phòng sách', 'parentId' => 0, 'alias' => 'noi-that-phong-sach', 'created_at' => '2024-10-10 10:24:26', 'updated_at' => '2024-10-10 10:24:26'],
            ['id' => 77, 'category_name' => 'Không gian ngoài trời', 'parentId' => 0, 'alias' => 'khong-gian-ngoai-troi', 'created_at' => '2024-10-10 10:25:32', 'updated_at' => '2024-10-10 10:25:32'],
            ['id' => 78, 'category_name' => 'Nội thất phòng cho trẻ', 'parentId' => 0, 'alias' => 'noi-that-phong-cho-tre', 'created_at' => '2024-10-10 10:26:42', 'updated_at' => '2024-10-10 10:26:42'],
            ['id' => 79, 'category_name' => 'Gương', 'parentId' => 71, 'alias' => 'guong', 'created_at' => '2024-10-10 10:32:20', 'updated_at' => '2024-10-10 10:32:20'],
            ['id' => 80, 'category_name' => 'Tủ phòng tắm', 'parentId' => 71, 'alias' => 'tu-phong-tam', 'created_at' => '2024-10-10 10:34:09', 'updated_at' => '2024-10-10 10:34:09'],
            ['id' => 81, 'category_name' => 'Kệ phòng tắm', 'parentId' => 71, 'alias' => 'ke-phong-tam', 'created_at' => '2024-10-10 10:34:21', 'updated_at' => '2024-10-10 10:34:21'],
            ['id' => 82, 'category_name' => 'Thảm phòng tắm', 'parentId' => 71, 'alias' => 'tham-phong-tam', 'created_at' => '2024-10-10 10:35:30', 'updated_at' => '2024-10-10 10:35:30'],
            ['id' => 83, 'category_name' => 'Bàn Cafe', 'parentId' => 72, 'alias' => 'ban-cafe', 'created_at' => '2024-10-10 10:35:53', 'updated_at' => '2024-10-10 10:35:53'],
            ['id' => 84, 'category_name' => 'Tủ kệ TV', 'parentId' => 72, 'alias' => 'tu-ke-tv', 'created_at' => '2024-10-10 10:36:08', 'updated_at' => '2024-10-10 10:36:08'],
            ['id' => 85, 'category_name' => 'Ghế thư giãn', 'parentId' => 72, 'alias' => 'ghe-thu-gian', 'created_at' => '2024-10-10 10:36:20', 'updated_at' => '2024-10-10 10:36:20'],
            ['id' => 86, 'category_name' => 'Sản phẩm gắn tường', 'parentId' => 72, 'alias' => 'san-pham-gan-tuong', 'created_at' => '2024-10-10 10:36:35', 'updated_at' => '2024-10-10 10:36:35'],
            ['id' => 87, 'category_name' => 'Đèn sàn', 'parentId' => 72, 'alias' => 'den-san', 'created_at' => '2024-10-10 10:36:45', 'updated_at' => '2024-10-10 10:36:45'],
            ['id' => 88, 'category_name' => 'Ghế đôn', 'parentId' => 72, 'alias' => 'ghe-don', 'created_at' => '2024-10-10 10:37:12', 'updated_at' => '2024-10-10 10:37:12'],
            ['id' => 89, 'category_name' => 'Sản phẩm gắn tường', 'parentId' => 72, 'alias' => 'san-pham-gang-tuong', 'created_at' => '2024-10-10 10:37:32', 'updated_at' => '2024-10-10 10:37:32'],
            ['id' => 90, 'category_name' => 'Ghế ăn', 'parentId' => 73, 'alias' => 'ghe-an', 'created_at' => '2024-10-10 10:37:57', 'updated_at' => '2024-10-10 10:37:57'],
            ['id' => 91, 'category_name' => 'Bàn ăn', 'parentId' => 73, 'alias' => 'ban-an', 'created_at' => '2024-10-10 10:38:51', 'updated_at' => '2024-10-10 10:38:51'],
            ['id' => 92, 'category_name' => 'Giá để bát đĩa', 'parentId' => 73, 'alias' => 'gia-de-bat-dia', 'created_at' => '2024-10-10 10:39:37', 'updated_at' => '2024-10-10 10:39:37'],
            ['id' => 93, 'category_name' => 'Bàn bếp', 'parentId' => 73, 'alias' => 'ban-bep', 'created_at' => '2024-10-10 10:39:48', 'updated_at' => '2024-10-10 10:39:48'],
            ['id' => 94, 'category_name' => 'Đồng hồ', 'parentId' => 72, 'alias' => 'dong-ho', 'created_at' => '2024-10-10 10:39:58', 'updated_at' => '2024-10-10 10:39:58'],
            ['id' => 95, 'category_name' => 'Bàn làm việc', 'parentId' => 74, 'alias' => 'ban-lam-viec', 'created_at' => '2024-10-10 10:40:41', 'updated_at' => '2024-10-10 10:40:41'],
            ['id' => 96, 'category_name' => 'Ghế làm việc', 'parentId' => 74, 'alias' => 'ghe-lam-viec', 'created_at' => '2024-10-10 10:40:52', 'updated_at' => '2024-10-10 10:40:52'],
            ['id' => 97, 'category_name' => 'Tủ đựng hồ sơ', 'parentId' => 74, 'alias' => 'tu-dung-ho-so', 'created_at' => '2024-10-10 10:41:03', 'updated_at' => '2024-10-10 10:41:03'],
            ['id' => 98, 'category_name' => 'Bàn làm việc thông minh', 'parentId' => 74, 'alias' => 'ban-lam-viec-thong-minh', 'created_at' => '2024-10-10 10:41:18', 'updated_at' => '2024-10-10 10:41:18'],
            ['id' => 99, 'category_name' => 'Kệ sách', 'parentId' => 74, 'alias' => 'ke-sach', 'created_at' => '2024-10-10 10:41:42', 'updated_at' => '2024-10-10 10:41:42'],
            ['id' => 100, 'category_name' => 'Giường ngủ', 'parentId' => 75, 'alias' => 'giuong-ngu', 'created_at' => '2024-10-10 10:41:51', 'updated_at' => '2024-10-10 10:41:51'],
            ['id' => 101, 'category_name' => 'Tủ quần áo', 'parentId' => 75, 'alias' => 'tu-quan-ao', 'created_at' => '2024-10-10 10:42:09', 'updated_at' => '2024-10-10 10:42:09'],
            ['id' => 102, 'category_name' => 'Bàn trang điểm', 'parentId' => 75, 'alias' => 'ban-trang-diem', 'created_at' => '2024-10-10 10:42:26', 'updated_at' => '2024-10-10 10:42:26'],
            ['id' => 103, 'category_name' => 'Đèn ngủ', 'parentId' => 75, 'alias' => 'den-ngu', 'created_at' => '2024-10-10 10:42:39', 'updated_at' => '2024-10-10 10:42:39'],
            ['id' => 104, 'category_name' => 'Chăn ga gối', 'parentId' => 75, 'alias' => 'chan-ga-goi', 'created_at' => '2024-10-10 10:43:02', 'updated_at' => '2024-10-10 10:43:02'],
            ['id' => 105, 'category_name' => 'Gối ngủ', 'parentId' => 75, 'alias' => 'goi-ngu', 'created_at' => '2024-10-10 10:43:22', 'updated_at' => '2024-10-10 10:43:22'],
            ['id' => 106, 'category_name' => 'Ô che ngoài trời', 'parentId' => 77, 'alias' => 'o-che-ngoai-troi', 'created_at' => '2024-10-10 10:54:29', 'updated_at' => '2024-10-10 10:54:29'],
            ['id' => 107, 'category_name' => 'Giường ngủ', 'parentId' => 78, 'alias' => 'giuong-ngu', 'created_at' => '2024-10-10 10:54:39', 'updated_at' => '2024-10-10 10:54:39'],
            ['id' => 108, 'category_name' => 'Bàn học', 'parentId' => 78, 'alias' => 'ban-hoc', 'created_at' => '2024-10-10 10:54:54', 'updated_at' => '2024-10-10 10:54:54'],
            ['id' => 109, 'category_name' => 'Giá sách', 'parentId' => 78, 'alias' => 'gia-sach', 'created_at' => '2024-10-10 10:55:01', 'updated_at' => '2024-10-10 10:55:01'],
            ['id' => 110, 'category_name' => 'Rèm cửa', 'parentId' => 78, 'alias' => 'rem-cua', 'created_at' => '2024-10-10 10:55:08', 'updated_at' => '2024-10-10 10:55:08'],
            ['id' => 111, 'category_name' => 'Đồ trang trí', 'parentId' => 0, 'alias' => 'do-trang-tri', 'created_at' => '2024-10-10 10:55:14', 'updated_at' => '2024-10-10 10:55:14'],
            ['id' => 112, 'category_name' => 'Đồ trang trí vải', 'parentId' => 111, 'alias' => 'do-trang-tri-vai', 'created_at' => '2024-10-10 10:55:26', 'updated_at' => '2024-10-10 10:56:05'],
            ['id' => 113, 'category_name' => 'Đồ trang trí khác', 'parentId' => 111, 'alias' => 'do-trang-tri-khac', 'created_at' => '2024-10-10 10:55:42', 'updated_at' => '2024-10-10 10:55:42'],
            ['id' => 114, 'category_name' => 'Đồ trang trí gỗ', 'parentId' => 111, 'alias' => 'do-trang-tri-go', 'created_at' => '2024-10-10 10:55:56', 'updated_at' => '2024-10-10 10:55:56'],
            ['id' => 115, 'category_name' => 'Ghế Sofa', 'parentId' => 72, 'alias' => 'ghe-sofa', 'created_at' => '2024-10-10 10:58:25', 'updated_at' => '2024-10-10 10:58:25'],
        ]);
    }
}
