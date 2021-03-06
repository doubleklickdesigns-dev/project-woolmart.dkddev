<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	
	global $wpdb;
	$table_name   = $wpdb->prefix . "rich_web_video_slider_font_family";
	$table_name1  = $wpdb->prefix . "rich_web_video_slider_id";
	$table_name2  = $wpdb->prefix . "rich_web_video_slider_manager";
	$table_name3  = $wpdb->prefix . "rich_web_video_slider_videos";
	$table_name4  = $wpdb->prefix . "rich_web_video_slider_effects_data";
	$table_name5  = $wpdb->prefix . "rich_web_vs_effect_1";
	$table_name6  = $wpdb->prefix . "rich_web_vs_effect_2";
	$table_name7  = $wpdb->prefix . "rich_web_vs_effect_3";
	$table_name8  = $wpdb->prefix . "rich_web_vs_effect_4";
	$table_name9  = $wpdb->prefix . "rich_web_vs_effect_5";
	$table_name10 = $wpdb->prefix . "rich_web_vs_effect_6";
	$table_name11 = $wpdb->prefix . "rich_web_vs_effect_7";
	$table_name12 = $wpdb->prefix . "rich_web_vs_effect_8";
	$table_name13 = $wpdb->prefix . "rich_web_vs_effect_9";
	$table_name14 = $wpdb->prefix . "rich_web_vs_effect_10";
	$table_name5_Loader  = $wpdb->prefix . "rich_web_vs_effect_1_loader";
	$table_name6_Loader  = $wpdb->prefix . "rich_web_vs_effect_2_loader";
	$table_name7_Loader  = $wpdb->prefix . "rich_web_vs_effect_3_loader";
	$table_name8_Loader  = $wpdb->prefix . "rich_web_vs_effect_4_loader";
	$table_name9_Loader  = $wpdb->prefix . "rich_web_vs_effect_5_loader";
	$table_name10_Loader  = $wpdb->prefix . "rich_web_vs_effect_6_loader";
	$table_name11_Loader  = $wpdb->prefix . "rich_web_vs_effect_7_loader";
	$table_name12_Loader  = $wpdb->prefix . "rich_web_vs_effect_8_loader";
	$table_name13_Loader  = $wpdb->prefix . "rich_web_vs_effect_9_loader";
	$table_name14_Loader  = $wpdb->prefix . "rich_web_vs_effect_10_loader";
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(check_admin_referer( 'edit-menu_', 'Rich_Web_VSlider_Nonce' ))
		{
			$Rich_Web_VSlider_Option_Name=sanitize_text_field($_POST['Rich_Web_VSlider_Option_Name']); $Rich_Web_VSlider_Option_Type=sanitize_text_field($_POST['Rich_Web_VSlider_Option_Type']);
			//Content Slider
			$Rich_Web_VS_CP_S=sanitize_text_field($_POST['Rich_Web_VS_CP_S']); $Rich_Web_VS_CP_BlC=sanitize_text_field($_POST['Rich_Web_VS_CP_BlC']); $Rich_Web_VS_CP_BlR=sanitize_text_field($_POST['Rich_Web_VS_CP_BlR']); $Rich_Web_VS_CP_AS=sanitize_text_field($_POST['Rich_Web_VS_CP_AS']); $Rich_Web_VS_CP_PT=sanitize_text_field($_POST['Rich_Web_VS_CP_PT']); $Rich_Web_VS_CS_AP=sanitize_text_field($_POST['Rich_Web_VS_CS_AP']); $Rich_Web_VS_CS_HP=sanitize_text_field($_POST['Rich_Web_VS_CS_HP']); $Rich_Web_VS_CS_RS=sanitize_text_field($_POST['Rich_Web_VS_CS_RS']); $Rich_Web_VS_CP_BW=sanitize_text_field($_POST['Rich_Web_VS_CP_BW']); $Rich_Web_VS_CP_BS=sanitize_text_field($_POST['Rich_Web_VS_CP_BS']); $Rich_Web_VS_CP_BR=sanitize_text_field($_POST['Rich_Web_VS_CP_BR']); $Rich_Web_VS_CS_CN=sanitize_text_field($_POST['Rich_Web_VS_CS_CN']); $Rich_Web_VS_CS_NPB=sanitize_text_field($_POST['Rich_Web_VS_CS_NPB']); $Rich_Web_VS_CP_NO=sanitize_text_field($_POST['Rich_Web_VS_CP_NO']); $Rich_Web_VS_CS_NT=sanitize_text_field($_POST['Rich_Web_VS_CS_NT']); $Rich_Web_VS_CP_CapS=sanitize_text_field($_POST['Rich_Web_VS_CP_CapS']); $Rich_Web_VS_CP_CapO=sanitize_text_field($_POST['Rich_Web_VS_CP_CapO']); $Rich_Web_VS_CP_TFS=sanitize_text_field($_POST['Rich_Web_VS_CP_TFS']); $Rich_Web_VS_CP_TFF=sanitize_text_field($_POST['Rich_Web_VS_CP_TFF']); $Rich_Web_VS_CS_DBgC=sanitize_text_field($_POST['Rich_Web_VS_CS_DBgC']); $Rich_Web_VS_CP_TiO=sanitize_text_field($_POST['Rich_Web_VS_CP_TiO']); $Rich_Web_VS_CP_TiD=sanitize_text_field($_POST['Rich_Web_VS_CP_TiD']); $Rich_Web_VS_CP_TiP=sanitize_text_field($_POST['Rich_Web_VS_CP_TiP']); $Rich_Web_VS_CP_TiS=sanitize_text_field($_POST['Rich_Web_VS_CP_TiS']); $Rich_Web_VS_CP_TiBS=sanitize_text_field($_POST['Rich_Web_VS_CP_TiBS']); $Rich_Web_VS_SL_Width=sanitize_text_field($_POST['Rich_Web_VS_SL_Width']); $Rich_Web_VS_SL_Height=sanitize_text_field($_POST['Rich_Web_VS_SL_Height']);
			//Slick Slider
			$Rich_Web_VS_SS_ED=sanitize_text_field($_POST['Rich_Web_VS_SS_ED']); $Rich_Web_VS_SS_PT=sanitize_text_field($_POST['Rich_Web_VS_SS_PT']); $Rich_Web_VS_SS_AP=sanitize_text_field($_POST['Rich_Web_VS_SS_AP']); $Rich_Web_VS_SS_W=sanitize_text_field($_POST['Rich_Web_VS_SS_W']); $Rich_Web_VS_SS_H=sanitize_text_field($_POST['Rich_Web_VS_SS_H']); $Rich_Web_VS_SS_BW=sanitize_text_field($_POST['Rich_Web_VS_SS_BW']); $Rich_Web_VS_SS_BS=sanitize_text_field($_POST['Rich_Web_VS_SS_BS']); $Rich_Web_VS_SS_TShow=sanitize_text_field($_POST['Rich_Web_VS_SS_TShow']); $Rich_Web_VS_SS_TFS=sanitize_text_field($_POST['Rich_Web_VS_SS_TFS']); $Rich_Web_VS_SS_TFF=sanitize_text_field($_POST['Rich_Web_VS_SS_TFF']); $Rich_Web_VS_SS_NShow=sanitize_text_field($_POST['Rich_Web_VS_SS_NShow']); $Rich_Web_VS_SS_NS=sanitize_text_field($_POST['Rich_Web_VS_SS_NS']); $Rich_Web_VS_SS_PagShow=sanitize_text_field($_POST['Rich_Web_VS_SS_PagShow']); $Rich_Web_VS_SS_PagW=sanitize_text_field($_POST['Rich_Web_VS_SS_PagW']); $Rich_Web_VS_SS_PagH=sanitize_text_field($_POST['Rich_Web_VS_SS_PagH']); $Rich_Web_VS_SS_PagPB=sanitize_text_field($_POST['Rich_Web_VS_SS_PagPB']); $Rich_Web_VS_SS_PagBW=sanitize_text_field($_POST['Rich_Web_VS_SS_PagBW']); $Rich_Web_VS_SS_PagBS=sanitize_text_field($_POST['Rich_Web_VS_SS_PagBS']); $Rich_Web_VS_SS_PagBR=sanitize_text_field($_POST['Rich_Web_VS_SS_PagBR']);
			//Thumbnails Slider
			$Rich_Web_VS_TS_W=sanitize_text_field($_POST['Rich_Web_VS_TS_W']); $Rich_Web_VS_TS_H=sanitize_text_field($_POST['Rich_Web_VS_TS_H']); $Rich_Web_VS_TS_BW=sanitize_text_field($_POST['Rich_Web_VS_TS_BW']); $Rich_Web_VS_TS_BS=sanitize_text_field($_POST['Rich_Web_VS_TS_BS']); $Rich_Web_VS_TS_BoxShShow=sanitize_text_field($_POST['Rich_Web_VS_TS_BoxShShow']); $Rich_Web_VS_TS_BoxShType=sanitize_text_field($_POST['Rich_Web_VS_TS_BoxShType']); $Rich_Web_VS_TS_BoxSh=sanitize_text_field($_POST['Rich_Web_VS_TS_BoxSh']); $Rich_Web_VS_TS_IBW=sanitize_text_field($_POST['Rich_Web_VS_TS_IBW']); $Rich_Web_VS_TS_IBS=sanitize_text_field($_POST['Rich_Web_VS_TS_IBS']); $Rich_Web_VS_TS_IBR=sanitize_text_field($_POST['Rich_Web_VS_TS_IBR']); $Rich_Web_VS_TS_TBW=sanitize_text_field($_POST['Rich_Web_VS_TS_TBW']); $Rich_Web_VS_TS_TBS=sanitize_text_field($_POST['Rich_Web_VS_TS_TBS']); $Rich_Web_VS_TS_TIH=sanitize_text_field($_POST['Rich_Web_VS_TS_TIH']); $Rich_Web_VS_TS_TIPB=sanitize_text_field($_POST['Rich_Web_VS_TS_TIPB']); $Rich_Web_VS_TS_TIBW=sanitize_text_field($_POST['Rich_Web_VS_TS_TIBW']); $Rich_Web_VS_TS_TIBS=sanitize_text_field($_POST['Rich_Web_VS_TS_TIBS']); $Rich_Web_VS_TS_TIBR=sanitize_text_field($_POST['Rich_Web_VS_TS_TIBR']); $Rich_Web_VS_TS_TIBoxShShow=sanitize_text_field($_POST['Rich_Web_VS_TS_TIBoxShShow']); $Rich_Web_VS_TS_TIBoxShType=sanitize_text_field($_POST['Rich_Web_VS_TS_TIBoxShType']); $Rich_Web_VS_TS_TIBoxSh=sanitize_text_field($_POST['Rich_Web_VS_TS_TIBoxSh']); $Rich_Web_VS_TS_TICBS=sanitize_text_field($_POST['Rich_Web_VS_TS_TICBS']); $Rich_Web_VS_TS_TIHBS=sanitize_text_field($_POST['Rich_Web_VS_TS_TIHBS']); $Rich_Web_VS_TS_CS=sanitize_text_field($_POST['Rich_Web_VS_TS_CS']); $Rich_Web_VS_TS_PT=sanitize_text_field($_POST['Rich_Web_VS_TS_PT']);
			 $Rich_Web_VS_TS_AP=sanitize_text_field($_POST['Rich_Web_VS_TS_AP']);
			//Video Carousel/Content Popup
			$Rich_Web_VC_Car_Border_Width=sanitize_text_field($_POST['Rich_Web_VC_Car_Border_Width']); $Rich_Web_VC_Car_Border_Style=sanitize_text_field($_POST['Rich_Web_VC_Car_Border_Style']); $Rich_Web_VC_Car_Box_Shadow=sanitize_text_field($_POST['Rich_Web_VC_Car_Box_Shadow']); $Rich_Web_VC_Car_Count_Imgs=sanitize_text_field($_POST['Rich_Web_VC_Car_Count_Imgs']); $Rich_Web_VC_Car_PBImgs=sanitize_text_field($_POST['Rich_Web_VC_Car_PBImgs']); $Rich_Web_VC_Car_Icons_Size=sanitize_text_field($_POST['Rich_Web_VC_Car_Icons_Size']); $Rich_Web_VC_Popup_Border_Width=sanitize_text_field($_POST['Rich_Web_VC_Popup_Border_Width']); $Rich_Web_VC_Popup_Border_Style=sanitize_text_field($_POST['Rich_Web_VC_Popup_Border_Style']); $Rich_Web_VC_Popup_Box_Shadow=sanitize_text_field($_POST['Rich_Web_VC_Popup_Box_Shadow']); $Rich_Web_VC_Title_Font_Size=sanitize_text_field($_POST['Rich_Web_VC_Title_Font_Size']); $Rich_Web_VC_Title_Font_Family=sanitize_text_field($_POST['Rich_Web_VC_Title_Font_Family']); $Rich_Web_VC_Title_Text_Align=sanitize_text_field($_POST['Rich_Web_VC_Title_Text_Align']); $Rich_Web_VC_Link_Font_Size=sanitize_text_field($_POST['Rich_Web_VC_Link_Font_Size']); $Rich_Web_VC_Link_Font_Family=sanitize_text_field($_POST['Rich_Web_VC_Link_Font_Family']); $Rich_Web_VC_Link_Border_Width=sanitize_text_field($_POST['Rich_Web_VC_Link_Border_Width']); $Rich_Web_VC_Link_Border_Style=sanitize_text_field($_POST['Rich_Web_VC_Link_Border_Style']); $Rich_Web_VC_Popup_Icons_Size=sanitize_text_field($_POST['Rich_Web_VC_Popup_Icons_Size']); $Rich_Web_VC_Link_Text=sanitize_text_field($_POST['Rich_Web_VC_Link_Text']); $Rich_Web_VC_Link_Border_Radius=sanitize_text_field($_POST['Rich_Web_VC_Link_Border_Radius']);
			//Simple Video Slider
			$Rich_Web_SVS_W=sanitize_text_field($_POST['Rich_Web_SVS_W']); $Rich_Web_SVS_PT=sanitize_text_field($_POST['Rich_Web_SVS_PT']); $Rich_Web_SVS_CS=sanitize_text_field($_POST['Rich_Web_SVS_CS']); $Rich_Web_SVS_BW=sanitize_text_field($_POST['Rich_Web_SVS_BW']); $Rich_Web_SVS_BS=sanitize_text_field($_POST['Rich_Web_SVS_BS']); $Rich_Web_SVS_BoxShShow=sanitize_text_field($_POST['Rich_Web_SVS_BoxShShow']); $Rich_Web_SVS_BoxShType=sanitize_text_field($_POST['Rich_Web_SVS_BoxShType']); $Rich_Web_SVS_BoxSh=sanitize_text_field($_POST['Rich_Web_SVS_BoxSh']); $Rich_Web_SVS_Nav_Show=sanitize_text_field($_POST['Rich_Web_SVS_Nav_Show']); $Rich_Web_SVS_Nav_W=sanitize_text_field($_POST['Rich_Web_SVS_Nav_W']); $Rich_Web_SVS_Nav_H=sanitize_text_field($_POST['Rich_Web_SVS_Nav_H']); $Rich_Web_SVS_Nav_BW=sanitize_text_field($_POST['Rich_Web_SVS_Nav_BW']); $Rich_Web_SVS_Nav_BS=sanitize_text_field($_POST['Rich_Web_SVS_Nav_BS']); $Rich_Web_SVS_Nav_BR=sanitize_text_field($_POST['Rich_Web_SVS_Nav_BR']); $Rich_Web_SVS_Nav_PB=sanitize_text_field($_POST['Rich_Web_SVS_Nav_PB']); $Rich_Web_SVS_T_Show=sanitize_text_field($_POST['Rich_Web_SVS_T_Show']); $Rich_Web_SVS_TFS=sanitize_text_field($_POST['Rich_Web_SVS_TFS']); $Rich_Web_SVS_TFF=sanitize_text_field($_POST['Rich_Web_SVS_TFF']); $Rich_Web_SVS_D_Show=sanitize_text_field($_POST['Rich_Web_SVS_D_Show']); $Rich_Web_SVS_LFS=sanitize_text_field($_POST['Rich_Web_SVS_LFS']); $Rich_Web_SVS_LFF=sanitize_text_field($_POST['Rich_Web_SVS_LFF']); $Rich_Web_SVS_Arr_Show=sanitize_text_field($_POST['Rich_Web_SVS_Arr_Show']); $Rich_Web_SVS_Arr_S=sanitize_text_field($_POST['Rich_Web_SVS_Arr_S']); $Rich_Web_SVS_Arr_BW=sanitize_text_field($_POST['Rich_Web_SVS_Arr_BW']); $Rich_Web_SVS_Arr_BS=sanitize_text_field($_POST['Rich_Web_SVS_Arr_BS']); $Rich_Web_SVS_Arr_BR=sanitize_text_field($_POST['Rich_Web_SVS_Arr_BR']); $Rich_Web_SVS_PIBR=sanitize_text_field($_POST['Rich_Web_SVS_PIBR']); $Rich_Web_SVS_LText=sanitize_text_field($_POST['Rich_Web_SVS_LText']); $Rich_Web_SVS_AP=sanitize_text_field($_POST['Rich_Web_SVS_AP']);
			//Video Slider/Vertical Thumbnails
			$Rich_Web_VTVS_AP=sanitize_text_field($_POST['Rich_Web_VTVS_AP']); $Rich_Web_VTVS_APS=sanitize_text_field($_POST['Rich_Web_VTVS_APS']); $Rich_Web_VTVS_CS=sanitize_text_field($_POST['Rich_Web_VTVS_CS']); $Rich_Web_VTVS_PT=sanitize_text_field($_POST['Rich_Web_VTVS_PT']); $Rich_Web_VTVS_ArrSt=sanitize_text_field($_POST['Rich_Web_VTVS_ArrSt']); $Rich_Web_VTVS_H=sanitize_text_field($_POST['Rich_Web_VTVS_H']); $Rich_Web_VTVS_BW=sanitize_text_field($_POST['Rich_Web_VTVS_BW']); $Rich_Web_VTVS_BS=sanitize_text_field($_POST['Rich_Web_VTVS_BS']); $Rich_Web_VTVS_BoxShShow=sanitize_text_field($_POST['Rich_Web_VTVS_BoxShShow']); $Rich_Web_VTVS_BoxShType=sanitize_text_field($_POST['Rich_Web_VTVS_BoxShType']); $Rich_Web_VTVS_BoxSh=sanitize_text_field($_POST['Rich_Web_VTVS_BoxSh']); $Rich_Web_VTVS_TShow=sanitize_text_field($_POST['Rich_Web_VTVS_TShow']); $Rich_Web_VTVS_TFS=sanitize_text_field($_POST['Rich_Web_VTVS_TFS']); $Rich_Web_VTVS_TFF=sanitize_text_field($_POST['Rich_Web_VTVS_TFF']); $Rich_Web_VTVS_Th_BW=sanitize_text_field($_POST['Rich_Web_VTVS_Th_BW']); $Rich_Web_VTVS_Th_BS=sanitize_text_field($_POST['Rich_Web_VTVS_Th_BS']); $Rich_Web_VTVS_Th_BR=sanitize_text_field($_POST['Rich_Web_VTVS_Th_BR']); $Rich_Web_VTVS_LFS=sanitize_text_field($_POST['Rich_Web_VTVS_LFS']); $Rich_Web_VTVS_PFS=sanitize_text_field($_POST['Rich_Web_VTVS_PFS']); $Rich_Web_VTVS_ArrShow=sanitize_text_field($_POST['Rich_Web_VTVS_ArrShow']); $Rich_Web_VTVS_ArrFS=sanitize_text_field($_POST['Rich_Web_VTVS_ArrFS']);
			//Horizontal Posts Slider
			$Rich_Web_VS_HPS_Loop=sanitize_text_field($_POST['Rich_Web_VS_HPS_Loop']); $Rich_Web_VS_HPS_Cols=sanitize_text_field($_POST['Rich_Web_VS_HPS_Cols']); $Rich_Web_VS_HPS_Speed=sanitize_text_field($_POST['Rich_Web_VS_HPS_Speed']); $Rich_Web_VS_HPS_AP=sanitize_text_field($_POST['Rich_Web_VS_HPS_AP']); $Rich_Web_VS_HPS_EH=sanitize_text_field($_POST['Rich_Web_VS_HPS_EH']); $Rich_Web_VS_HPS_PB=sanitize_text_field($_POST['Rich_Web_VS_HPS_PB']); $Rich_Web_VS_HPS_Car=sanitize_text_field($_POST['Rich_Web_VS_HPS_Car']); $Rich_Web_VS_HPS_NP_Show=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_Show']); $Rich_Web_VS_HPS_NP_NText=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_NText']); $Rich_Web_VS_HPS_NP_PText=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_PText']); $Rich_Web_VS_HPS_NP_FS=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_FS']); $Rich_Web_VS_HPS_NP_FF=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_FF']); $Rich_Web_VS_HPS_NP_BW=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_BW']); $Rich_Web_VS_HPS_NP_BS=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_BS']); $Rich_Web_VS_HPS_NP_BR=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_BR']); $Rich_Web_VS_HPS_TFS=sanitize_text_field($_POST['Rich_Web_VS_HPS_TFS']); $Rich_Web_VS_HPS_TFF=sanitize_text_field($_POST['Rich_Web_VS_HPS_TFF']); $Rich_Web_VS_HPS_DShow=sanitize_text_field($_POST['Rich_Web_VS_HPS_DShow']); $Rich_Web_VS_HPS_LText=sanitize_text_field($_POST['Rich_Web_VS_HPS_LText']); $Rich_Web_VS_HPS_LFS=sanitize_text_field($_POST['Rich_Web_VS_HPS_LFS']); $Rich_Web_VS_HPS_LFF=sanitize_text_field($_POST['Rich_Web_VS_HPS_LFF']); $Rich_Web_VS_HPS_PText=sanitize_text_field($_POST['Rich_Web_VS_HPS_PText']); $Rich_Web_VS_HPS_PFS=sanitize_text_field($_POST['Rich_Web_VS_HPS_PFS']); $Rich_Web_VS_HPS_PFF=sanitize_text_field($_POST['Rich_Web_VS_HPS_PFF']); $Rich_Web_VS_HPS_Pop_BW=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_BW']); $Rich_Web_VS_HPS_Pop_BS=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_BS']); $Rich_Web_VS_HPS_Pop_BoxShShow=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_BoxShShow']); $Rich_Web_VS_HPS_Pop_BoxShType=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_BoxShType']); $Rich_Web_VS_HPS_Pop_BoxSh=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_BoxSh']); $Rich_Web_VS_HPS_Pop_CIS=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_CIS']);
			//Rich Slider
			$Rich_Web_RVVS_Sh=sanitize_text_field($_POST['Rich_Web_RVVS_Sh']);$Rich_Web_RVVS_ShT=sanitize_text_field($_POST['Rich_Web_RVVS_ShT']);$Rich_Web_RVVS_NI_BW=sanitize_text_field($_POST['Rich_Web_RVVS_NI_BW']);$Rich_Web_RVVS_NT_FS=sanitize_text_field($_POST['Rich_Web_RVVS_NT_FS']);$Rich_Web_RVVS_NT_FF=sanitize_text_field($_POST['Rich_Web_RVVS_NT_FF']);$Rich_Web_RVVS_NImg_BW=sanitize_text_field($_POST['Rich_Web_RVVS_NImg_BW']);$Rich_Web_RVVS_NImg_BR=sanitize_text_field($_POST['Rich_Web_RVVS_NImg_BR']);$Rich_Web_RVVS_NImg_BSh=sanitize_text_field($_POST['Rich_Web_RVVS_NImg_BSh']);$Rich_Web_RVVS_NImg_ShT=sanitize_text_field($_POST['Rich_Web_RVVS_NImg_ShT']);$Rich_Web_RVVS_IT_FS=sanitize_text_field($_POST['Rich_Web_RVVS_IT_FS']);$Rich_Web_RVVS_IT_FF=sanitize_text_field($_POST['Rich_Web_RVVS_IT_FF']);$Rich_Web_RVVS_PlIc_FS=sanitize_text_field($_POST['Rich_Web_RVVS_PlIc_FS']);$Rich_Web_RVVS_DelIc_FS=sanitize_text_field($_POST['Rich_Web_RVVS_DelIc_FS']);
			//Timeline
			$Rich_Web_MS_W=sanitize_text_field($_POST['Rich_Web_MS_W']); $Rich_Web_MS_SSh=sanitize_text_field($_POST['Rich_Web_MS_SSh']); $Rich_Web_MS_SShChT=sanitize_text_field($_POST['Rich_Web_MS_SShChT']); $Rich_Web_MS_BSh=sanitize_text_field($_POST['Rich_Web_MS_BSh']); $Rich_Web_MS_ShT=sanitize_text_field($_POST['Rich_Web_MS_ShT']); $Rich_Web_MS_Autoplay=sanitize_text_field($_POST['Rich_Web_MS_Autoplay']); $Rich_Web_MS_N_BW=sanitize_text_field($_POST['Rich_Web_MS_N_BW']); $Rich_Web_MS_N_BS=sanitize_text_field($_POST['Rich_Web_MS_N_BS']); $Rich_Web_MS_NI_FS=sanitize_text_field($_POST['Rich_Web_MS_NI_FS']); $Rich_Web_MS_NI_FF=sanitize_text_field($_POST['Rich_Web_MS_NI_FF']); $Rich_Web_MS_Img_BW=sanitize_text_field($_POST['Rich_Web_MS_Img_BW']); $Rich_Web_MS_Img_BS=sanitize_text_field($_POST['Rich_Web_MS_Img_BS']); $Rich_Web_MS_Img_BSh=sanitize_text_field($_POST['Rich_Web_MS_Img_BSh']); $Rich_Web_MS_Img_ShT=sanitize_text_field($_POST['Rich_Web_MS_Img_ShT']); $Rich_Web_MS_T_FS=sanitize_text_field($_POST['Rich_Web_MS_T_FS']); $Rich_Web_MS_T_FF=sanitize_text_field($_POST['Rich_Web_MS_T_FF']); $Rich_Web_MS_T_TA=sanitize_text_field($_POST['Rich_Web_MS_T_TA']); $Rich_Web_MS_T_TSh=sanitize_text_field($_POST['Rich_Web_MS_T_TSh']); $Rich_Web_MS_Ic_S=sanitize_text_field($_POST['Rich_Web_MS_Ic_S']); $Rich_Web_MS_PlIc_S=sanitize_text_field($_POST['Rich_Web_MS_PlIc_S']);
			//Amazing Simple Slider
			$Rich_Web_GO_NS1_Width=sanitize_text_field($_POST['Rich_Web_GO_NS1_Width']); $Rich_Web_GO_NS1_Height=sanitize_text_field($_POST['Rich_Web_GO_NS1_Height']); $Rich_Web_GO_NS1_PTime=sanitize_text_field($_POST['Rich_Web_GO_NS1_PTime']); $Rich_Web_GO_NS1_BW=sanitize_text_field($_POST['Rich_Web_GO_NS1_BW']); $Rich_Web_GO_NS1_BType=sanitize_text_field($_POST['Rich_Web_GO_NS1_BType']); $Rich_Web_GO_NS1_BSh=sanitize_text_field($_POST['Rich_Web_GO_NS1_BSh']); $Rich_Web_GO_NS1_BSh_Type=sanitize_text_field($_POST['Rich_Web_GO_NS1_BSh_Type']); $Rich_Web_TO_NS1_FSize=sanitize_text_field($_POST['Rich_Web_TO_NS1_FSize']); $Rich_Web_TO_NS1_FFamily=sanitize_text_field($_POST['Rich_Web_TO_NS1_FFamily']); $Rich_Web_TO_NS1_Num_FSize=sanitize_text_field($_POST['Rich_Web_TO_NS1_Num_FSize']); $Rich_Web_TO_NS1_Num_FFamily=sanitize_text_field($_POST['Rich_Web_TO_NS1_Num_FFamily']); $Rich_Web_PO_NS1_Width=sanitize_text_field($_POST['Rich_Web_PO_NS1_Width']); $Rich_Web_PO_NS1_Height=sanitize_text_field($_POST['Rich_Web_PO_NS1_Height']); $Rich_Web_PO_NS1_PB=sanitize_text_field($_POST['Rich_Web_PO_NS1_PB']); $Rich_Web_IO_NS1_FSize=sanitize_text_field($_POST['Rich_Web_IO_NS1_FSize']); $Rich_Web_IO_NS1_Width=sanitize_text_field($_POST['Rich_Web_IO_NS1_Width']); $Rich_Web_IO_NS1_Height=sanitize_text_field($_POST['Rich_Web_IO_NS1_Height']); $Rich_Web_GO_NS1_Align=sanitize_text_field($_POST['Rich_Web_GO_NS1_Align']);

			//Content Slider Loading
			$Rich_Web_VS_ContSl_L_Show=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_Show']); $Rich_Web_VS_ContSl_LT_Show=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_Show']); $Rich_Web_VS_ContSl_LT=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT']); $Rich_Web_VS_ContSl_L_BgC=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_BgC']); $Rich_Web_VS_ContSl_L_T=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_T']); $Rich_Web_VS_ContSl_LT_T=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_T']); $Rich_Web_VS_ContSl_LT_FS=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_FS']); $Rich_Web_VS_ContSl_LT_FF=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_FF']); $Rich_Web_VS_ContSl_LT_C=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_C']); $Rich_Web_VS_ContSl_L_T1_C=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_T1_C']); $Rich_Web_VS_ContSl_L_T2_C=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_T2_C']); $Rich_Web_VS_ContSl_L_T3_C=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_T3_C']); $Rich_Web_VS_ContSl_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_T2_BC']); $Rich_Web_VS_ContSl_L_C=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_C']); $Rich_Web_VS_ContSl_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_T2_AnC']); $Rich_Web_VS_ContSl_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_T3_BgC']); $Rich_Web_VS_ContSl_L_S=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_S']); $Rich_Web_VS_ContSl_Loading_Show=sanitize_text_field($_POST['Rich_Web_VS_ContSl_Loading_Show']);
			//Slick Slider Loading
			$Rich_Web_SlickSl_L_Show=sanitize_text_field($_POST['Rich_Web_SlickSl_L_Show']); $Rich_Web_SlickSl_LT_Show=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_Show']); $Rich_Web_SlickSl_LT=sanitize_text_field($_POST['Rich_Web_SlickSl_LT']); $Rich_Web_SlickSl_L_BgC=sanitize_text_field($_POST['Rich_Web_SlickSl_L_BgC']); $Rich_Web_SlickSl_L_T=sanitize_text_field($_POST['Rich_Web_SlickSl_L_T']); $Rich_Web_SlickSl_LT_T=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_T']); $Rich_Web_SlickSl_LT_FS=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_FS']);$Rich_Web_SlickSl_LT_FF=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_FF']); $Rich_Web_SlickSl_LT_C=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_C']); $Rich_Web_SlickSl_L_T1_C=sanitize_text_field($_POST['Rich_Web_SlickSl_L_T1_C']); $Rich_Web_SlickSl_L_T2_C=sanitize_text_field($_POST['Rich_Web_SlickSl_L_T2_C']); $Rich_Web_SlickSl_L_T3_C=sanitize_text_field($_POST['Rich_Web_SlickSl_L_T3_C']); $Rich_Web_SlickSl_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_T2_BC']); $Rich_Web_SlickSl_L_C=sanitize_text_field($_POST['Rich_Web_SlickSl_L_C']); $Rich_Web_SlickSl_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_T2_AnC']); $Rich_Web_SlickSl_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_T3_BgC']); $Rich_Web_SlickSl_L_S=sanitize_text_field($_POST['Rich_Web_SlickSl_L_S']); $Rich_Web_SlickSl_Loading_Show=sanitize_text_field($_POST['Rich_Web_SlickSl_Loading_Show']);
			//Thumbnails Slider Loading
			$Rich_Web_ThumbSl_L_Show=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_Show']); $Rich_Web_ThumbSl_LT_Show=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_Show']); $Rich_Web_ThumbSl_LT=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT']); $Rich_Web_ThumbSl_L_BgC=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_BgC']); $Rich_Web_ThumbSl_L_T=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_T']); $Rich_Web_ThumbSl_LT_T=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_T']); $Rich_Web_ThumbSl_LT_FS=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_FS']);$Rich_Web_ThumbSl_LT_FF=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_FF']); $Rich_Web_ThumbSl_LT_C=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_C']); $Rich_Web_ThumbSl_L_T1_C=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_T1_C']); $Rich_Web_ThumbSl_L_T2_C=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_T2_C']); $Rich_Web_ThumbSl_L_T3_C=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_T3_C']); $Rich_Web_ThumbSl_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_T2_BC']); $Rich_Web_ThumbSl_L_C=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_C']); $Rich_Web_ThumbSl_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_T2_AnC']); $Rich_Web_ThumbSl_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_T3_BgC']); $Rich_Web_ThumbSl_L_S=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_S']); $Rich_Web_ThumbSl_Loading_Show=sanitize_text_field($_POST['Rich_Web_ThumbSl_Loading_Show']);
			//Video Carousel/Content Popup Slider Loading
			$Rich_Web_VCCP_L_Show=sanitize_text_field($_POST['Rich_Web_VCCP_L_Show']); $Rich_Web_VCCP_LT_Show=sanitize_text_field($_POST['Rich_Web_VCCP_LT_Show']); $Rich_Web_VCCP_LT=sanitize_text_field($_POST['Rich_Web_VCCP_LT']); $Rich_Web_VCCP_L_BgC=sanitize_text_field($_POST['Rich_Web_VCCP_L_BgC']); $Rich_Web_VCCP_L_T=sanitize_text_field($_POST['Rich_Web_VCCP_L_T']); $Rich_Web_VCCP_LT_T=sanitize_text_field($_POST['Rich_Web_VCCP_LT_T']); $Rich_Web_VCCP_LT_FS=sanitize_text_field($_POST['Rich_Web_VCCP_LT_FS']);$Rich_Web_VCCP_LT_FF=sanitize_text_field($_POST['Rich_Web_VCCP_LT_FF']); $Rich_Web_VCCP_LT_C=sanitize_text_field($_POST['Rich_Web_VCCP_LT_C']); $Rich_Web_VCCP_L_T1_C=sanitize_text_field($_POST['Rich_Web_VCCP_L_T1_C']); $Rich_Web_VCCP_L_T2_C=sanitize_text_field($_POST['Rich_Web_VCCP_L_T2_C']); $Rich_Web_VCCP_L_T3_C=sanitize_text_field($_POST['Rich_Web_VCCP_L_T3_C']); $Rich_Web_VCCP_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_VCCP_LT_T2_BC']); $Rich_Web_VCCP_L_C=sanitize_text_field($_POST['Rich_Web_VCCP_L_C']); $Rich_Web_VCCP_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_VCCP_LT_T2_AnC']); $Rich_Web_VCCP_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_VCCP_LT_T3_BgC']); $Rich_Web_VCCP_L_S=sanitize_text_field($_POST['Rich_Web_VCCP_L_S']); $Rich_Web_VCCP_Loading_Show=sanitize_text_field($_POST['Rich_Web_VCCP_Loading_Show']);
			//Simple Video Slider Loading
			$Rich_Web_SimpleVS_L_Show=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_Show']); $Rich_Web_SimpleVS_LT_Show=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_Show']); $Rich_Web_SimpleVS_LT=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT']); $Rich_Web_SimpleVS_L_BgC=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_BgC']); $Rich_Web_SimpleVS_L_T=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_T']); $Rich_Web_SimpleVS_LT_T=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_T']); $Rich_Web_SimpleVS_LT_FS=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_FS']);$Rich_Web_SimpleVS_LT_FF=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_FF']); $Rich_Web_SimpleVS_LT_C=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_C']); $Rich_Web_SimpleVS_L_T1_C=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_T1_C']); $Rich_Web_SimpleVS_L_T2_C=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_T2_C']); $Rich_Web_SimpleVS_L_T3_C=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_T3_C']); $Rich_Web_SimpleVS_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_T2_BC']); $Rich_Web_SimpleVS_L_C=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_C']); $Rich_Web_SimpleVS_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_T2_AnC']); $Rich_Web_SimpleVS_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_T3_BgC']); $Rich_Web_SimpleVS_L_S=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_S']); $Rich_Web_SimpleVS_Loading_Show=sanitize_text_field($_POST['Rich_Web_SimpleVS_Loading_Show']);
			//Video Slider/Vertical Thumbnails Loading
			$Rich_Web_VSVT_L_Show=sanitize_text_field($_POST['Rich_Web_VSVT_L_Show']); $Rich_Web_VSVT_LT_Show=sanitize_text_field($_POST['Rich_Web_VSVT_LT_Show']); $Rich_Web_VSVT_LT=sanitize_text_field($_POST['Rich_Web_VSVT_LT']); $Rich_Web_VSVT_L_BgC=sanitize_text_field($_POST['Rich_Web_VSVT_L_BgC']); $Rich_Web_VSVT_L_T=sanitize_text_field($_POST['Rich_Web_VSVT_L_T']); $Rich_Web_VSVT_LT_T=sanitize_text_field($_POST['Rich_Web_VSVT_LT_T']); $Rich_Web_VSVT_LT_FS=sanitize_text_field($_POST['Rich_Web_VSVT_LT_FS']);$Rich_Web_VSVT_LT_FF=sanitize_text_field($_POST['Rich_Web_VSVT_LT_FF']); $Rich_Web_VSVT_LT_C=sanitize_text_field($_POST['Rich_Web_VSVT_LT_C']); $Rich_Web_VSVT_L_T1_C=sanitize_text_field($_POST['Rich_Web_VSVT_L_T1_C']); $Rich_Web_VSVT_L_T2_C=sanitize_text_field($_POST['Rich_Web_VSVT_L_T2_C']); $Rich_Web_VSVT_L_T3_C=sanitize_text_field($_POST['Rich_Web_VSVT_L_T3_C']); $Rich_Web_VSVT_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_VSVT_LT_T2_BC']); $Rich_Web_VSVT_L_C=sanitize_text_field($_POST['Rich_Web_VSVT_L_C']); $Rich_Web_VSVT_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_VSVT_LT_T2_AnC']); $Rich_Web_VSVT_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_VSVT_LT_T3_BgC']); $Rich_Web_VSVT_L_S=sanitize_text_field($_POST['Rich_Web_VSVT_L_S']); $Rich_Web_VSVT_Loading_Show=sanitize_text_field($_POST['Rich_Web_VSVT_Loading_Show']);
			//Horizontal Posts Slider Loading
			$Rich_Web_HSL_L_Show=sanitize_text_field($_POST['Rich_Web_HSL_L_Show']); $Rich_Web_HSL_LT_Show=sanitize_text_field($_POST['Rich_Web_HSL_LT_Show']); $Rich_Web_HSL_LT=sanitize_text_field($_POST['Rich_Web_HSL_LT']); $Rich_Web_HSL_L_BgC=sanitize_text_field($_POST['Rich_Web_HSL_L_BgC']); $Rich_Web_HSL_L_T=sanitize_text_field($_POST['Rich_Web_HSL_L_T']); $Rich_Web_HSL_LT_T=sanitize_text_field($_POST['Rich_Web_HSL_LT_T']); $Rich_Web_HSL_LT_FS=sanitize_text_field($_POST['Rich_Web_HSL_LT_FS']);$Rich_Web_HSL_LT_FF=sanitize_text_field($_POST['Rich_Web_HSL_LT_FF']); $Rich_Web_HSL_LT_C=sanitize_text_field($_POST['Rich_Web_HSL_LT_C']); $Rich_Web_HSL_L_T1_C=sanitize_text_field($_POST['Rich_Web_HSL_L_T1_C']); $Rich_Web_HSL_L_T2_C=sanitize_text_field($_POST['Rich_Web_HSL_L_T2_C']); $Rich_Web_HSL_L_T3_C=sanitize_text_field($_POST['Rich_Web_HSL_L_T3_C']); $Rich_Web_HSL_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_HSL_LT_T2_BC']); $Rich_Web_HSL_L_C=sanitize_text_field($_POST['Rich_Web_HSL_L_C']); $Rich_Web_HSL_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_HSL_LT_T2_AnC']); $Rich_Web_HSL_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_HSL_LT_T3_BgC']); $Rich_Web_HSL_L_S=sanitize_text_field($_POST['Rich_Web_HSL_L_S']); $Rich_Web_HSL_Loading_Show=sanitize_text_field($_POST['Rich_Web_HSL_Loading_Show']);
			//Rich Slider Loading
			$Rich_Web_RichSl_L_Show=sanitize_text_field($_POST['Rich_Web_RichSl_L_Show']); $Rich_Web_RichSl_LT_Show=sanitize_text_field($_POST['Rich_Web_RichSl_LT_Show']); $Rich_Web_RichSl_LT=sanitize_text_field($_POST['Rich_Web_RichSl_LT']); $Rich_Web_RichSl_L_BgC=sanitize_text_field($_POST['Rich_Web_RichSl_L_BgC']); $Rich_Web_RichSl_L_T=sanitize_text_field($_POST['Rich_Web_RichSl_L_T']); $Rich_Web_RichSl_LT_T=sanitize_text_field($_POST['Rich_Web_RichSl_LT_T']); $Rich_Web_RichSl_LT_FS=sanitize_text_field($_POST['Rich_Web_RichSl_LT_FS']);$Rich_Web_RichSl_LT_FF=sanitize_text_field($_POST['Rich_Web_RichSl_LT_FF']); $Rich_Web_RichSl_LT_C=sanitize_text_field($_POST['Rich_Web_RichSl_LT_C']); $Rich_Web_RichSl_L_T1_C=sanitize_text_field($_POST['Rich_Web_RichSl_L_T1_C']); $Rich_Web_RichSl_L_T2_C=sanitize_text_field($_POST['Rich_Web_RichSl_L_T2_C']); $Rich_Web_RichSl_L_T3_C=sanitize_text_field($_POST['Rich_Web_RichSl_L_T3_C']); $Rich_Web_RichSl_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_RichSl_LT_T2_BC']); $Rich_Web_RichSl_L_C=sanitize_text_field($_POST['Rich_Web_RichSl_L_C']); $Rich_Web_RichSl_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_RichSl_LT_T2_AnC']); $Rich_Web_RichSl_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_RichSl_LT_T3_BgC']); $Rich_Web_RichSl_L_S=sanitize_text_field($_POST['Rich_Web_RichSl_L_S']); $Rich_Web_RichSl_Loading_Show=sanitize_text_field($_POST['Rich_Web_RichSl_Loading_Show']);
			//TimeLine Slider Loading
			$Rich_Web_TSL_L_Show=sanitize_text_field($_POST['Rich_Web_TSL_L_Show']); $Rich_Web_TSL_LT_Show=sanitize_text_field($_POST['Rich_Web_TSL_LT_Show']); $Rich_Web_TSL_LT=sanitize_text_field($_POST['Rich_Web_TSL_LT']); $Rich_Web_TSL_L_BgC=sanitize_text_field($_POST['Rich_Web_TSL_L_BgC']); $Rich_Web_TSL_L_T=sanitize_text_field($_POST['Rich_Web_TSL_L_T']); $Rich_Web_TSL_LT_T=sanitize_text_field($_POST['Rich_Web_TSL_LT_T']); $Rich_Web_TSL_LT_FS=sanitize_text_field($_POST['Rich_Web_TSL_LT_FS']);$Rich_Web_TSL_LT_FF=sanitize_text_field($_POST['Rich_Web_TSL_LT_FF']); $Rich_Web_TSL_LT_C=sanitize_text_field($_POST['Rich_Web_TSL_LT_C']); $Rich_Web_TSL_L_T1_C=sanitize_text_field($_POST['Rich_Web_TSL_L_T1_C']); $Rich_Web_TSL_L_T2_C=sanitize_text_field($_POST['Rich_Web_TSL_L_T2_C']); $Rich_Web_TSL_L_T3_C=sanitize_text_field($_POST['Rich_Web_TSL_L_T3_C']); $Rich_Web_TSL_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_TSL_LT_T2_BC']); $Rich_Web_TSL_L_C=sanitize_text_field($_POST['Rich_Web_TSL_L_C']); $Rich_Web_TSL_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_TSL_LT_T2_AnC']); $Rich_Web_TSL_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_TSL_LT_T3_BgC']); $Rich_Web_TSL_L_S=sanitize_text_field($_POST['Rich_Web_TSL_L_S']); $Rich_Web_TSL_Loading_Show=sanitize_text_field($_POST['Rich_Web_TSL_Loading_Show']);
			//Amazing Simple Slider Loading
			$Rich_Web_ASSl_L_Show=sanitize_text_field($_POST['Rich_Web_ASSl_L_Show']); $Rich_Web_ASSl_LT_Show=sanitize_text_field($_POST['Rich_Web_ASSl_LT_Show']); $Rich_Web_ASSl_LT=sanitize_text_field($_POST['Rich_Web_ASSl_LT']); $Rich_Web_ASSl_L_BgC=sanitize_text_field($_POST['Rich_Web_ASSl_L_BgC']); $Rich_Web_ASSl_L_T=sanitize_text_field($_POST['Rich_Web_ASSl_L_T']); $Rich_Web_ASSl_LT_T=sanitize_text_field($_POST['Rich_Web_ASSl_LT_T']); $Rich_Web_ASSl_LT_FS=sanitize_text_field($_POST['Rich_Web_ASSl_LT_FS']);$Rich_Web_ASSl_LT_FF=sanitize_text_field($_POST['Rich_Web_ASSl_LT_FF']); $Rich_Web_ASSl_LT_C=sanitize_text_field($_POST['Rich_Web_ASSl_LT_C']); $Rich_Web_ASSl_L_T1_C=sanitize_text_field($_POST['Rich_Web_ASSl_L_T1_C']); $Rich_Web_ASSl_L_T2_C=sanitize_text_field($_POST['Rich_Web_ASSl_L_T2_C']); $Rich_Web_ASSl_L_T3_C=sanitize_text_field($_POST['Rich_Web_ASSl_L_T3_C']); $Rich_Web_ASSl_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_ASSl_LT_T2_BC']); $Rich_Web_ASSl_L_C=sanitize_text_field($_POST['Rich_Web_ASSl_L_C']); $Rich_Web_ASSl_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_ASSl_LT_T2_AnC']); $Rich_Web_ASSl_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_ASSl_LT_T3_BgC']); $Rich_Web_ASSl_L_S=sanitize_text_field($_POST['Rich_Web_ASSl_L_S']); $Rich_Web_ASSl_Loading_Show=sanitize_text_field($_POST['Rich_Web_ASSl_Loading_Show']);

			if(isset($_POST['Rich_Web_VSlider_Upd_Opt']))
			{
				$Rich_Web_VSlider_Upd_ID=sanitize_text_field($_POST['Rich_Web_VSlider_Upd_ID']);
				$wpdb->query($wpdb->prepare("UPDATE $table_name4 set slider_vid_name=%s, slider_Vid_type=%s WHERE id=%d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VSlider_Upd_ID));

				if($Rich_Web_VSlider_Option_Type=='Content Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name5 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VS_CP_S = %s, Rich_Web_VS_CP_BlC = %s, Rich_Web_VS_CP_BlR = %s, Rich_Web_VS_CP_AS = %s, Rich_Web_VS_CP_PT = %s, Rich_Web_VS_CS_AP = %s, Rich_Web_VS_CS_HP = %s, Rich_Web_VS_CS_RS = %s, Rich_Web_VS_CP_BW = %s, Rich_Web_VS_CP_BS = %s, Rich_Web_VS_CP_BR = %s, Rich_Web_VS_CS_CN = %s, Rich_Web_VS_CS_NPB = %s, Rich_Web_VS_CP_NO = %s, Rich_Web_VS_CS_NT = %s, Rich_Web_VS_CP_CapS = %s, Rich_Web_VS_CP_CapO = %s, Rich_Web_VS_CP_TFS = %s, Rich_Web_VS_CP_TFF = %s, Rich_Web_VS_CS_DBgC = %s, Rich_Web_VS_CP_TiO = %s, Rich_Web_VS_CP_TiD = %s, Rich_Web_VS_CP_TiP = %s, Rich_Web_VS_CP_TiS = %s, Rich_Web_VS_CP_TiBS = %s, Rich_Web_VS_SL_Width = %s, Rich_Web_VS_SL_Height = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VS_CP_S, $Rich_Web_VS_CP_BlC, $Rich_Web_VS_CP_BlR, $Rich_Web_VS_CP_AS, $Rich_Web_VS_CP_PT, $Rich_Web_VS_CS_AP, $Rich_Web_VS_CS_HP, $Rich_Web_VS_CS_RS, $Rich_Web_VS_CP_BW, $Rich_Web_VS_CP_BS, $Rich_Web_VS_CP_BR, $Rich_Web_VS_CS_CN, $Rich_Web_VS_CS_NPB, $Rich_Web_VS_CP_NO, $Rich_Web_VS_CS_NT, $Rich_Web_VS_CP_CapS, $Rich_Web_VS_CP_CapO, $Rich_Web_VS_CP_TFS, $Rich_Web_VS_CP_TFF, $Rich_Web_VS_CS_DBgC, $Rich_Web_VS_CP_TiO, $Rich_Web_VS_CP_TiD, $Rich_Web_VS_CP_TiP, $Rich_Web_VS_CP_TiS, $Rich_Web_VS_CP_TiBS, $Rich_Web_VS_SL_Width, $Rich_Web_VS_SL_Height, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name5_Loader set Rich_Web_VS_ContSl_L_Show = %s, Rich_Web_VS_ContSl_LT_Show = %s, Rich_Web_VS_ContSl_LT = %s, Rich_Web_VS_ContSl_L_BgC = %s, Rich_Web_VS_ContSl_L_T = %s, Rich_Web_VS_ContSl_LT_T = %s, Rich_Web_VS_ContSl_LT_FS = %s, Rich_Web_VS_ContSl_LT_FF = %s, Rich_Web_VS_ContSl_LT_C = %s, Rich_Web_VS_ContSl_L_T1_C = %s, Rich_Web_VS_ContSl_L_T2_C = %s, Rich_Web_VS_ContSl_L_T3_C = %s, Rich_Web_VS_ContSl_LT_T2_BC = %s, Rich_Web_VS_ContSl_L_C = %s, Rich_Web_VS_ContSl_LT_T2_AnC = %s, Rich_Web_VS_ContSl_LT_T3_BgC = %s, Rich_Web_VS_ContSl_L_S = %s, Rich_Web_VS_ContSl_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_VS_ContSl_L_Show, $Rich_Web_VS_ContSl_LT_Show, $Rich_Web_VS_ContSl_LT, $Rich_Web_VS_ContSl_L_BgC, $Rich_Web_VS_ContSl_L_T, $Rich_Web_VS_ContSl_LT_T, $Rich_Web_VS_ContSl_LT_FS, $Rich_Web_VS_ContSl_LT_FF, $Rich_Web_VS_ContSl_LT_C, $Rich_Web_VS_ContSl_L_T1_C, $Rich_Web_VS_ContSl_L_T2_C, $Rich_Web_VS_ContSl_L_T3_C, $Rich_Web_VS_ContSl_LT_T2_BC, $Rich_Web_VS_ContSl_L_C, $Rich_Web_VS_ContSl_LT_T2_AnC, $Rich_Web_VS_ContSl_LT_T3_BgC, $Rich_Web_VS_ContSl_L_S, $Rich_Web_VS_ContSl_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Slick Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name6 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VS_SS_ED = %s, Rich_Web_VS_SS_PT = %s, Rich_Web_VS_SS_AP = %s, Rich_Web_VS_SS_W = %s, Rich_Web_VS_SS_H = %s, Rich_Web_VS_SS_BW = %s, Rich_Web_VS_SS_BS = %s, Rich_Web_VS_SS_TShow = %s, Rich_Web_VS_SS_TFS = %s, Rich_Web_VS_SS_TFF = %s, Rich_Web_VS_SS_NShow = %s, Rich_Web_VS_SS_NS = %s, Rich_Web_VS_SS_PagShow = %s, Rich_Web_VS_SS_PagW = %s, Rich_Web_VS_SS_PagH = %s, Rich_Web_VS_SS_PagPB = %s, Rich_Web_VS_SS_PagBW = %s, Rich_Web_VS_SS_PagBS = %s, Rich_Web_VS_SS_PagBR = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VS_SS_ED, $Rich_Web_VS_SS_PT, $Rich_Web_VS_SS_AP, $Rich_Web_VS_SS_W, $Rich_Web_VS_SS_H, $Rich_Web_VS_SS_BW, $Rich_Web_VS_SS_BS, $Rich_Web_VS_SS_TShow, $Rich_Web_VS_SS_TFS, $Rich_Web_VS_SS_TFF, $Rich_Web_VS_SS_NShow, $Rich_Web_VS_SS_NS, $Rich_Web_VS_SS_PagShow, $Rich_Web_VS_SS_PagW, $Rich_Web_VS_SS_PagH, $Rich_Web_VS_SS_PagPB, $Rich_Web_VS_SS_PagBW, $Rich_Web_VS_SS_PagBS, $Rich_Web_VS_SS_PagBR, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name6_Loader set Rich_Web_SlickSl_L_Show = %s, Rich_Web_SlickSl_LT_Show = %s, Rich_Web_SlickSl_LT = %s, Rich_Web_SlickSl_L_BgC = %s, Rich_Web_SlickSl_L_T = %s, Rich_Web_SlickSl_LT_T = %s, Rich_Web_SlickSl_LT_FS = %s, Rich_Web_SlickSl_LT_FF = %s, Rich_Web_SlickSl_LT_C = %s, Rich_Web_SlickSl_L_T1_C = %s, Rich_Web_SlickSl_L_T2_C = %s, Rich_Web_SlickSl_L_T3_C = %s, Rich_Web_SlickSl_LT_T2_BC = %s, Rich_Web_SlickSl_L_C = %s, Rich_Web_SlickSl_LT_T2_AnC = %s, Rich_Web_SlickSl_LT_T3_BgC = %s, Rich_Web_SlickSl_L_S = %s, Rich_Web_SlickSl_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_SlickSl_L_Show, $Rich_Web_SlickSl_LT_Show, $Rich_Web_SlickSl_LT, $Rich_Web_SlickSl_L_BgC, $Rich_Web_SlickSl_L_T, $Rich_Web_SlickSl_LT_T, $Rich_Web_SlickSl_LT_FS, $Rich_Web_SlickSl_LT_FF, $Rich_Web_SlickSl_LT_C, $Rich_Web_SlickSl_L_T1_C, $Rich_Web_SlickSl_L_T2_C, $Rich_Web_SlickSl_L_T3_C, $Rich_Web_SlickSl_LT_T2_BC, $Rich_Web_SlickSl_L_C, $Rich_Web_SlickSl_LT_T2_AnC, $Rich_Web_SlickSl_LT_T3_BgC, $Rich_Web_SlickSl_L_S, $Rich_Web_SlickSl_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Thumbnails Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name7 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VS_TS_W = %s, Rich_Web_VS_TS_H = %s, Rich_Web_VS_TS_BW = %s, Rich_Web_VS_TS_BS = %s, Rich_Web_VS_TS_BoxShShow = %s, Rich_Web_VS_TS_BoxShType = %s, Rich_Web_VS_TS_BoxSh = %s, Rich_Web_VS_TS_IBW = %s, Rich_Web_VS_TS_IBS = %s, Rich_Web_VS_TS_IBR = %s, Rich_Web_VS_TS_TBW = %s, Rich_Web_VS_TS_TBS = %s, Rich_Web_VS_TS_TIH = %s, Rich_Web_VS_TS_TIPB = %s, Rich_Web_VS_TS_TIBW = %s, Rich_Web_VS_TS_TIBS = %s, Rich_Web_VS_TS_TIBR = %s, Rich_Web_VS_TS_TIBoxShShow = %s, Rich_Web_VS_TS_TIBoxShType = %s, Rich_Web_VS_TS_TIBoxSh = %s, Rich_Web_VS_TS_TICBS = %s, Rich_Web_VS_TS_TIHBS = %s, Rich_Web_VS_TS_CS = %s, Rich_Web_VS_TS_PT = %s, Rich_Web_VS_TS_AP = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VS_TS_W, $Rich_Web_VS_TS_H, $Rich_Web_VS_TS_BW, $Rich_Web_VS_TS_BS, $Rich_Web_VS_TS_BoxShShow, $Rich_Web_VS_TS_BoxShType, $Rich_Web_VS_TS_BoxSh, $Rich_Web_VS_TS_IBW, $Rich_Web_VS_TS_IBS, $Rich_Web_VS_TS_IBR, $Rich_Web_VS_TS_TBW, $Rich_Web_VS_TS_TBS, $Rich_Web_VS_TS_TIH, $Rich_Web_VS_TS_TIPB, $Rich_Web_VS_TS_TIBW, $Rich_Web_VS_TS_TIBS, $Rich_Web_VS_TS_TIBR, $Rich_Web_VS_TS_TIBoxShShow, $Rich_Web_VS_TS_TIBoxShType, $Rich_Web_VS_TS_TIBoxSh, $Rich_Web_VS_TS_TICBS, $Rich_Web_VS_TS_TIHBS, $Rich_Web_VS_TS_CS, $Rich_Web_VS_TS_PT, $Rich_Web_VS_TS_AP, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name7_Loader set Rich_Web_ThumbSl_L_Show = %s, Rich_Web_ThumbSl_LT_Show = %s, Rich_Web_ThumbSl_LT = %s, Rich_Web_ThumbSl_L_BgC = %s, Rich_Web_ThumbSl_L_T = %s, Rich_Web_ThumbSl_LT_T = %s, Rich_Web_ThumbSl_LT_FS = %s, Rich_Web_ThumbSl_LT_FF = %s, Rich_Web_ThumbSl_LT_C = %s, Rich_Web_ThumbSl_L_T1_C = %s, Rich_Web_ThumbSl_L_T2_C = %s, Rich_Web_ThumbSl_L_T3_C = %s, Rich_Web_ThumbSl_LT_T2_BC = %s, Rich_Web_ThumbSl_L_C = %s, Rich_Web_ThumbSl_LT_T2_AnC = %s, Rich_Web_ThumbSl_LT_T3_BgC = %s, Rich_Web_ThumbSl_L_S = %s, Rich_Web_ThumbSl_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_ThumbSl_L_Show, $Rich_Web_ThumbSl_LT_Show, $Rich_Web_ThumbSl_LT, $Rich_Web_ThumbSl_L_BgC, $Rich_Web_ThumbSl_L_T, $Rich_Web_ThumbSl_LT_T, $Rich_Web_ThumbSl_LT_FS, $Rich_Web_ThumbSl_LT_FF, $Rich_Web_ThumbSl_LT_C, $Rich_Web_ThumbSl_L_T1_C, $Rich_Web_ThumbSl_L_T2_C, $Rich_Web_ThumbSl_L_T3_C, $Rich_Web_ThumbSl_LT_T2_BC, $Rich_Web_ThumbSl_L_C, $Rich_Web_ThumbSl_LT_T2_AnC, $Rich_Web_ThumbSl_LT_T3_BgC, $Rich_Web_ThumbSl_L_S, $Rich_Web_ThumbSl_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Video Carousel/Content Popup')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name8 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VC_Car_Border_Width = %s, Rich_Web_VC_Car_Border_Style = %s, Rich_Web_VC_Car_Box_Shadow = %s, Rich_Web_VC_Car_Count_Imgs = %s, Rich_Web_VC_Car_PBImgs = %s, Rich_Web_VC_Car_Icons_Size = %s, Rich_Web_VC_Popup_Border_Width = %s, Rich_Web_VC_Popup_Border_Style = %s, Rich_Web_VC_Popup_Box_Shadow = %s, Rich_Web_VC_Title_Font_Size = %s, Rich_Web_VC_Title_Font_Family = %s, Rich_Web_VC_Title_Text_Align = %s, Rich_Web_VC_Link_Font_Size = %s, Rich_Web_VC_Link_Font_Family = %s, Rich_Web_VC_Link_Border_Width = %s, Rich_Web_VC_Link_Border_Style = %s, Rich_Web_VC_Popup_Icons_Size = %s, Rich_Web_VC_Link_Text = %s, Rich_Web_VC_Link_Border_Radius = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VC_Car_Border_Width, $Rich_Web_VC_Car_Border_Style, $Rich_Web_VC_Car_Box_Shadow, $Rich_Web_VC_Car_Count_Imgs, $Rich_Web_VC_Car_PBImgs, $Rich_Web_VC_Car_Icons_Size, $Rich_Web_VC_Popup_Border_Width, $Rich_Web_VC_Popup_Border_Style, $Rich_Web_VC_Popup_Box_Shadow, $Rich_Web_VC_Title_Font_Size, $Rich_Web_VC_Title_Font_Family, $Rich_Web_VC_Title_Text_Align, $Rich_Web_VC_Link_Font_Size, $Rich_Web_VC_Link_Font_Family, $Rich_Web_VC_Link_Border_Width, $Rich_Web_VC_Link_Border_Style, $Rich_Web_VC_Popup_Icons_Size, $Rich_Web_VC_Link_Text, $Rich_Web_VC_Link_Border_Radius, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name8_Loader set Rich_Web_VCCP_L_Show = %s, Rich_Web_VCCP_LT_Show = %s, Rich_Web_VCCP_LT = %s, Rich_Web_VCCP_L_BgC = %s, Rich_Web_VCCP_L_T = %s, Rich_Web_VCCP_LT_T = %s, Rich_Web_VCCP_LT_FS = %s, Rich_Web_VCCP_LT_FF = %s, Rich_Web_VCCP_LT_C = %s, Rich_Web_VCCP_L_T1_C = %s, Rich_Web_VCCP_L_T2_C = %s, Rich_Web_VCCP_L_T3_C = %s, Rich_Web_VCCP_LT_T2_BC = %s, Rich_Web_VCCP_L_C = %s, Rich_Web_VCCP_LT_T2_AnC = %s, Rich_Web_VCCP_LT_T3_BgC = %s, Rich_Web_VCCP_L_S = %s, Rich_Web_VCCP_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_VCCP_L_Show, $Rich_Web_VCCP_LT_Show, $Rich_Web_VCCP_LT, $Rich_Web_VCCP_L_BgC, $Rich_Web_VCCP_L_T, $Rich_Web_VCCP_LT_T, $Rich_Web_VCCP_LT_FS, $Rich_Web_VCCP_LT_FF, $Rich_Web_VCCP_LT_C, $Rich_Web_VCCP_L_T1_C, $Rich_Web_VCCP_L_T2_C, $Rich_Web_VCCP_L_T3_C, $Rich_Web_VCCP_LT_T2_BC, $Rich_Web_VCCP_L_C, $Rich_Web_VCCP_LT_T2_AnC, $Rich_Web_VCCP_LT_T3_BgC, $Rich_Web_VCCP_L_S, $Rich_Web_VCCP_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Simple Video Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name9 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_SVS_W = %s, Rich_Web_SVS_PT = %s, Rich_Web_SVS_CS = %s, Rich_Web_SVS_BW = %s, Rich_Web_SVS_BS = %s, Rich_Web_SVS_BoxShShow = %s, Rich_Web_SVS_BoxShType = %s, Rich_Web_SVS_BoxSh = %s, Rich_Web_SVS_Nav_Show = %s, Rich_Web_SVS_Nav_W = %s, Rich_Web_SVS_Nav_H = %s, Rich_Web_SVS_Nav_BW = %s, Rich_Web_SVS_Nav_BS = %s, Rich_Web_SVS_Nav_BR = %s, Rich_Web_SVS_Nav_PB = %s, Rich_Web_SVS_T_Show = %s, Rich_Web_SVS_TFS = %s, Rich_Web_SVS_TFF = %s, Rich_Web_SVS_D_Show = %s, Rich_Web_SVS_LFS = %s, Rich_Web_SVS_LFF = %s, Rich_Web_SVS_Arr_Show = %s, Rich_Web_SVS_Arr_S = %s, Rich_Web_SVS_Arr_BW = %s, Rich_Web_SVS_Arr_BS = %s, Rich_Web_SVS_Arr_BR = %s, Rich_Web_SVS_PIBR = %s, Rich_Web_SVS_LText = %s, Rich_Web_SVS_AP = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_SVS_W, $Rich_Web_SVS_PT, $Rich_Web_SVS_CS, $Rich_Web_SVS_BW, $Rich_Web_SVS_BS, $Rich_Web_SVS_BoxShShow, $Rich_Web_SVS_BoxShType, $Rich_Web_SVS_BoxSh, $Rich_Web_SVS_Nav_Show, $Rich_Web_SVS_Nav_W, $Rich_Web_SVS_Nav_H, $Rich_Web_SVS_Nav_BW, $Rich_Web_SVS_Nav_BS, $Rich_Web_SVS_Nav_BR, $Rich_Web_SVS_Nav_PB, $Rich_Web_SVS_T_Show, $Rich_Web_SVS_TFS, $Rich_Web_SVS_TFF, $Rich_Web_SVS_D_Show, $Rich_Web_SVS_LFS, $Rich_Web_SVS_LFF, $Rich_Web_SVS_Arr_Show, $Rich_Web_SVS_Arr_S, $Rich_Web_SVS_Arr_BW, $Rich_Web_SVS_Arr_BS, $Rich_Web_SVS_Arr_BR, $Rich_Web_SVS_PIBR, $Rich_Web_SVS_LText, $Rich_Web_SVS_AP, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name9_Loader set Rich_Web_SimpleVS_L_Show = %s, Rich_Web_SimpleVS_LT_Show = %s, Rich_Web_SimpleVS_LT = %s, Rich_Web_SimpleVS_L_BgC = %s, Rich_Web_SimpleVS_L_T = %s, Rich_Web_SimpleVS_LT_T = %s, Rich_Web_SimpleVS_LT_FS = %s, Rich_Web_SimpleVS_LT_FF = %s, Rich_Web_SimpleVS_LT_C = %s, Rich_Web_SimpleVS_L_T1_C = %s, Rich_Web_SimpleVS_L_T2_C = %s, Rich_Web_SimpleVS_L_T3_C = %s, Rich_Web_SimpleVS_LT_T2_BC = %s, Rich_Web_SimpleVS_L_C = %s, Rich_Web_SimpleVS_LT_T2_AnC = %s, Rich_Web_SimpleVS_LT_T3_BgC = %s, Rich_Web_SimpleVS_L_S = %s, Rich_Web_SimpleVS_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_SimpleVS_L_Show, $Rich_Web_SimpleVS_LT_Show, $Rich_Web_SimpleVS_LT, $Rich_Web_SimpleVS_L_BgC, $Rich_Web_SimpleVS_L_T, $Rich_Web_SimpleVS_LT_T, $Rich_Web_SimpleVS_LT_FS, $Rich_Web_SimpleVS_LT_FF, $Rich_Web_SimpleVS_LT_C, $Rich_Web_SimpleVS_L_T1_C, $Rich_Web_SimpleVS_L_T2_C, $Rich_Web_SimpleVS_L_T3_C, $Rich_Web_SimpleVS_LT_T2_BC, $Rich_Web_SimpleVS_L_C, $Rich_Web_SimpleVS_LT_T2_AnC, $Rich_Web_SimpleVS_LT_T3_BgC, $Rich_Web_SimpleVS_L_S, $Rich_Web_SimpleVS_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Video Slider/Vertical Thumbnails')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name10 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VTVS_AP = %s, Rich_Web_VTVS_APS = %s, Rich_Web_VTVS_CS = %s, Rich_Web_VTVS_PT = %s, Rich_Web_VTVS_ArrSt = %s, Rich_Web_VTVS_H = %s, Rich_Web_VTVS_BW = %s, Rich_Web_VTVS_BS = %s, Rich_Web_VTVS_BoxShShow = %s, Rich_Web_VTVS_BoxShType = %s, Rich_Web_VTVS_BoxSh = %s, Rich_Web_VTVS_TShow = %s, Rich_Web_VTVS_TFS = %s, Rich_Web_VTVS_TFF = %s, Rich_Web_VTVS_Th_BW = %s, Rich_Web_VTVS_Th_BS = %s, Rich_Web_VTVS_Th_BR = %s, Rich_Web_VTVS_LFS = %s, Rich_Web_VTVS_PFS = %s, Rich_Web_VTVS_ArrShow = %s, Rich_Web_VTVS_ArrFS = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VTVS_AP, $Rich_Web_VTVS_APS, $Rich_Web_VTVS_CS, $Rich_Web_VTVS_PT, $Rich_Web_VTVS_ArrSt, $Rich_Web_VTVS_H, $Rich_Web_VTVS_BW, $Rich_Web_VTVS_BS, $Rich_Web_VTVS_BoxShShow, $Rich_Web_VTVS_BoxShType, $Rich_Web_VTVS_BoxSh, $Rich_Web_VTVS_TShow, $Rich_Web_VTVS_TFS, $Rich_Web_VTVS_TFF, $Rich_Web_VTVS_Th_BW, $Rich_Web_VTVS_Th_BS, $Rich_Web_VTVS_Th_BR, $Rich_Web_VTVS_LFS, $Rich_Web_VTVS_PFS, $Rich_Web_VTVS_ArrShow, $Rich_Web_VTVS_ArrFS, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name10_Loader set Rich_Web_VSVT_L_Show = %s, Rich_Web_VSVT_LT_Show = %s, Rich_Web_VSVT_LT = %s, Rich_Web_VSVT_L_BgC = %s, Rich_Web_VSVT_L_T = %s, Rich_Web_VSVT_LT_T = %s, Rich_Web_VSVT_LT_FS = %s, Rich_Web_VSVT_LT_FF = %s, Rich_Web_VSVT_LT_C = %s, Rich_Web_VSVT_L_T1_C = %s, Rich_Web_VSVT_L_T2_C = %s, Rich_Web_VSVT_L_T3_C = %s, Rich_Web_VSVT_LT_T2_BC = %s, Rich_Web_VSVT_L_C = %s, Rich_Web_VSVT_LT_T2_AnC = %s, Rich_Web_VSVT_LT_T3_BgC = %s, Rich_Web_VSVT_L_S = %s, Rich_Web_VSVT_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_VSVT_L_Show, $Rich_Web_VSVT_LT_Show, $Rich_Web_VSVT_LT, $Rich_Web_VSVT_L_BgC, $Rich_Web_VSVT_L_T, $Rich_Web_VSVT_LT_T, $Rich_Web_VSVT_LT_FS, $Rich_Web_VSVT_LT_FF, $Rich_Web_VSVT_LT_C, $Rich_Web_VSVT_L_T1_C, $Rich_Web_VSVT_L_T2_C, $Rich_Web_VSVT_L_T3_C, $Rich_Web_VSVT_LT_T2_BC, $Rich_Web_VSVT_L_C, $Rich_Web_VSVT_LT_T2_AnC, $Rich_Web_VSVT_LT_T3_BgC, $Rich_Web_VSVT_L_S, $Rich_Web_VSVT_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Horizontal Posts Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name11 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VS_HPS_Loop = %s, Rich_Web_VS_HPS_Cols = %s, Rich_Web_VS_HPS_Speed = %s, Rich_Web_VS_HPS_AP = %s, Rich_Web_VS_HPS_EH = %s, Rich_Web_VS_HPS_PB = %s, Rich_Web_VS_HPS_Car = %s, Rich_Web_VS_HPS_NP_Show = %s, Rich_Web_VS_HPS_NP_NText = %s, Rich_Web_VS_HPS_NP_PText = %s, Rich_Web_VS_HPS_NP_FS = %s, Rich_Web_VS_HPS_NP_FF = %s, Rich_Web_VS_HPS_NP_BW = %s, Rich_Web_VS_HPS_NP_BS = %s, Rich_Web_VS_HPS_NP_BR = %s, Rich_Web_VS_HPS_TFS = %s, Rich_Web_VS_HPS_TFF = %s, Rich_Web_VS_HPS_DShow = %s, Rich_Web_VS_HPS_LText = %s, Rich_Web_VS_HPS_LFS = %s, Rich_Web_VS_HPS_LFF = %s, Rich_Web_VS_HPS_PText = %s, Rich_Web_VS_HPS_PFS = %s, Rich_Web_VS_HPS_PFF = %s, Rich_Web_VS_HPS_Pop_BW = %s, Rich_Web_VS_HPS_Pop_BS = %s, Rich_Web_VS_HPS_Pop_BoxShShow = %s, Rich_Web_VS_HPS_Pop_BoxShType = %s, Rich_Web_VS_HPS_Pop_BoxSh = %s, Rich_Web_VS_HPS_Pop_CIS = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VS_HPS_Loop, $Rich_Web_VS_HPS_Cols, $Rich_Web_VS_HPS_Speed, $Rich_Web_VS_HPS_AP, $Rich_Web_VS_HPS_EH, $Rich_Web_VS_HPS_PB, $Rich_Web_VS_HPS_Car, $Rich_Web_VS_HPS_NP_Show, $Rich_Web_VS_HPS_NP_NText, $Rich_Web_VS_HPS_NP_PText, $Rich_Web_VS_HPS_NP_FS, $Rich_Web_VS_HPS_NP_FF, $Rich_Web_VS_HPS_NP_BW, $Rich_Web_VS_HPS_NP_BS, $Rich_Web_VS_HPS_NP_BR, $Rich_Web_VS_HPS_TFS, $Rich_Web_VS_HPS_TFF, $Rich_Web_VS_HPS_DShow, $Rich_Web_VS_HPS_LText, $Rich_Web_VS_HPS_LFS, $Rich_Web_VS_HPS_LFF, $Rich_Web_VS_HPS_PText, $Rich_Web_VS_HPS_PFS, $Rich_Web_VS_HPS_PFF, $Rich_Web_VS_HPS_Pop_BW, $Rich_Web_VS_HPS_Pop_BS, $Rich_Web_VS_HPS_Pop_BoxShShow, $Rich_Web_VS_HPS_Pop_BoxShType, $Rich_Web_VS_HPS_Pop_BoxSh, $Rich_Web_VS_HPS_Pop_CIS, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name11_Loader set Rich_Web_HSL_L_Show = %s, Rich_Web_HSL_LT_Show = %s, Rich_Web_HSL_LT = %s, Rich_Web_HSL_L_BgC = %s, Rich_Web_HSL_L_T = %s, Rich_Web_HSL_LT_T = %s, Rich_Web_HSL_LT_FS = %s, Rich_Web_HSL_LT_FF = %s, Rich_Web_HSL_LT_C = %s, Rich_Web_HSL_L_T1_C = %s, Rich_Web_HSL_L_T2_C = %s, Rich_Web_HSL_L_T3_C = %s, Rich_Web_HSL_LT_T2_BC = %s, Rich_Web_HSL_L_C = %s, Rich_Web_HSL_LT_T2_AnC = %s, Rich_Web_HSL_LT_T3_BgC = %s, Rich_Web_HSL_L_S = %s, Rich_Web_HSL_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_HSL_L_Show, $Rich_Web_HSL_LT_Show, $Rich_Web_HSL_LT, $Rich_Web_HSL_L_BgC, $Rich_Web_HSL_L_T, $Rich_Web_HSL_LT_T, $Rich_Web_HSL_LT_FS, $Rich_Web_HSL_LT_FF, $Rich_Web_HSL_LT_C, $Rich_Web_HSL_L_T1_C, $Rich_Web_HSL_L_T2_C, $Rich_Web_HSL_L_T3_C, $Rich_Web_HSL_LT_T2_BC, $Rich_Web_HSL_L_C, $Rich_Web_HSL_LT_T2_AnC, $Rich_Web_HSL_LT_T3_BgC, $Rich_Web_HSL_L_S, $Rich_Web_HSL_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Rich Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name12 set  Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_RVVS_Sh = %s, Rich_Web_RVVS_ShT = %s, Rich_Web_RVVS_NI_BW = %s, Rich_Web_RVVS_NT_FS = %s, Rich_Web_RVVS_NT_FF = %s, Rich_Web_RVVS_NImg_BW = %s, Rich_Web_RVVS_NImg_BR = %s, Rich_Web_RVVS_NImg_BSh = %s, Rich_Web_RVVS_NImg_ShT = %s, Rich_Web_RVVS_IT_FS = %s, Rich_Web_RVVS_IT_FF = %s, Rich_Web_RVVS_PlIc_FS = %s, Rich_Web_RVVS_DelIc_FS = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_RVVS_Sh, $Rich_Web_RVVS_ShT, $Rich_Web_RVVS_NI_BW, $Rich_Web_RVVS_NT_FS, $Rich_Web_RVVS_NT_FF, $Rich_Web_RVVS_NImg_BW, $Rich_Web_RVVS_NImg_BR, $Rich_Web_RVVS_NImg_BSh, $Rich_Web_RVVS_NImg_ShT, $Rich_Web_RVVS_IT_FS, $Rich_Web_RVVS_IT_FF, $Rich_Web_RVVS_PlIc_FS, $Rich_Web_RVVS_DelIc_FS, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name12_Loader set Rich_Web_RichSl_L_Show = %s, Rich_Web_RichSl_LT_Show = %s, Rich_Web_RichSl_LT = %s, Rich_Web_RichSl_L_BgC = %s, Rich_Web_RichSl_L_T = %s, Rich_Web_RichSl_LT_T = %s, Rich_Web_RichSl_LT_FS = %s, Rich_Web_RichSl_LT_FF = %s, Rich_Web_RichSl_LT_C = %s, Rich_Web_RichSl_L_T1_C = %s, Rich_Web_RichSl_L_T2_C = %s, Rich_Web_RichSl_L_T3_C = %s, Rich_Web_RichSl_LT_T2_BC = %s, Rich_Web_RichSl_L_C = %s, Rich_Web_RichSl_LT_T2_AnC = %s, Rich_Web_RichSl_LT_T3_BgC = %s, Rich_Web_RichSl_L_S = %s, Rich_Web_RichSl_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_RichSl_L_Show, $Rich_Web_RichSl_LT_Show, $Rich_Web_RichSl_LT, $Rich_Web_RichSl_L_BgC, $Rich_Web_RichSl_L_T, $Rich_Web_RichSl_LT_T, $Rich_Web_RichSl_LT_FS, $Rich_Web_RichSl_LT_FF, $Rich_Web_RichSl_LT_C, $Rich_Web_RichSl_L_T1_C, $Rich_Web_RichSl_L_T2_C, $Rich_Web_RichSl_L_T3_C, $Rich_Web_RichSl_LT_T2_BC, $Rich_Web_RichSl_L_C, $Rich_Web_RichSl_LT_T2_AnC, $Rich_Web_RichSl_LT_T3_BgC, $Rich_Web_RichSl_L_S, $Rich_Web_RichSl_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='TimeLine Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name13 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_MS_W = %s, Rich_Web_MS_SSh = %s, Rich_Web_MS_SShChT = %s, Rich_Web_MS_BSh = %s, Rich_Web_MS_ShT = %s, Rich_Web_MS_Autoplay = %s, Rich_Web_MS_N_BW = %s, Rich_Web_MS_N_BS = %s, Rich_Web_MS_NI_FS = %s, Rich_Web_MS_NI_FF = %s, Rich_Web_MS_Img_BW = %s, Rich_Web_MS_Img_BS = %s, Rich_Web_MS_Img_BSh = %s, Rich_Web_MS_Img_ShT = %s, Rich_Web_MS_T_FS = %s, Rich_Web_MS_T_FF = %s, Rich_Web_MS_T_TA = %s, Rich_Web_MS_T_TSh = %s, Rich_Web_MS_Ic_S = %s, Rich_Web_MS_PlIc_S = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_MS_W, $Rich_Web_MS_SSh, $Rich_Web_MS_SShChT, $Rich_Web_MS_BSh, $Rich_Web_MS_ShT, $Rich_Web_MS_Autoplay, $Rich_Web_MS_N_BW, $Rich_Web_MS_N_BS, $Rich_Web_MS_NI_FS, $Rich_Web_MS_NI_FF, $Rich_Web_MS_Img_BW, $Rich_Web_MS_Img_BS, $Rich_Web_MS_Img_BSh, $Rich_Web_MS_Img_ShT, $Rich_Web_MS_T_FS, $Rich_Web_MS_T_FF, $Rich_Web_MS_T_TA, $Rich_Web_MS_T_TSh, $Rich_Web_MS_Ic_S, $Rich_Web_MS_PlIc_S, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name13_Loader set Rich_Web_TSL_L_Show = %s, Rich_Web_TSL_LT_Show = %s, Rich_Web_TSL_LT = %s, Rich_Web_TSL_L_BgC = %s, Rich_Web_TSL_L_T = %s, Rich_Web_TSL_LT_T = %s, Rich_Web_TSL_LT_FS = %s, Rich_Web_TSL_LT_FF = %s, Rich_Web_TSL_LT_C = %s, Rich_Web_TSL_L_T1_C = %s, Rich_Web_TSL_L_T2_C = %s, Rich_Web_TSL_L_T3_C = %s, Rich_Web_TSL_LT_T2_BC = %s, Rich_Web_TSL_L_C = %s, Rich_Web_TSL_LT_T2_AnC = %s, Rich_Web_TSL_LT_T3_BgC = %s, Rich_Web_TSL_L_S = %s, Rich_Web_TSL_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_TSL_L_Show, $Rich_Web_TSL_LT_Show, $Rich_Web_TSL_LT, $Rich_Web_TSL_L_BgC, $Rich_Web_TSL_L_T, $Rich_Web_TSL_LT_T, $Rich_Web_TSL_LT_FS, $Rich_Web_TSL_LT_FF, $Rich_Web_TSL_LT_C, $Rich_Web_TSL_L_T1_C, $Rich_Web_TSL_L_T2_C, $Rich_Web_TSL_L_T3_C, $Rich_Web_TSL_LT_T2_BC, $Rich_Web_TSL_L_C, $Rich_Web_TSL_LT_T2_AnC, $Rich_Web_TSL_LT_T3_BgC, $Rich_Web_TSL_L_S, $Rich_Web_TSL_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Amazing Simple Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name14 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_GO_NS1_Width = %s, Rich_Web_GO_NS1_Height = %s, Rich_Web_GO_NS1_PTime = %s, Rich_Web_GO_NS1_BW = %s, Rich_Web_GO_NS1_BType = %s, Rich_Web_GO_NS1_BSh = %s, Rich_Web_GO_NS1_BSh_Type = %s, Rich_Web_TO_NS1_FSize = %s, Rich_Web_TO_NS1_FFamily = %s, Rich_Web_TO_NS1_Num_FSize = %s, Rich_Web_TO_NS1_Num_FFamily = %s, Rich_Web_PO_NS1_Width = %s, Rich_Web_PO_NS1_Height = %s, Rich_Web_PO_NS1_PB = %s, Rich_Web_IO_NS1_FSize = %s, Rich_Web_IO_NS1_Width = %s, Rich_Web_IO_NS1_Height = %s, Rich_Web_GO_NS1_Align = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_GO_NS1_Width, $Rich_Web_GO_NS1_Height, $Rich_Web_GO_NS1_PTime, $Rich_Web_GO_NS1_BW, $Rich_Web_GO_NS1_BType, $Rich_Web_GO_NS1_BSh, $Rich_Web_GO_NS1_BSh_Type, $Rich_Web_TO_NS1_FSize, $Rich_Web_TO_NS1_FFamily, $Rich_Web_TO_NS1_Num_FSize, $Rich_Web_TO_NS1_Num_FFamily, $Rich_Web_PO_NS1_Width, $Rich_Web_PO_NS1_Height, $Rich_Web_PO_NS1_PB, $Rich_Web_IO_NS1_FSize, $Rich_Web_IO_NS1_Width, $Rich_Web_IO_NS1_Height, $Rich_Web_GO_NS1_Align, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name14_Loader set Rich_Web_ASSl_L_Show = %s, Rich_Web_ASSl_LT_Show = %s, Rich_Web_ASSl_LT = %s, Rich_Web_ASSl_L_BgC = %s, Rich_Web_ASSl_L_T = %s, Rich_Web_ASSl_LT_T = %s, Rich_Web_ASSl_LT_FS = %s, Rich_Web_ASSl_LT_FF = %s, Rich_Web_ASSl_LT_C = %s, Rich_Web_ASSl_L_T1_C = %s, Rich_Web_ASSl_L_T2_C = %s, Rich_Web_ASSl_L_T3_C = %s, Rich_Web_ASSl_LT_T2_BC = %s, Rich_Web_ASSl_L_C = %s, Rich_Web_ASSl_LT_T2_AnC = %s, Rich_Web_ASSl_LT_T3_BgC = %s, Rich_Web_ASSl_L_S = %s, Rich_Web_ASSl_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_ASSl_L_Show, $Rich_Web_ASSl_LT_Show, $Rich_Web_ASSl_LT, $Rich_Web_ASSl_L_BgC, $Rich_Web_ASSl_L_T, $Rich_Web_ASSl_LT_T, $Rich_Web_ASSl_LT_FS, $Rich_Web_ASSl_LT_FF, $Rich_Web_ASSl_LT_C, $Rich_Web_ASSl_L_T1_C, $Rich_Web_ASSl_L_T2_C, $Rich_Web_ASSl_L_T3_C, $Rich_Web_ASSl_LT_T2_BC, $Rich_Web_ASSl_L_C, $Rich_Web_ASSl_LT_T2_AnC, $Rich_Web_ASSl_LT_T3_BgC, $Rich_Web_ASSl_L_S, $Rich_Web_ASSl_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
			}
		}
		else
		{
			wp_die('Security check fail'); 
		}
	}
	$Rich_WebSliderCount=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id>%d",0));
	$Rich_Web_VSlider_Fonts=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id>%d",0));
$Rich_WebSliderCount=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id>%d",0));
	$Rich_Web_VSlider_Fonts=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id>%d",0));

	$Rich_Web_VS1  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE id > %d",0));
	$Rich_Web_VS2  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE id > %d",0));
	$Rich_Web_VS3  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE id > %d",0));
	$Rich_Web_VS4  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE id > %d",0));
	$Rich_Web_VS5  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE id > %d",0));
	$Rich_Web_VS6  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name10 WHERE id > %d",0));
	$Rich_Web_VS7  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name11 WHERE id > %d",0));
	$Rich_Web_VS8  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name12 WHERE id > %d",0));
	$Rich_Web_VS9  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name13 WHERE id > %d",0));
	$Rich_Web_VS10 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name14 WHERE id > %d",0));
	$Rich_Web_VS11 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name15 WHERE id > %d",0));
	$Rich_Web_VS1_Loader  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5_Loader WHERE id > %d",0));
	$Rich_Web_VS2_Loader  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6_Loader WHERE id > %d",0));
	$Rich_Web_VS3_Loader  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7_Loader WHERE id > %d",0));
	$Rich_Web_VS4_Loader  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8_Loader WHERE id > %d",0));
	$Rich_Web_VS5_Loader  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9_Loader WHERE id > %d",0));
	$Rich_Web_VS6_Loader  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name10_Loader WHERE id > %d",0));
	$Rich_Web_VS7_Loader  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name11_Loader WHERE id > %d",0));
	$Rich_Web_VS8_Loader  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name12_Loader WHERE id > %d",0));
	$Rich_Web_VS9_Loader  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name13_Loader WHERE id > %d",0));
	$Rich_Web_VS10_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name14_Loader WHERE id > %d",0));
	$Rich_Web_VS11_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name15_Loader WHERE id > %d",0));

	if($Rich_Web_VS1[0]->Rich_Web_VS_CS_AP=='on'){ $Rich_Web_VS_CS_AP = "checked"; }
	if($Rich_Web_VS1[0]->Rich_Web_VS_CS_HP=='on'){ $Rich_Web_VS_CS_HP = "checked"; }
	if($Rich_Web_VS1[0]->Rich_Web_VS_CS_RS=='on'){ $Rich_Web_VS_CS_RS = "checked"; }
	if($Rich_Web_VS1[0]->Rich_Web_VS_CS_CN=='on'){ $Rich_Web_VS_CS_CN = "checked"; }
	if($Rich_Web_VS1[0]->Rich_Web_VS_CS_NPB=='on'){	$Rich_Web_VS_CS_NPB = "checked"; }
	if($Rich_Web_VS1[0]->Rich_Web_VS_CS_NT=='on'){ $Rich_Web_VS_CS_NT = "checked"; }
	if($Rich_Web_VS2[0]->Rich_Web_VS_SS_AP=='on'){ $Rich_Web_VS_SS_AP = "checked"; }
	if($Rich_Web_VS2[0]->Rich_Web_VS_SS_TShow=='on'){ $Rich_Web_VS_SS_TShow = "checked"; }
	if($Rich_Web_VS2[0]->Rich_Web_VS_SS_NShow=='on'){ $Rich_Web_VS_SS_NShow = "checked"; }
	if($Rich_Web_VS2[0]->Rich_Web_VS_SS_PagShow=='on'){ $Rich_Web_VS_SS_PagShow = "checked"; }
	if($Rich_Web_VS3[0]->Rich_Web_VS_TS_BoxShShow=='on'){ $Rich_Web_VS_TS_BoxShShow = "checked"; }
	if($Rich_Web_VS3[0]->Rich_Web_VS_TS_BoxShType=='on'){ $Rich_Web_VS_TS_BoxShType = "checked"; }
	if($Rich_Web_VS3[0]->Rich_Web_VS_TS_TIBoxShShow=='on'){ $Rich_Web_VS_TS_TIBoxShShow = "checked"; }
	if($Rich_Web_VS3[0]->Rich_Web_VS_TS_TIBoxShType=='on'){ $Rich_Web_VS_TS_TIBoxShType = "checked"; }
	if($Rich_Web_VS3[0]->Rich_Web_VS_TS_AP=='on'){ $Rich_Web_VS_TS_AP = "checked"; }
	if($Rich_Web_VS5[0]->Rich_Web_SVS_BoxShShow=='on'){ $Rich_Web_SVS_BoxShShow = "checked"; }
	if($Rich_Web_VS5[0]->Rich_Web_SVS_BoxShType=='on'){ $Rich_Web_SVS_BoxShType = "checked"; }
	if($Rich_Web_VS5[0]->Rich_Web_SVS_Nav_Show=='on'){ $Rich_Web_SVS_Nav_Show = "checked"; }
	if($Rich_Web_VS5[0]->Rich_Web_SVS_T_Show=='on'){ $Rich_Web_SVS_T_Show = "checked"; }
	if($Rich_Web_VS5[0]->Rich_Web_SVS_D_Show=='on'){ $Rich_Web_SVS_D_Show = "checked"; }
	if($Rich_Web_VS5[0]->Rich_Web_SVS_Arr_Show=='on'){ $Rich_Web_SVS_Arr_Show = "checked"; }
	if($Rich_Web_VS6[0]->Rich_Web_VTVS_AP=='on'){ $Rich_Web_VTVS_AP = "checked"; }
	if($Rich_Web_VS6[0]->Rich_Web_VTVS_BoxShShow=='on'){ $Rich_Web_VTVS_BoxShShow = "checked"; }
	if($Rich_Web_VS6[0]->Rich_Web_VTVS_BoxShType=='on'){ $Rich_Web_VTVS_BoxShType = "checked"; }
	if($Rich_Web_VS6[0]->Rich_Web_VTVS_TShow=='on'){ $Rich_Web_VTVS_TShow = "checked"; }
	if($Rich_Web_VS6[0]->Rich_Web_VTVS_ArrShow=='on'){ $Rich_Web_VTVS_ArrShow = "checked"; }
	if($Rich_Web_VS7[0]->Rich_Web_VS_HPS_Loop=='on'){ $Rich_Web_VS_HPS_Loop = "checked"; }
	if($Rich_Web_VS7[0]->Rich_Web_VS_HPS_AP=='on'){ $Rich_Web_VS_HPS_AP = "checked"; }
	if($Rich_Web_VS7[0]->Rich_Web_VS_HPS_EH=='on'){ $Rich_Web_VS_HPS_EH = "checked"; }
	if($Rich_Web_VS7[0]->Rich_Web_VS_HPS_Car=='on'){ $Rich_Web_VS_HPS_Car = "checked"; }
	if($Rich_Web_VS7[0]->Rich_Web_VS_HPS_NP_Show=='on'){ $Rich_Web_VS_HPS_NP_Show = "checked"; }
	if($Rich_Web_VS7[0]->Rich_Web_VS_HPS_DShow=='on'){ $Rich_Web_VS_HPS_DShow = "checked"; }
	if($Rich_Web_VS7[0]->Rich_Web_VS_HPS_Pop_BoxShShow=='on'){ $Rich_Web_VS_HPS_Pop_BoxShShow = "checked"; }
	if($Rich_Web_VS7[0]->Rich_Web_VS_HPS_Pop_BoxShType=='on'){ $Rich_Web_VS_HPS_Pop_BoxShType = "checked"; }
	if($Rich_Web_VS9[0]->Rich_Web_MS_SSh=='on'){ $Rich_Web_MS_SSh = "checked"; }
	if($Rich_Web_VS9[0]->Rich_Web_MS_Autoplay=='on'){ $Rich_Web_MS_Autoplay = "checked"; }
	if($Rich_Web_VS10[0]->Rich_Web_GO_NS1_Autoplay=='on'){ $Rich_Web_GO_NS1_Autoplay = "checked"; }
	if($Rich_Web_VS10[0]->Rich_Web_TO_NS1_Show=='on'){ $Rich_Web_TO_NS1_Show = "checked"; }
	if($Rich_Web_VS10[0]->Rich_Web_DO_NS1_Show=='on'){ $Rich_Web_DO_NS1_Show = "checked"; }
	if($Rich_Web_VS10[0]->Rich_Web_TO_NS1_Num_Show=='on'){ $Rich_Web_TO_NS1_Num_Show = "checked"; }
	if($Rich_Web_VS10[0]->Rich_Web_PO_NS1_Show=='on'){ $Rich_Web_PO_NS1_Show = "checked"; }
	if($Rich_Web_VS10[0]->Rich_Web_IO_NS1_Show=='on'){ $Rich_Web_IO_NS1_Show = "checked"; }

	if($Rich_Web_VS11[0]->Rich_Web_NewSl_GO_Autoplay_Show=='on'){ $Rich_Web_NewSl_GO_Autoplay_Show = "checked"; }
	if($Rich_Web_VS11[0]->Rich_Web_NewSl_IO_VI_RShow=='on'){ $Rich_Web_NewSl_IO_VI_RShow = "checked"; }
	if($Rich_Web_VS11[0]->Rich_Web_NewSl_IO_LI_Show=='on'){ $Rich_Web_NewSl_IO_LI_Show = "checked"; }

	//Content Slider Loading
	if($Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_L_Show == 'on'){ $Rich_Web_VS_ContSl_L_Show = 'checked'; }
	if($Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_LT_Show == 'on'){ $Rich_Web_VS_ContSl_LT_Show = 'checked'; }
	if($Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_Loading_Show == 'on'){ $Rich_Web_VS_ContSl_Loading_Show = 'checked'; }
	//Slick Slider Loading
	if($Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_L_Show == 'on'){ $Rich_Web_SlickSl_L_Show = 'checked'; }
	if($Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_LT_Show == 'on'){ $Rich_Web_SlickSl_LT_Show = 'checked'; }
	if($Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_Loading_Show == 'on'){ $Rich_Web_SlickSl_Loading_Show = 'checked'; }
	//Thumbnails Slider Loading
	if($Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_L_Show == 'on'){ $Rich_Web_ThumbSl_L_Show = 'checked'; }
	if($Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_LT_Show == 'on'){ $Rich_Web_ThumbSl_LT_Show = 'checked'; }
	if($Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_Loading_Show == 'on'){ $Rich_Web_ThumbSl_Loading_Show = 'checked'; }
	//Video Carousel/Content Popup Slider Loading
	if($Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_L_Show == 'on'){ $Rich_Web_VCCP_L_Show = 'checked'; }
	if($Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_LT_Show == 'on'){ $Rich_Web_VCCP_LT_Show = 'checked'; }
	if($Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_Loading_Show == 'on'){ $Rich_Web_VCCP_Loading_Show = 'checked'; }
	//Simple Video Slider Loading
	if($Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_L_Show == 'on'){ $Rich_Web_SimpleVS_L_Show = 'checked'; }
	if($Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_LT_Show == 'on'){ $Rich_Web_SimpleVS_LT_Show = 'checked'; }
	if($Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_Loading_Show == 'on'){ $Rich_Web_SimpleVS_Loading_Show = 'checked'; }
	//Video Slider/Vertical Thumbnails Loading
	if($Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_L_Show == 'on'){ $Rich_Web_VSVT_L_Show = 'checked'; }
	if($Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_LT_Show == 'on'){ $Rich_Web_VSVT_LT_Show = 'checked'; }
	if($Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_Loading_Show == 'on'){ $Rich_Web_VSVT_Loading_Show = 'checked'; }
	//Horizontal Posts Slider Loading
	if($Rich_Web_VS7_Loader[0]->Rich_Web_HSL_L_Show == 'on'){ $Rich_Web_HSL_L_Show = 'checked'; }
	if($Rich_Web_VS7_Loader[0]->Rich_Web_HSL_LT_Show == 'on'){ $Rich_Web_HSL_LT_Show = 'checked'; }
	if($Rich_Web_VS7_Loader[0]->Rich_Web_HSL_Loading_Show == 'on'){ $Rich_Web_HSL_Loading_Show = 'checked'; }
	//Rich Slider Loading
	if($Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_L_Show == 'on'){ $Rich_Web_RichSl_L_Show = 'checked'; }
	if($Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_LT_Show == 'on'){ $Rich_Web_RichSl_LT_Show = 'checked'; }
	if($Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_Loading_Show == 'on'){ $Rich_Web_RichSl_Loading_Show = 'checked'; }
	//TimeLine Slider Loading
	if($Rich_Web_VS9_Loader[0]->Rich_Web_TSL_L_Show == 'on'){ $Rich_Web_TSL_L_Show = 'checked'; }
	if($Rich_Web_VS9_Loader[0]->Rich_Web_TSL_LT_Show == 'on'){ $Rich_Web_TSL_LT_Show = 'checked'; }
	if($Rich_Web_VS9_Loader[0]->Rich_Web_TSL_Loading_Show == 'on'){ $Rich_Web_TSL_Loading_Show = 'checked'; }
	//Amazing Simple Slider Loading
	if($Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_L_Show == 'on'){ $Rich_Web_ASSl_L_Show = 'checked'; }
	if($Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_LT_Show == 'on'){ $Rich_Web_ASSl_LT_Show = 'checked'; }
	if($Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_Loading_Show == 'on'){ $Rich_Web_ASSl_Loading_Show = 'checked'; }

	//News Slider Loading
	if($Rich_Web_VS11_Loader[0]->Rich_Web_NewSl_L_Show == 'on'){ $Rich_Web_NewSl_L_Show = 'checked'; }
	if($Rich_Web_VS11_Loader[0]->Rich_Web_NewSl_LT_Show == 'on'){ $Rich_Web_NewSl_LT_Show = 'checked'; }
	if($Rich_Web_VS11_Loader[0]->Rich_Web_NewSl_Loading_Show == 'on'){ $Rich_Web_NewSl_Loading_Show = 'checked'; }
	if($Rich_Web_VS11_Loader[0]->Rich_Web_NewSl_Option1=='on'){ $Rich_Web_NewSl_Option1 = "checked"; }
	if($Rich_Web_VS11_Loader[0]->Rich_Web_NewSl_Option2=='on'){ $Rich_Web_NewSl_Option2 = "checked"; }
?>
<div class="rw_loading_c_vs" style="display: none;">
	<div class="cont_cont_vs">
		<div class="cssload-thecube_vs">
			<div class="cssload-cube_vs cssload-c1_vs"></div>
			<div class="cssload-cube_vs cssload-c2_vs"></div>
			<div class="cssload-cube_vs cssload-c4_vs"></div>
			<div class="cssload-cube_vs cssload-c3_vs"></div>
		</div>
		<div class="RW_Loader_Text_Navigation_vs">
			Please Wait !
		</div>
	</div>
</div>
<form method="POST">
	<?php wp_nonce_field( 'edit-menu_', 'Rich_Web_VSlider_Nonce' );?>
	<?php require_once( 'Rich-Web-Video-Slider-Header.php' ); ?>
	<?php require_once( 'Rich-Web-Video-Slider-Check.php' ); ?>
	<div style="position: relative; width: 100%; right: 1%; height: 50px;">
		<input type='button' class='Rich_Web_VSlider_Add_Opt' value='Add Option (Pro)' onclick='Rich_Web_VSlider_Add_Option()'/>
		<input type='submit' class='Rich_Web_VSlider_Upd_Opt' value='Update'     name='Rich_Web_VSlider_Upd_Opt'/>
		<input type='button' class='Rich_Web_VSlider_Can_Opt' value='Cancel'     onclick='Rich_Web_VSlider_Can_Option()'/>
		<input type='text'   id="Rich_Web_VSlider_Upd_ID"  style='display:none'  name='Rich_Web_VSlider_Upd_ID'>
	</div>
	<div class="Rich_Web_SliderVd_Fixed_Div"></div>
	<div class="Rich_Web_SliderVd_Absolute_Div">
		<div class="Rich_Web_SliderVd_Relative_Div">
			<p> Are you sure you want to remove ? </p>
			<span class="Rich_Web_SliderVd_Relative_No">No</span>
			<span class="Rich_Web_SliderVd_Relative_Yes">Yes</span>
		</div>
	</div>
	<div class='Rich_Web_VSlider_Opt_Content_Div_2' >
		<div class='Rich_Web_VSlider_Opt_Table_Data'>
			<table class='Rich_Web_VSlider_Opt_Table'>
				<tr class='Rich_Web_VSlider_Opt_Table_Tr'>
					<td>No</td>
					<td>Option Name</td>
					<td>Slider Type</td>
					<td>Clone</td>
					<td>Edit</td>
					<td>Delete</td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Opt_Table_2'>
				<?php for($i=0;$i<count($Rich_WebSliderCount);$i++){ ?>
					<tr class='Rich_Web_VSlider_Opt_Table_Tr2'>
						<td><?php echo $i+1;?></td>
						<td><?php echo $Rich_WebSliderCount[$i]->slider_vid_name;?></td>
						<td><?php echo $Rich_WebSliderCount[$i]->slider_Vid_type;?></td>
						<td onclick="Rich_Web_VSlider_Copy_Option(<?php echo $Rich_WebSliderCount[$i]->id;?>)"><i class='Rich_Web_VS_Files rich_web rich_web-files-o'></i></td>
						<td onclick="Rich_Web_VSlider_Edit_Option(<?php echo $Rich_WebSliderCount[$i]->id;?>)"><i class='Rich_Web_VS_Pencil rich_web rich_web-pencil'></i></td>
						<td onclick="Rich_Web_VSlider_Del_Option(<?php echo $Rich_WebSliderCount[$i]->id;?>)"><i class='Rich_Web_VS_Delete rich_web rich_web-trash'></i></td>
					</tr>
				<?php }?>
				<tr class='Rich_Web_VSlider_Opt_Table_Tr2'>
					<td><?php echo $i+1;?></td>
					<td style="position: relative; height: 27px;"><a style="text-decoration: none" href="https://rich-web.org/wp-video-slider-news-post-1/">News Slider 1</a><img src="<?php echo plugins_url('/Images/Pro.png',__FILE__);?>" style="position: absolute; top: 4px; right: 10px; width: 74px; height: 20px;"></td>
					<td>News Slider</td>
					<td onclick="Rich_Web_VSlider_Add_Option()"><i class='Rich_Web_VS_Files rich_web rich_web-files-o'></i></td>
					<td onclick="Rich_Web_VSlider_Add_Option()"><i class='Rich_Web_VS_Pencil rich_web rich_web-pencil'></i></td>
					<td onclick="Rich_Web_VSlider_Add_Option()"><i class='Rich_Web_VS_Delete rich_web rich_web-trash'></i></td>
				</tr>
				<tr class='Rich_Web_VSlider_Opt_Table_Tr2'>
					<td><?php echo $i+2;?></td>
					<td style="position: relative; height: 27px;"><a style="text-decoration: none" href="https://rich-web.org/wp-video-slider-news-post-2/">News Slider 2</a><img src="<?php echo plugins_url('/Images/Pro.png',__FILE__);?>" style="position: absolute; top: 4px; right: 10px; width: 74px; height: 20px;"></td>
					<td>News Slider</td>
					<td onclick="Rich_Web_VSlider_Add_Option()"><i class='Rich_Web_VS_Files rich_web rich_web-files-o'></i></td>
					<td onclick="Rich_Web_VSlider_Add_Option()"><i class='Rich_Web_VS_Pencil rich_web rich_web-pencil'></i></td>
					<td onclick="Rich_Web_VSlider_Add_Option()"><i class='Rich_Web_VS_Delete rich_web rich_web-trash'></i></td>
				</tr>
			</table>
		</div>
		<div class='Rich_Web_VSlider_Opt_Table_Data_2'>
			<table class='Rich_Web_VSlider_Save_Table'>
				<tr>
					<td>Slider Name</td>
					<td>Slider Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VSlider_Text_Field" name="Rich_Web_VSlider_Option_Name" id="Rich_Web_VSlider_Option_Name" required placeholder="* Required">
					</td>
					<td>
						<select class="Rich_Web_VSlider_Text_Field" id="Rich_Web_VSlider_Option_Type" name="Rich_Web_VSlider_Option_Type" onchange="Rich_Web_VSlider_Option_Changed()">
							<option value="Content Slider">                   Content Slider                   </option>
							<option value="Slick Slider">                     Slick Slider                     </option>
							<option value="Thumbnails Slider">                Thumbnails Slider                </option>
							<option value="Video Carousel/Content Popup">     Video Carousel/Content Popup     </option>
							<option value="Simple Video Slider">              Simple Video Slider              </option>
							<option value="Video Slider/Vertical Thumbnails"> Video Slider/Vertical Thumbnails </option>
							<option value="Horizontal Posts Slider">          Horizontal Posts Slider          </option>
							<option value="Rich Slider">                      Rich Slider                      </option>
							<option value="TimeLine Slider">                  TimeLine Slider                  </option>
							<option value="Amazing Simple Slider">            Amazing Simple Slider            </option>
						</select>
					</td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_1">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Changing Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Easing Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Strips</td>
					<td>Block Cols</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_CE" name="">
							<option value="random">                Random                </option>
							<option value="left-curtain">          Left Curtain          </option>
							<option value="right-curtain">         Right Curtain         </option>
							<option value="top-curtain">           Top Curtain           </option>
							<option value="bottom-curtain">        Bottom Curtain        </option>
							<option value="strip-down-right">      Strip Down Right      </option>
							<option value="strip-down-left">       Strip Down Left       </option>
							<option value="strip-up-right">        Strip Up Right        </option>
							<option value="strip-up-left">         Strip Up Left         </option>
							<option value="strip-up-down">         Strip Up Down         </option>
							<option value="strip-up-down-left">    Strip Up Down Left    </option>
							<option value="strip-left-right">      Strip Left Right      </option>
							<option value="strip-left-right-down"> Strip Left Right Down </option>
							<option value="slide-in-right">        Slide in Right        </option>
							<option value="slide-in-left">         Slide in Left         </option>
							<option value="slide-in-up">           Slide in Up           </option>
							<option value="slide-in-down">         Slide in Down         </option>
							<option value="fade">                  Fade                  </option>
							<option value="block-random">          Block Random          </option>
							<option value="block-fade">            Block Fade            </option>
							<option value="block-fade-reverse">    Block Fade Reverse    </option>
							<option value="block-expand">          Block Expand          </option>
							<option value="block-expand-reverse">  Block Expand Reverse  </option>
							<option value="block-expand-random">   Block Expand Random   </option>
							<option value="zigzag-top">            Zigzag Top            </option>
							<option value="zigzag-bottom">         Zigzag Bottom         </option>
							<option value="zigzag-grow-top">       Zigzag Grow Top       </option>
							<option value="zigzag-grow-bottom">    Zigzag Grow Bottom    </option>
							<option value="zigzag-drop-top">       Zigzag Drop Top       </option>
							<option value="zigzag-drop-bottom">    Zigzag Drop Bottom    </option>
							<option value="strip-top-fade">        Strip Top Fade        </option>
							<option value="strip-bottom-fade">     Strip Bottom Fade     </option>
							<option value="block-drop-random">     Block Drop Random     </option>
						</select>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_EE" name="">
							<option value="swing">            Swing               </option>
							<option value="easeInQuad">       Ease In Quad        </option>
							<option value="easeOutQuad">      Ease Out Quad       </option>
							<option value="easeInOutQuad">    Ease In Out Quad    </option>
							<option value="easeInCubic">      Ease In Cubic       </option>
							<option value="easeOutCubic">     Ease Out Cubic      </option>
							<option value="easeInOutCubic">   Ease In Out Cubic   </option>
							<option value="easeInQuart">      Ease In Quart       </option>
							<option value="easeOutQuart">     Ease Out Quart      </option>
							<option value="easeInOutQuart">   Ease In Out Quart   </option>
							<option value="easeInQuint">      Ease In Quint       </option>
							<option value="easeOutQuint">     Ease Out Quint      </option>
							<option value="easeInOutQuint">   Ease In Out Quint   </option>
							<option value="easeInSine">       Ease In Sine        </option>
							<option value="easeOutSine">      Ease Out Sine       </option>
							<option value="easeInOutSine">    Ease In Out Sine    </option>
							<option value="easeInExpo">       Ease In Expo        </option>
							<option value="easeOutExpo">      Ease Out Expo       </option>
							<option value="easeInOutExpo">    Ease In Out Expo    </option>
							<option value="easeInCirc">       Ease In Circ        </option>
							<option value="easeOutCirc">      Ease Out Circ       </option>
							<option value="easeInOutCirc">    Ease In Out Circ    </option>
							<option value="easeInElastic">    Ease In Elastic     </option>
							<option value="easeOutElastic">   Ease Out Elastic    </option>
							<option value="easeInOutElastic"> Ease In Out Elastic </option>
							<option value="easeInBack">       Ease In Back        </option>
							<option value="easeOutBack">      Ease Out Back       </option>
							<option value="easeInOutBack">    Ease In Out Back    </option>
							<option value="easeInBounce">     Ease In Bounce      </option>
							<option value="easeOutBounce">    Ease Out Bounce     </option>
							<option value="easeInOutBounce">  Ease In Out Bounce  </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_S;?>" id="Rich_Web_VS_CP_S" name="Rich_Web_VS_CP_S" min="1" max="30">
							<span class="range-slider__value" id="Rich_Web_VS_CP_S_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_BlC;?>" id="Rich_Web_VS_CP_BlC" name="Rich_Web_VS_CP_BlC" min="1" max="30">
							<span class="range-slider__value" id="Rich_Web_VS_CP_BlC_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Block Rows</td>
					<td>Animation Speed (ms)</td>
					<td>Pause Time (s)</td>
					<td>Start Slide <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_BlR;?>" id="Rich_Web_VS_CP_BlR" name="Rich_Web_VS_CP_BlR" min="1" max="30">
							<span class="range-slider__value" id="Rich_Web_VS_CP_BlR_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_AS;?>" id="Rich_Web_VS_CP_AS" name="Rich_Web_VS_CP_AS" min="100" max="1500" step='100'>
							<span class="range-slider__value" id="Rich_Web_VS_CP_AS_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_PT;?>" id="Rich_Web_VS_CP_PT" name="Rich_Web_VS_CP_PT" min="1" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_CP_PT_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_SS;?>" id="Rich_Web_VS_CP_SS" name="" min="1" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_CP_SS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>AutoPlay</td>
					<td>Pause On Hover</td>
					<td>Random Start</td>
					<td>Box Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_AP" id="Rich_Web_VS_CS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_HP" id="Rich_Web_VS_CS_HP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_RS" id="Rich_Web_VS_CS_RS"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_BSC" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CS_BSC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_BW;?>" id="Rich_Web_VS_CP_BW" name="Rich_Web_VS_CP_BW" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_CP_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_BS" name="Rich_Web_VS_CP_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_BC" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CS_BC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_BR;?>" id="Rich_Web_VS_CP_BR" id="Rich_Web_VS_CP_BR" name="Rich_Web_VS_CP_BR" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_CP_BR_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Title-Description Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_SL_Width;?>" id="Rich_Web_VS_SL_Width" name="Rich_Web_VS_SL_Width" min="200" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_SL_Width_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_SL_Height;?>" id="Rich_Web_VS_SL_Height" name="Rich_Web_VS_SL_Height" min="200" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_SL_Height_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TitDesc_Type" name="">
							<option value="type1"> Type 1 </option>
							<option value="type2"> Type 2 </option>
							<option value="type3"> Type 3 </option>
							<option value="type4"> Type 4 </option>
							<option value="type5"> Type 5 </option>
							<option value="type6"> Type 6 </option>
							<option value="type7"> Type 7 </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Navigation</td>
				</tr>
				<tr>
					<td>Control Navigation</td>
					<td>Next Prev Button</td>
					<td>Opacity (%)</td>
					<td>Navigation Thumbs</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_CN" id="Rich_Web_VS_CS_CN"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_NPB" id="Rich_Web_VS_CS_NPB"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_NO;?>" id="Rich_Web_VS_CP_NO" id="Rich_Web_VS_CP_NO" name="Rich_Web_VS_CP_NO" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_VS_CP_NO_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_NT" id="Rich_Web_VS_CS_NT"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Navigation Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Arrows Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_NT" name="">
							<option value="1"> Type 1 </option>
							<option value="2"> Type 2 </option>
						</select>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_AT" name="">
							<option value="1"> Type 1 </option>
							<option value="2"> Type 2 </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Caption Options</td>
				</tr>
				<tr>
					<td>Caption Speed (ms)</td>
					<td>Caption Easing <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Opacity (%)</td>
					<td>Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_CapS;?>" id="Rich_Web_VS_CP_CapS" name="Rich_Web_VS_CP_CapS" min="100" max="1000" step="100">
							<span class="range-slider__value" id="Rich_Web_VS_CP_CapS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_CapEs" name="">
							<option value="swing">            Swing               </option>
							<option value="easeInQuad">       Ease In Quad        </option>
							<option value="easeOutQuad">      Ease Out Quad       </option>
							<option value="easeInOutQuad">    Ease In Out Quad    </option>
							<option value="easeInCubic">      Ease In Cubic       </option>
							<option value="easeOutCubic">     Ease Out Cubic      </option>
							<option value="easeInOutCubic">   Ease In Out Cubic   </option>
							<option value="easeInQuart">      Ease In Quart       </option>
							<option value="easeOutQuart">     Ease Out Quart      </option>
							<option value="easeInOutQuart">   Ease In Out Quart   </option>
							<option value="easeInQuint">      Ease In Quint       </option>
							<option value="easeOutQuint">     Ease Out Quint      </option>
							<option value="easeInOutQuint">   Ease In Out Quint   </option>
							<option value="easeInSine">       Ease In Sine        </option>
							<option value="easeOutSine">      Ease Out Sine       </option>
							<option value="easeInOutSine">    Ease In Out Sine    </option>
							<option value="easeInExpo">       Ease In Expo        </option>
							<option value="easeOutExpo">      Ease Out Expo       </option>
							<option value="easeInOutExpo">    Ease In Out Expo    </option>
							<option value="easeInCirc">       Ease In Circ        </option>
							<option value="easeOutCirc">      Ease Out Circ       </option>
							<option value="easeInOutCirc">    Ease In Out Circ    </option>
							<option value="easeInElastic">    Ease In Elastic     </option>
							<option value="easeOutElastic">   Ease Out Elastic    </option>
							<option value="easeInOutElastic"> Ease In Out Elastic </option>
							<option value="easeInBack">       Ease In Back        </option>
							<option value="easeOutBack">      Ease Out Back       </option>
							<option value="easeInOutBack">    Ease In Out Back    </option>
							<option value="easeInBounce">     Ease In Bounce      </option>
							<option value="easeOutBounce">    Ease Out Bounce     </option>
							<option value="easeInOutBounce">  Ease In Out Bounce  </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_CapO;?>" id="Rich_Web_VS_CP_CapO" name="Rich_Web_VS_CP_CapO" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_VS_CP_CapO_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_CapE" name="">
							<option value="wipedown">    Wipe Down    </option>
							<option value="wipeup">      Wipe Up      </option>
							<option value="wiperight">   Wipe Right   </option>
							<option value="wipeleft">    Wipe Left    </option>
							<option value="fade">        Fade         </option>
							<option value="expanddown">  Expand Down  </option>
							<option value="expandup">    Expand Up    </option>
							<option value="expandright"> Expand Right </option>
							<option value="expandleft">  Expand Left  </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_TFS;?>" id="Rich_Web_VS_CP_TFS" name="Rich_Web_VS_CP_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_TFF" name="Rich_Web_VS_CP_TFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_TBgC" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CS_TBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_TC" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CS_TC;?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Description Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="Rich_Web_VS_CS_DBgC" id="Rich_Web_VS_CS_DBgC" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CS_DBgC;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Timer Options</td>
				</tr>
				<tr>
					<td>Timer Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Opacity (%)</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_TiT" name="">
							<option value="pie">    Pie     </option>
							<option value="bar">    Bar     </option>
							<option value="360bar"> 360 Bar </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_TiBgC" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CS_TiBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_TiC" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CS_TiC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_TiO;?>" id="Rich_Web_VS_CP_TiO" name="Rich_Web_VS_CP_TiO" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TiO_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Diameter (px)</td>
					<td>Padding (px)</td>
					<td>Stroke (px)</td>
					<td>Bar Stroke (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_TiD;?>" id="Rich_Web_VS_CP_TiD" name="Rich_Web_VS_CP_TiD" min="10" max="40">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TiD_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_TiP;?>" id="Rich_Web_VS_CP_TiP" name="Rich_Web_VS_CP_TiP" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TiP_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_TiS;?>" id="Rich_Web_VS_CP_TiS" name="Rich_Web_VS_CP_TiS" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TiS_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_TiBS;?>" id="Rich_Web_VS_CP_TiBS" name="Rich_Web_VS_CP_TiBS" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TiBS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Bar Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Bar Style <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CP_TiBC" value="<?php echo $Rich_Web_VS1[0]->Rich_Web_VS_CP_TiBC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_TiBSt" name="">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_TiPos" name="">
							<option value="top-left">      Top Left      </option>
							<option value="top-center">    Top Center    </option>
							<option value="top-right">     Top Right     </option>
							<option value="middle-left">   Middle Left   </option>
							<option value="middle-center"> Middle Center </option>
							<option value="middle-right">> Middle Right  </option>
							<option value="bottom-left">   Bottom Left   </option>
							<option value="bottom-center"> Bottom Center </option>
							<option value="bottom-right">  Bottom Right  </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VS_ContSl_L_Show" name="Rich_Web_VS_ContSl_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VS_ContSl_LT_Show" name="Rich_Web_VS_ContSl_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VS_ContSl_Loading_Show" name="Rich_Web_VS_ContSl_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_L_BgC" id="Rich_Web_VS_ContSl_L_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_L_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_LT_C" id="Rich_Web_VS_ContSl_LT_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_LT_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_L_C" id="Rich_Web_VS_ContSl_L_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_L_C;?>">
					</td>
					<td>
						<select id="Rich_Web_VS_ContSl_L_S" name="Rich_Web_VS_ContSl_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_LT" id="Rich_Web_VS_ContSl_LT" value="<?php echo $Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_LT;?>">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_VS_ContSl_L_T" name="Rich_Web_VS_ContSl_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('VS_ContSl')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_VS_ContSl_LT_T" name="Rich_Web_VS_ContSl_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('VS_ContSl')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_LT_FS;?>" id="Rich_Web_VS_ContSl_LT_FS" name="Rich_Web_VS_ContSl_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_VS_ContSl_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_ContSl_LT_FF" name="Rich_Web_VS_ContSl_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?> 
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_L_T1_C" id="Rich_Web_VS_ContSl_L_T1_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_L_T1_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_L_T2_C" id="Rich_Web_VS_ContSl_L_T2_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_L_T2_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_L_T3_C" id="Rich_Web_VS_ContSl_L_T3_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_L_T3_C;?>">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_LT_T2_BC" id="Rich_Web_VS_ContSl_LT_T2_BC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_LT_T2_BC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_LT_T2_AnC" id="Rich_Web_VS_ContSl_LT_T2_AnC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_LT_T2_AnC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_LT_T3_BgC" id="Rich_Web_VS_ContSl_LT_T3_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS1_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_2">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Effect Duration (s)</td>
					<td>Pause Time (ms)</td>
					<td>Autoplay</td>
					<td>Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_ED;?>" id="Rich_Web_VS_SS_ED" name="Rich_Web_VS_SS_ED" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_SS_ED_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PT;?>" id="Rich_Web_VS_SS_PT" id="Rich_Web_VS_SS_PT" name="Rich_Web_VS_SS_PT" min="100" max="1000" step="100">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PT_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_SS_AP" id="Rich_Web_VS_SS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_Eff" name="">
							<option value="zoomOut">  Zoom Out  </option>
							<option value="zoomIn">   Zoom In   </option>
							<option value="panUp">    Pan Up    </option>
							<option value="panDown">  Pan Down  </option>
							<option value="panLeft">  Pan Left  </option>
							<option value="panRight"> Pan Right </option>
							<option value="diagTopLeftToBottomRight"> Diag Top Left To Bottom Right </option>
							<option value="diagTopRightToBottomLeft"> Diag Top Right To Bottom Left </option>
							<option value="diagBottomRightToTopLeft"> Diag Bottom Right To Top Left </option>
							<option value="diagBottomLeftToTopRight"> Diag Bottom Left To Top Right </option>
							<option value="zoomOut,zoomIn,panUp,panDown,panLeft,panRight,diagTopLeftToBottomRight,diagTopRightToBottomLeft,diagBottomRightToTopLeft,diagBottomLeftToTopRight"> All </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_W;?>" id="Rich_Web_VS_SS_W" name="Rich_Web_VS_SS_W" min="150" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_SS_W_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_H;?>" id="Rich_Web_VS_SS_H" name="Rich_Web_VS_SS_H" min="150" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_SS_H_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_BW;?>" id="Rich_Web_VS_SS_BW" name="Rich_Web_VS_SS_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_SS_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_BS" name="Rich_Web_VS_SS_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_BC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_BC;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_SS_TShow" id="Rich_Web_VS_SS_TShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_TFS;?>" id="Rich_Web_VS_SS_TFS" name="Rich_Web_VS_SS_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_SS_TFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_TFF" name="Rich_Web_VS_SS_TFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_TC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_TC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_TBgC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_TBgC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_TPos" name="">
							<option value="top">    Top    </option>
							<option value="bottom"> Bottom </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_SS_NShow" id="Rich_Web_VS_SS_NShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_NC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_NC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_NBgC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_NBgC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_NS;?>" id="Rich_Web_VS_SS_NS" name="Rich_Web_VS_SS_NS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_SS_NS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_NPos" name="">
							<option value="top">    Top    </option>
							<option value="bottom"> Bottom </option>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Pagination Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Place Between (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_SS_PagShow" id="Rich_Web_VS_SS_PagShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PagW;?>" id="Rich_Web_VS_SS_PagW" name="Rich_Web_VS_SS_PagW" min="1" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PagW_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PagH;?>" id="Rich_Web_VS_SS_PagH" name="Rich_Web_VS_SS_PagH" min="1" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PagH_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PagPB;?>" id="Rich_Web_VS_SS_PagPB" name="Rich_Web_VS_SS_PagPB" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PagPB_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PagBgC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PagBgC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PagBW;?>" id="Rich_Web_VS_SS_PagBW" name="Rich_Web_VS_SS_PagBW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PagBW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_PagBS" name="Rich_Web_VS_SS_PagBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PagBC" value="?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PagBC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Current Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PagBR;?>" id="Rich_Web_VS_SS_PagBR" name="Rich_Web_VS_SS_PagBR" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PagBR_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PagHC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PagHC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PagCC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PagCC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_PagPos" name="">
							<option value="left">   Left   </option>
							<option value="right">  Right  </option>
							<option value="center"> Center </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PIBgC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PIBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PIC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PIC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PIHBgC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PIHBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PIHC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_PIHC;?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Close Icon Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_CIBgC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_CIBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_CIC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_CIC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_CIHBgC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_CIHBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_CIHC" value="<?php echo $Rich_Web_VS2[0]->Rich_Web_VS_SS_CIHC;?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SlickSl_L_Show" name="Rich_Web_SlickSl_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SlickSl_LT_Show" name="Rich_Web_SlickSl_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SlickSl_Loading_Show" name="Rich_Web_SlickSl_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_SlickSl_L_BgC" id="Rich_Web_SlickSl_L_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_L_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_SlickSl_LT_C" id="Rich_Web_SlickSl_LT_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_LT_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_SlickSl_L_C" id="Rich_Web_SlickSl_L_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_L_C;?>">
					</td>
					<td>
						<select id="Rich_Web_SlickSl_L_S" name="Rich_Web_SlickSl_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_SlickSl_LT" id="Rich_Web_SlickSl_LT" value="<?php echo $Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_LT;?>">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_SlickSl_L_T" name="Rich_Web_SlickSl_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('SlickSl')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_SlickSl_LT_T" name="Rich_Web_SlickSl_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('SlickSl')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_LT_FS;?>" id="Rich_Web_SlickSl_LT_FS" name="Rich_Web_SlickSl_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_SlickSl_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_SlickSl_LT_FF" name="Rich_Web_SlickSl_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_SlickSl_L_T1_C" id="Rich_Web_SlickSl_L_T1_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_L_T1_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_SlickSl_L_T2_C" id="Rich_Web_SlickSl_L_T2_C" class="Rich_Web_VS_Color" value="
						<?php echo $Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_L_T2_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_SlickSl_L_T3_C" id="Rich_Web_SlickSl_L_T3_C" class="Rich_Web_VS_Color" value="
						<?php echo $Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_L_T3_C;?>">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_SlickSl_LT_T2_BC" id="Rich_Web_SlickSl_LT_T2_BC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_LT_T2_BC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_SlickSl_LT_T2_AnC" id="Rich_Web_SlickSl_LT_T2_AnC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_LT_T2_AnC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_SlickSl_LT_T3_BgC" id="Rich_Web_SlickSl_LT_T3_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS2_Loader[0]->Rich_Web_SlickSl_LT_T3_BgC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_3">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_W;?>" id="Rich_Web_VS_TS_W" name="Rich_Web_VS_TS_W" min="150" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_TS_W_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_H;?>" id="Rich_Web_VS_TS_H" name="Rich_Web_VS_TS_H" min="150" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_TS_H_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_BW;?>" id="Rich_Web_VS_TS_BW" name="Rich_Web_VS_TS_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_TS_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_BS" name="Rich_Web_VS_TS_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Box Shadow</td>
					<td>Shadow Type</td>
					<td>Shadow (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_BC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_BC;?>"/>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_TS_BoxShShow" id="Rich_Web_VS_TS_BoxShShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_TS_BoxShType" id="Rich_Web_VS_TS_BoxShType"/>
							<span class="switch-label" data-on="1" data-off="2"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_BoxShC;?>" id="Rich_Web_VS_TS_BoxSh" name="Rich_Web_VS_TS_BoxSh" min="0" max="30">
							<span class="range-slider__value" id="Rich_Web_VS_TS_BoxSh_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Change Speed (ms)</td>
					<td>Pause Time (s)</td>
					<td>Auto Play</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_BoxShC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_BoxShC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_CS;?>" id="Rich_Web_VS_TS_CS" name="Rich_Web_VS_TS_CS" min="100" max="1000" step="100">
							<span class="range-slider__value" id="Rich_Web_VS_TS_CS_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_PT;?>" id="Rich_Web_VS_TS_PT" name="Rich_Web_VS_TS_PT" min="1" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_TS_PT_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_TS_AP" id="Rich_Web_VS_TS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td colspan="4">Icon Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_IBgC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_IBgC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_IBW;?>" id="Rich_Web_VS_TS_IBW" name="Rich_Web_VS_TS_IBW" min="0" max="3">
							<span class="range-slider__value" id="Rich_Web_VS_TS_IBW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_IBS" name="Rich_Web_VS_TS_IBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_IBC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_IBC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_IBR;?>" id="Rich_Web_VS_TS_IBR" name="Rich_Web_VS_TS_IBR" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_TS_IBR_1">0</span>
						</div>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Thumbnails Options</td>
				</tr>
				<tr>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_TPos" name="">
							<option value="top">    Top    </option>
							<option value="bottom"> Bottom </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TBgC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TBgC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TBW;?>" id="Rich_Web_VS_TS_TBW" name="Rich_Web_VS_TS_TBW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TBW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_TBS" name="Rich_Web_VS_TS_TBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TBC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TBC;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Thumbnails Images Options</td>
				</tr>
				<tr>
					<td>Height (px)</td>
					<td>Place Between Images (px)</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TIH;?>" id="Rich_Web_VS_TS_TIH" name="Rich_Web_VS_TS_TIH" min="50" max="150">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TIH_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TIPB;?>" id="Rich_Web_VS_TS_TIPB" name="Rich_Web_VS_TS_TIPB" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TIPB_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TIBW;?>" id="Rich_Web_VS_TS_TIBW" name="Rich_Web_VS_TS_TIBW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TIBW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_TIBS" name="Rich_Web_VS_TS_TIBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
					<td>Box Shadow</td>
					<td>Shadow Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TIBC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TIBC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TIBR;?>" id="Rich_Web_VS_TS_TIBR" name="Rich_Web_VS_TS_TIBR" min="0" max="150">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TIBR_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_TS_TIBoxShShow" id="Rich_Web_VS_TS_TIBoxShShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_TS_TIBoxShType" id="Rich_Web_VS_TS_TIBoxShType"/>
							<span class="switch-label" data-on="1" data-off="2"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TIBoxSh;?>" id="Rich_Web_VS_TS_TIBoxSh" name="Rich_Web_VS_TS_TIBoxSh" min="0" max="30">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TIBoxSh_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TIBoxShC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TIBoxShC;?>"/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Current Image</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Style</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TICBC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TICBC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_TICBS" name="Rich_Web_VS_TS_TICBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TICBoxShC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TICBoxShC;?>"/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Hover Image</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Style</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TIHBC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TIHBC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_TIHBS" name="Rich_Web_VS_TS_TIHBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TIHBoxShC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_TIHBoxShC;?>"/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_PIBgC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_PIBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_PIC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_PIC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_PIHBgC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_PIHBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_PIHC" value="<?php echo $Rich_Web_VS3[0]->Rich_Web_VS_TS_PIHC;?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ThumbSl_L_Show" name="Rich_Web_ThumbSl_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ThumbSl_LT_Show" name="Rich_Web_ThumbSl_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ThumbSl_Loading_Show" name="Rich_Web_ThumbSl_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_L_BgC" id="Rich_Web_ThumbSl_L_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_L_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_LT_C" id="Rich_Web_ThumbSl_LT_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_LT_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_L_C" id="Rich_Web_ThumbSl_L_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_L_C;?>">
					</td>
					<td>
						<select id="Rich_Web_ThumbSl_L_S" name="Rich_Web_ThumbSl_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_LT" id="Rich_Web_ThumbSl_LT" value="<?php echo $Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_LT;?>">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_ThumbSl_L_T" name="Rich_Web_ThumbSl_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('ThumbSl')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_ThumbSl_LT_T" name="Rich_Web_ThumbSl_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('ThumbSl')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_LT_FS;?>" id="Rich_Web_ThumbSl_LT_FS" name="Rich_Web_ThumbSl_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_ThumbSl_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_ThumbSl_LT_FF" name="Rich_Web_ThumbSl_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_ThumbSl_L_T1_C" id="Rich_Web_ThumbSl_L_T1_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_L_T1_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_L_T2_C" id="Rich_Web_ThumbSl_L_T2_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_L_T2_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_L_T3_C" id="Rich_Web_ThumbSl_L_T3_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_L_T3_C;?>">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_ThumbSl_LT_T2_BC" id="Rich_Web_ThumbSl_LT_T2_BC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_LT_T2_BC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_ThumbSl_LT_T2_AnC" id="Rich_Web_ThumbSl_LT_T2_AnC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_LT_T2_AnC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_ThumbSl_LT_T3_BgC" id="Rich_Web_ThumbSl_LT_T3_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS3_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_4">
				<tr>
					<td colspan="4">Carousel Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Car_Bg_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Car_Bg_Color;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Car_Border_Width;?>" id="Rich_Web_VC_Car_Border_Width" name="Rich_Web_VC_Car_Border_Width" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VC_Car_Border_Width_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Car_Border_Style" name="Rich_Web_VC_Car_Border_Style">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Car_Border_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Car_Border_Color;?>"/>
					</td>
				</tr>
				<tr>
					<td>Box Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Count Images</td>
					<td>Images Hover Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Car_Box_Shadow;?>" id="Rich_Web_VC_Car_Box_Shadow" name="Rich_Web_VC_Car_Box_Shadow" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_VC_Car_Box_Shadow_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Car_Shadow_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Car_Shadow_Color;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Car_Count_Imgs;?>" id="Rich_Web_VC_Car_Count_Imgs" name="Rich_Web_VC_Car_Count_Imgs" min="2" max="8">
							<span class="range-slider__value" id="Rich_Web_VC_Car_Count_Imgs_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Car_Imgs_Hover_Type" name="">
							<option value="fImgH1"> Effect 1 </option>
							<option value="fImgH2"> Effect 2 </option>
							<option value="fImgH3"> Effect 3 </option>
							<option value="fImgH4"> Effect 4 </option>
							<option value="fImgH5"> None     </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Place Between Images (px)</td>
					<td>Icons Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Icons Size (px)</td>
					<td><!-- AutoPlay --></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Car_PBImgs;?>" id="Rich_Web_VC_Car_PBImgs" name="Rich_Web_VC_Car_PBImgs" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VC_Car_PBImgs_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Car_Icons_Type" name="">
							<option value="1">  Type 1  </option>
							<option value="2">  Type 2  </option>
							<option value="3">  Type 3  </option>
							<option value="4">  Type 4  </option>
							<option value="5">  Type 5  </option>
							<option value="6">  Type 6  </option>
							<option value="7">  Type 7  </option>
							<option value="8">  Type 8  </option>
							<option value="9">  Type 9  </option>
							<option value="10"> Type 10 </option>
							<option value="11"> Type 11 </option>
							<option value="12"> Type 12 </option>
							<option value="13"> Type 13 </option>
							<option value="14"> Type 14 </option>
							<option value="15"> Type 15 </option>
							<option value="16"> Type 16 </option>
							<option value="17"> Type 17 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Car_Icons_Size;?>" id="Rich_Web_VC_Car_Icons_Size" name="Rich_Web_VC_Car_Icons_Size" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_VC_Car_Icons_Size_1">0</span>
						</div>
					</td>
					<td>
						<!-- <label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VC_Car_Auto_Play" id="Rich_Web_VC_Car_Auto_Play"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label> -->
					</td>
				</tr>
				<tr>
					<td colspan='4'>Popup Options</td>
				</tr>
				<tr>
					<td>Overlay Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Overlay_Bg_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Overlay_Bg_Color;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Popup_Bg_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Popup_Bg_Color;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Popup_Border_Width;?>" id="Rich_Web_VC_Popup_Border_Width" name="Rich_Web_VC_Popup_Border_Width" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VC_Popup_Border_Width_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Popup_Border_Style" name="Rich_Web_VC_Popup_Border_Style">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Box Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Popup_Border_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Popup_Border_Color;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Popup_Box_Shadow;?>" id="Rich_Web_VC_Popup_Box_Shadow" name="Rich_Web_VC_Popup_Box_Shadow" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_VC_Popup_Box_Shadow_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Popup_Shadow_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Popup_Shadow_Color;?>"/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan='4'>Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Text Align</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Title_Font_Size;?>" id="Rich_Web_VC_Title_Font_Size" name="Rich_Web_VC_Title_Font_Size" min="10" max="36">
							<span class="range-slider__value" id="Rich_Web_VC_Title_Font_Size_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Title_Font_Family" name="Rich_Web_VC_Title_Font_Family">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Title_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Title_Color;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Title_Text_Align" name="Rich_Web_VC_Title_Text_Align">
							<option value="left">    Left    </option>
							<option value="right">   Right   </option>
							<option value="center">  Center  </option>
							<option value="justify"> Justify </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan='4'>Description Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Desc_Bg_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Desc_Bg_Color;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan='4'>Link Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Link_Font_Size;?>" id="Rich_Web_VC_Link_Font_Size" name="Rich_Web_VC_Link_Font_Size" min="10" max="36">
							<span class="range-slider__value" id="Rich_Web_VC_Link_Font_Size_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Link_Font_Family" name="Rich_Web_VC_Link_Font_Family">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Link_Color;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Bg_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Link_Bg_Color;?>"/>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Border_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Link_Border_Color;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Link_Border_Width;?>" id="Rich_Web_VC_Link_Border_Width" name="Rich_Web_VC_Link_Border_Width" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VC_Link_Border_Width_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Link_Border_Style" name="Rich_Web_VC_Link_Border_Style">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Hov_Bg_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Link_Hov_Bg_Color;?>"/>
					</td>
				</tr>
				<tr>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Text</td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Hov_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Link_Hov_Color;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Hov_Border_Color" value="Rich_Web_VC_Link_Hov_Border_Color"/>
					</td>
					<td>
						<input type="text" name="Rich_Web_VC_Link_Text" id="Rich_Web_VC_Link_Text" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Link_Text;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Link_Border_Radius;?>" id="Rich_Web_VC_Link_Border_Radius" name="Rich_Web_VC_Link_Border_Radius" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VC_Link_Border_Radius_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan='4'>Popup Close Icon Options</td>
				</tr>
				<tr>
					<td>Size (px)</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Popup_Icons_Size;?>" id="Rich_Web_VC_Popup_Icons_Size" name="Rich_Web_VC_Popup_Icons_Size" min="15" max="50">
							<span class="range-slider__value" id="Rich_Web_VC_Popup_Icons_Size_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Popup_Icons_Color" value="<?php echo $Rich_Web_VS4[0]->Rich_Web_VC_Popup_Icons_Color;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Popup_Icons_Type" name="">
							<option value="rich_web-times">          Type 1 </option>
							<option value="rich_web-times-circle">   Type 2 </option>
							<option value="rich_web-times-circle-o"> Type 3 </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VCCP_L_Show" name="Rich_Web_VCCP_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VCCP_LT_Show" name="Rich_Web_VCCP_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VCCP_Loading_Show" name="Rich_Web_VCCP_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_VCCP_L_BgC" id="Rich_Web_VCCP_L_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_L_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_VCCP_LT_C" id="Rich_Web_VCCP_LT_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_LT_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_VCCP_L_C" id="Rich_Web_VCCP_L_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_L_C;?>">
					</td>
					<td>
						<select id="Rich_Web_VCCP_L_S" name="Rich_Web_VCCP_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_VCCP_LT" id="Rich_Web_VCCP_LT" value="<?php echo $Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_LT;?>">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_VCCP_L_T" name="Rich_Web_VCCP_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('VCCP')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_VCCP_LT_T" name="Rich_Web_VCCP_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('VCCP')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_LT_FS;?>" id="Rich_Web_VCCP_LT_FS" id="Rich_Web_VCCP_LT_FS" name="Rich_Web_VCCP_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_VCCP_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_VCCP_LT_FF" name="Rich_Web_VCCP_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_VCCP_L_T1_C" id="Rich_Web_VCCP_L_T1_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_L_T1_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_VCCP_L_T2_C" id="Rich_Web_VCCP_L_T2_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_L_T2_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_VCCP_L_T3_C" id="Rich_Web_VCCP_L_T3_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_L_T3_C;?>">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_VCCP_LT_T2_BC" id="Rich_Web_VCCP_LT_T2_BC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_LT_T2_BC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_VCCP_LT_T2_AnC" id="Rich_Web_VCCP_LT_T2_AnC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_LT_T2_AnC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_VCCP_LT_T3_BgC" id="Rich_Web_VCCP_LT_T3_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS4_Loader[0]->Rich_Web_VCCP_LT_T3_BgC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_5">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Pause Time (s)</td>
					<td>Change Speed (ms)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_W;?>" id="Rich_Web_SVS_W" name="Rich_Web_SVS_W" min="300" max="1200">
							<span class="range-slider__value" id="Rich_Web_SVS_W_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_PT;?>" id="Rich_Web_SVS_PT" name="Rich_Web_SVS_PT" min="1" max="15">
							<span class="range-slider__value" id="Rich_Web_SVS_PT_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_CS;?>" id="Rich_Web_SVS_CS" name="Rich_Web_SVS_CS" min="100" max="1500" step="100">
							<span class="range-slider__value" id="Rich_Web_SVS_CS_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_BW;?>" id="Rich_Web_SVS_BW" name="Rich_Web_SVS_BW" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_SVS_BW_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Box Shadow</td>
					<td>Shadow Type</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_BS" name="Rich_Web_SVS_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_BC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_BC;?>"/>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_BoxShShow" id="Rich_Web_SVS_BoxShShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_BoxShType" id="Rich_Web_SVS_BoxShType"/>
							<span class="switch-label" data-on="1" data-off="2"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>AutoPlay</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_BoxSh;?>" id="Rich_Web_SVS_BoxSh" name="Rich_Web_SVS_BoxSh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_SVS_BoxSh_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_BoxShC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_BoxShC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_Eff" name="">
							<option value="slide"> Slide </option>
							<option value="fade">  Fade  </option>
						</select>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_AP" id="Rich_Web_SVS_AP" />
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_Nav_Show" id="Rich_Web_SVS_Nav_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Nav_W;?>" id="Rich_Web_SVS_Nav_W" name="Rich_Web_SVS_Nav_W" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_SVS_Nav_W_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Nav_H;?>" id="Rich_Web_SVS_Nav_H" name="Rich_Web_SVS_Nav_H" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_SVS_Nav_H_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Nav_BW;?>" id="Rich_Web_SVS_Nav_BW" name="Rich_Web_SVS_Nav_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_SVS_Nav_BW_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
					<td>Place Between (px)</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_Nav_BS" name="Rich_Web_SVS_Nav_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Nav_BC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Nav_BC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Nav_BR;?>" id="Rich_Web_SVS_Nav_BR" name="Rich_Web_SVS_Nav_BR" min="0" max="30">
							<span class="range-slider__value" id="Rich_Web_SVS_Nav_BR_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Nav_PB;?>" id="Rich_Web_SVS_Nav_PB" name="Rich_Web_SVS_Nav_PB" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_SVS_Nav_PB_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Current Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Nav_C" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Nav_C;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Nav_CC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Nav_CC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Nav_HC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Nav_HC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_Nav_Pos" name="">
							<option value="top">    Top    </option>
							<option value="bottom"> Bottom </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_T_Show" id="Rich_Web_SVS_T_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_TBgC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_TBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_TC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_TC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_TFS;?>" id="Rich_Web_SVS_TFS" name="Rich_Web_SVS_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_SVS_TFS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_TFF" name="Rich_Web_SVS_TFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Description Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_D_Show" id="Rich_Web_SVS_D_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Link Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_LC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_LC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_LFS;?>" id="Rich_Web_SVS_LFS" name="Rich_Web_SVS_LFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_SVS_LFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_LFF" name="Rich_Web_SVS_LFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_LHC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_LHC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Text</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_SVS_LText" id="Rich_Web_SVS_LText" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_LText;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Arrow Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_Arr_Show" id="Rich_Web_SVS_Arr_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_Arr_Type" name="">
							<option value='angle-double'>   Angle Double   </option>
							<option value='angle'>          Angle          </option>
							<option value='arrow-circle'>   Arrow Circle   </option>
							<option value='arrow-circle-o'> Arrow Circle O </option>
							<option value='arrow'>          Arrow          </option>
							<option value='caret'>          Caret          </option>
							<option value='caret-square-o'> Caret Square O </option>
							<option value='chevron-circle'> Chevron Circle </option>
							<option value='chevron'>        Chevron        </option>
							<option value='hand-o'>         Hand O         </option>
							<option value='long-arrow'>     Long Arrow     </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Arr_S;?>" id="Rich_Web_SVS_Arr_S" name="Rich_Web_SVS_Arr_S" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_SVS_Arr_S_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Arr_C" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Arr_C;?>"/>
					</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Arr_BgC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Arr_BgC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Arr_BW;?>" id="Rich_Web_SVS_Arr_BW" name="Rich_Web_SVS_Arr_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_SVS_Arr_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_Arr_BS" name="Rich_Web_SVS_Arr_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Arr_BC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Arr_BC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_Arr_BR;?>" id="Rich_Web_SVS_Arr_BR" name="Rich_Web_SVS_Arr_BR" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_SVS_Arr_BR_1">0</span>
						</div>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_PIC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_PIC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_PIBgC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_PIBgC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_PIBR;?>" id="Rich_Web_SVS_PIBR" name="Rich_Web_SVS_PIBR" min="0" max="30">
							<span class="range-slider__value" id="Rich_Web_SVS_PIBR_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_PIHC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_PIHC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_PIHBgC" value="<?php echo $Rich_Web_VS5[0]->Rich_Web_SVS_PIHBgC;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SimpleVS_L_Show" name="Rich_Web_SimpleVS_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SimpleVS_LT_Show" name="Rich_Web_SimpleVS_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SimpleVS_Loading_Show" name="Rich_Web_SimpleVS_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_L_BgC" id="Rich_Web_SimpleVS_L_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_L_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_LT_C" id="Rich_Web_SimpleVS_LT_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_LT_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_L_C" id="Rich_Web_SimpleVS_L_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_L_C;?>">
					</td>
					<td>
						<select id="Rich_Web_SimpleVS_L_S" name="Rich_Web_SimpleVS_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_LT" id="Rich_Web_SimpleVS_LT" value="<?php echo $Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_LT;?>">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_SimpleVS_L_T" name="Rich_Web_SimpleVS_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('SimpleVS')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_SimpleVS_LT_T" name="Rich_Web_SimpleVS_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('SimpleVS')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_LT_FS;?>" id="Rich_Web_SimpleVS_LT_FS" name="Rich_Web_SimpleVS_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_SimpleVS_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_SimpleVS_LT_FF" name="Rich_Web_SimpleVS_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_SimpleVS_L_T1_C" id="Rich_Web_SimpleVS_L_T1_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_L_T1_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_L_T2_C" id="Rich_Web_SimpleVS_L_T2_C" class="Rich_Web_VS_Color" value="
						<?php echo $Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_L_T2_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_L_T3_C" id="Rich_Web_SimpleVS_L_T3_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_L_T3_C;?>">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_SimpleVS_LT_T2_BC" id="Rich_Web_SimpleVS_LT_T2_BC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_LT_T2_BC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_SimpleVS_LT_T2_AnC" id="Rich_Web_SimpleVS_LT_T2_AnC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_LT_T2_AnC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_SimpleVS_LT_T3_BgC" id="Rich_Web_SimpleVS_LT_T3_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS5_Loader[0]->Rich_Web_SimpleVS_LT_T3_BgC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_6">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Auto Play</td>
					<td>Auto Play Steps</td>
					<td>Auto Play Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Change Speed (ms)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VTVS_AP" id="Rich_Web_VTVS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_APS;?>" id="Rich_Web_VTVS_APS" name="Rich_Web_VTVS_APS" min="1" max="5">
							<span class="range-slider__value" id="Rich_Web_VTVS_APS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_APEff" name="">
							<option value="random slideshow">      Random Slideshow      </option>
							<option value="fade slideshow">        Fade Slideshow        </option>
							<option value="swing slideshow">       Swing Slideshow       </option>
							<option value="flutter slideshow">     Flutter Slideshow     </option>
							<option value="collapse slideshow">    Collapse Slideshow    </option>
							<option value="expand slideshow">      Expand Slideshow      </option>
							<option value="stripe slideshow">      Stripe Slideshow      </option>
							<option value="twins slideshow">       Twins Slideshow       </option>
							<option value="parabola slideshow">    Parabola Slideshow    </option>
							<option value="rotate slideshow">      Rotate Slideshow      </option>
							<option value="zoom slideshow">        Zoom Slideshow        </option>
							<option value="float slideshow">       Float Slideshow       </option>
							<option value="fly slideshow">         Fly Slideshow         </option>
							<option value="dodge dance slideshow"> Dodge Dance Slideshow </option>
							<option value="dodge pet slideshow">   Dodge Pet Slideshow   </option>
							<option value="dodge slideshow">       Dodge Slideshow       </option>
							<option value="compound slideshow">    Compound Slideshow    </option>
							<option value="jump slideshow">        Jump Slideshow        </option>
							<option value="wave slideshow">        Wave Slideshow        </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_CS;?>" id="Rich_Web_VTVS_CS" name="Rich_Web_VTVS_CS" min="100" max="2000" step="100">
							<span class="range-slider__value" id="Rich_Web_VTVS_CS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Pause Time (s)</td>
					<td>Arrows Steps</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Height (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_PT;?>" id="Rich_Web_VTVS_PT" name="Rich_Web_VTVS_PT" min="1" max="20">
							<span class="range-slider__value" id="Rich_Web_VTVS_PT_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_ArrSt;?>" id="Rich_Web_VTVS_ArrSt" name="Rich_Web_VTVS_ArrSt" min="1" max="5">
							<span class="range-slider__value" id="Rich_Web_VTVS_ArrSt_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_BgC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_BgC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_H;?>" id="Rich_Web_VTVS_H" name="Rich_Web_VTVS_H" min="200" max="800">
							<span class="range-slider__value" id="Rich_Web_VTVS_H_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Box Shadow</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_BW;?>" id="Rich_Web_VTVS_BW" name="Rich_Web_VTVS_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VTVS_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_BS" name="Rich_Web_VTVS_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_BC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_BC;?>"/>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VTVS_BoxShShow" id="Rich_Web_VTVS_BoxShShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Shadow Type</td>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VTVS_BoxShType" id="Rich_Web_VTVS_BoxShType"/>
							<span class="switch-label" data-on="1" data-off="2"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_BoxSh;?>" id="Rich_Web_VTVS_BoxSh" name="Rich_Web_VTVS_BoxSh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_VTVS_BoxSh_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_BoxShC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_BoxShC;?>"/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VTVS_TShow" id="Rich_Web_VTVS_TShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_TFS;?>" id="Rich_Web_VTVS_TFS" name="Rich_Web_VTVS_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VTVS_TFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_TFF" name="Rich_Web_VTVS_TFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_TC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_TC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_TBgC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_TBgC;?>/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_TPos" name="">
							<option value="top">    Top    </option>
							<option value="center"> Center </option>
							<option value="bottom"> Bottom </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Thumbnails Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_Th_BW;?>" id="Rich_Web_VTVS_Th_BW" name="Rich_Web_VTVS_Th_BW" min="0" max="3">
							<span class="range-slider__value" id="Rich_Web_VTVS_Th_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_Th_BS" name="Rich_Web_VTVS_Th_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_Th_BC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_Th_BC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_Th_BR;?>" id="Rich_Web_VTVS_Th_BR" name="Rich_Web_VTVS_Th_BR" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VTVS_Th_BR_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Hover/Current Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_Th_HBC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_Th_HBC;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Link Icon Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_LC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_LC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_LBgC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_LBgC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_LFS;?>" id="Rich_Web_VTVS_LFS" name="Rich_Web_VTVS_LFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VTVS_LFS_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_LHC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_LHC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_LHBgC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_LHBgC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_LPos" name="">
							<option value='top-left'>     Top-Left     </option>
							<option value='top-right'>    Top-Right    </option>
							<option value='bottom-left'>  Bottom-Left  </option>
							<option value='bottom-right'> Bottom-Right </option>
						</select>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_LType" name="">
							<option value='link'>          ??ink          </option>
							<option value='paperclip'>     Paperclip     </option>
							<option value='external-link'> External Link </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_PC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_PC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_PBgC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_PBgC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_PFS;?>" id="Rich_Web_VTVS_PFS" name="Rich_Web_VTVS_PFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VTVS_PFS_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_PHC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_PHC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_PHBgC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_PHBgC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_PPos" name="">
							<option value='top-left'>     Top-Left     </option>
							<option value='top-right'>    Top-Right    </option>
							<option value='bottom-left'>  Bottom-Left  </option>
							<option value='bottom-right'> Bottom-Right </option>
						</select>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_PType" name="">
							<option value='play'>          Play          </option>
							<option value='play-circle'>   Play Circle   </option>
							<option value='play-circle-o'> Play Circle O </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Arrows Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VTVS_ArrShow" id="Rich_Web_VTVS_ArrShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_ArrType" name="">
							<option value='angle-double'>   Angle Double   </option>
							<option value='angle'>          Angle          </option>
							<option value='arrow-circle'>   Arrow Circle   </option>
							<option value='arrow-circle-o'> Arrow Circle O </option>
							<option value='arrow'>          Arrow          </option>
							<option value='caret'>          Caret          </option>
							<option value='caret-square-o'> Caret Square O </option>
							<option value='chevron-circle'> Chevron Circle </option>
							<option value='chevron'>        Chevron        </option>
							<option value='hand-o'>         Hand O         </option>
							<option value='long-arrow'>     Long Arrow     </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_ArrFS;?>" id="Rich_Web_VTVS_ArrFS" name="Rich_Web_VTVS_ArrFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VTVS_ArrFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_ArrPos" name="">
							<option value='top'>    Top    </option>
							<option value='center'> Center </option>
							<option value='bottom'> Bottom </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_ArrC" value="<?php echo $Rich_Web_VS6[0]->Rich_Web_VTVS_ArrC;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VSVT_L_Show" name="Rich_Web_VSVT_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VSVT_LT_Show" name="Rich_Web_VSVT_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VSVT_Loading_Show" name="Rich_Web_VSVT_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_VSVT_L_BgC" id="Rich_Web_VSVT_L_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_L_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_VSVT_LT_C" id="Rich_Web_VSVT_LT_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_LT_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_VSVT_L_C" id="Rich_Web_VSVT_L_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_L_C;?>">
					</td>
					<td>
						<select id="Rich_Web_VSVT_L_S" name="Rich_Web_VSVT_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_VSVT_LT" id="Rich_Web_VSVT_LT" value="<?php echo $Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_LT;?>">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_VSVT_L_T" name="Rich_Web_VSVT_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('VSVT')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_VSVT_LT_T" name="Rich_Web_VSVT_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('VSVT')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_LT_FS;?>" id="Rich_Web_VSVT_LT_FS" name="Rich_Web_VSVT_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_VSVT_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_VSVT_LT_FF" name="Rich_Web_VSVT_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_VSVT_L_T1_C" id="Rich_Web_VSVT_L_T1_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_L_T1_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_VSVT_L_T2_C" id="Rich_Web_VSVT_L_T2_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_L_T2_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_VSVT_L_T3_C" id="Rich_Web_VSVT_L_T3_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_L_T3_C;?>">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_VSVT_LT_T2_BC" id="Rich_Web_VSVT_LT_T2_BC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_LT_T2_BC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_VSVT_LT_T2_AnC" id="Rich_Web_VSVT_LT_T2_AnC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_LT_T2_AnC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_VSVT_LT_T3_BgC" id="Rich_Web_VSVT_LT_T3_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS6_Loader[0]->Rich_Web_VSVT_LT_T3_BgC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_7">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Loop</td>
					<td>Cols</td>
					<td>Speed (s)</td>
					<td>AutoPlay</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_Loop" id="Rich_Web_VS_HPS_Loop"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Cols;?>" id="Rich_Web_VS_HPS_Cols" name="Rich_Web_VS_HPS_Cols" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_Cols_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Speed;?>" id="Rich_Web_VS_HPS_Speed" name="Rich_Web_VS_HPS_Speed" min="1" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_Speed_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_AP" id="Rich_Web_VS_HPS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Equal Height</td>
					<td>Place Between (px)</td>
					<td>Carousel</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_EH" id="Rich_Web_VS_HPS_EH"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_PB;?>" id="Rich_Web_VS_HPS_PB" name="Rich_Web_VS_HPS_PB" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_PB_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_Car" id="Rich_Web_VS_HPS_Car"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Next & Prev Buttons</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Next Text</td>
					<td>Prev Text</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_NP_Show" id="Rich_Web_VS_HPS_NP_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" class="Rich_Web_VSlider_Select_Menu" name="Rich_Web_VS_HPS_NP_NText" id="Rich_Web_VS_HPS_NP_NText" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_NP_NText;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VSlider_Select_Menu" name="Rich_Web_VS_HPS_NP_PText" id="Rich_Web_VS_HPS_NP_PText" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_NP_PText;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_NP_C" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_NP_C;?>"/>
					</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_NP_BgC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_NP_BgC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_NP_FS;?>" id="Rich_Web_VS_HPS_NP_FS" name="Rich_Web_VS_HPS_NP_FS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_NP_FS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_NP_FF" name="Rich_Web_VS_HPS_NP_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_NP_BW;?>" id="Rich_Web_VS_HPS_NP_BW" name="Rich_Web_VS_HPS_NP_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_NP_BW_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_NP_BS" name="Rich_Web_VS_HPS_NP_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_NP_BC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_NP_BC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_NP_BR;?>" id="Rich_Web_VS_HPS_NP_BR" name="Rich_Web_VS_HPS_NP_BR" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_NP_BR_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_NP_HC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_NP_HC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_NP_HBgC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_NP_HBgC;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Cols Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Box Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Videos Start Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Start Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Cols_BgC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Cols_BgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Cols_BoxShC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Cols_BoxShC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_Cols_VSEff" name="">
							<option value="none">        None        </option>
							<option value="blur">        Blur        </option>
							<option value="brightness">  Brightness  </option>
							<option value="contrast">    Contrast    </option>
							<option value="drop-shadow"> Drop-Shadow </option>
							<option value="grayscale">   Grayscale   </option>
							<option value="hue-rotate">  Hue-Rotate  </option>
							<option value="invert">      Invert      </option>
							<option value="opacity">     Opacity     </option>
							<option value="saturate">    Saturate    </option>
							<option value="sepia">       Sepia       </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Cols_StShC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Cols_StShC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Videos Hover Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_Cols_VHEff" name="">
							<option value="none">        None        </option>
							<option value="blur">        Blur        </option>
							<option value="brightness">  Brightness  </option>
							<option value="contrast">    Contrast    </option>
							<option value="drop-shadow"> Drop-Shadow </option>
							<option value="grayscale">   Grayscale   </option>
							<option value="hue-rotate">  Hue-Rotate  </option>
							<option value="invert">      Invert      </option>
							<option value="opacity">     Opacity     </option>
							<option value="saturate">    Saturate    </option>
							<option value="sepia">       Sepia       </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Cols_HShC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Cols_HShC;?>"/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Video Title Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_TC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_TC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_TFS;?>" id="Rich_Web_VS_HPS_TFS" name="Rich_Web_VS_HPS_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_TFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_TFF" name="Rich_Web_VS_HPS_TFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Video Description Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_DShow" id="Rich_Web_VS_HPS_DShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Link Options</td>
				</tr>
				<tr>
					<td>Text</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VSlider_Select_Menu" name="Rich_Web_VS_HPS_LText" id="Rich_Web_VS_HPS_LText" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_LText;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_LC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_LC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_LFS;?>" id="Rich_Web_VS_HPS_LFS" name="Rich_Web_VS_HPS_LFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_LFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_LFF" name="Rich_Web_VS_HPS_LFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_LHC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_LHC;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Video Play Options</td>
				</tr>
				<tr>
					<td>Text</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VSlider_Select_Menu" name="Rich_Web_VS_HPS_PText" id="Rich_Web_VS_HPS_PText" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_PText;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_PBgC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_PBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_PC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_PC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_PFS;?>" id="Rich_Web_VS_HPS_PFS" name="Rich_Web_VS_HPS_PFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_PFS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_PFF" name="Rich_Web_VS_HPS_PFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_PHC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_PHC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_PHBgC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_PHBgC;?>"/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Popup Options</td>
				</tr>
				<tr>
					<td>Overlay Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Pop_OvC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Pop_OvC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Pop_BW;?>" id="Rich_Web_VS_HPS_Pop_BW" name="Rich_Web_VS_HPS_Pop_BW" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_Pop_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_Pop_BS" name="Rich_Web_VS_HPS_Pop_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Pop_BC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Pop_BC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Box Shadow</td>
					<td>Shadow Type</td>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_Pop_BoxShShow" id="Rich_Web_VS_HPS_Pop_BoxShShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_Pop_BoxShType" id="Rich_Web_VS_HPS_Pop_BoxShType"/>
							<span class="switch-label" data-on="1" data-off="2"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Pop_BoxSh;?>" id="Rich_Web_VS_HPS_Pop_BoxSh" name="Rich_Web_VS_HPS_Pop_BoxSh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_Pop_BoxSh_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Pop_BoxShC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Pop_BoxShC;?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Popup Close Icon</td>
				</tr>
				<tr>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_Pop_CIType" name="">
							<option value="rich_web-times">          Type 1 </option>
							<option value="rich_web-times-circle">   Type 2 </option>
							<option value="rich_web-times-circle-o"> Type 3 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Pop_CIS;?>" id="Rich_Web_VS_HPS_Pop_CIS" name="Rich_Web_VS_HPS_Pop_CIS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_Pop_CIS_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Pop_CIC" value="<?php echo $Rich_Web_VS7[0]->Rich_Web_VS_HPS_Pop_CIC;?>"/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_HSL_L_Show" name="Rich_Web_HSL_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_HSL_LT_Show" name="Rich_Web_HSL_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_HSL_Loading_Show" name="Rich_Web_HSL_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_HSL_L_BgC" id="Rich_Web_HSL_L_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS7_Loader[0]->Rich_Web_HSL_L_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_HSL_LT_C" id="Rich_Web_HSL_LT_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS7_Loader[0]->Rich_Web_HSL_LT_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_HSL_L_C" id="Rich_Web_HSL_L_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS7_Loader[0]->Rich_Web_HSL_L_C;?>">
					</td>
					<td>
						<select id="Rich_Web_HSL_L_S" name="Rich_Web_HSL_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_HSL_LT" id="Rich_Web_HSL_LT" value="<?php echo $Rich_Web_VS7_Loader[0]->Rich_Web_HSL_LT;?>">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_HSL_L_T" name="Rich_Web_HSL_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('HSL')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_HSL_LT_T" name="Rich_Web_HSL_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('HSL')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS7_Loader[0]->Rich_Web_HSL_LT_FS;?>" id="Rich_Web_HSL_LT_FS" name="Rich_Web_HSL_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_HSL_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_HSL_LT_FF" name="Rich_Web_HSL_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_HSL_L_T1_C" id="Rich_Web_HSL_L_T1_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS7_Loader[0]->Rich_Web_HSL_L_T1_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_HSL_L_T2_C" id="Rich_Web_HSL_L_T2_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS7_Loader[0]->Rich_Web_HSL_L_T2_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_HSL_L_T3_C" id="Rich_Web_HSL_L_T3_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS7_Loader[0]->Rich_Web_HSL_L_T3_C;?>">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_HSL_LT_T2_BC" id="Rich_Web_HSL_LT_T2_BC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS7_Loader[0]->Rich_Web_HSL_LT_T2_BC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_HSL_LT_T2_AnC" id="Rich_Web_HSL_LT_T2_AnC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS7_Loader[0]->Rich_Web_HSL_LT_T2_AnC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_HSL_LT_T3_BgC" id="Rich_Web_HSL_LT_T3_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS7_Loader[0]->Rich_Web_HSL_LT_T3_BgC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_8">
				<tr>
					<td colspan="4">Slider Options</td>
				</tr>
				<tr>
					<td>Shadow (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td><!-- AutoPlay --></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_Sh;?>" id="Rich_Web_RVVS_Sh" name="Rich_Web_RVVS_Sh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_RVVS_Sh_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_RVVS_ShT" name="Rich_Web_RVVS_ShT">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_ShC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_ShC;?>"/>
					</td>
					<td>
						<!-- <label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_RVVS_AP" id="Rich_Web_RVVS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label> -->
					</td>
				</tr>
				<tr>
					<td colspan="4">Navigation Item Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NI_BW;?>" id="Rich_Web_RVVS_NI_BW" name="Rich_Web_RVVS_NI_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_RVVS_NI_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_BC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NI_BC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_BgC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NI_BgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_HBgC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NI_HBgC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Hover Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Current Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Current Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_HBC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NI_HBC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_CBgC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NI_CBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_CBC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NI_CBC;?>"/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Item Title Options</td>
				</tr>
				<tr>
					<td>Font Size(px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NT_FS;?>" id="Rich_Web_RVVS_NT_FS" name="Rich_Web_RVVS_NT_FS" min="8" max="36">
							<span class="range-slider__value" id="Rich_Web_RVVS_NT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_RVVS_NT_FF" name="Rich_Web_RVVS_NT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NT_C" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NT_C;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NT_HC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NT_HC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Current Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NT_CC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NT_CC;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Image Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NImg_BW;?>" id="Rich_Web_RVVS_NImg_BW" name="Rich_Web_RVVS_NImg_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_RVVS_NImg_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NScroll_HBgC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NScroll_HBgC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NImg_BSh;?>" id="Rich_Web_RVVS_NImg_BSh" name="Rich_Web_RVVS_NImg_BSh" min="0" max="30">
							<span class="range-slider__value" id="Rich_Web_RVVS_NImg_BSh_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NImg_ShC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NImg_ShC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Shadow Type</td>
					<td>Radius (%)</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_RVVS_NImg_ShT" name="Rich_Web_RVVS_NImg_ShT">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input style="max-width:200px;" class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NImg_BR;?>" id="Rich_Web_RVVS_NImg_BR" name="Rich_Web_RVVS_NImg_BR" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_RVVS_NImg_BR_Span">0</span>
						</div>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Scroll Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NScroll_BgC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NScroll_BgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NScroll_C" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_NScroll_C;?>"/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Image Title Options</td>
				</tr>
				<tr>
					<td>Font Size(px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_IT_FS;?>" id="Rich_Web_RVVS_IT_FS" name="Rich_Web_RVVS_IT_FS" min="8" max="36">
							<span class="range-slider__value" id="Rich_Web_RVVS_IT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_RVVS_IT_FF" name="Rich_Web_RVVS_IT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_IT_C" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_IT_C;?>"/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Size (px)</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_PlIc_FS;?>" id="Rich_Web_RVVS_PlIc_FS" name="Rich_Web_RVVS_PlIc_FS" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_RVVS_PlIc_FS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_PlIc_C" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_PlIc_C;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_PlIc_BgC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_PlIc_BgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_PlIc_HBgC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_PlIc_HBgC;?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Delete Icon Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size(px)</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_DelIc_C" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_DelIc_C;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_RVVS_DelIc_T" name="">
							<option value="rich_web-times">          Type 1 </option>
							<option value="rich_web-times-circle">   Type 2 </option>
							<option value="rich_web-times-circle-o"> Type 3 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_DelIc_FS;?>" id="Rich_Web_RVVS_DelIc_FS" name="Rich_Web_RVVS_DelIc_FS" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_RVVS_DelIc_FS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_DelIc_BgC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_DelIc_BgC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_DelIc_HBgC" value="<?php echo $Rich_Web_VS8[0]->Rich_Web_RVVS_DelIc_HBgC;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_RichSl_L_Show" name="Rich_Web_RichSl_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_RichSl_LT_Show" name="Rich_Web_RichSl_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_RichSl_Loading_Show" name="Rich_Web_RichSl_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_RichSl_L_BgC" id="Rich_Web_RichSl_L_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_L_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_RichSl_LT_C" id="Rich_Web_RichSl_LT_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_LT_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_RichSl_L_C" id="Rich_Web_RichSl_L_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_L_C;?>">
					</td>
					<td>
						<select id="Rich_Web_RichSl_L_S" name="Rich_Web_RichSl_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_RichSl_LT" id="Rich_Web_RichSl_LT" value="<?php echo $Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_LT;?>">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_RichSl_L_T" name="Rich_Web_RichSl_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('RichSl')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_RichSl_LT_T" name="Rich_Web_RichSl_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('RichSl')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_LT_FS;?>" id="Rich_Web_RichSl_LT_FS" name="Rich_Web_RichSl_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_RichSl_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_RichSl_LT_FF" name="Rich_Web_RichSl_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_RichSl_L_T1_C" id="Rich_Web_RichSl_L_T1_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_L_T1_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_RichSl_L_T2_C" id="Rich_Web_RichSl_L_T2_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_L_T2_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_RichSl_L_T3_C" id="Rich_Web_RichSl_L_T3_C" class="Rich_Web_VS_Color" value="
						<?php echo $Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_L_T3_C;?>">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_RichSl_LT_T2_BC" id="Rich_Web_RichSl_LT_T2_BC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_LT_T2_BC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_RichSl_LT_T2_AnC" id="Rich_Web_RichSl_LT_T2_AnC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_LT_T2_AnC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_RichSl_LT_T3_BgC" id="Rich_Web_RichSl_LT_T3_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS8_Loader[0]->Rich_Web_RichSl_LT_T3_BgC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_9">
				<tr>
					<td colspan="4">Slider Options</td>
				</tr>
				<tr>
					<td>Slideshow</td>
					<td>Slideshow Change Time (ms)</td>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_MS_SSh" id="Rich_Web_MS_SSh"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_SShChT;?>" id="Rich_Web_MS_SShChT" name="Rich_Web_MS_SShChT" min="1000" max="15000">
							<span class="range-slider__value" id="Rich_Web_MS_SShChT_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_BSh;?>" id="Rich_Web_MS_BSh" name="Rich_Web_MS_BSh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_MS_BSh_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_ShC" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_ShC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Shadow Type</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Slider Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Slider 1 Video Autoplay</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_ShT" name="Rich_Web_MS_ShT">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_BgC" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_BgC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_Type" name="">
							<option value="horizontal"> Horizontal </option>
							<option value="vertical">   Vertical   </option>
						</select>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_MS_Autoplay" id="Rich_Web_MS_Autoplay"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Slider 1 Video Effect Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_W;?>" id="Rich_Web_MS_W" name="Rich_Web_MS_W" min="320" max="1500">
							<span class="range-slider__value" id="Rich_Web_MS_W_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_Sl1EfT" name="">
							<option value="1"> Type 1  </option>
							<option value="2"> Type 2  </option>
							<option value="3"> Type 3  </option>
							<option value="4"> Type 4  </option>
							<option value="5"> Default </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan='4'>Navigation Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Item Font Size (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_N_BW;?>" id="Rich_Web_MS_N_BW" name="Rich_Web_MS_N_BW" min="0" max="4">
							<span class="range-slider__value" id="Rich_Web_MS_N_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_N_BS" name="Rich_Web_MS_N_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_N_BC" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_N_BC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_NI_FS;?>" id="Rich_Web_MS_NI_FS" name="Rich_Web_MS_NI_FS" min="8" max="24">
							<span class="range-slider__value" id="Rich_Web_MS_NI_FS_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Item Font Family</td>
					<td>Item Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Item Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Item Current Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_NI_FF" name="Rich_Web_MS_NI_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_NI_C" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_NI_C;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_NI_HC" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_NI_HC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_NI_CC" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_NI_CC;?>"/>
					</td>
				</tr>
				<tr>
					<td>Circle Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_NIC_C" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_NIC_C;?>"/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan='4'>Image Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Shadow (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_Img_BW;?>" id="Rich_Web_MS_Img_BW" name="Rich_Web_MS_Img_BW" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_MS_Img_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_Img_BS" name="Rich_Web_MS_Img_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_Img_BC" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_Img_BC;?>"/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="?php echo $Rich_Web_VS9[0]->Rich_Web_MS_Img_BSh;?>" id="Rich_Web_MS_Img_BSh" name="Rich_Web_MS_Img_BSh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_MS_Img_BSh_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Shadow Type</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_Img_ShC" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_Img_ShC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_Img_ShT" name="Rich_Web_MS_Img_ShT">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Text Align</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_T_FS;?>" id="Rich_Web_MS_T_FS" name="Rich_Web_MS_T_FS" min="8" max="38">
							<span class="range-slider__value" id="Rich_Web_MS_T_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_T_FF" name="Rich_Web_MS_T_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_T_C" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_T_C;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_T_TA" name="Rich_Web_MS_T_TA">
							<option value="left">    Left    </option>
							<option value="right">   Right   </option>
							<option value="center">  Center  </option>
							<option value="justify"> Justify </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Text Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_T_TSh;?>" id="Rich_Web_MS_T_TSh" name="Rich_Web_MS_T_TSh" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_MS_T_TSh_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_T_TShC" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_T_TShC;?>"/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Icon Options</td>
				</tr>
				<tr>
					<td>Icon Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Icon Size (px)</td>
					<td>Icon Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_Ic_T" name="">
							<option value='rich_web rich_web-angle-double'>   Icon 1  </option>
							<option value='rich_web rich_web-angle'>          Icon 2  </option>
							<option value='rich_web rich_web-arrow-circle'>   Icon 3  </option>
							<option value='rich_web rich_web-arrow-circle-o'> Icon 4  </option>
							<option value='rich_web rich_web-arrow'>          Icon 5  </option>
							<option value='rich_web rich_web-caret'>          Icon 6  </option>
							<option value='rich_web rich_web-caret-square-o'> Icon 7  </option>
							<option value='rich_web rich_web-chevron-circle'> Icon 8  </option>
							<option value='rich_web rich_web-chevron'>        Icon 9  </option>
							<option value='rich_web rich_web-hand-o'>         Icon 10 </option>
							<option value='rich_web rich_web-long-arrow'>     Icon 11 </option>
							<option value='Timeline'>                         Image   </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_Ic_S;?>" id="Rich_Web_MS_Ic_S" name="Rich_Web_MS_Ic_S" min="10" max="50">
							<span class="range-slider__value" id="Rich_Web_MS_Ic_S_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_Ic_C" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_Ic_C;?>"/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_PlIc_T" name="">
							<option value="rich_web rich_web-play">          Type 1 </option>
							<option value="rich_web rich_web-play-circle">   Type 2 </option>
							<option value="rich_web rich_web-play-circle-o"> Type 3 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_PlIc_S;?>" id="Rich_Web_MS_PlIc_S" name="Rich_Web_MS_PlIc_S" min="10" max="50">
							<span class="range-slider__value" id="Rich_Web_MS_PlIc_S_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_PlIc_BgC" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_PlIc_BgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_PlIc_C" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_PlIc_C;?>"/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_PlIc_HBgC" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_PlIc_HBgC;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_PlIc_HC" value="<?php echo $Rich_Web_VS9[0]->Rich_Web_MS_PlIc_HC;?>"/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_TSL_L_Show" name="Rich_Web_TSL_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_TSL_LT_Show" name="Rich_Web_TSL_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_TSL_Loading_Show" name="Rich_Web_TSL_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_TSL_L_BgC" id="Rich_Web_TSL_L_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS9_Loader[0]->Rich_Web_TSL_L_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_TSL_LT_C" id="Rich_Web_TSL_LT_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS9_Loader[0]->Rich_Web_TSL_LT_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_TSL_L_C" id="Rich_Web_TSL_L_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS9_Loader[0]->Rich_Web_TSL_L_C;?>">
					</td>
					<td>
						<select id="Rich_Web_TSL_L_S" name="Rich_Web_TSL_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_TSL_LT" id="Rich_Web_TSL_LT" value="<?php echo $Rich_Web_VS9_Loader[0]->Rich_Web_TSL_LT;?>">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_TSL_L_T" name="Rich_Web_TSL_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('TSL')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_TSL_LT_T" name="Rich_Web_TSL_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('TSL')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS9_Loader[0]->Rich_Web_TSL_LT_FS;?>" id="Rich_Web_TSL_LT_FS" name="Rich_Web_TSL_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_TSL_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_TSL_LT_FF" name="Rich_Web_TSL_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_TSL_L_T1_C" id="Rich_Web_TSL_L_T1_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS9_Loader[0]->Rich_Web_TSL_L_T1_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_TSL_L_T2_C" id="Rich_Web_TSL_L_T2_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS9_Loader[0]->Rich_Web_TSL_L_T2_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_TSL_L_T3_C" id="Rich_Web_TSL_L_T3_C" class="Rich_Web_VS_Color" value="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS9_Loader[0]->Rich_Web_TSL_L_T3_C;?>">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_TSL_LT_T2_BC" id="Rich_Web_TSL_LT_T2_BC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS9_Loader[0]->Rich_Web_TSL_LT_T2_BC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_TSL_LT_T2_AnC" id="Rich_Web_TSL_LT_T2_AnC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS9_Loader[0]->Rich_Web_TSL_LT_T2_AnC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_TSL_LT_T3_BgC" id="Rich_Web_TSL_LT_T3_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS9_Loader[0]->Rich_Web_TSL_LT_T3_BgC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_10">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Autoplay <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Pause Time (s)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_GO_NS1_Width;?>" id="Rich_Web_GO_NS1_Width" name="Rich_Web_GO_NS1_Width" min="8" max="1500">
							<span class="range-slider__value" id="Rich_Web_GO_NS1_Width_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_GO_NS1_Height;?>" id="Rich_Web_GO_NS1_Height" name="Rich_Web_GO_NS1_Height" min="8" max="1000">
							<span class="range-slider__value" id="Rich_Web_GO_NS1_Height_Span">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_GO_NS1_Autoplay"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_GO_NS1_PTime;?>" id="Rich_Web_GO_NS1_PTime" name="Rich_Web_GO_NS1_PTime" min="1" max="50">
							<span class="range-slider__value" id="Rich_Web_GO_NS1_PTime_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Type (px)</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Align</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_GO_NS1_BW;?>" id="Rich_Web_GO_NS1_BW" name="Rich_Web_GO_NS1_BW" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_GO_NS1_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_GO_NS1_BType" name="Rich_Web_GO_NS1_BType">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_GO_NS1_BC" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_GO_NS1_BC;?>"/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_GO_NS1_Align" name="Rich_Web_GO_NS1_Align">
							<option value="left">   Left   </option>
							<option value="right">  Right  </option>
							<option value="center"> Center </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Shadow (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Show Description <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_GO_NS1_BSh;?>" id="Rich_Web_GO_NS1_BSh" name="Rich_Web_GO_NS1_BSh" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_GO_NS1_BSh_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_GO_NS1_BSh_Type" name="Rich_Web_GO_NS1_BSh_Type">
							<option value="none">   None   </option>
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
							<option value="Type 5"> Type 5 </option>
							<option value="Type 6"> Type 6 </option>
							<option value="Type 7"> Type 7 </option>
							<option value="Type 8"> Type 8 </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_GO_NS1_BSh_Col" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_GO_NS1_BSh_Col;?>"/>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_DO_NS1_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Show <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size(px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_TO_NS1_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_TO_NS1_FSize;?>" id="Rich_Web_TO_NS1_FSize" name="Rich_Web_TO_NS1_FSize" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_TO_NS1_FSize_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_TO_NS1_FFamily" name="Rich_Web_TO_NS1_FFamily">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_TO_NS1_Col" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_TO_NS1_Col;?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Number Options</td>
				</tr>
				<tr>
					<td>Show <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size(px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_TO_NS1_Num_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_TO_NS1_Num_FSize;?>" id="Rich_Web_TO_NS1_Num_FSize" name="Rich_Web_TO_NS1_Num_FSize" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_TO_NS1_Num_FSize_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_TO_NS1_Num_FFamily" name="Rich_Web_TO_NS1_Num_FFamily">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_TO_NS1_Num_Col" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_TO_NS1_Num_Col;?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Show <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Place Between (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_PO_NS1_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_PO_NS1_Width;?>" id="Rich_Web_PO_NS1_Width" name="Rich_Web_PO_NS1_Width" min="5" max="20">
							<span class="range-slider__value" id="Rich_Web_PO_NS1_Width_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_PO_NS1_Height;?>" id="Rich_Web_PO_NS1_Height" name="Rich_Web_PO_NS1_Height" min="5" max="20">
							<span class="range-slider__value" id="Rich_Web_PO_NS1_Height_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_PO_NS1_PB;?>" id="Rich_Web_PO_NS1_PB" name="Rich_Web_PO_NS1_PB" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_PO_NS1_PB">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Current Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PO_NS1_Col" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_PO_NS1_Col;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PO_NS1_Cur_Col" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_PO_NS1_Cur_Col;?>"/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Arrow Options</td>
				</tr>
				<tr>
					<td>Show <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Arrow Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td><span class="Rich_Web_IO_NS1_Icon_Col_Block">Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></span></td>
					<td><span class="Rich_Web_IO_NS1_Icon_Col_Block">Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_IO_NS1_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_IO_NS1_Arrow_Type" name="" onchange="Rich_Web_IO_NS1_Arrow_Type_Changed()">
							<option value='icon'>  Icon  </option>
							<option value='image'> Image </option>
						</select>
					</td>
					<td>
						<div class="Rich_Web_IO_NS1_Icon_Col_Block">
							<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PO_NS1_Hov_Col" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_PO_NS1_Hov_Col;?>"/>
						</div>
					</td>
					<td>
						<div class="Rich_Web_IO_NS1_Icon_Col_Block">
							<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_IO_NS1_BgCol" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_IO_NS1_BgCol;?>"/>
						</div>
					</td>
				</tr>
				<tr class="Rich_Web_IO_NS1_Icon_Col_Block_DIV">
					<td><span class="Rich_Web_IO_NS1_Icon_Col_Block">Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></span></td>
					<td><span class="Rich_Web_IO_NS1_Icon_Col_Block">Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></span></td>
					<td><span class="Rich_Web_IO_NS1_Icon_Type_Block">Icon Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></span></td>
					<td><span class="Rich_Web_IO_NS1_FSize_Block">Icon Size (px)</span></td>
				</tr>
				<tr class="Rich_Web_IO_NS1_Icon_Col_Block_DIV">
					<td>
						<div class="Rich_Web_IO_NS1_Icon_Col_Block">
							<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_IO_NS1_HovBgCol" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_IO_NS1_HovBgCol;?>"/>
						</div>
					</td>
					<td>
						<div class="Rich_Web_IO_NS1_Icon_Col_Block">
							<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_IO_NS1_Col" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_IO_NS1_Col;?>"/>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu Rich_Web_IO_NS1_Icon_Type_Block" id="Rich_Web_IO_NS1_Icon_Type" name="">
							<option value='angle-double'>   Angle Double   </option>
							<option value='angle'>          Angle          </option>
							<option value='arrow-circle'>   Arrow Circle   </option>
							<option value='arrow-circle-o'> Arrow Circle O </option>
							<option value='arrow'>          Arrow          </option>
							<option value='caret'>          Caret          </option>
							<option value='caret-square-o'> Caret Square O </option>
							<option value='chevron-circle'> Chevron Circle </option>
							<option value='chevron'>        Chevron        </option>
							<option value='hand-o'>         Hand O         </option>
							<option value='long-arrow'>     Long Arrow     </option>
						</select>
					</td>
					<td>
						<div class="range-slider Rich_Web_IO_NS1_FSize_Block">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_IO_NS1_FSize;?>" id="Rich_Web_IO_NS1_FSize" name="Rich_Web_IO_NS1_FSize" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_IO_NS1_FSize_Span">0</span>
						</div>
					</td>
				</tr>
				<tr class="Rich_Web_IO_NS1_IMG_Type">
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Image Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr class="Rich_Web_IO_NS1_IMG_Type">
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_IO_NS1_Width;?>" id="Rich_Web_IO_NS1_Width" name="Rich_Web_IO_NS1_Width" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_IO_NS1_Width_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_IO_NS1_Height;?>" id="Rich_Web_IO_NS1_Height" name="Rich_Web_IO_NS1_Height" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_IO_NS1_Height_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_IO_NS1_Image_Type" name="">
							<option value="1">  Type 1  </option>
							<option value="2">  Type 2  </option>
							<option value="3">  Type 3  </option>
							<option value="4">  Type 4  </option>
							<option value="5">  Type 5  </option>
							<option value="6">  Type 6  </option>
							<option value="7">  Type 7  </option>
							<option value="8">  Type 8  </option>
							<option value="9">  Type 9  </option>
							<option value="10"> Type 10 </option>
							<option value="11"> Type 11 </option>
							<option value="12"> Type 12 </option>
							<option value="13"> Type 13 </option>
							<option value="14"> Type 14 </option>
							<option value="15"> Type 15 </option>
							<option value="16"> Type 16 </option>
							<option value="17"> Type 17 </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PIO_NS1_BgCol" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_PIO_NS1_BgCol;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PIO_NS1_Col" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_PIO_NS1_Col;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PIO_NS1_HovBgCol" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_PIO_NS1_HovBgCol;?>"/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PIO_NS1_HovCol" value="<?php echo $Rich_Web_VS10[0]->Rich_Web_PIO_NS1_HovCol;?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ASSl_L_Show" name="Rich_Web_ASSl_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ASSl_LT_Show" name="Rich_Web_ASSl_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ASSl_Loading_Show" name="Rich_Web_ASSl_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_ASSl_L_BgC" id="Rich_Web_ASSl_L_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_L_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_ASSl_LT_C" id="Rich_Web_ASSl_LT_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_LT_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_ASSl_L_C" id="Rich_Web_ASSl_L_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_L_C;?>">
					</td>
					<td>
						<select id="Rich_Web_ASSl_L_S" name="Rich_Web_ASSl_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_ASSl_LT" id="Rich_Web_ASSl_LT" value="<?php echo $Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_LT;?>">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_ASSl_L_T" name="Rich_Web_ASSl_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('ASSl')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_ASSl_LT_T" name="Rich_Web_ASSl_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('ASSl')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_LT_FS;?>" id="Rich_Web_ASSl_LT_FS" name="Rich_Web_ASSl_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_ASSl_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_ASSl_LT_FF" name="Rich_Web_ASSl_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?php echo $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_ASSl_L_T1_C" id="Rich_Web_ASSl_L_T1_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_L_T1_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_ASSl_L_T2_C" id="Rich_Web_ASSl_L_T2_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_L_T2_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_ASSl_L_T3_C" id="Rich_Web_ASSl_L_T3_C" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_L_T3_C;?>">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_ASSl_LT_T2_BC" id="Rich_Web_ASSl_LT_T2_BC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_LT_T2_BC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_ASSl_LT_T2_AnC" id="Rich_Web_ASSl_LT_T2_AnC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_LT_T2_AnC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_ASSl_LT_T3_BgC" id="Rich_Web_ASSl_LT_T3_BgC" class="Rich_Web_VS_Color" value="<?php echo $Rich_Web_VS10_Loader[0]->Rich_Web_ASSl_LT_T3_BgC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
		</div>
	</div>
</form>