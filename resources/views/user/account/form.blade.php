<div class="form-row">
    <div class="form-group col-md-4">
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="type" class="custom-control-input" value="revenue">
            <label class="custom-control-label" for="customRadioInline1">รายรับ</label>
        </div>
    </div>
    <div class="form-group col-md-4">
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="type" class="custom-control-input" value="expenditure">
            <label class="custom-control-label" for="customRadioInline2" >รายจ่าย</label>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label>รายการ</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label>จำนวนเงิน</label>
        <input type="number" class="form-control" id="amount" name="amount">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label>วันเดือนปี</label>
        <input type="text" class="form-control" id="date" name="date" value="{{date("Y-m-d")}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label>รายละเอียด</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
</div>