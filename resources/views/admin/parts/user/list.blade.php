<?php 
    $myAsset = asset('freshcart'); 
?>

<div class="row">
    <div class="col-lg-12">
          <div class="mb-8">
             <!-- heading -->
             <h1 class="mb-1">{{$data['status']}}</h1>
             <p>There are 5 products in this wishlist.</p>
          </div>
          <div>
             <!-- table -->
             <div class="table-responsive">
                <table class="table text-nowrap">
                   <thead class="table-light">
                      <tr>
                         <th>
                            <!-- form check -->
                            <div class="form-check">
                        <!-- input --><input class="form-check-input" type="checkbox" value="" id="checkAll">
                        <!-- label --><label class="form-check-label" for="checkAll">
                        </label>
                            </div>
                         </th>
                         <th>Picture</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Provider</th>
                         <th>Created At</th>
                         <th>Action</th>
                      </tr>
                   </thead>
                   <tbody>
                      @for ($i = 0; $i < 10; $i++)
                      <tr>
                        <td class="align-middle">
                           <!-- form check -->
                           <div class="form-check">
                               <!-- input --><input class="form-check-input" type="checkbox" value="" id="chechbox{{$i}}">
                               <!-- label --><label class="form-check-label" for="chechbox{{$i}}">
                               </label>
                           </div>
                        </td>
                        <td class="align-middle">
                           <a href="#"><img src="{{$myAsset}}/images/products/product-img-18.jpg" class="icon-shape icon-xxl" alt=""></a>
                        </td>
                        <td class="align-middle">
                           <div>
                           <h5 class="fs-6 mb-0"><a href="#" class="text-inherit">Ngoc Van Tu</a></h5>
                           </div>
                        </td>
                        <td class="align-middle">tungocvan@gmail.com</td>
                        <td class="align-middle"><span class="badge bg-success">google</span></td>
                        <td class="align-middle">
                            2023-03-08 04:45:58
                        </td>
                        <td class="align-middle "><a href="#" class="text-muted" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete">
                           <i class="feather-icon icon-trash-2"></i>
                           <i class="feather-icon icon-edit-2"></i>
                           </a>
                        </td>
                     </tr> 
                      @endfor  
                                          
                   </tbody>
       </table>
       </div>
     </div>
     </div>
     </div>