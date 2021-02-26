<div class="row">
<div class="col-md-12 " style="text-align:center;">
<h1 style="color:red;">Create Your Product</h1>
<form method="post" action="<?php echo base_url('productsCreate');?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"  >
            <div class="form-group">
                <label class="col-md-3">Title</label>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 "style="margin-top:20px;">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control" placeholder="Description"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right " style="margin-top:20px;">
            <input type="submit"  name="Save" class="btn btn-primary">
        </div>
    </div>
    
</form>
</div>
</div>