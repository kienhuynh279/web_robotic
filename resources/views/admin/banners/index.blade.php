@extends('layouts.backend')

@section('title')
Trang quản lý Banner
@endsection

@section('content')
<div class="content">
    <div class="row row-deck">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="{{route("admin.banners.create")}}">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-success mb-1">
                        <i class="fa fa-plus"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-success text-uppercase mb-0">
                        Add Banner
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">List Banner</h3>
            <div class="block-options">
            </div>
        </div>
        <div class="block-content bg-body-dark">
            <form action="{{route("admin.banners.index")}}" method="GET" class="row">
                <div class="form-group col-md">
                    <input type="text" class="form-control form-control-alt" id="dm-ecom-products-search"
                        name="q" placeholder="Search with title" value="{{request()->query("q")}}">
                </div>
                <div class="form-group col-md">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center" style="width: 70px">Avatar</th>
                            <th style="width: 200px" class="d-none d-sm-table-cell text-center">Title</th>
                            <th style="width: 300px" class="d-none d-md-table-cell text-center">Summary</th>
                            <th class="d-none d-md-table-cell text-center">Background</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($banners ?? [] as $bannersItem)
                        <tr>
                            <td class="d-none d-md-table-cell text-center font-size-sm">
                                @if (isset($bannersItem->Object))
                                    <img id="avt-{{$bannersItem->BannerId}}" onerror='document.querySelector("#avt-{{$bannersItem->BannerId}}").src= "/media/avatars/avatar1.jpg"' style="width: 60px; height: 60px; object-fit:cover" class="rounded" src="{{$bannersItem->Object}}">
                                @endif
                            </td>

                            <td class="d-none d-md-table-cell text-center font-size-sm">
                                <a class="font-w600" href="#">{{$bannersItem->Title}}</a>
                            </td>

                            <td class="d-none d-sm-table-cell text-center font-size-sm">{!!substr($bannersItem->Description,0, 300)!!}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm">
                                <img id="avt-{{$bannersItem->BannerId}}" onerror='document.querySelector("#avt-{{$bannersItem->BannerId}}") src= "/media/avatars/avatar1.jpg"' style="width: 100%; height: 60px; object-fit:cover" class="rounded" src="{{$bannersItem->Background}}">
                            </td>

                            <td class="text-center font-size-sm">
                                
                                <a title="Chỉnh sửa" class="btn btn-sm btn-alt-secondary" href="{{route("admin.banners.edit", $bannersItem->BannerId)}}">
                                    <i class="fa fa-fw fa-edit"></i>
                                </a>

                                <form class="d-none" id="action-destroy-{{$bannersItem->BannerId}}" action="{{route("admin.banners.destroy", $bannersItem->BannerId)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                </form>
                                <a title="Xóa" onclick="Helpers.confirmSubmit(null,'#action-destroy-{{$bannersItem->BannerId}}')" class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-times text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12">
                                <div class="alert alert-danger mb-0" role="alert">
                                    No value data
                                </div>
                            </td>
                        </tr>
                        @endforelse             
                    </tbody>
                </table>
            </div>
            
            <div class="mb-3">
                {{$banners->appends(request()->query())->links()}}
            </div>
        </div>
    </div>
</div>
@endsection