<template>
  <div>
    <Navbar></Navbar>
       <!-- Page Title -->
        <div class="jumbotron jumbotron-fluid menu-component mt-5">
            <h3 class="text-center menu-header">Order Delicious Dishes</h3>
            <h3 class="text-center menu-header">and get Doorstep Delivery</h3>
        </div>
        <div class="row menu-flex-row">
            <div class="col-3">
                <h5 class="text-center"><b>Menu Available</b></h5>
            </div>
            <div class="col-8">
                <div class="view-order">
                    <div class="row">
                        <div class="col-8">
                            <a href="#" data-toggle="modal" data-target="#checkoutModal">
                                <strong><i class="ti ti-shopping-cart" style="color: black;"> View Order</i></strong>
                            </a>
                        </div>
                        <div class="col-4">
                            <p style="color:orange"><b>Cart</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal / Checkout -->
        <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Your Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <table class="table-cart">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th >Price</th>
                                <th >Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tr>
                                <td class="title">
                                    <span class="name">product name</span><br/>
                                        <input name="quantity" style="width: 50px;" type="number" value="" class="name" min="1" max="10" /><br />
                                        <span class="name"> +acoompaniment</span>
                                        <span class="name">Size : </span>
                                </td>
                                <td id="getPrice" class="price">Ksh. </td>
                                <td id="itemTotal" class="price">Ksh. </td>
                                <td class="actions">
                                      <a href="" class="action-icon" ><i class="fa fa-refresh"></i></a>
                                        <button  class="action-icon" type="submit" style="background: none; padding: 0px; border: none;"><i style="color: #808080;" class="fa fa-refresh"></i></button>
                                        <br />
                                      <input type="hidden" name="cartId" value="" />
                                    <a href="#" class="action-icon" ><i class="ti ti-close"></i></a>
                                </td>
                            </tr>
                    </table>
                    <div class="row text-md bottom-button">
                        <div class="col-7 ml-auto"><strong><a href="#">Proceed to pay</a></strong></div>
                        <div class="col-5 mr-auto" id="totalDisplay"><strong>Ksh.</strong></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row menu-flex-row">
            <div class="col-3 col-xs-12 order-first nav-side-menu">
                <!-- Menu Navigation -->
                <nav id="menu-navigation">
                    <ul class="nav nav-menu">
                        <li v-for="cat in fetchcategories" :key="cat.id">
                            <a href="#" >{{cat.category_name}}</a>
                        </li>
                    </ul>
                    <ul class="nav nav-menu">
                        <li><a href="" >categories</a></li>
                        <li><a href="" >categories</a></li>
                        <li><a href="" >categories</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-8 col-xs-12 order-last">
                <div id="menuBurgersContent" class="menu-category" >
                    <!-- Menu Item -->
                    <div class="row menu-row">
                        <div class="col-6">
                            <div class="card menu-card">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-7">
                                            <h6 class="mb-0"><b></b></h6>
                                            <span
                                                class="text-muted text-sm"></span>
                                            <br>
                                            <br>
                                            <br>

                                            <button type="button" class="btn btn-dark btn-xs"
                                                    data-target="#productModal"
                                                    data-toggle="modal"><span>Place order</span>
                                            </button>
                                        </div>
                                        <div class="col-5 menu-image">
                                                <img class="img-fluid" src="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <!-- Modal / Product -->
                        <div class="modal fade hidden-lg" id="productModal" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-lg dark bg-dark">
                                        <div class="bg-image"><img src="#" alt=""></div>
                                        <h4 class="modal-title">Specify your dish</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                                    </div>
                                    <div class="modal-product-details">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <h6 class="mb-0"></h6>
                                                <span class="text-muted"></span>
                                            </div>
                                            <span id="getPrice" class="text-md">price</span>
                                        </div>
                                        <div class="modal-body panel-details-container">
                                            <!-- Panel Details / Size -->
                                            <div class="panel-details">
                                                    <h5 class="panel-details-title">
                                                        Choose One Accompaniment
                                                    </h5>
                                                    <div>
                                                        <div class="panel-details-content">
                                                            <div class="form-group">
                                                                <label class="custom-control custom-radio">
                                                                    <input name="accompaniment" value="#" type="radio" class="custom-control-input" required>
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description">accompaniment</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        <!-- Panel Details / Additions -->
                                            <div class="panel-details">
                                                    <div class="row mb-5">
                                                        <div class="form-group col-sm-12">
                                                          <label>Delivery time:</label>
                                                            <div class="select-container">
                                                                <select id="selSize" name="size" class="form-control selSize" required>
                                                                    <option value="">Select Size</option>
                                                                            <option value="">size and price</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer button-container">
                                                <div class="mr-auto">
                                                    <button type="submit" class="btn btn-dark" >Continue Ordering</button>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#">
                                                        <button class="btn btn-dark btn-xs">
                                                            Proceed to pay
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</template>

<script>

// @ is an alias to /src
import Navbar from '../components/Navbar.vue'
import SideMenu from '../components/SideMenu.vue'
export default {
  name: "home",
  components: {
      Navbar,SideMenu
  },
  data(){
      return{
          //fetch categories from the db
          fetchcategories:{}
      }
  },
  methods:{
        loadCategories(){
            axios.get("api/fetchcategories").then(({ data }) => (this.fetchcategories = data));
        },
        created() {
            this.loadCategories();
            /* this method sends http request every three seconds */
            //setInterval(() => this.loadCategories(), 3000);
            Fire.$on('AfterCreate', () =>{
                this.loadCategories();
            });
        }
  }
};
</script>
