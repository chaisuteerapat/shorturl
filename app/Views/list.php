<div class="span12 text-right mb-1">

  <button class="btn btn-success" id="modalurl">
    Create Shorturl
  </button>
</div>

<div class="span12">
  <!-- <div class="widget widget-table action-table"> -->
  <!-- <div class="widget-header"> <i class="icon-th-list"></i>
      <h3>
        List Url
      </h3>
    </div> -->
  <div class="widget-content">
    <table class="table table-striped table-bordered" id="tablelist">
      <thead>
        <tr>
          <th class="text-center" width="5%">
            #
          </th>
          <th class="text-center">
            Full Url
          </th>
          <th class="text-center">
            Shour Url
          </th>
          <th class="text-center" width="10%">
            QR code
          </th>

        </tr>
      </thead>
      <tbody>
        <?php if (!empty($datasend['list'])) { ?>
          <?php foreach ($datasend['list'] as $key => $value) { ?>
            <tr>
              <td class="text-center">
                <?php echo ($key + 1); ?>
              </td>
              <td>
                <?php echo $value['short_url_full']; ?>
              </td>
              <td>
                <a href="<?php echo $datasend['protocol'] . $_SERVER['HTTP_HOST'] . '/q/' . $value['short_url_short']; ?>" target="_blank">
                  <?php echo  $datasend['protocol'] . $_SERVER['HTTP_HOST'] . '/q/' . $value['short_url_short']; ?>
                </a>
              </td>

              <td class="text-center">
                <img src="<?php echo $value['short_url_fileqrcode']; ?>" style="max-width: 100px;">
              </td>


            </tr>
          <?php } ?>
        <?php } else { ?>
          <tr>
            <td colspan="5" class="text-center">
              No Data
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <!-- </div> -->
  </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">
      Url
    </h3>
  </div>
  <div class="modal-body">

    <form id="frmdata">
      <div class="control-group">
        <div class="controls">
          Full Url
        </div>
        <div class="controls">
          <input type="text" class="col-md-12" id="url" name="url" style="width: 100%;">
        </div>
      </div>
    </form>

  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" id="saveurl">
      Save
    </button>
  </div>
</div>