<div id="custom_modal">
    <button id="myBtn" class="btn bg-secondary text-white" style="margin-left: 10px;">Thêm mới</button>
    <div id="myModal" class="modal" style="z-index: 99999;">
        <div class="modal-content">
            <div class="d-flex justify-content-between align-items-center">
                <h5>Thêm mới</h5>
                <div><span class="close">&times;</span></div>
            </div>
            <div>
                <label for="name">Tên danh mục</label><br>
                <input type="text" width="100%" name="add_name" class="add_name form-control" required>
                <small class="text-danger"id="add_error"></small>
            </div>
            <div style="text-align: right; padding-top: 10px;">
                <button class="btn btn-primary p-2" onclick="addData();" style="width: 25%;color: white">Thêm</button>
            </div>
        </div>
    </div>
</div>
