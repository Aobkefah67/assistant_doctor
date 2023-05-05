@extends('layouts.dashbord')



@section('content')
        <!-- left side include page content -->
        <div class="left-side" id="my-div">
            <!-- page header -->
            <div class="header-page mb-5">
                <h3 class="title">إضافة / تعديل حالة المتابعة</h3>
                <a href="{{route('addcase.index')}}"><i class="icofont-swoosh-right"></i></a>
            </div>
            <!-- case form -->
            <form class="form"  action="{{route('addcase.update',$addcase->id)}}" method="post">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="الاسم " required="required" value="{{$addcase->name}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="age" placeholder="العمر" required="required"value="{{$addcase->age}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                           <select name="gender" class="nice-select form-control wide" tabindex="0">
                         
                            <option value="male"{{$addcase->gender =='male' ? 'selected' :''}} class="option ">ذكر</option>
                            <option value="female"{{$addcase->gender =='female' ? 'selected' :''}} class="option " >انثى</option>
                           </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="sick" placeholder="المرض" required="required"value="{{$addcase->sick}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="midicine" placeholder="الدواء المستخدم" required="required" value="{{$addcase->midicine}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="surgery" placeholder="العملية المجراة إن توفر" value="{{$addcase->surgery}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="healing" placeholder="نسبة التشافي" required="required" value="{{$addcase->healing}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="notes" placeholder="ملاحظات الطبيب" >{{$addcase->sick}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button class="btn" type="submit">حفظ</button>
                </div>
            </form>
        </div>
@endsection    