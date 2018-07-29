<?php
  $template_name = basename(__FILE__);
  $current_path = realpath(NULL);
  $current_len = strlen($current_path);
  $template_path = realpath(dirname(__FILE__));
  if (!strncmp($template_path, $current_path, $current_len)) {
    $template_path = substr($template_path, $current_len + 1);
  }
  $template_url = url($template_path, array('absolute' => TRUE));
?>
<center>
  <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
    <tr>
      <td align="center" valign="top" id="bodyCell">
        <!-- BEGIN TEMPLATE // -->
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
        <tr>
        <td align="center" valign="top" width="600" style="width:600px;">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
          <tr>
            <td valign="top" id="templatePreheader">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
                <tbody class="mcnImageBlockOuter">
                  <tr>
                    <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                      <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody>
                          <tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0;">
                              <img align="right" alt="" src="<?php print $template_url . '/images/ANGS-Logo_KO.png'; ?>" width="70" style="max-width:70px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <?php print render($page['content']); ?>
          <tr>
            <td valign="top" id="templateFooter">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                <tbody class="mcnTextBlockOuter">
                  <tr>
                    <td valign="top" class="mcnTextBlockInner" style="padding-top:0;">
                      <!--[if mso]>
                      <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                      <tr>
                      <![endif]-->
                      <!--[if mso]>
                      <td valign="top" width="300" style="width:300px;">
                      <![endif]-->
                      <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:300px;" width="100%" class="mcnTextContentContainer">
                        <tbody>
                          <tr>
                            <td valign="top" class="mcnTextContent" style="padding: 0px 10px 9px 30px;color: #FFFFFF;font-size: 12px;">
                              <h3>Useful Links</h3>
                              <?php print theme('links', array('links' => menu_navigation_links('menu-footer-menu'), 'attributes' => array('class'=> array('links', 'site-menu')) ));?>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!--[if mso]>
                      </td>
                      <![endif]-->
                      <!--[if mso]>
                      <td valign="top" width="300" style="width:300px;">
                      <![endif]-->
                      <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:300px;" width="100%" class="mcnTextContentContainer">
                        <tbody>
                          <tr>
                            <td valign="top" class="mcnTextContent contactList" style="padding: 0px 30px 9px 10px;color: #FFFFFF;font-size: 12px;">
                              <h3>Contact</h3>
                              <?php print views_embed_view('member_list', 'contact'); ?>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!--[if mso]>
                      </td>
                      <![endif]-->
                      <!--[if mso]>
                      </tr>
                      </table>
                      <![endif]-->
                    </td>
                  </tr>
                </tbody>
              </table>
              <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
                <tbody class="mcnDividerBlockOuter">
                    <tr>
                      <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 10px 25px;">
                        <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #858585;">
                          <tbody>
                            <tr>
                              <td>
                                <span></span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      <!-- <td class="mcnDividerBlockInner" style="padding: 18px;"><hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" /> -->
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                  <tbody class="mcnTextBlockOuter">
                    <tr>
                      <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                      <!--[if mso]>
                      <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                      <tr>
                      <![endif]-->
                      <!--[if mso]>
                      <td valign="top" width="600" style="width:600px;">
                      <![endif]-->
                      <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                        <tbody>
                          <tr>
                            <td valign="top" class="mcnTextContent" style="padding: 0px 40px 9px;color: #858585;">
                              <span class="copyright">&copy; 1998 - <?php print date('Y'); ?> ANGS</span> - All Rights Reserved
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!--[if mso]>
                      </td>
                      <![endif]-->
                      <!--[if mso]>
                      </tr>
                      </table>
                      <![endif]-->
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
        <!-- // END TEMPLATE -->
      </td>
    </tr>
  </table>
</center>