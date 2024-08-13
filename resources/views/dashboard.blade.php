@extends('main')
@section('head')

@endsection
@section('content')
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Buscar">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Ordenes actules</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Nombre</td>
                                <td>Precio</td>
                                <td>Pago</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Juan</td>
                                <td>$1200</td>
                                <td>Pagado</td>
                                <td><span class="status delivered">Aceptado</span></td>
                            </tr>

                            <tr>
                                <td>Edgar</td>
                                <td>$110</td>
                                <td>pendiente</td>
                                <td><span class="status pending">Pendiente</span></td>
                            </tr>

                            <tr>
                                <td>Luis</td>
                                <td>$1200</td>
                                <td>rechazado</td>
                                <td><span class="status return">Cancelado</span></td>
                            </tr>

                            <tr>
                                <td>Marco</td>
                                <td>$620</td>
                                <td>Devolucion</td>
                                <td><span class="status inProgress">En devolucion</span></td>
                            </tr>

                            <tr>
                                <td>Irving</td>
                                <td>$1200</td>
                                <td>Pagado</td>
                                <td><span class="status delivered">Aceptado</span></td>
                            </tr>

                            <tr>
                                <td>Fernando</td>
                                <td>$110</td>
                                <td>pendiente</td>
                                <td><span class="status pending">pendiente</span></td>
                            </tr>

                            <tr>
                                <td>Manuel</td>
                                <td>$1200</td>
                                <td>Devolucion</td>
                                <td><span class="status return">Cncelado</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Cncelado</td>
                                <td><span class="status inProgress">En devolucion</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Mejores Vendedores</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('img/customer02.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Sucursal 1</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('img/customer01.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Sucursal 2</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('img/customer02.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Sucursal 2</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('img/customer01.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Sucursal 3</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('img/customer02.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Sucursal 4</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('img/customer01.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Sucursal 1</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('img/customer01.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Sucursal 2</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('img/customer02.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Sucursal 4</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    @stop