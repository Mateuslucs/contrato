<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/540e6af289.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
    <style>
    .fa-pager::before, .fa-hand-holding-dollar::before, .fa-calculator::before {
        position: absolute;
        top: 15px;
        font-size: 25px;
        margin-left: 5px;
    }
    h2 {
        font-size: 1.1rem;
        margin: 20px 0 20px 40px;
    }
    h1 {
        float: right;
        position: absolute;
        right: 20px;
        top: 20px;
        font-size: 1.1rem;
    }
    section {
        margin: 20px 5px;
    }
    </style>
    <section>
    <div class="row">
        <div class="col-sm-4">
        <div class="card bg-danger text-white">
            <i class="fa-solid fa-pager"></i>
            <h2>A Pagar:</h1>
            <h1>R$ <span id="pagar"></span></h1>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="card bg-success text-white">
            <i class="fa-solid fa-hand-holding-dollar"></i>
            <h2>A Receber:</h1>
            <h1>R$ <span id="receber"></span></h1>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="card bg-warning text-white">
            <i class="fa-solid fa-calculator"></i>
            <h2>Diferença:</h1>
            <h1>R$ <span id="diferenca"></span></h1>
        </div>
        </div>
    </div>
    </section>

<table width="100%" cellspacing="0" cellpadding="0">
        <tbody><tr style="display: none">
        <td>
        <form id="id_F0_top" name="F0_top" method="post" action="./" target="_self"> 
        <input type="text" id="id_sc_truta_f0_top" name="sc_truta_f0_top" value=""> 
        <input type="hidden" id="script_init_f0_top" name="script_case_init" value="450"> 
        <input type="hidden" id="opcao_f0_top" name="nmgp_opcao" value="muda_qt_linhas"> 
        </form></td></tr><tr id="sc_grid_toobar_top_tr">
         <td id="sc_grid_toobar_top" class="scGridTabelaTd" valign="top"> 
          <table id="sc_grid_toobar_top_table" class="scGridToolbar" style="padding: 0px; border-spacing: 0px; border-width: 0px; vertical-align: top;" width="100%" valign="top">
           <tbody><tr class="scGridToolbarPadding_tr"> 
            <td class="scGridToolbarPadding" nowrap="" valign="middle" align="left" width="33%"> 
             <script type="text/javascript">var change_fast_top = "";</script>
            <span id="quicksearchph_top" class="css_toolbar_obj" style="display: inline-block; vertical-align: inherit;">
             <span>
               <input type="text" id="SC_fast_search_top" class="css_toolbar_obj_text" style="border-width: 0px;" name="nmgp_arg_fast_search" value="" size="10" onchange="change_fast_top = 'CH';" alt="{maxLength: 255}" placeholder="Busca Rapida">&nbsp;
               <i id="SC_fast_search_dropdown_top" style="cursor: pointer;" class="fas fa-caret-down" onclick="nm_gp_open_qsearch_div('top');" aria-hidden="true"></i>
               <img style="display: " id="SC_fast_search_submit_top" class="css_toolbar_obj_qs_search_img" src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_qsearch.png" onclick="nm_gp_submit_qsearch('top');">
               <img style="display: none" class="css_toolbar_obj_qs_search_img" id="SC_fast_search_close_top" src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_cancel.png" onclick="document.getElementById('SC_fast_search_top').value = '__Clear_Fast__'; nm_gp_submit_qsearch('top');">
              </span>
  <div id="id_qs_div_top" class="scGridQuickSearchDivMoldura" style="display:none; position:absolute;">
                  <div>
                      <span>
                        <p class="scGridQuickSearchDivLabel">Colunas</p>
            <select multiple="" id="fast_search_f0_top" class="select2-hidden-accessible" style="vertical-align: middle;" name="nmgp_fast_search" onchange="change_fast_top = 'CH';" data-select2-id="select2-data-fast_search_f0_top" tabindex="-1" aria-hidden="true">
             <option value="tipo">Tipo</option>
             <option value="nomefiscal">Cliente/Fornecedor</option>
             <option value="codigo_lancamento_omie">Código de Lançamento</option>
             <option value="descricao">Categoria</option>
             <option value="valordocumento">Valor do Documento</option>
             <option value="banco">Banco</option>
             <option value="data_emissao">Data Emissao</option>
             <option value="data_vencimento">Data Vencimento</option>
             <option value="data_previsao">Data Previsao</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-9btt" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-fast_search_f0_top-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-fast_search_f0_top-container" placeholder="Todos os campos" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      </span>
                      <span>
                        <p class="scGridQuickSearchDivLabel">Condição de pesquisa</p>
            <select id="cond_fast_search_f0_top" class="select2-hidden-accessible" style="vertical-align: middle;display:" name="nmgp_cond_fast_search" onchange="change_fast_top = 'CH';" data-select2-id="select2-data-cond_fast_search_f0_top" tabindex="-1" aria-hidden="true">
             <option value="qp" data-select2-id="select2-data-3-pjof">Contém</option>
             <option value="ii">Início igual</option>
             <option value="eq">Igual a</option>
             <option value="np">Não Contém</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-3jvb" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-cond_fast_search_f0_top-container" aria-controls="select2-cond_fast_search_f0_top-container"><span class="select2-selection__rendered" id="select2-cond_fast_search_f0_top-container" role="textbox" aria-readonly="true" title="Contém">Contém</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      </span>
                  </div>
                  <div class="scGridQuickSearchDivToolbar">
        <a id="qs_cancel" onclick="nm_gp_cancel_qsearch_div_store_temp('top');; return false;" class="scButton_cancel " title="Cancelar ação" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-ban" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Cancelar</span></a>
   
        <a id="qs_search" onclick="nm_gp_submit_qsearch('top');; return false;" class="scButton_check " title="Aplicar alterações" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Aplicar</span></a>
   
                  </div>
               </div>
            </span>         </td> 
            <td class="scGridToolbarPadding" nowrap="" valign="middle" align="center" width="33%"> 
             <a id="selcmp_top" onclick="scBtnSelCamposShow('/scriptcase/app/Hortifrios/grid_compensar/grid_compensar_sel_campos.php?path_img=/scriptcase/app/Hortifrios/_lib/img&amp;path_btn=/scriptcase/app/Hortifrios/_lib/img&amp;path_fields=/opt/NetMake/v9-php81/wwwroot/scriptcase/conf/fields/&amp;script_case_init=450&amp;embbed_groupby=Y&amp;toolbar_pos=top', 'top');; return false;" class="scButton_default " title="Selecionar Colunas" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-columns" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Colunas</span></a>
   
             <a id="ordcmp_top" onclick="scBtnOrderCamposShow('/scriptcase/app/Hortifrios/grid_compensar/grid_compensar_order_campos.php?path_img=/scriptcase/app/Hortifrios/_lib/img&amp;path_btn=/scriptcase/app/Hortifrios/_lib/img&amp;script_case_init=450&amp;use_alias=S&amp;embbed_groupby=Y&amp;toolbar_pos=top', 'top');; return false;" class="scButton_default " title="Configurar Ordenação" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-sort-alpha-down" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Ordenação</span></a>
   
             <script type="text/javascript">var sc_itens_btgp_group_2_top = false;</script>
             <a id="sc_btgp_btn_group_2_top" onclick="scBtnGrpShow('group_2_top'); return false;" class="scButton_default " title="Enviar como e-mail" style="vertical-align: middle; display: none;"><i class="icon_fa fas fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Email</span>&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>
  </a>
  
                        <table style="border-collapse: collapse; border-width: 0; display: none; position: absolute; z-index: 10" class="SC_SubMenuApp" id="sc_btgp_div_group_2_top">
                 <tbody><tr>
                     <td class="scBtnGrpBackground" align="center">
  
                                </td>
                 </tr>
             </tbody></table>
  
             <script type="text/javascript">
               if (!sc_itens_btgp_group_2_top) {
                   document.getElementById('sc_btgp_btn_group_2_top').style.display='none'; }
             </script>
             <script type="text/javascript">var sc_itens_btgp_group_1_top = false;</script>
             <a id="sc_btgp_btn_group_1_top" onclick="scBtnGrpShow('group_1_top'); return false;" class="scButton_default " title="Exportação" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-download" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Exportação</span>&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>
  </a>
  
                        <table style="border-collapse: collapse; border-width: 0; display: none; position: absolute; z-index: 10" class="SC_SubMenuApp" id="sc_btgp_div_group_1_top">
                 <tbody><tr>
                     <td class="scBtnGrpBackground" align="center">
  
             <script type="text/javascript">sc_itens_btgp_group_1_top = true;</script>
              <div id="div_pdf_top" class="scBtnGrpText scBtnGrpClick">
             <a id="pdf_top" href="/scriptcase/app/Hortifrios/grid_compensar/grid_compensar_config_pdf.php?nm_opc=pdf&amp;nm_target=0&amp;nm_cor=cor&amp;papel=8&amp;lpapel=279&amp;apapel=216&amp;orientacao=1&amp;bookmarks=1&amp;largura=1200&amp;conf_larg=S&amp;conf_fonte=10&amp;grafico=XX&amp;sc_ver_93=s&amp;nm_tem_gb=n&amp;nm_res_cons=n&amp;nm_ini_pdf_res=grid,resume&amp;nm_all_modules=grid,resume,chart&amp;nm_label_group=N&amp;nm_all_cab=S&amp;nm_all_label=S&amp;nm_orient_grid=2&amp;password=n&amp;summary_export_columns=S&amp;pdf_zip=N&amp;origem=cons&amp;language=pt_br&amp;conf_socor=N&amp;script_case_init=450&amp;app_name=grid_compensar&amp;KeepThis=true&amp;TB_iframe=true&amp;modal=true" class="thickbox scBtnGrpLink" title="Gerar PDF" style="vertical-align: middle; display:inline-block;" onclick="if (typeof(getAppData) == 'undefined') { scBtnGrpHide($(this).closest( '.SC_SubMenuApp' ).attr('id').substring(12), true)} ; return false;"><span class="btn-label">PDF</span></a>
   
              </div>
             <script type="text/javascript">sc_itens_btgp_group_1_top = true;</script>
              <div id="div_word_top" class="scBtnGrpText scBtnGrpClick">
             <a id="word_top" href="/scriptcase/app/Hortifrios/grid_compensar/grid_compensar_config_word.php?script_case_init=450&amp;summary_export_columns=S&amp;nm_cor=CO&amp;nm_res_cons=n&amp;nm_ini_word_res=grid,resume&amp;nm_all_modules=grid,resume,chart&amp;password=n&amp;origem=cons&amp;language=pt_br&amp;KeepThis=true&amp;TB_iframe=true&amp;modal=true" class="thickbox scBtnGrpLink" title="Exportação para documentos do Word (. Doc)." style="vertical-align: middle; display:inline-block;" onclick="if (typeof(getAppData) == 'undefined') { scBtnGrpHide($(this).closest( '.SC_SubMenuApp' ).attr('id').substring(12), true)} ; return false;"><span class="btn-label">WORD</span></a>
   
              </div>
             <script type="text/javascript">sc_itens_btgp_group_1_top = true;</script>
              <div id="div_xls_top" class="scBtnGrpText scBtnGrpClick">
             <a id="xls_top" href="/scriptcase/app/Hortifrios/grid_compensar/grid_compensar_config_xls.php?script_case_init=450&amp;app_name=grid_compensar&amp;nm_tp_xls=xlsx&amp;nm_tot_xls=S&amp;nm_res_cons=n&amp;nm_ini_xls_res=grid,resume&amp;nm_all_modules=grid,resume,chart&amp;password=n&amp;summary_export_columns=S&amp;origem=cons&amp;language=pt_br&amp;KeepThis=true&amp;TB_iframe=true&amp;modal=true" class="thickbox scBtnGrpLink" title="Gerar Excel (Excel, BrOffice)" style="vertical-align: middle; display:inline-block;" onclick="if (typeof(getAppData) == 'undefined') { scBtnGrpHide($(this).closest( '.SC_SubMenuApp' ).attr('id').substring(12), true)} ; return false;"><span class="btn-label">Excel</span></a>
   
              </div>
             <script type="text/javascript">sc_itens_btgp_group_1_top = true;</script>
              <div id="div_xml_top" class="scBtnGrpText scBtnGrpClick">
             <a id="xml_top" href="/scriptcase/app/Hortifrios/grid_compensar/grid_compensar_config_xml.php?script_case_init=450&amp;summary_export_columns=S&amp;password=n&amp;nm_res_cons=n&amp;nm_ini_xml_res=grid,resume&amp;nm_all_modules=grid,resume,chart&amp;nm_xml_tag=tag&amp;nm_xml_label=S&amp;language=pt_br&amp;origem=cons&amp;KeepThis=true&amp;TB_iframe=true&amp;modal=true" class="thickbox scBtnGrpLink" title="Gerar XML" style="vertical-align: middle; display:inline-block;" onclick="if (typeof(getAppData) == 'undefined') { scBtnGrpHide($(this).closest( '.SC_SubMenuApp' ).attr('id').substring(12), true)} ; return false;"><span class="btn-label">XML</span></a>
   
              </div>
             <script type="text/javascript">sc_itens_btgp_group_1_top = true;</script>
              <div id="div_json_top" class="scBtnGrpText scBtnGrpClick">
             <a id="json_top" href="/scriptcase/app/Hortifrios/grid_compensar/grid_compensar_config_json.php?script_case_init=450&amp;summary_export_columns=S&amp;password=n&amp;nm_res_cons=n&amp;nm_ini_json_res=grid,resume&amp;nm_all_modules=grid,resume,chart&amp;nm_json_format=N&amp;nm_json_label=S&amp;language=pt_br&amp;origem=cons&amp;KeepThis=true&amp;TB_iframe=true&amp;modal=true" class="thickbox scBtnGrpLink" title="Gerar JSON" style="vertical-align: middle; display:inline-block;" onclick="if (typeof(getAppData) == 'undefined') { scBtnGrpHide($(this).closest( '.SC_SubMenuApp' ).attr('id').substring(12), true)} ; return false;"><span class="btn-label">JSON</span></a>
   
              </div>
             <script type="text/javascript">sc_itens_btgp_group_1_top = true;</script>
              <div id="div_csv_top" class="scBtnGrpText scBtnGrpClick">
             <a id="csv_top" href="/scriptcase/app/Hortifrios/grid_compensar/grid_compensar_config_csv.php?script_case_init=450&amp;summary_export_columns=S&amp;password=n&amp;nm_res_cons=n&amp;nm_ini_csv_res=grid,resume&amp;nm_all_modules=grid,resume,chart&amp;nm_delim_line=1&amp;nm_delim_col=1&amp;nm_delim_dados=1&amp;nm_label_csv=N&amp;language=pt_br&amp;origem=cons&amp;KeepThis=true&amp;TB_iframe=true&amp;modal=true" class="thickbox scBtnGrpLink" title="Gerar CSV" style="vertical-align: middle; display:inline-block;" onclick="if (typeof(getAppData) == 'undefined') { scBtnGrpHide($(this).closest( '.SC_SubMenuApp' ).attr('id').substring(12), true)} ; return false;"><span class="btn-label">CSV</span></a>
   
              </div>
             <script type="text/javascript">sc_itens_btgp_group_1_top = true;</script>
              <div id="div_rtf_top" class="scBtnGrpText scBtnGrpClick">
             <a id="rtf_top" href="javascript: nm_gp_rtf_conf();" class="scBtnGrpLink" title="Gerar RTF" style="vertical-align: middle; display:inline-block;" onclick="if (typeof(getAppData) == 'undefined') { scBtnGrpHide($(this).closest( '.SC_SubMenuApp' ).attr('id').substring(12), true)} nm_gp_rtf_conf();; return false;"><span class="btn-label">RTF</span></a>
   
              </div>
             </td></tr><tr><td class="scBtnGrpBackground">
             <script type="text/javascript">sc_itens_btgp_group_1_top = true;</script>
              <div id="div_print_top" class="scBtnGrpText scBtnGrpClick">
             <a id="print_top" href="/scriptcase/app/Hortifrios/grid_compensar/grid_compensar_config_print.php?script_case_init=450&amp;summary_export_columns=S&amp;nm_opc=RC&amp;nm_cor=CO&amp;password=n&amp;language=pt_br&amp;nm_page=450&amp;nm_res_cons=n&amp;nm_ini_prt_res=grid,resume&amp;nm_all_modules=grid,resume,chart&amp;origem=cons&amp;KeepThis=true&amp;TB_iframe=true&amp;modal=true" class="thickbox scBtnGrpLink" title="Imprimir" style="vertical-align: middle; display:inline-block;" onclick="if (typeof(getAppData) == 'undefined') { scBtnGrpHide($(this).closest( '.SC_SubMenuApp' ).attr('id').substring(12), true)} ; return false;"><span class="btn-label">Imprimir</span></a>
   
              </div>
                                </td>
                 </tr>
             </tbody></table>
  
             <script type="text/javascript">
               if (!sc_itens_btgp_group_1_top) {
                   document.getElementById('sc_btgp_btn_group_1_top').style.display='none'; }
             </script>
            <img id="NM_sep_1" class="NM_toolbar_sep" src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_pipe.png" align="absmiddle" style="vertical-align: middle;">
             <a id="pesq_top" onclick="nm_gp_move('busca', '0', 'grid');; return false;" class="scButton_ok " title="Pesquisar registros" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-search" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Pesquisar</span></a>
   
            <a id="sc_Processar_top" onclick="sc_btn_Processar();; return false;" class="scButton_default " style="vertical-align: middle; display:inline-block;"><span class="btn-label">Processar</span></a>
   
           </td> 
            <td class="scGridToolbarPadding" nowrap="" valign="middle" align="right" width="33%"> 
             <a id="reload_top" onclick="nm_gp_submit_ajax ('igual', 'breload');; return false;" class="scButton_default " title="recarregar" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-sync-alt" aria-hidden="true"></i>
  </a>
   
             <a id="sai_top" onclick="document.F5.action='grid_compensar_fim.php'; document.F5.submit();; return false;" class="scButton_danger " title="Sair da página" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-sign-out-alt" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Sair</span></a>
   
           </td> 
          </tr> 
         </tbody></table> 
        </td> 
       </tr> 
        <tr style="display: none">
        <td> 
        
        </td> 
       </tr> 
       <tr id="sc_id_save_grid_placeholder_top" style="display: none">
        <td>
        </td>
       </tr>
       <tr id="sc_id_groupby_placeholder_top" style="display: none">
        <td>
        </td>
       </tr>
       <tr id="sc_id_sel_campos_placeholder_top" style="display: none">
        <td>
        </td>
       </tr>
       <tr id="sc_id_export_email_placeholder_top" style="display: none">
        <td>
        </td>
       </tr>
       <tr id="sc_id_order_campos_placeholder_top" style="display: none">
        <td>
        </td>
       </tr>
     <tr id="NM_Grid_Search" ajax="" style="display:none">
     <td valign="top"> 
     <div id="id_grid_search_cmd_string" class="scAppDivMoldura" style="cursor:pointer; display:none;" onclick="$('#id_grid_search_cmd_string').hide();$('#div_grid_search').show();"> 
                               <img id="id_app_div_tree_img_exp" src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_open.png" border="0" align="absmiddle" class="scGridFilterTagIconExp">
       <span class="scAppDivHeaderText">
               Filtro:
       </span>
       <span id="id_grid_search_cmd_str" class="scAppDivContentText"></span>
     </div> 
     <div id="div_grid_search" class="scAppDivMoldura scGridFilterTag" style="display:;"> 
                               <a href="#" onclick="$('#id_grid_search_cmd_string').show();$('#div_grid_search').hide();" class="scGridFilterTagIconCol"><img id="id_app_div_tree_img_col" src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_opened.png" border="0" align="absmiddle" style="vertical-align: middle; margin-right:4px;"></a>
      <div id="icon_grid_search" class="scGridFilterTagIcon"><svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M1595 295q17 41-14 70l-493 493v742q0 42-39 59-13 5-25 5-27 0-45-19l-256-256q-19-19-19-45v-486l-493-493q-31-29-14-70 17-39 59-39h1280q42 0 59 39z"></path></svg></div> 
      <div id="tags_grid_search" class="scGridFilterTagList"> 
          <form id="id_Fgrid_search" name="Fgrid_search" method="post" action="./" target="_self"> 
              <input type="hidden" name="script_case_init" value="450"> 
              <input type="hidden" name="nmgp_opcao" value="grid_search"> 
              <input type="hidden" name="parm" value=""> 
              <div id="add_grid_search" class="scGridFilterTagAdd" onclick="nm_show_advancedsearch_fields();">
                  Adicionar filtro
                  <div id="id_grid_search_add_tag" class="SC_SubMenuApp" style="position: absolute; border-collapse: collapse; z-index: 1000; display:none;">
                      <div>
  <table id="id_grid_search_all_cmp" cellpadding="0" cellspacing="0">  <tbody><tr>    <td class="scBtnGrpBackground">        <div class="scBtnGrpText" style="cursor:pointer; right:80px;" onclick="ajax_add_grid_search(this, 'grid', 'tipo'); return false;">            Tipo        </div>    </td>  </tr>  <tr>    <td class="scBtnGrpBackground">        <div class="scBtnGrpText" style="cursor:pointer; right:80px;" onclick="ajax_add_grid_search(this, 'grid', 'idinterno'); return false;">            Id Interno        </div>    </td>  </tr>  <tr>    <td class="scBtnGrpBackground">        <div class="scBtnGrpText" style="cursor:pointer; right:80px;" onclick="ajax_add_grid_search(this, 'grid', 'nomefiscal'); return false;">            Cliente/Fornecedor        </div>    </td>  </tr></tbody></table>
                      </div>
                  </div>
              </div>
          </form>
      </div>
     <div id="save_grid_search" class="scGridFilterTagSave">
      <form name="Fgrid_search_save">
       <span id="id_NM_filters_save" style="display: none">
         <select class="scFilterToolbar_obj" id="id_sel_recup_filters" name="sel_recup_filters" onchange="nm_change_grid_search(this)" size="1">
             <option value=""></option>
         </select>
       </span>
         <a id="Ativa_save" onclick="document.getElementById('Salvar_filters').style.display = ''; document.Fgrid_search_save.nmgp_save_name.focus(); return false;" class="scButton_small " title="Editar / Salvar Filtro" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-save" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Salvar filtro</span></a>
   
      <div id="Salvar_filters" style="display:none;z-index:9999;position: absolute;">
       <table align="center" class="scFilterTable">
        <tbody><tr>
         <td class="scFilterBlock">
          <table style="border-width: 0px; border-collapse: collapse" width="100%">
           <tbody><tr>
            <td style="padding: 0px" valign="top" class="scFilterBlockFont">Salvar Filtro</td>
            <td style="padding: 0px" align="right" valign="top">
         <a id="Cancel_frm" onclick="document.getElementById('Salvar_filters').style.display = 'none'; return false;" class="scButton_cancel " title="Cancelar ação" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-ban" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Cancelar</span></a>
   
            </td>
           </tr>
          </tbody></table>
         </td>
        </tr>
        <tr>
         <td class="scFilterFieldOdd">
          <table style="border-width: 0px; border-collapse: collapse" width="100%">
           <tbody><tr>
            <td style="padding: 0px" valign="top">
             <input class="scFilterObjectOdd" type="text" id="SC_nmgp_save_name" name="nmgp_save_name" value="">
            </td>
            <td style="padding: 0px" align="right" valign="top">
         <a id="Save_frm" onclick="nm_save_grid_search(); return false;" class="scButton_small " title="Gravar as alterações" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-save" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Salvar</span></a>
   
            </td>
           </tr>
          </tbody></table>
         </td>
        </tr>
        <tr>
         <td class="scFilterFieldEven">
         <div id="Apaga_filters" style="display: none">
          <table style="border-width: 0px; border-collapse: collapse" width="100%">
           <tbody><tr>
            <td style="padding: 0px" valign="top">
            <div id="id_sel_filters_del">
             <select class="scFilterObjectOdd" id="sel_filters_del" name="NM_filters_del" size="1">
              <option value=""></option>
             </select>
            </div>
            </td>
            <td style="padding: 0px" align="right" valign="top">
         <a id="Exc_filtro" onclick="nm_del_grid_search(); return false;" class="scButton_danger " title="Apagar" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-trash" aria-hidden="true"></i>&nbsp;&nbsp;
  <span class="btn-label">Excluir</span></a>
   
            </td>
           </tr>
          </tbody></table>
         </div>
         </td>
        </tr>
       </tbody></table>
      </div> 
     </form>
    </div> 
      <div id="close_grid_search" class="scGridFilterTagClose" onclick="checkLastTag(true);setTimeout(function() {nm_proc_grid_search(0, 'del_grid_search_all', 'grid_search')}, 200);"></div>
     </div>
     </td>
     </tr>
     <script type="text/javascript">
       var Tot_obj_grid_search = 0;
       Tab_obj_grid_search = new Array();
       Tab_evt_grid_search = new Array();
       function SC_carga_evt_jquery_grid(tp_carga)
       {
           for (i = 1; i <= Tot_obj_grid_search; i++)
           {
               if (Tab_obj_grid_search[i] != 'NMSC_Grid_Null' && (tp_carga == 'all' || tp_carga == i))
               {
                   x   = 0;
                   tmp = Tab_obj_grid_search[i];
                   cps = new Array();
                   cps[x] = tmp;
                   for (x = 0; x < cps.length ; x++)
                   {
                       cmp = cps[x];
                       if (Tab_evt_grid_search[cmp])
                       {
                           eval ("$('#grid_search_" + cmp + "_val_" + i + "').bind('change', function() {" + Tab_evt_grid_search[cmp] + "})");
                       }
                   }
               }
           }
           for (i = 1; i <= Tot_obj_grid_search; i++)
           {
               if (Tab_obj_grid_search[i] != 'NMSC_Grid_Null' && (tp_carga == 'all' || tp_carga == i))
               {
                   tmp = Tab_obj_grid_search[i];
                   if (tmp == 'tipo')
                   {
                        var x_tipo = i;
                        $("#id_ac_grid_tipo" + i).autocomplete({
                          minLength: 1,
                          source: function (request, response) {
                          $.ajax({
                            url: "index.php",
                            dataType: "json",
                            data: {
                               q: request.term,
                               nmgp_opcao: "ajax_aut_comp_dyn_search",
                               origem: "grid",
                               field: "tipo",
                               max_itens: "10",
                               cod_desc: "N",
                               script_case_init: 450
                             },
                            success: function (data) {
                              if (data == "ss_time_out") {
                                  nm_move();
                              }
                              response(data);
                            }
                           });
                          },
                          select: function (event, ui) {
                            $("#grid_search_tipo_val_" + x_tipo).val(ui.item.value);
                            $(this).val(ui.item.label);
                            event.preventDefault();
                          },
                          focus: function (event, ui) {
                            $("#grid_search_tipo_val_" + x_tipo).val(ui.item.value);
                            $(this).val(ui.item.label);
                            event.preventDefault();
                          },
                          change: function (event, ui) {
                            if (null == ui.item) {
                               $("#grid_search_tipo_val_" + x_tipo).val( $(this).val() );
                            }
                          }
                        });
                   }
                   if (tmp == 'nomefiscal')
                   {
                        var x_nomefiscal = i;
                        $("#id_ac_grid_nomefiscal" + i).autocomplete({
                          minLength: 1,
                          source: function (request, response) {
                          $.ajax({
                            url: "index.php",
                            dataType: "json",
                            data: {
                               q: request.term,
                               nmgp_opcao: "ajax_aut_comp_dyn_search",
                               origem: "grid",
                               field: "nomefiscal",
                               max_itens: "10",
                               cod_desc: "N",
                               script_case_init: 450
                             },
                            success: function (data) {
                              if (data == "ss_time_out") {
                                  nm_move();
                              }
                              response(data);
                            }
                           });
                          },
                          select: function (event, ui) {
                            $("#grid_search_nomefiscal_val_" + x_nomefiscal).val(ui.item.value);
                            $(this).val(ui.item.label);
                            event.preventDefault();
                          },
                          focus: function (event, ui) {
                            $("#grid_search_nomefiscal_val_" + x_nomefiscal).val(ui.item.value);
                            $(this).val(ui.item.label);
                            event.preventDefault();
                          },
                          change: function (event, ui) {
                            if (null == ui.item) {
                               $("#grid_search_nomefiscal_val_" + x_nomefiscal).val( $(this).val() );
                            }
                          }
                        });
                   }
               }
           }
       }
       function grid_search_hide_input(field, ind)
       {
          var index = document.getElementById('grid_search_' + field + '_cond_' + ind).selectedIndex;
          var parm  = document.getElementById('grid_search_' + field + '_cond_' + ind).options[index].value;
          if (parm == "nu" || parm == "nn" || parm == "ep" || parm == "ne")
          {
              $('#grid_' + field + '_' + ind).css('display','none');
          }
          else
          {
              $('#grid_' + field + '_' + ind).css('display','');
          }
       }
       var addfilter_status = 'out';
       function nm_show_advancedsearch_fields()
       {
         var btn_id = 'add_grid_search';
         var obj_id = 'id_grid_search_add_tag';
         if($('#' + btn_id).offset().left + $('#' + obj_id).width() > $(document).width())
         {
              $('#' + obj_id).css('margin-left', ( $(document).width() - $('#' + btn_id).offset().left - $('#' + obj_id).width() - 10 ));
         }
         addfilter_status = 'open';
         $('#' + btn_id).mouseout(function() {
           setTimeout(function() {
             nm_hide_advancedsearch_fields(obj_id);
           }, 1000);
         });
         $('#' + obj_id + ' div').click(function() {
           addfilter_status = 'out';
           nm_hide_advancedsearch_fields(obj_id);
         });
         $('#' + obj_id).css({
           'left': $('#' + btn_id).left
         })
         .mouseover(function() {
           addfilter_status = 'over';
         })
         .mouseleave(function() {
           addfilter_status = 'out';
           setTimeout(function() {
             nm_hide_advancedsearch_fields(obj_id);
           }, 1000);
         })
         .show('fast');
       }
       function nm_hide_advancedsearch_fields(obj_id) {
        if ('over' != addfilter_status) {
          $('#' + obj_id).hide('fast');
        }
       }
       function closeAllTags(obj)
       {
           if (obj !== undefined)
           {
               if($(obj).parent().parent().parent().attr('new') == 'new')
               {
                   $(obj).parent().parent().parent().find('.scGridFilterTagListItemClose').click();
               }
           }
           $('.scGridFilterTagListFilter').hide();
       }
       function checkLastTag(bol_force)
       {
           if(bol_force || $('.scGridFilterTagListItem').length == 0)
           {
               $('#NM_Grid_Search').remove();
           }
       }
       var nm_empty_data_cond = ['ep','ne','nu','nn'];
       function nm_proc_grid_search(Seq, Tp_Proc, Origem)
       {
           var out_dyn = "";
           var i       = Seq;
           if (Tp_Proc == 'del_grid_search' || Tp_Proc == 'del_grid_search_all')
           {
               $('#add_grid_search').removeClass('scGridFilterTagAddDisabled');
               out_dyn += Tab_obj_grid_search[i] + "_DYN_" + Tp_Proc;
               if (Tp_Proc == 'del_grid_search_all')
               {
                   Tab_obj_grid_search = new Array();
                   checkLastTag(true);
               }
               else
               {
                   Tab_obj_grid_search[i] = 'NMSC_Grid_Null';
                   eval('Dropdownchecklist_'+ Tab_obj_grid_search[i] +'=false;');
               }
           }
           else
           {
               $('#grid_search_' + Tab_obj_grid_search[i]).attr('new', '');
               if (Tab_obj_grid_search[i] != 'NMSC_Grid_Null')
               {
                   out_dyn += Tab_obj_grid_search[i];
                   obj_dyn  = 'grid_search_' + Tab_obj_grid_search[i] + '_cond_' + i;
                   out_cond = grid_search_get_sel_cond(obj_dyn);
                   out_dyn += "_DYN_" + out_cond;
                   obj_dyn  = 'grid_search_' + Tab_obj_grid_search[i] + '_val_';
                   if (Tab_obj_grid_search[i] == 'tipo')
                   {
                       obj_ac  = 'id_ac_grid_' + Tab_obj_grid_search[i] + i;
                       result  = grid_search_get_text(obj_dyn + i, obj_ac);
                   }
                   if (Tab_obj_grid_search[i] == 'idinterno')
                   {
                       result  = grid_search_get_text(obj_dyn + i, '');
                   }
                   if (Tab_obj_grid_search[i] == 'nomefiscal')
                   {
                       obj_ac  = 'id_ac_grid_' + Tab_obj_grid_search[i] + i;
                       result  = grid_search_get_text(obj_dyn + i, obj_ac);
                   }
                   if((result == '' || result == '_VLS2_' || result == 'Y:_VLS_M:_VLS_D:_VLS2_Y:_VLS_M:_VLS_D:' || result == 'Y:_VLS_M:_VLS_D:_VLS_H:_VLS_I:_VLS_S:_VLS2_Y:_VLS_M:_VLS_D:_VLS_H:_VLS_I:_VLS_S:') && nm_empty_data_cond.indexOf(out_cond) == -1 && out_cond.substring(0, 3) != 'bi_')
                   {
                       alert("Você precisa inserir algum valor para pesquisar");
                       return false;
                   }
                   out_dyn += "_DYN_" + result;
               }
           }
           ajax_navigate(Origem, out_dyn);
       }
       function nm_save_grid_search()
       {
           if (document.Fgrid_search_save.nmgp_save_name.value == '')
           {
               alert("Você precisa inserir algum valor para pesquisar");
               document.Fgrid_search_save.nmgp_save_name.focus();
               return false;
           }
           save_name = document.Fgrid_search_save.nmgp_save_name.value;
           save_opt  = ""
           str_out = "";
           for (i = 1; i <= Tot_obj_grid_search; i++)
           {
               if (Tab_obj_grid_search[i] != 'NMSC_Grid_Null')
               {
                   obj_dyn  = 'grid_search_' + Tab_obj_grid_search[i] + '_cond_' + i;
                   out_cond = grid_search_get_sel_cond(obj_dyn);
                   str_out += "SC_" + Tab_obj_grid_search[i] + "_cond#NMF#" + out_cond + "@NMF@";
                   obj_dyn  = 'grid_search_' + Tab_obj_grid_search[i] + '_val_';
                   obj_dyn2 = 'grid_search_' + Tab_obj_grid_search[i] + '_v2__val_';
                   if (Tab_obj_grid_search[i] == 'tipo')
                   {
                       result  = grid_search_get_text(obj_dyn + i, '');
                       str_out += "SC_" + Tab_obj_grid_search[i] + "#NMF#" + result + "@NMF@";
                       obj_ac  = 'id_ac_grid_' + Tab_obj_grid_search[i] + i;
                       result  = grid_search_get_text(obj_dyn + i, obj_ac);
                       str_out += "id_ac_" + Tab_obj_grid_search[i] + "#NMF#" + result + "@NMF@";
                   }
                   if (Tab_obj_grid_search[i] == 'idinterno')
                   {
                       result  = grid_search_get_text(obj_dyn + i, '');
                       str_out += "SC_" + Tab_obj_grid_search[i] + "#NMF#" + result + "@NMF@";
                   }
                   if (Tab_obj_grid_search[i] == 'nomefiscal')
                   {
                       result  = grid_search_get_text(obj_dyn + i, '');
                       str_out += "SC_" + Tab_obj_grid_search[i] + "#NMF#" + result + "@NMF@";
                       obj_ac  = 'id_ac_grid_' + Tab_obj_grid_search[i] + i;
                       result  = grid_search_get_text(obj_dyn + i, obj_ac);
                       str_out += "id_ac_" + Tab_obj_grid_search[i] + "#NMF#" + result + "@NMF@";
                   }
               }
           }
           nmAjaxProcOn();
           $.ajax({
             type: "POST",
             url: "index.php",
             data: "nmgp_opcao=ajax_filter_save&script_case_init=" + document.Fgrid_search.script_case_init.value + "&nmgp_save_name=" + save_name + "&nmgp_save_option=" + save_opt + "&NM_filters_save=" + str_out + "&nmgp_save_origem=grid"
            })
            .done(function(json_save_fil) {
               var i, oResp;
               Tst_integrid = json_save_fil.trim();
               if ("{" != Tst_integrid.substr(0, 1)) {
                   nmAjaxProcOff();
                   alert (json_save_fil);
                   return;
               }
               eval("oResp = " + json_save_fil);
               if (oResp["ss_time_out"]) {
                   nmAjaxProcOff();
                   nm_move();
               }
               if (oResp["setValue"]) {
                 for (i = 0; i < oResp["setValue"].length; i++) {
                      $("#" + oResp["setValue"][i]["field"]).html(oResp["setValue"][i]["value"]);
                 }
               }
               if (oResp["htmOutput"]) {
                   nmAjaxShowDebug(oResp);
                }
               document.getElementById('SC_nmgp_save_name').value = '';
               document.getElementById('Apaga_filters').style.display = '';
               document.getElementById('id_sel_recup_filters').style.display = '';
               document.getElementById('Salvar_filters').style.display = 'none';
               document.getElementById('id_sel_recup_filters').selectedIndex = -1;
               document.getElementById('sel_filters_del').selectedIndex = -1;
               nmAjaxProcOff();
           });
       }
       function nm_del_grid_search()
       {
          obj_sel = document.Fgrid_search_save.elements['NM_filters_del'];
          index   = obj_sel.selectedIndex;
          if (index == -1 || obj_sel.options[index].value == "") 
          {
              return false;
          }
          parm = obj_sel.options[index].value;
          nmAjaxProcOn();
          $.ajax({
            type: "POST",
            url: "index.php",
            data: "nmgp_opcao=ajax_filter_delete&script_case_init=" + document.Fgrid_search.script_case_init.value + "&NM_filters_del=" + parm + "&nmgp_save_origem=grid"
           })
           .done(function(json_del_fil) {
              var i, oResp;
              Tst_integrid = json_del_fil.trim();
              if ("{" != Tst_integrid.substr(0, 1)) {
                  nmAjaxProcOff();
                  alert (json_del_fil);
                  return;
              }
              eval("oResp = " + json_del_fil);
               if (oResp["ss_time_out"]) {
                   nmAjaxProcOff();
                   nm_move();
               }
              if (oResp["setValue"]) {
                for (i = 0; i < oResp["setValue"].length; i++) {
                     $("#" + oResp["setValue"][i]["field"]).html(oResp["setValue"][i]["value"]);
                }
              }
              if (oResp["htmOutput"]) {
                  nmAjaxShowDebug(oResp);
              }
              nmAjaxProcOff();
          });
       }
       function nm_change_grid_search(obj_sel)
       {
          index = obj_sel.selectedIndex;
          if (index == -1 || obj_sel.options[index].value == "") 
          {
              return false;
          }
          for (i = 1; i <= Tot_obj_grid_search; i++)
          {
              $('#grid_search_' + Tab_obj_grid_search[i]).remove();
               eval('Dropdownchecklist_'+ Tab_obj_grid_search[i] +'=false;');
          }
          Tot_obj_grid_search = 0;
          Tab_obj_grid_search = new Array();
          ajax_navigate('grid_search_change_fil', obj_sel.options[index].value);;
       }
       function grid_search_get_sel_cond(obj_id)
       {
          var index = document.getElementById(obj_id).selectedIndex;
          return document.getElementById(obj_id).options[index].value;
       }
       function grid_search_get_select(obj_id, str_type)
       {
          if(str_type == '')
          {
              var obj = document.getElementById(obj_id);
          }
          else
          {
              var obj = $('#' + obj_id).multipleSelect('getSelects');
          }
          var val = "";
          for (iSelect = 0; iSelect < obj.length; iSelect++)
          {
              if ((str_type == '' && obj[iSelect].selected) || (str_type=='RADIO' || str_type=='CHECKBOX'))
              {
                  if(str_type == '' && obj[iSelect].selected)
                  {
                      new_val = obj[iSelect].value;
                  }
                  else
                  {
                      new_val = obj[iSelect];
                  }
                  val += (val != "") ? "_VLS_" : "";
                  val += new_val;
              }
          }
          return val;
       }
       function grid_search_get_Dselelect(obj_id)
       {
          var obj = document.getElementById(obj_id);
          var val = "";
          for (iSelect = 0; iSelect < obj.length; iSelect++)
          {
              val += (val != "") ? "_VLS_" : "";
              val += obj[iSelect].value;
          }
          return val;
       }
       function grid_search_get_radio(obj_id)
       {
          var Nobj = document.getElementById(obj_id).name;
          var obj  = document.getElementsByName(Nobj);
          var val  = "";
          for (iRadio = 0; iRadio < obj.length; iRadio++)
          {
              if (obj[iRadio].checked)
              {
                  val += (val != "") ? "_VLS_" : "";
                  val += obj[iRadio].value;
              }
          }
          return val;
       }
       function grid_search_get_checkbox(obj_id)
       {
          var Nobj = document.getElementById(obj_id).name;
          var obj  = document.getElementsByName(Nobj);
          var val  = "";
          if (!obj.length)
          {
              if (obj.checked)
              {
                  val = obj.value;
              }
              return val;
          }
          else
          {
              for (iCheck = 0; iCheck < obj.length; iCheck++)
              {
                  if (obj[iCheck].checked)
                  {
                      val += (val != "") ? "_VLS_" : "";
                      val += obj[iCheck].value;
                  }
              }
          }
          return val;
       }
       function grid_search_get_text(obj_id, obj_ac)
       {
          var obj = document.getElementById(obj_id);
          var val = "";
          if (obj)
          {
              val = obj.value;
          }
          if (obj_ac != '' && val == '')
          {
              obj = document.getElementById(obj_ac);
              if (obj)
              {
                  val = obj.value;
              }
          }
          return val;
       }
       function grid_search_get_dt_h(obj_id, ind, TP)
       {
          var val = new Array();
          if (TP == 'DT' || TP == 'DH')
          {
              obj_part  = document.getElementById(obj_id + '_ano_val_' + ind);
              val      += "Y:";
              if (obj_part && obj_part.type.substr(0, 6) == 'select')
              {
                  Tval = grid_search_get_sel_cond(obj_id + '_ano_val_' + ind);
                  val += (Tval != -1) ? Tval : '';
              }
              else
              {
                  val += (obj_part) ? obj_part.value : '';
              }
              obj_part  = document.getElementById(obj_id + '_mes_val_' + ind);
              val      += "_VLS_M:";
              if (obj_part && obj_part.type.substr(0, 6) == 'select')
              {
                  Tval = grid_search_get_sel_cond(obj_id + '_mes_val_' + ind);
                  val += (Tval != -1) ? Tval : '';
              }
              else
              {
                  val += (obj_part) ? obj_part.value : '';
              }
              obj_part  = document.getElementById(obj_id + '_dia_val_' + ind);
              val      += "_VLS_D:";
              if (obj_part && obj_part.type.substr(0, 6) == 'select')
              {
                  Tval = grid_search_get_sel_cond(obj_id + '_dia_val_' + ind);
                  val += (Tval != -1) ? Tval : '';
              }
              else
              {
                  val += (obj_part) ? obj_part.value : '';
              }
          }
          if (TP == 'HH' || TP == 'DH')
          {
              val            += (val != "") ? "_VLS_" : "";
              obj_part        = document.getElementById(obj_id + '_hor_val_' + ind);
              val            += "H:";
              val            += (obj_part) ? obj_part.value : '';
              obj_part        = document.getElementById(obj_id + '_min_val_' + ind);
              val            += "_VLS_I:";
              val            += (obj_part) ? obj_part.value : '';
              obj_part        = document.getElementById(obj_id + '_seg_val_' + ind);
              val            += "_VLS_S:";
              val            += (obj_part) ? obj_part.value : '';
          }
          return val;
       }
     </script>
      <tr> 
    <td id="sc_grid_body" class="scGridTabelaTd" style="vertical-align: top;text-align: center;">
         <div id="div_FBtn_Run" style="display: none"> 
         <form name="FBtn_Run" method="post" action="./" target="_self">
          <input type="hidden" name="nmgp_opcao" value="formphp"> 
          <input type="hidden" name="rec" value=""> 
          <input type="hidden" name="nm_call_php" value=""> 
          <input type="hidden" name="nm_run_opt_sel" value=""> 
          <input type="hidden" name="script_case_init" value="450"> 
         </form></div> 
     <table class="scGridTabela" id="sc-ui-grid-body-e8000c51" align="center" width="100%">
      <tbody><tr id="tit_grid_compensar__SCCS__1" align="center" class="scGridLabel sc-ui-grid-header-row sc-ui-grid-header-row-grid_compensar-1">
       <td class="scGridBlockBg" style="width: 0px; display:none;">&nbsp;</td>
       <td class="scGridLabelFont sc-header-fixed" style="position: sticky; top: 0px; z-index: 4;"><input type="checkbox" id="NM_ck_run0" name="NM_ck_grid[]" value="0" style="display:''" onclick="nm_marca_check_grid(this)"></td>
       <td class="scInheritBg scGridLabelFont css_tipo_label sc-header-fixed" style="position: sticky; top: 0px; z-index: 4;">
  <div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline"><div style="flex-grow: 1"><a href="javascript:nm_gp_submit2('tipo')" class="scGridLabelLink"><div style="display: flex; justify-content: space-between"><div style="display: flex; flex-grow: 1; white-space: nowrap">Tipo</div><img src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_sort.png"></div></a></div><div style="display: flex; flex-wrap: nowrap; align-items: baseline"></div></div>
  </td>
       <td class="scInheritBg scGridLabelFont css_nomefiscal_label sc-header-fixed" style="position: sticky; top: 0px; z-index: 4;">
  <div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline"><div style="flex-grow: 1"><a href="javascript:nm_gp_submit2('nomeFiscal')" class="scGridLabelLink"><div style="display: flex; justify-content: space-between"><div style="display: flex; flex-grow: 1; white-space: nowrap">Cliente/Fornecedor</div><img src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_sort.png"></div></a></div><div style="display: flex; flex-wrap: nowrap; align-items: baseline"></div></div>
  </td>
       <td class="scInheritBg scGridLabelFont css_codigo_lancamento_omie_label sc-header-fixed" style="position: sticky; top: 0px; z-index: 4;">
  <div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline"><div style="flex-grow: 1"><a href="javascript:nm_gp_submit2('codigo_lancamento_omie')" class="scGridLabelLink"><div style="display: flex; justify-content: space-between"><div style="display: flex; flex-grow: 1; white-space: nowrap; justify-content: right">Código de Lançamento</div><img src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_sort.png"></div></a></div><div style="display: flex; flex-wrap: nowrap; align-items: baseline"></div></div>
  </td>
       <td class="scInheritBg scGridLabelFont css_descricao_label sc-header-fixed" style="position: sticky; top: 0px; z-index: 4;">
  <div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline"><div style="flex-grow: 1"><a href="javascript:nm_gp_submit2('descricao')" class="scGridLabelLink"><div style="display: flex; justify-content: space-between"><div style="display: flex; flex-grow: 1; white-space: nowrap">Categoria</div><img src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_sort.png"></div></a></div><div style="display: flex; flex-wrap: nowrap; align-items: baseline"></div></div>
  </td>
       <td class="scInheritBg scGridLabelFont css_valordocumento_label sc-header-fixed" style="position: sticky; top: 0px; z-index: 4;">
  <div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline"><div style="flex-grow: 1"><a href="javascript:nm_gp_submit2('valorDocumento')" class="scGridLabelLink"><div style="display: flex; justify-content: space-between"><div style="display: flex; flex-grow: 1; white-space: nowrap">Valor do Documento</div><img src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_sort.png"></div></a></div><div style="display: flex; flex-wrap: nowrap; align-items: baseline"></div></div>
  </td>
       <td class="scInheritBg scGridLabelFont css_banco_label sc-header-fixed" style="position: sticky; top: 0px; z-index: 4;">
  <div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline"><div style="flex-grow: 1"><a href="javascript:nm_gp_submit2('banco')" class="scGridLabelLink"><div style="display: flex; justify-content: space-between"><div style="display: flex; flex-grow: 1; white-space: nowrap">Banco</div><img src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_sort.png"></div></a></div><div style="display: flex; flex-wrap: nowrap; align-items: baseline"></div></div>
  </td>
       <td class="scInheritBg scGridLabelFont css_data_emissao_label sc-header-fixed" style="position: sticky; top: 0px; z-index: 4;">
  <div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline"><div style="flex-grow: 1"><a href="javascript:nm_gp_submit2('data_emissao')" class="scGridLabelLink"><div style="display: flex; justify-content: space-between"><div style="display: flex; flex-grow: 1; white-space: nowrap; justify-content: center">Data Emissao</div><img src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_sort.png"></div></a></div><div style="display: flex; flex-wrap: nowrap; align-items: baseline"></div></div>
  </td>
       <td class="scInheritBg scGridLabelFont css_data_vencimento_label sc-header-fixed" style="position: sticky; top: 0px; z-index: 4;">
  <div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline"><div style="flex-grow: 1"><a href="javascript:nm_gp_submit2('data_vencimento')" class="scGridLabelLink"><div style="display: flex; justify-content: space-between"><div style="display: flex; flex-grow: 1; white-space: nowrap; justify-content: center">Data Vencimento</div><img src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_sort.png"></div></a></div><div style="display: flex; flex-wrap: nowrap; align-items: baseline"></div></div>
  </td>
       <td class="scInheritBg scGridLabelFont css_data_previsao_label sc-header-fixed" style="position: sticky; top: 0px; z-index: 4;">
  <div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline"><div style="flex-grow: 1"><a href="javascript:nm_gp_submit2('data_previsao')" class="scGridLabelLink"><div style="display: flex; justify-content: space-between"><div style="display: flex; flex-grow: 1; white-space: nowrap; justify-content: center">Data Previsao</div><img src="/scriptcase/app/Hortifrios/_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_sort.png"></div></a></div><div style="display: flex; flex-wrap: nowrap; align-items: baseline"></div></div>
  </td>
  </tr>
      <tr class="scGridFieldOdd" style="page-break-inside: avoid;" onmouseover="over_tr(this, 'scGridFieldOdd');" onmouseout="out_tr(this, 'scGridFieldOdd');" onclick="click_tr(this, 'scGridFieldOdd');" id="SC_ancor1">
       <td rowspan="1" class="scGridBlockBg" style="width: 0px; display:none;" nowrap="" align="" valign="" height="0px">&nbsp;</td>
       <td rowspan="1" class="scGridFieldOddFont" style="" nowrap="" align="left" valign="top" width="1px" height="0px"> <input type="checkbox" id="NM_ck_run1" class="sc-ui-check-run" name="NM_ck_grid[]" value="1" style="align:left;vertical-align:middle;font-weight:bold;"></td>
       <td rowspan="1" class="scGridFieldOddFont css_tipo_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_tipo_1">Contas a Pagar</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_nomefiscal_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_nomefiscal_1">PAO DE ACUCAR</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_codigo_lancamento_omie_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_codigo_lancamento_omie_1">8120321737</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_descricao_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_descricao_1">Energia Elétrica</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_valordocumento_grid_line" style="" align="" valign="top" height="0px"><span id="id_sc_field_valordocumento_1">92,00</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_banco_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_banco_1">Banco do Brasil</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_data_emissao_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_data_emissao_1">28/11/2022</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_data_vencimento_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_data_vencimento_1">29/11/2022</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_data_previsao_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_data_previsao_1">30/11/2022</span></td>
  </tr>
      <tr class="scGridFieldEven" style="page-break-inside: avoid;" onmouseover="over_tr(this, 'scGridFieldEven');" onmouseout="out_tr(this, 'scGridFieldEven');" onclick="click_tr(this, 'scGridFieldEven');" id="SC_ancor2">
       <td rowspan="1" class="scGridBlockBg" style="width: 0px; display:none;" nowrap="" align="" valign="" height="0px">&nbsp;</td>
       <td rowspan="1" class="scGridFieldEvenFont" style="" nowrap="" align="left" valign="top" width="1px" height="0px"> <input type="checkbox" id="NM_ck_run2" class="sc-ui-check-run" name="NM_ck_grid[]" value="2" style="align:left;vertical-align:middle;font-weight:bold;"></td>
       <td rowspan="1" class="scGridFieldEvenFont css_tipo_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_tipo_2">Contas a Pagar</span></td>
       <td rowspan="1" class="scGridFieldEvenFont css_nomefiscal_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_nomefiscal_2">PAO DE ACUCAR</span></td>
       <td rowspan="1" class="scGridFieldEvenFont css_codigo_lancamento_omie_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_codigo_lancamento_omie_2">8120321726</span></td>
       <td rowspan="1" class="scGridFieldEvenFont css_descricao_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_descricao_2">Energia Elétrica</span></td>
       <td rowspan="1" class="scGridFieldEvenFont css_valordocumento_grid_line" style="" align="" valign="top" height="0px"><span id="id_sc_field_valordocumento_2">102,50</span></td>
       <td rowspan="1" class="scGridFieldEvenFont css_banco_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_banco_2">Banco do Brasil</span></td>
       <td rowspan="1" class="scGridFieldEvenFont css_data_emissao_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_data_emissao_2">28/11/2022</span></td>
       <td rowspan="1" class="scGridFieldEvenFont css_data_vencimento_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_data_vencimento_2">28/11/2022</span></td>
       <td rowspan="1" class="scGridFieldEvenFont css_data_previsao_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_data_previsao_2">29/11/2022</span></td>
  </tr>
      <tr class="scGridFieldOdd" style="page-break-inside: avoid;" onmouseover="over_tr(this, 'scGridFieldOdd');" onmouseout="out_tr(this, 'scGridFieldOdd');" onclick="click_tr(this, 'scGridFieldOdd');" id="SC_ancor3">
       <td rowspan="1" class="scGridBlockBg" style="width: 0px; display:none;" nowrap="" align="" valign="" height="0px">&nbsp;</td>
       <td rowspan="1" class="scGridFieldOddFont" style="" nowrap="" align="left" valign="top" width="1px" height="0px"> <input type="checkbox" id="NM_ck_run3" class="sc-ui-check-run" name="NM_ck_grid[]" value="3" style="align:left;vertical-align:middle;font-weight:bold;"></td>
       <td rowspan="1" class="scGridFieldOddFont css_tipo_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_tipo_3">Contas a Receber</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_nomefiscal_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_nomefiscal_3">PAO DE ACUCAR</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_codigo_lancamento_omie_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_codigo_lancamento_omie_3">8120321758</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_descricao_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_descricao_3">Venda serviço galpão 539</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_valordocumento_grid_line" style="" align="" valign="top" height="0px"><span id="id_sc_field_valordocumento_3">102,50</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_banco_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_banco_3">Banco do Brasil</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_data_emissao_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_data_emissao_3">28/11/2022</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_data_vencimento_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_data_vencimento_3">28/11/2022</span></td>
       <td rowspan="1" class="scGridFieldOddFont css_data_previsao_grid_line" style="" nowrap="" align="" valign="top" height="0px"><span id="id_sc_field_data_previsao_3">30/11/2022</span></td>
  </tr>
  </tbody></table>       
  </td></tr>    
       <tr id="sc_id_save_grid_placeholder_bot" style="display: none">
        <td>
        </td>
       </tr>
       <tr id="sc_id_groupby_placeholder_bot" style="display: none">
        <td>
        </td>
       </tr>
       <tr id="sc_id_sel_campos_placeholder_bot" style="display: none">
        <td>
        </td>
       </tr>
       <tr id="sc_id_export_email_placeholder_bot" style="display: none">
        <td>
        </td>
       </tr>
       <tr id="sc_id_order_campos_placeholder_bot" style="display: none">
        <td>
        </td>
       </tr>
        <tr style="display: none">
        <td>
        <form id="id_F0_bot" name="F0_bot" method="post" action="./" target="_self"> 
        <input type="text" id="id_sc_truta_f0_bot" name="sc_truta_f0_bot" value=""> 
        <input type="hidden" id="script_init_f0_bot" name="script_case_init" value="450"> 
        <input type="hidden" id="opcao_f0_bot" name="nmgp_opcao" value="muda_qt_linhas"> 
        </form></td></tr><tr id="sc_grid_toobar_bot_tr">
         <td id="sc_grid_toobar_bot" class="scGridTabelaTd" valign="top"> 
          <table id="sc_grid_toobar_bot_table" class="scGridToolbar" style="padding: 0px; border-spacing: 0px; border-width: 0px; vertical-align: top;" width="100%" valign="top">
           <tbody><tr class="scGridToolbarPadding_tr"> 
            <td class="scGridToolbarPadding" nowrap="" valign="middle" align="left" width="33%"> 
             <a id="brec_bot" onclick="var rec_nav = ((document.getElementById('rec_f0_bot').value - 1) * 10) + 1; nm_gp_submit_ajax('muda_rec_linhas', rec_nav);; return false;" class="scButton_default " title="Ir para a linha" style="vertical-align: middle; display:inline-block;"><span class="btn-label">Ir para</span></a>
   
            <input id="rec_f0_bot" type="text" class="css_toolbar_obj" name="rec" value="1" style="width:25px;vertical-align: middle;"> 
            <span class="css_toolbar_obj" style="border: 0px;vertical-align: middle;">Visualizar</span>
            <select class="css_toolbar_obj" style="vertical-align: middle;" id="quant_linhas_f0_bot" name="nmgp_quant_linhas" onchange="sc_ind = document.getElementById('quant_linhas_f0_bot').selectedIndex; nm_gp_submit_ajax('muda_qt_linhas', document.getElementById('quant_linhas_f0_bot').options[sc_ind].value);"> 
             <option value="10" selected="">10</option>
             <option value="20">20</option>
             <option value="50">50</option>
            </select>
           </td> 
            <td class="scGridToolbarPadding" nowrap="" valign="middle" align="center" width="33%"> 
             <a id="first_bot" onclick="nm_gp_submit_rec('ini');; return false;" class="disabled scButton_fontawesome " title="Retornar ao início" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-step-backward" aria-hidden="true"></i>
  </a>
   
             <a id="back_bot" onclick="nm_gp_submit_rec('0');; return false;" class="disabled scButton_fontawesome " title="Retornar um registro" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-arrow-left" aria-hidden="true"></i>
  </a>
   
              <span class="scGridToolbarNavOpen" style="vertical-align: middle;">1</span>
             <a id="forward_bot" onclick="nm_gp_submit_rec('3');; return false;" class="scButton_fontawesome disabled" title="Avançar para o próximo registro" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-arrow-right" aria-hidden="true"></i>
  </a>
   
             <a id="last_bot" onclick="nm_gp_submit_rec('fim');; return false;" class="scButton_fontawesome disabled" title="Avançar para o final" style="vertical-align: middle; display:inline-block;"><i class="icon_fa fas fa-step-forward" aria-hidden="true"></i>
  </a>
   
           </td> 
            <td class="scGridToolbarPadding" nowrap="" valign="middle" align="right" width="33%"> 
             <span class="summary_indicator css_toolbar_obj" style="border:0px;"><span class="sm_counter">[1 a <span class="sm_counter_final">3</span> de <span class="sm_counter_total">3</span>]</span></span>
           </td> 
          </tr> 
         </tbody></table> 
        </td> 
       </tr> 
        <tr style="display: none">
        <td> 
        
        </td> 
       </tr> 
     </tbody>
</table>


    <style>
    #rod_col1 { margin:0px; padding: 3px 0 0 5px; float:left; overflow:hidden;}
    #rod_col2 { margin:0px; padding: 3px 5px 0 0; float:right; overflow:hidden; text-align:right;}
    
    </style>
    
    <script>
        let pagar = document.getElementById('pagar');
        let receber = document.getElementById('receber');
        let diferenca = document.getElementById('diferenca');

        let total_registros = document.getElementsByClassName('sm_counter_total')[0].innerText;

        let arr = array(
            "merda" = "oi",
        )
        
        let listaPagar = [];
        let listaReceber = [];
        pagar.textContent = "0,00";
        receber.textContent = "0,00";
        diferenca.textContent = "0,00";
        
    <?php
    for($i = 0; $i < 3; $i++){
        $linha = $i+1;

        echo "
        document.getElementById('NM_ck_run$linha').onclick = function(){
            let value = document.getElementById('id_sc_field_valordocumento_$linha').innerText
            let valor = parseFloat(value.replace(',','.'))

            let tipo = document.getElementById('id_sc_field_tipo_$linha').innerText
            let pos = listaPagar.indexOf(valor)

            for(let i = 0; i < ){
                if(tipo == 'Contas a Pagar'){
                    if(document.getElementById('NM_ck_run$linha').checked && ele[0].indexOf($linha) == -1){
                        listaPagar.push([$linha,valor])
                        let soma = 0
                        listaPagar.forEach(ele => {
                            soma+=ele[1]
                        })
                        pagar.textContent = soma.toFixed(2).replace('.',',')
                    }else {
                        listaPagar.splice(listaPagar.indexOf(ele),1)
                        let soma = 0
                        listaPagar.forEach(ele => {
                            soma+=ele[1]
                        })
                        pagar.textContent = soma.toFixed(2).replace('.',',')
                    }
                }else{
                    if(document.getElementById('NM_ck_run$linha').checked && ele[0].indexOf($linha) == -1){
                        listaReceber.push([$linha,valor])
                        let soma = 0
                        listaReceber.forEach(ele => {
                            soma+=ele[1]
                        })
                        receber.textContent = soma.toFixed(2).replace('.',',')
                    }else {
                        listaReceber.splice(listaPagar.indexOf(ele),1)
                        let soma = 0
                        listaReceber.forEach(ele => {
                            soma+=ele[1]
                        })
                        receber.textContent = soma.toFixed(2).replace('.',',')
                    }
                }
            }
            
            let total_pagar = 0
            let total_receber = 0

            listaReceber.forEach(ele => {
                total_receber+=ele[1]
            })
            listaPagar.forEach(ele => {
                total_pagar+=ele[1]
            })

            let valor_diferenca = total_pagar - total_receber
            
            diferenca.textContent = valor_diferenca.toFixed(2).replace('.',',')
        }
        ";
    }
    ?>
        
        
        
        
        
        document.getElementById('NM_ck_run0').onclick = function(){
            
            if(document.getElementById('NM_ck_run0').checked){

                listaPagar.length = 0
                listaReceber.length = 0
                <?php
                for($i = 0; $i < 3; $i++){
                    $linha = $i+1;

                    echo "
                    let value$linha = document.getElementById('id_sc_field_valordocumento_$linha').innerText
                    let valor$linha = parseFloat(value$linha.replace(',','.'))

                    let tipo$linha = document.getElementById('id_sc_field_tipo_$linha').innerText

                    if(tipo$linha == 'Contas a Pagar'){
                        if(document.getElementById('NM_ck_run$linha').checked){
                            listaPagar.push([$linha,valor$linha])
                        } 
                    }else{
                        if(document.getElementById('NM_ck_run$linha').checked){
                            listaReceber.push([$linha,valor$linha])
                        } 
                    }
                    ";

                }
                ?>
                
                let total_pagar = 0
                let total_receber = 0

                listaReceber.forEach(ele => {
                    total_receber+=ele[1]
                })
                listaPagar.forEach(ele => {
                    total_pagar+=ele[1]
                })

                let valor_diferenca = total_pagar - total_receber
                
                pagar.textContent = total_pagar.toFixed(2).replace('.',',')
                receber.textContent = total_receber.toFixed(2).replace('.',',')
                diferenca.textContent = valor_diferenca.toFixed(2).replace('.',',')

            }else {
                listaPagar.length = 0
                listaReceber.length = 0
                pagar.textContent = "0,00"
                receber.textContent = "0,00"
                diferenca.textContent = "0,00"
            }
        <?php
        for($i = 0; $i < 3; $i++){
            $linha = $i+1;

            

            echo "";
        }
        ?>
           
        }
        
        
    </script>
    <table style="width: 100%; height:20px;" cellpadding="0px" cellspacing="0px" {NM_CSS_FUN_ROD}>
        <tr>
            <td>
                
                <span {NM_CSS_ROD} id="rod_col1">{ROD_LIN1_COL1}</span>
            </td>
            <td>
                <span {NM_CSS_ROD} id="rod_col2">{ROD_LIN1_COL2}</span>
            </td>
        </tr>
    </table>
</body>
</html>