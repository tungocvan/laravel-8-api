<?php 
    use App\Models\Doctors;
    use Maatwebsite\Excel\Facades\Excel;
    use App\Imports\ProductsImport;    
    use App\Imports\ThuocImport;
    use App\Models\Thuoc;
    function isDoctorActive($email){
        $count = Doctors::where('email',$email)->where('is_active',1)->count();
        if($count > 0) {
            return true;
        }
        return false;
    }

    function ExceltoArray($file)
    {
        $products = Excel::toArray(new ProductsImport, storage_path() .$file);        
        $items =[];        
        foreach($products[0] as $key => $product){
            $temp = [];
            if($key > 0){
                foreach($product as $i => $item){         
                    $itemTemp = (string)$products[0][$key][$i];
                    if($products[0][0][$i] == 'images'){
                        $images = explode(';',$itemTemp);
                        //$j=0;
                        foreach($images as $j => $image){                            
                            $images[$j] = array('src' => $image);
                        }
                        //dd($images);
                        $itemTemp = $images;
                    }
                    if($products[0][0][$i] == 'categories'){
                        $categories = explode(';',$itemTemp);
                        foreach($categories as $j => $categorie){
                            
                            $categories[$j] = array('id' => $categorie);
                        }
                        //dd($images);
                        $itemTemp = $categories;
                    }
                    $temp[$products[0][0][$i]] = $itemTemp; 
                                     
                }
                array_push($items,$temp);
                // Ghi vào database
                //$status = $this->woocommerce->addProduct($temp);
            }
                
            
        } 
        return $items;
    }

    function ExceltoArrayUpload($file){
        $products = Excel::toArray(new ThuocImport,$file);          
        $items =[]; 
        $chunkSize = 0; // kích thước của từng lô dữ liệu
        $itemsCount = 0;
        foreach($products[0] as $key => $product){
            $temp = [];            
            if($key > 0){
                foreach($product as $i => $item){         
                    $itemTemp = (string)$products[0][$key][$i];                    
                    $temp[$products[0][0][$i]] = $itemTemp; 
                                     
                }
                $chunkSize = $chunkSize +1;
                array_push($items,$temp);
                if($chunkSize == 2000 ){
                    // Ghi vào database
                    echo "Bắt đầu ghi... \n";
                    Thuoc::insert($items);
                    $itemsCount = $itemsCount + $chunkSize;
                    $chunkSize = 0;
                    $items = [];
                    echo "Đã import xong $itemsCount bản ghi. \n";
                    
                }
                
                //$status = $this->woocommerce->addProduct($temp);
            }
                
        }  

        if(count($items) > 0){
            $itemsCount = (string)(count($items)+$itemsCount);
            Thuoc::insert($items);
            echo "Đã import xong $itemsCount bản ghi. \n";
        }

        return 'Đã import xong.';
    }
    function ExceltoArrayUploadBackup($file){
        $products = Excel::toArray(new ThuocImport, storage_path() .$file);  
        $items =[]; 

        foreach($products[0] as $key => $product){
            $temp = [];
            if($key > 0){
                foreach($product as $i => $item){         
                    $itemTemp = (string)$products[0][$key][$i];                    
                    $temp[$products[0][0][$i]] = $itemTemp; 
                                     
                }
                array_push($items,$temp);
                // Ghi vào database
                //$status = $this->woocommerce->addProduct($temp);
            }
                
            
        }  
        return $items;
    }

    // public function importSqlFile($sql_file)
    //     {
    //         // Kiểm tra file SQL có tồn tại hay không
    //         if (!file_exists($sql_file)) {
    //             return "File not found";
    //         }

    //         // Lấy nội dung của file SQL
    //         $sql_content = file_get_contents($sql_file);

    //         // Thực thi các câu lệnh SQL từ file
    //         try {
    //             DB::unprepared($sql_content);
    //             return "Imported successfully";
    //         } catch (Exception $e) {
    //             return "Error importing file: " . $e->getMessage();
    //         }
    //     }

?>