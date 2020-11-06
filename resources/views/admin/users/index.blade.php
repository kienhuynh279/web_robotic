@extends('layouts.backend')

@section('title')
Trang quản lý người dùng
@endsection

@section('content')
<div class="content">
    <div class="row row-deck">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="{{route("admin.users.create")}}">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-success mb-1">
                        <i class="fa fa-plus"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-success text-uppercase mb-0">
                        Thêm tài khoản
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Danh sách người dùng</h3>
            <div class="block-options">
                <!-- Your option -->
                {{-- <div class="dropdown">
                    <button type="button" class="btn btn-light" id="dropdown-ecom-filters" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Lọc <i class="fa fa-angle-down ml-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            New
                            <span class="badge badge-success badge-pill">260</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            Out of Stock
                            <span class="badge badge-danger badge-pill">63</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            All
                            <span class="badge badge-secondary badge-pill">36k</span>
                        </a>
                    </div>
                </div> --}}
                <!-- End Your option -->
            </div>
        </div>
        <div class="block-content bg-body-dark">
            <form action="{{route("admin.users.index")}}" method="GET" class="row">
                <div class="form-group col-md">
                    <input type="text" class="form-control form-control-alt" id="dm-ecom-products-search"
                        name="qname" placeholder="Tìm kiếm với tên.." value="{{request()->query("qname")}}">
                </div>
                <div class="form-group col-md">
                    <input type="text" class="form-control form-control-alt" id="dm-ecom-products-search"
                        name="qemail" placeholder="Tìm kiếm với tài khoản" value="{{request()->query("qemail")}}">
                </div>
                <div class="form-group col-md">
                    <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                </div>
            </form>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center" style="width: 70px"></th>
                            <th class="d-none d-sm-table-cell text-center">Tên người dùng</th>
                            <th class="d-none d-md-table-cell text-center">Tài khoản Email</th>
                            <th class="d-none d-md-table-cell text-center">Giới tính</th>
                            <th class="d-none d-md-table-cell text-center">Trạng thái tài khoản</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users ?? [] as $user)
                        <tr>
                            <td class="d-none d-md-table-cell text-center font-size-sm">
                                @if (isset($user->Image))
                                    <img id="avt-{{$user->UserId}}" onerror='document.querySelector("#avt-{{$user->UserId}}").src= "/media/avatars/avatar1.jpg"' style="width: 60px; height: 60px; object-fit:cover" class="rounded-circle" src="{{$user->Image}}">
                                @endif
                            </td>

                            <td class="d-none d-md-table-cell text-center font-size-sm">
                                <a class="font-w600" href="#">{{$user->Name}}</a>
                            </td>

                            <td class="d-none d-sm-table-cell text-center font-size-sm">{{$user->Email}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm">
                                @if (isset($user->Gender))
                                    @if (intval($user->Gender) === 0)
                                        Nam
                                    @else
                                        Nữ
                                    @endif

                                @else 
                                    Không rõ
                                @endif
                            </td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm">
                                <span class="badge badge-pill badge-primary">{{isset($user->Status) && $user->Status === 1 ? "Kích hoạt" : "Vô hiệu hóa"}}</span>
                            </td>

                            <td class="text-center font-size-sm">
                                {{-- <a title="Xem" class="btn btn-sm btn-alt-secondary" href="{{route("admin.users.show", $user->UserId)}}">
                                    <i class="fa fa-fw fa-eye"></i>
                                </a> --}}
                                <a title="Chỉnh sửa" class="btn btn-sm btn-alt-secondary" href="{{route("admin.users.edit", $user->UserId)}}">
                                    <i class="fa fa-fw fa-edit"></i>
                                </a>

                                <form class="d-none" id="action-destroy-{{$user->UserId}}" action="{{route("admin.users.destroy", $user->UserId)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                </form>
                                <a title="Xóa" onclick="Helpers.confirmSubmit(null,'#action-destroy-{{$user->UserId}}')" class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-times text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        @empty                            
                        <tr>
                            <td colspan="12">
                                <div class="alert alert-danger mb-0" role="alert">
                                    Không tìm thấy dữ liệu
                                </div>
                            </td>
                        </tr>
                        @endforelse             
                    </tbody>
                </table>
            </div>
            <div class="mb-3">
                {{$users->appends(request()->query())->links()}}
            </div>
        </div>
    </div>
</div>
@endsection