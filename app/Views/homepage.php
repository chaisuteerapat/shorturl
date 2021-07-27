<div class="span12" style="margin-top: 2rem;">

  <div class="widget-content">

    <form id="frmdata">
      <div class="control-group">
        <div class="controls">
          Full Url
        </div>
        <div class="controls">
          <input type="text" class="col-md-10" id="url" name="url" style="width: 80%;">
          <button type="button" class="btn btn-info mb-9px" id="genurl">
            Generate Url
          </button>
        </div>

      </div>
    </form>

  </div>
</div>


<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">
      Url
    </h3>
  </div>
  <div class="modal-body">

    <div class="text-center controls">
      <input type="text" class="col-md-12" id="successurl" name="successurl" style="width: 80%;" >
      <button type="button" class="btn btn-info mb-9px" id="copy">
        <i class="fa fa-files-o" aria-hidden="true"></i>
      </button>
    </div>

    <div class="text-center">
      <img id="dataqrcode">
    </div>

  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" id="saveurl">
      Save
    </button>
  </div>
</div>