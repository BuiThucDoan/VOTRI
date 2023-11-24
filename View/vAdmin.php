


            <!-- START ORDERS TABS -->

            <div class="card">

                <!-- TABS BUTTONS -->

                <div class="card-header tab" style="padding:0px;">
                    <button class="tablinks_orders active" onclick="openTab(event, 'recent_orders','tabcontent_orders','tablinks_orders')">Phiếu đặt món</button>
                    <button class="tablinks_orders" onclick="openTab(event, 'completed_orders','tabcontent_orders','tablinks_orders')">Phiếu đặt món đã hoàn thành</button>
                    <button class="tablinks_orders" onclick="openTab(event, 'canceled_orders','tabcontent_orders','tablinks_orders')">Phiếu đặt món đã hủy</button>
                    <div class="container-1" style="margin-left: 1000px; margin-top: 15px">
                        <input type="search" id="search" placeholder="Tìm kiếm..." style="height: 32px; width: 150px; padding: 5px; font-size: 14px;">
                        <button type="button" class="btn-search" onclick="searchFunction()" style="height: 32px;">
                            <i class="fa fa-search"></i>
                        </button>
  					</div>
                </div>

                <!-- TABS CONTENT -->
                
                <div class="card-body">
                    <div class='responsive-table'>

                        <!-- RECENT ORDERS -->

                        <table class="table X-table tabcontent_orders" id="recent_orders" style="display:table">
                            <thead>
                                <tr>
                                    <th>
                                        Thời gian tạo phiếu
                                    </th>
                                    <th>
                                        Món đã chọn
                                    </th>
                                    <th>
                                        Số lượng
                                    </th>
                                    <th>
                                        Giá
                                    </th>
                                    <th>
                                        Hình sản phẩm
                                    </th>
                                    <th>
                                        Quản lý 
                                    </th>
                                </tr>
                            </thead>
                           
                        </table>

                        <!-- COMPLETED ORDERS -->

                        <table class="table X-table tabcontent_orders" id="completed_orders" >
                            <thead>
                                <tr>
                                    <th>
                                        Món đã chọn
                                    </th>
                                    <th>
                                        Số lượng
                                    </th>
                                    <th>
                                        Giá
                                    </th>
                                    <th>
                                        Hình sản phẩm
                                    </th>
                                    <th>
                                        ...
                                    </th>
                                </tr>
                            </thead>
                        </table>

                        <!-- CANCELED ORDERS -->

                        <table class="table X-table tabcontent_orders" id="canceled_orders">
                            <thead>
                                <tr>
                                    <th>
                                        Thời gian tạo phiếu
                                    </th>
                                    <th>
                                        Lý do hủy
                                    </th>
                                      <th>
                                        ...
                                    </th>
                                </tr>
                            </thead>
                           
                        </table>
                    </div>
                </div>
            </div>

          

        



