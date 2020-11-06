<x-wp-layout>
    @slot('sidebar')
    <div id="settings-accordion" role="tablist" aria-multiselectable="true">
        <div class="block mb-0">
            <div class="block-header block-header-default p-0" role="tab" id="settings-accordion_h1">
                <a class="font-w600 d-block w-100 p-3" data-toggle="collapse" data-parent="#settings-accordion"
                    href="#settings-accordion_s1" aria-expanded="true" aria-controls="settings-accordion_s1">Trạng thái
                    đăng tải</a>
            </div>
            <div id="settings-accordion_s1" class="collapse show" role="tabpanel"
                aria-labelledby="settings-accordion_h1" data-parent="#settings-accordion" style="">
                <div class="block-content">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label" for="date-created">Ngày tạo</label>
                        <div class="col-sm-6 d-flex align-items-center justify-content-end">
                            {{date("d/m/Y H:i:s")}}
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-primary">Lưu thay đổi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endslot

    @slot('slot')
    <div class="form-row">
        <x-input-form type="text" label="Họ và tên" name="Name" classGroup="col-md" class="" placeholder="Họ"
            :value="$user->Name ?? ''" />
    </div>

    @if (Route::currentRouteName() === "admin.users.create")
        <x-input-form type="text" label="Tên tài khoản Email(*)" name="Email" class="" aria-disabled="true"
        placeholder="Tên tài khoản email" :value="$user->Email ?? ''"  />
    @else
        <x-input-form type="text" label="Tên tài khoản Email(*)" name="Email" class="" aria-disabled="true"
            placeholder="Tên tài khoản email" :value="$user->Email ?? ''" readonly />
    @endif

    <x-input-form type="date" label="Ngày sinh" name="Birthday" class="" placeholder="Ngày sinh"
        :value="$user->email ?? ''" />

    <div class="block-header block-header-default bg-secondary text-light p-0 mt-3">
        <a class="font-w600 d-block w-100 p-3">Thay đổi mật khẩu</a>
    </div>
    <div class="bg-light">
        <div class="block-content block-content-full">
            <x-input-form type="password" label="Mật khẩu" name="password" class="" placeholder="Mật khẩu" value="" />

            <x-input-form type="password" label="Xác nhận mật khẩu" name="password_confirm" class=""
                placeholder="Xác nhận mật khẩu" value="" />
        </div>
    </div>

    @endslot

</x-wp-layout>