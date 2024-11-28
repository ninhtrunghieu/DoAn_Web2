<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id(); // Tạo cột id tự động tăng
        $table->string('name'); // Tên sản phẩm
        $table->string('alias'); // Alias sản phẩm
        $table->integer('price'); // Giá sản phẩm
        $table->integer('quatity'); // Số lượng sản phẩm
        $table->integer('categoryId'); // ID danh mục
        $table->integer('viewcount'); // Số lượt xem
        $table->string('homeflag', 10)->default(''); // Cờ sản phẩm trên trang chủ
        $table->string('hotflag', 10)->default(''); // Cờ sản phẩm hot
        $table->timestamps(); // Cột created_at và updated_at
        $table->longText('description'); // Mô tả sản phẩm
        $table->integer('ownerId'); // ID chủ sở hữu
        $table->string('images'); // Đường dẫn ảnh sản phẩm
        $table->longText('content'); // Nội dung chi tiết sản phẩm
        $table->integer('discount')->nullable(); // Giảm giá sản phẩm (nullable)
        $table->string('isdiscount', 10)->default(''); // Cờ giảm giá
    });
    // Thêm Full-text index cho các trường tìm kiếm
    DB::statement('ALTER TABLE products ADD FULLTEXT(name, description)');
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Xóa FULLTEXT index (nếu cần trước khi xóa bảng)
        if (DB::select("SHOW INDEX FROM products WHERE Key_name = 'name_description_fulltext'")) {
            DB::statement('ALTER TABLE products DROP INDEX name_description_fulltext');
        }
        Schema::dropIfExists('products');
    }
}
