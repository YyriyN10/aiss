<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}?>

<!-- The Modal -->
<div class="modal form-modal" id="formModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" y="0.5" width="39" height="39" rx="3.5" stroke="#FBFBFB" stroke-opacity="0.2"/>
            <path d="M14.2249 12.811C14.0363 12.6288 13.7837 12.528 13.5215 12.5303C13.2593 12.5326 13.0085 12.6378 12.8231 12.8232C12.6377 13.0086 12.5325 13.2594 12.5303 13.5216C12.528 13.7838 12.6288 14.0364 12.8109 14.225L18.5859 20L12.8099 25.775C12.7144 25.8672 12.6382 25.9776 12.5858 26.0996C12.5334 26.2216 12.5058 26.3528 12.5047 26.4856C12.5035 26.6184 12.5288 26.75 12.5791 26.8729C12.6294 26.9958 12.7036 27.1075 12.7975 27.2014C12.8914 27.2953 13.0031 27.3695 13.126 27.4198C13.2489 27.4701 13.3805 27.4954 13.5133 27.4942C13.6461 27.4931 13.7773 27.4655 13.8993 27.4131C14.0213 27.3607 14.1317 27.2845 14.2239 27.189L19.9999 21.414L25.7749 27.189C25.9635 27.3711 26.2161 27.4719 26.4783 27.4697C26.7405 27.4674 26.9913 27.3622 27.1767 27.1768C27.3622 26.9914 27.4673 26.7406 27.4696 26.4784C27.4719 26.2162 27.3711 25.9636 27.1889 25.775L21.4139 20L27.1889 14.225C27.3711 14.0364 27.4719 13.7838 27.4696 13.5216C27.4673 13.2594 27.3622 13.0086 27.1767 12.8232C26.9913 12.6378 26.7405 12.5326 26.4783 12.5303C26.2161 12.528 25.9635 12.6288 25.7749 12.811L19.9999 18.586L14.2249 12.81V12.811Z" fill="red"/>
          </svg>
        </button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <div class="form-wrapper">
          <h3>Замовити консультацію</h3>
          <form action="http://aiss.loc/wp-admin/admin-post.php" method="post">
            <input type="hidden" name="action" value="form_integration">
            <input type="hidden" name="page-name" value="Гогловна">
            <div class="form-group">
              <input name="userphone" size="40" type="tel" class="form-control" placeholder="+38(0__)___-__-__">
            </div>
            <div class="form-group">
              <input style="" name="name" size="40" type="text" class="form-control" placeholder="ВАШЕ ІМ'Я">
            </div>
            <div class="form-group">
              <input style="" name="city" size="40" type="text" class="form-control" placeholder="НАСЕЛЕНИЙ ПУНКТ">
            </div>
            <button type="submit" class="btn btn-medium main-bg">Хочу розрахунок</button>
          </form>

        </div>

      </div>
    </div>
  </div>
</div>


