<div class="content-box-header">
  <h3></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Đơn giá</th>
          <th>Hình</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> [1][2][3] </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        {foreach $ds_san_pham as $sp}
        <tr>
          <td><input type="checkbox" /></td>
          <td>{$sp->ma_san_pham}</td>
          <td><a href="#" title="Edit">{$sp->ten_san_pham}</a></td>
          <td>{$sp->don_gia}</td>
          <td><img src="#" width="80px"></td>
          <td><!-- Icons --> 
            <a href="#" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:void(0)"" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
   
  </div>
  
</div>