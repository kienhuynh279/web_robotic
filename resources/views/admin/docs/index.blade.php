@extends('layouts.backend')

@section('title')
Trang quản lý tin tức
@endsection

@section('content')
<div class="content">
    <div class="row row-deck">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="{{route("admin.docs.create")}}">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-success mb-1">
                        <i class="fa fa-plus"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-success text-uppercase mb-0">
                        Thêm bài viết mới
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Danh sách ứng dụng</h3>
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
            <form action="{{route("admin.docs.index")}}" method="GET" class="row">
                <div class="form-group col-md">
                    <input type="text" class="form-control form-control-alt" id="dm-ecom-products-search"
                        name="title" placeholder="Tìm kiếm với tên ứng dụng" value="{{request()->query("title")}}">
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
                            <th class="d-none d-sm-table-cell text-center" style="width: 70px">Ảnh</th>
                            <th style="width: 200px" class="d-none d-sm-table-cell text-center">Tiêu đề ứng dụng</th>
                            <th style="width: 300px" class="d-none d-md-table-cell text-center">Miêu tả ngắn</th>
                            <th class="d-none d-md-table-cell text-center">Ngày tạo</th>
                            <th style="width: 100px" class="d-none d-md-table-cell text-center">Trạng thái</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($docs ?? [] as $item)
                        <tr>
                            <td class="d-none d-md-table-cell text-center font-size-sm">
                                @if (isset($item->Image))
                                    <img id="avt-{{$item->DocId}}" onerror='document.querySelector("#avt-{{$item->DocId}}").src= "/media/avatars/avatar1.jpg"' style="width: 60px; height: 60px; object-fit:cover" class="rounded" src="{{$item->Image}}">
                                @endif
                            </td>

                            <td class="d-none d-md-table-cell text-center font-size-sm">
                                <a class="font-w600" href="#">{{$item->Title}}</a>
                            </td>

                            <td class="d-none d-sm-table-cell text-center font-size-sm">{{substr($item->Description,0, 300)}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm">
                                {{date("d/m/Y H:i:s", strtotime($item->created_at))}}
                            </td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm">
                                <span class="badge badge-pill badge-primary">{{$item->Status === 1 ? "Kích hoạt" : "Vô hiệu hóa"}}</span>
                            </td>

                            <td class="text-center font-size-sm">
                                
                                <a title="Chỉnh sửa" class="btn btn-sm btn-alt-secondary" href="{{route("admin.docs.edit", $item->DocId)}}">
                                    <i class="fa fa-fw fa-edit"></i>
                                </a>

                                <form class="d-none" id="action-destroy-{{$item->DocId}}" action="{{route("admin.docs.destroy", $item->DocId)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                </form>
                                <a title="Xóa" onclick="Helpers.confirmSubmit(null,'#action-destroy-{{$item->DocId}}')" class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
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
                {{$docs->appends(request()->query())->links()}}
            </div>
        </div>
    </div>
</div>
@endsection