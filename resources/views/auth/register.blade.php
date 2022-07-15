@extends("layouts.auth")
@section("content")
    <div>
        <div class="lg:p-12 max-w-md max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
            <h1 class="lg:text-3xl text-xl font-semibold mb-6"> Đăng kí</h1>
{{--            <p class="mb-2 text-black text-lg"> Register to manage your account </p>--}}
            <form action="#">
                <div class="flex lg:flex-row flex-col lg:space-x-2">
                    <input type="text" placeholder="Họ"
                           class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                           style="border: 1px solid #d3d5d8 !important;">
                    <input type="text" placeholder="Tên"
                           class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                           style="border: 1px solid #d3d5d8 !important;">
                </div>
                <input type="text" placeholder="Email" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                       style="border: 1px solid #d3d5d8 !important;">
                <input type="text" placeholder="Mật khẩu" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                       style="border: 1px solid #d3d5d8 !important;">
                <input type="text" placeholder="Nhập lại mật khẩu"
                       class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                       style="border: 1px solid #d3d5d8 !important;">
                <div class="flex justify-start my-4 space-x-1">
                    <div class="checkbox">
                        <input type="checkbox" id="chekcbox1" checked>
                        <label for="chekcbox1"><span class="checkbox-icon"></span> Tôi đồng ý với</label>
                    </div>
                    <a href="#"> Điều khoản và dịch vụ</a>
                </div>
                <button type="submit"
                        class="bg-gradient-to-br from-pink-500 py-3 rounded-md text-white text-xl to-red-400 w-full">
                    Đăng ký
                </button>
                <div class="text-center mt-5 space-x-2">
                    <p class="text-base"> Bạn đã có tài khoản ? <a href="{{route("auth.login")}}"> Đăng nhập </a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
