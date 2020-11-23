@extends('layouts.backend')

@section('title')
Manage Gallery
@endsection

@section('content')
<div class="content">
    <div class="row row-deck">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="{{route("admin.image.create")}}">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-success mb-1">
                        <i class="fa fa-plus"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-success text-uppercase mb-0">
                        Add Gallery
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">List Gallery</h3>
            <div class="block-options">
            </div>
        </div>
        <div class="block-content bg-body-dark">
            <form action="{{route("admin.application.index")}}" method="GET" class="row">
                <div class="form-group col-md">
                    <input type="text" class="form-control form-control-alt" id="dm-ecom-products-search"
                        name="src" placeholder="Search with title " value="{{request()->query("src")}}">
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
                            <th class="d-none d-sm-table-cell text-center" style="width: 200px">Image</th>
                            <th style="width: 150px" class="d-none d-sm-table-cell text-center">Note</th>
                            {{-- <th class="d-none d-md-table-cell text-center">Create At</th>
                            <th style="width: 100px" class="d-none d-md-table-cell text-center">Status</th> --}}
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($image ?? [] as $img)
                        <tr>
                            <td class="d-none d-md-table-cell text-center font-size-sm">
                                <img href="{{ $img->Src }}"/>
                            </td>

                            <td class="d-none d-md-table-cell text-center font-size-sm">
                                <a class="font-w600" href="#">{{$img->Alt}}</a>
                            </td>

                            {{-- <td class="d-none d-sm-table-cell text-center font-size-sm">
                                {{date("d/m/Y H:i:s", strtotime($img->created_at))}}
                            </td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm">
                                <span class="badge badge-pill badge-primary">{{$img->Status === 1 ? "Active" : "Unactive"}}</span>
                            </td> --}}

                            <td class="text-center font-size-sm">
                                
                                <a title="Edit" class="btn btn-sm btn-alt-secondary" href="{{route("admin.image.edit", $img->ImageId)}}">
                                    <i class="fa fa-fw fa-edit"></i>
                                </a>

                                <form class="d-none" id="action-destroy-{{$img->ImageId}}" action="{{route("admin.image.destroy", $img->ImageId)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                </form>
                                <a title="Delete" onclick="Helpers.confirmSubmit(null,'#action-destroy-{{$img->ImageId}}')" class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
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
            
            {{-- <div class="mb-3">
                {{$applications->appends(request()->query())->links()}}
            </div> --}}
        </div>
    </div>
</div>
@endsection