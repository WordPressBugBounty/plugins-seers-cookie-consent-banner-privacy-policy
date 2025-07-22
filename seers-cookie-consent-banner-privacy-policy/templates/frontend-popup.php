<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script>
    var ajaxurl= "<?php echo admin_url( 'admin-ajax.php' );?>";
</script>
    <style>
        .seers-cmp-cookie-policy-text p{
            <?php if(get_option('SCCBPP_cookie_consent_body_text_color') && get_option('SCCBPP_cookie_consent_body_text_color')!=''){ echo ("color: " . get_option('SCCBPP_cookie_consent_body_text_color') . " !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_style') && get_option('SCCBPP_cookie_consent_font_style')!='' && get_option('SCCBPP_cookie_consent_font_style')!='inherit'){ echo ("font-family: \"" . get_option('SCCBPP_cookie_consent_font_style') . "\" !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . (get_option('SCCBPP_cookie_consent_font_size') + 2) . "px !important;"); }else{ echo ("font-size: " . ($this->defaultfontsize + 2) . "px !important;"); }?>
        }
        .seers-cms-tabs-universal-bar{
            font-weight: bold;
            <?php if(get_option('SCCBPP_cookie_consent_body_text_color') && get_option('SCCBPP_cookie_consent_body_text_color')!=''){ echo ("color: " . get_option('SCCBPP_cookie_consent_body_text_color') . " !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_style') && get_option('SCCBPP_cookie_consent_font_style')!='' && get_option('SCCBPP_cookie_consent_font_style')!='inherit'){ echo ("font-family: \"" . get_option('SCCBPP_cookie_consent_font_style') . "\" !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . (get_option('SCCBPP_cookie_consent_font_size') + 2) . "px !important;"); }else{ echo ("font-size: " . ($this->defaultfontsize + 2) . "px !important;"); }?>
        }
        a#seers-cmp-default-banner-opener {
            <?php if(get_option('SCCBPP_cookie_consent_preferences_btn_color') && get_option('SCCBPP_cookie_consent_preferences_btn_color')!=''){ echo("background: " . get_option('SCCBPP_cookie_consent_preferences_btn_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_preferences_text_color') && get_option('SCCBPP_cookie_consent_preferences_text_color')!=''){ echo("color: " . get_option('SCCBPP_cookie_consent_preferences_text_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
        }
        a#seers-iagree, a#seers_allow_all, a#savemychoice {
            <?php if(get_option('SCCBPP_cookie_consent_agree_btn_color') && get_option('SCCBPP_cookie_consent_agree_btn_color')!=''){ echo("background: " . get_option('SCCBPP_cookie_consent_agree_btn_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_agree_text_color') && get_option('SCCBPP_cookie_consent_agree_text_color')!=''){ echo("color: " . get_option('SCCBPP_cookie_consent_agree_text_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
        }
        a#seers-iagree, a#seers_allow_all, a#savemychoice1 {
            <?php if(get_option('SCCBPP_cookie_consent_agree_btn_color') && get_option('SCCBPP_cookie_consent_agree_btn_color')!=''){ echo("background: " . get_option('SCCBPP_cookie_consent_agree_btn_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_agree_text_color') && get_option('SCCBPP_cookie_consent_agree_text_color')!=''){ echo("color: " . get_option('SCCBPP_cookie_consent_agree_text_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
        }
        a#seers-idisagree, a#seers_disable_all {
            <?php if(get_option('SCCBPP_cookie_consent_disagree_btn_color') && get_option('SCCBPP_cookie_consent_disagree_btn_color')!=''){ echo("background: " . get_option('SCCBPP_cookie_consent_disagree_btn_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_disagree_text_color') && get_option('SCCBPP_cookie_consent_disagree_text_color')!=''){ echo("color: " . get_option('SCCBPP_cookie_consent_disagree_text_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
        }
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr th,
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table thead tr th {
            border: 0 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr td:first-child {
            font-weight: bold !important;
            border: 0 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr td {
            border: 0 !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-no-cookie-found {
            font-size: 14px !important;
            color: #555;
            margin: 15px 0 15px 0;
            font-family: "Arial";
            display: inline-block;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar {
            position: fixed;
            bottom: 0;
            top: auto;
            left: 0;
            right: 0;
            width: 100% !important;
            max-width: 100%;
            padding: 30px 3% 15px;
            z-index: 9999999999999;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background: <?php if(get_option('SCCBPP_cookie_consent_banner_bg_color') && get_option('SCCBPP_cookie_consent_banner_bg_color')!=''){ echo(get_option('SCCBPP_cookie_consent_banner_bg_color')); }else{ echo "#fff"; }?>;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-animation: seers-cmp-slide-in-bottom 1s both;
            -moz-animation: seers-cmp-slide-in-bottom 1s both;
            -ms-animation: seers-cmp-slide-in-bottom 1s both;
            -o-animation: seers-cmp-slide-in-bottom 1s both;
            animation: seers-cmp-slide-in-bottom 1s both;
        }
        
        @keyframes seers-cmp-slide-in-bottom {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @-webkit-keyframes seers-cmp-slide-in-bottom {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @-moz-keyframes seers-cmp-slide-in-bottom {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @-ms-keyframes seers-cmp-slide-in-bottom {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @-o-keyframes seers-cmp-slide-in-bottom {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @keyframes seers-cmp-slide-out-bottom {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 120%, 0);
                -moz-transform: translate3d(0, 120%, 0);
                -ms-transform: translate3d(0, 120%, 0);
                -o-transform: translate3d(0, 120%, 0);
                transform: translate3d(0, 120%, 0)
            }
        }
        
        @-webkit-keyframes seers-cmp-slide-out-bottom {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 120%, 0);
                -moz-transform: translate3d(0, 120%, 0);
                -ms-transform: translate3d(0, 120%, 0);
                -o-transform: translate3d(0, 120%, 0);
                transform: translate3d(0, 120%, 0)
            }
        }
        
        @-moz-keyframes seers-cmp-slide-out-bottom {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 120%, 0);
                -moz-transform: translate3d(0, 120%, 0);
                -ms-transform: translate3d(0, 120%, 0);
                -o-transform: translate3d(0, 120%, 0);
                transform: translate3d(0, 120%, 0)
            }
        }
        
        @-ms-keyframes seers-cmp-slide-out-bottom {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 120%, 0);
                -moz-transform: translate3d(0, 120%, 0);
                -ms-transform: translate3d(0, 120%, 0);
                -o-transform: translate3d(0, 120%, 0);
                transform: translate3d(0, 120%, 0)
            }
        }
        
        @-o-keyframes seers-cmp-slide-out-bottom {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 120%, 0);
                -moz-transform: translate3d(0, 120%, 0);
                -ms-transform: translate3d(0, 120%, 0);
                -o-transform: translate3d(0, 120%, 0);
                transform: translate3d(0, 120%, 0)
            }
        }
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-preference-universal-bar {
            position: fixed;
            border-radius: 20px;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;
            bottom: auto !important;
            right: auto !important;
            width: 40%;
            max-width: 40%;
            padding: 0px 0% 0px;
            z-index: 9999999999999;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background: #ffffff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-animation: seers-cmp-slide-in-bottom 1s both;
            -moz-animation: seers-cmp-slide-in-bottom 1s both;
            -ms-animation: seers-cmp-slide-in-bottom 1s both;
            -o-animation: seers-cmp-slide-in-bottom 1s both;
            animation: seers-cmp-slide-in-bottom 1s both;
        }
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-preference-bottom-hanging-bar {
            position: fixed;
            bottom: 0;
            top: auto;
            left: 0;
            right: 0;
            width: 60%;
            max-width: 60%;
            margin: auto;
            margin-bottom: 55px;
            padding: 30px 3% 15px;
            z-index: 9999999999999;
            -webkit-box-sizing: border-box;
            border: 1px solid #E0DEDE;
            border-radius: 10px;
            -moz-box-sizing: border-box;
            background: <?php if(get_option('SCCBPP_cookie_consent_banner_bg_color') && get_option('SCCBPP_cookie_consent_banner_bg_color')!=''){ echo(get_option('SCCBPP_cookie_consent_banner_bg_color')); }else{ echo "#fff"; }?>;
            box-sizing: border-box;
            /* background: #ffffff; */
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-animation: seers-cmp-slide-in-bottom 1s both;
            -moz-animation: seers-cmp-slide-in-bottom 1s both;
            -ms-animation: seers-cmp-slide-in-bottom 1s both;
            -o-animation: seers-cmp-slide-in-bottom 1s both;
            animation: seers-cmp-slide-in-bottom 1s both;
        }

        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-hanging-bar {
            position: fixed;
            bottom: 0;
            top: auto;
            left: 0;
            right: 0;
            width: 52%;
            max-width: 52%;
            padding: 30px 3% 15px;
            margin: auto;
            margin-bottom: 50px;
            border-radius: 10px;
            border: 1px solid #E0DEDE;
            z-index: 9999999999999;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background: #ffffff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            background: <?php if(get_option('SCCBPP_cookie_consent_banner_bg_color') && get_option('SCCBPP_cookie_consent_banner_bg_color')!=''){ echo(get_option('SCCBPP_cookie_consent_banner_bg_color')); }else{ echo "#fff"; }?>;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-animation: seers-cmp-slide-in-bottom 1s both;
            -moz-animation: seers-cmp-slide-in-bottom 1s both;
            -ms-animation: seers-cmp-slide-in-bottom 1s both;
            -o-animation: seers-cmp-slide-in-bottom 1s both;
            animation: seers-cmp-slide-in-bottom 1s both;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-bar {
            top: 0;
            bottom: auto;
            left: 0;
            right: 0;
            -webkit-animation: seers-cmp-slide-in-top-bar 1s both;
            -moz-animation: seers-cmp-slide-in-top-bar 1s both;
            -ms-animation: seers-cmp-slide-in-top-bar 1s both;
            -o-animation: seers-cmp-slide-in-top-bar 1s both;
            animation: seers-cmp-slide-in-top-bar 1s both;
        }

        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-hanging-bar {
            top: 0;
            bottom: auto;
            left: 0;
            right: 0;
            -webkit-animation: seers-cmp-slide-in-top-bar 1s both;
            -moz-animation: seers-cmp-slide-in-top-bar 1s both;
            -ms-animation: seers-cmp-slide-in-top-bar 1s both;
            -o-animation: seers-cmp-slide-in-top-bar 1s both;
            background: <?php if(get_option('SCCBPP_cookie_consent_banner_bg_color') && get_option('SCCBPP_cookie_consent_banner_bg_color')!=''){ echo(get_option('SCCBPP_cookie_consent_banner_bg_color')); }else{ echo "#fff"; }?>;
            animation:1s both;
            width: 52% !important;
            margin: auto;
            margin-top: 75px;
            border-radius: 10px;
            border: 1px solid #E0DEDE;
        }
        
        @keyframes seers-cmp-slide-in-top-bar{from{-webkit-transform:translate3d(0,-100%,0);-moz-transform:translate3d(0,-100%,0);-ms-transform:translate3d(0,-100%,0);-o-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{-webkit-transform:translate3d(0,0%,0);-moz-transform:translate3d(0,0%,0);-ms-transform:translate3d(0,0%,0);-o-transform:translate3d(0,0%,0);transform:translate3d(0,0%,0)}}
        @-webkit-keyframes seers-cmp-slide-in-top-bar{from{-webkit-transform:translate3d(0,-100%,0);-moz-transform:translate3d(0,-100%,0);-ms-transform:translate3d(0,-100%,0);-o-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{-webkit-transform:translate3d(0,0%,0);-moz-transform:translate3d(0,0%,0);-ms-transform:translate3d(0,0%,0);-o-transform:translate3d(0,0%,0);transform:translate3d(0,0%,0)}}
        @-moz-keyframes seers-cmp-slide-in-top-bar{from{-webkit-transform:translate3d(0,-100%,0);-moz-transform:translate3d(0,-100%,0);-ms-transform:translate3d(0,-100%,0);-o-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{-webkit-transform:translate3d(0,0%,0);-moz-transform:translate3d(0,0%,0);-ms-transform:translate3d(0,0%,0);-o-transform:translate3d(0,0%,0);transform:translate3d(0,0%,0)}}
        @-ms-keyframes seers-cmp-slide-in-top-bar{from{-webkit-transform:translate3d(0,-100%,0);-moz-transform:translate3d(0,-100%,0);-ms-transform:translate3d(0,-100%,0);-o-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{-webkit-transform:translate3d(0,0%,0);-moz-transform:translate3d(0,0%,0);-ms-transform:translate3d(0,0%,0);-o-transform:translate3d(0,0%,0);transform:translate3d(0,0%,0)}}
        @-o-keyframes seers-cmp-slide-in-top-bar{from{-webkit-transform:translate3d(0,-100%,0);-moz-transform:translate3d(0,-100%,0);-ms-transform:translate3d(0,-100%,0);-o-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{-webkit-transform:translate3d(0,0%,0);-moz-transform:translate3d(0,0%,0);-ms-transform:translate3d(0,0%,0);-o-transform:translate3d(0,0%,0);transform:translate3d(0,0%,0)}}
        
        
        @keyframes seers-cmp-slide-out-top-bar{from{-webkit-transform:translate3d(0,1%,0);-moz-transform:translate3d(0,-100%,0);-ms-transform:translate3d(0,-100%,0);-o-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{-webkit-transform:translate3d(0,0%,0);-moz-transform:translate3d(0,0%,0);-ms-transform:translate3d(0,0%,0);-o-transform:translate3d(0,0%,0);transform:translate3d(0,0%,0)}}
        @-webkit-keyframes seers-cmp-slide-out-top-bar{from{-webkit-transform:translate3d(0,1%,0);-moz-transform:translate3d(0,-100%,0);-ms-transform:translate3d(0,-100%,0);-o-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{-webkit-transform:translate3d(0,0%,0);-moz-transform:translate3d(0,0%,0);-ms-transform:translate3d(0,0%,0);-o-transform:translate3d(0,0%,0);transform:translate3d(0,0%,0)}}
        @-moz-keyframes seers-cmp-slide-out-top-bar{from{-webkit-transform:translate3d(0,1%,0);-moz-transform:translate3d(0,-100%,0);-ms-transform:translate3d(0,-100%,0);-o-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{-webkit-transform:translate3d(0,0%,0);-moz-transform:translate3d(0,0%,0);-ms-transform:translate3d(0,0%,0);-o-transform:translate3d(0,0%,0);transform:translate3d(0,0%,0)}}
        @-ms-keyframes seers-cmp-slide-out-top-bar{from{-webkit-transform:translate3d(0,1%,0);-moz-transform:translate3d(0,-100%,0);-ms-transform:translate3d(0,-100%,0);-o-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{-webkit-transform:translate3d(0,0%,0);-moz-transform:translate3d(0,0%,0);-ms-transform:translate3d(0,0%,0);-o-transform:translate3d(0,0%,0);transform:translate3d(0,0%,0)}}
        @-o-keyframes seers-cmp-slide-out-top-bar{from{-webkit-transform:translate3d(0,1%,0);-moz-transform:translate3d(0,-100%,0);-ms-transform:translate3d(0,-100%,0);-o-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{-webkit-transform:translate3d(0,0%,0);-moz-transform:translate3d(0,0%,0);-ms-transform:translate3d(0,0%,0);-o-transform:translate3d(0,0%,0);transform:translate3d(0,0%,0)}}
        
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-left-bar .seers-cmp-cookie-policy-data,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-right-bar .seers-cmp-cookie-policy-data,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-center-bar .seers-cmp-cookie-policy-data,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-middle-bar .seers-cmp-cookie-policy-data{-webkit-box-align:start!important;-moz-box-align:start!important;-ms-flex-align:start!important;-webkit-align-items:flex-start!important;-moz-flex-align:flex-start!important;-ms-flex-align:flex-start!important;align-items:flex-start!important;width:max-content!important; display: block;}
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-right-bar{bottom:15px;top:auto;display: block !important;left:auto;right:15px;width:396px!important;max-width:100%;padding:15px 15px 0 15px!important;overflow:hidden;border-radius:20px;-webkit-border-radius:20px;-webkit-animation:seers-cmp-slide-in-right-bar .5s both;-moz-animation:seers-cmp-slide-in-right-bar .5s both;-ms-animation:seers-cmp-slide-in-right-bar .5s both;-o-animation:seers-cmp-slide-in-right-bar .5s both;animation:seers-cmp-slide-in-right-bar .5s both}
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-right-bar{top:15px;bottom:auto;left:auto;right:15px;width:396px!important;display: block !important;max-width:100%;padding:15px 15px 0 15px!important;overflow:hidden;border-radius:20px;-webkit-border-radius:20px;-webkit-animation:seers-cmp-slide-in-right-bar .5s both;-moz-animation:seers-cmp-slide-in-right-bar .5s both;-ms-animation:seers-cmp-slide-in-right-bar .5s both;-o-animation:seers-cmp-slide-in-right-bar .5s both;animation:seers-cmp-slide-in-right-bar .5s both}
        
        @keyframes seers-cmp-slide-in-right-bar{0%{right:0}100%{right:15px}}
        @-moz-keyframes seers-cmp-slide-in-right-bar{0%{right:0}100%{right:15px}}
        @-webkit-keyframes seers-cmp-slide-in-right-bar{0%{right:0}100%{right:15px}}
        @-o-keyframes seers-cmp-slide-in-right-bar{0%{right:0}100%{right:15px}}
        @-ms-keyframes seers-cmp-slide-in-right-bar{0%{right:0}100%{right:15px}}
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-center-bar{transform:translate(-50%,0%)!important;left:50%!important;top:auto!important;bottom:15px;width:396px!important;max-width:100%;padding:15px 15px 0 15px!important;overflow:hidden;border-radius:10px;-webkit-border-radius:10px;-webkit-animation:seers-cmp-slide-in-center-bar .5s both;-moz-animation:seers-cmp-slide-in-center-bar .5s both;-ms-animation:seers-cmp-slide-in-center-bar .5s both;-o-animation:seers-cmp-slide-in-center-bar .5s both;animation:seers-cmp-slide-in-center-bar .5s both}
        @keyframes seers-cmp-slide-in-center-bar{0%{bottom:0}100%{bottom:15px}}
        @-moz-keyframes seers-cmp-slide-in-center-bar{0%{bottom:0}100%{bottom:15px}}
        @-webkit-keyframes seers-cmp-slide-in-center-bar{0%{bottom:0}100%{bottom:15px}}
        @-o-keyframes seers-cmp-slide-in-center-bar{0%{bottom:0}100%{bottom:15px}}
        @-ms-keyframes seers-cmp-slide-in-center-bar{0%{bottom:0}100%{bottom:15px}}
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-middle-bar{top:50%!important;left:50%!important;display: block ;transform:translate(-50%,-50%)!important;bottom:auto!important;right:auto!important;width:396px!important;max-width:100%;padding:15px 15px 0 15px!important;overflow:hidden;border-radius:20px;-webkit-border-radius:20px;-webkit-animation:seers-cmp-fadeout ease .7s;-moz-animation:seers-cmp-fadeout ease .7s;-o-animation:seers-cmp-fadeout ease .7s;-ms-animation:seers-cmp-fadeout ease .7s;animation:seers-cmp-fadeout ease .7s}
        @keyframes seers-cmp-fadeout{0%{opacity:0;transform:translate(-50%,-40%)}100%{opacity:1;transform:translate(-50%,-50%)}}
        @-moz-keyframes seers-cmp-fadeout{0%{opacity:0;transform:translate(-50%,-40%)}100%{opacity:1;transform:translate(-50%,-50%)}}
        @-webkit-keyframes seers-cmp-fadeout{0%{opacity:0;transform:translate(-50%,-40%)}100%{opacity:1;transform:translate(-50%,-50%)}}
        @-o-keyframes seers-cmp-fadeout{0%{opacity:0;transform:translate(-50%,-40%)}100%{opacity:1;transform:translate(-50%,-50%)}}
        @-ms-keyframes seers-cmp-fadeout{0%{opacity:0;transform:translate(-50%,-40%)}100%{opacity:1;transform:translate(-50%,-50%)}}
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-left-bar{bottom:15px;top:auto;left:15px;display: block !important;right:auto;width:396px!important;max-width:100%;padding:15px 15px 0 15px!important;overflow:hidden;border-radius:20px;-webkit-border-radius:20px;-webkit-animation:seers-cmp-slide-in-left-bar .5s both;-moz-animation:seers-cmp-slide-in-left-bar .5s both;-ms-animation:seers-cmp-slide-in-left-bar .5s both;-o-animation:seers-cmp-slide-in-left-bar .5s both;animation:seers-cmp-slide-in-left-bar .5s both}
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-left-bar{top:15px;bottom:auto;left:15px;display: block !important;right:auto;width:396px!important;max-width:100%;padding:15px 15px 0 15px!important;overflow:hidden;border-radius:20px;-webkit-border-radius:20px;-webkit-animation:seers-cmp-slide-in-left-bar .5s both;-moz-animation:seers-cmp-slide-in-left-bar .5s both;-ms-animation:seers-cmp-slide-in-left-bar .5s both;-o-animation:seers-cmp-slide-in-left-bar .5s both;animation:seers-cmp-slide-in-left-bar .5s both}
        
        @keyframes seers-cmp-slide-in-left-bar{0%{left:0}100%{left:15px}}
        @-moz-keyframes seers-cmp-slide-in-left-bar{0%{left:0}100%{left:15px}}
        @-webkit-keyframes seers-cmp-slide-in-left-bar{0%{left:0}100%{left:15px}}
        @-o-keyframes seers-cmp-slide-in-left-bar{0%{left:0}100%{left:15px}}
        @-ms-keyframes seers-cmp-slide-in-left-bar{0%{left:0}100%{left:15px}}
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-right-bar .seers-cmp-cookie-policy-data,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-left-bar .seers-cmp-cookie-policy-data,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-left-bar .seers-cmp-cookie-policy-data,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-right-bar .seers-cmp-cookie-policy-data,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-center-bar .seers-cmp-cookie-policy-data,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-middle-bar .seers-cmp-cookie-policy-data{-webkit-box-align:start!important;-moz-box-align:start!important;-ms-flex-align:start!important;-webkit-align-items:flex-start!important;-moz-flex-align:flex-start!important;-ms-flex-align:flex-start!important;align-items:flex-start!important;width:max-content!important}
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-right-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol, .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-left-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol, .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-left-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-right-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-center-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-middle-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol{-webkit-box-direction:normal;-webkit-box-orient:vertical;-moz-box-direction:normal;-moz-box-orient:vertical;-webkit-box-orient:vertical;-moz-box-orient:vertical;-ms-box-orient:vertical;box-orient:vertical;-webkit-flex-direction:column;-moz-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;-webkit-box-direction:normal;-moz-box-direction:normal;-webkit-flex-flow:row wrap;-moz-flex-flow:row wrap;-ms-flex-flow:row wrap;flex-flow:row wrap}
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-right-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-left-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-left-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-right-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-center-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text,.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-middle-bar .seers-cmp-cookie-policy-data .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text{margin:0 0 15px 0;padding:0!important}
        
        .seers-cmp-cookie-data-hol .seers-cmp-cookie-logo {
            margin: 0 20px 0 0;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-cookie-logo svg {
            width: 50px;
            height: 50px;
            min-width: 50px;
            min-height: 50px;
            max-width: 50px;
            max-height: 50px;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by {
            padding: 10px 20px;
            background: #EFF3FF;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-orient: horizontal;
            -moz-box-orient: horizontal;
            -webkit-box-direction: normal;
            -moz-box-direction: normal;
            -webkit-flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        
        .rtl .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by {
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            -ms-justify-content: flex-start;
            justify-content: flex-start;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-text,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-link,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .back-to-seers-cmp-detail,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-no-cookie-found {
            -webkit-font-smoothing: auto;
            letter-spacing: normal;
            line-height: normal;
            padding: 0;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            border-radius: 0;
            border: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            background: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar-hide {
            -webkit-animation: seers-cmp-slide-out-bottom 1s both !important;
            -moz-animation: seers-cmp-slide-out-bottom 1s both !important;
            -ms-animation: seers-cmp-slide-out-bottom 1s both !important;
            -o-animation: seers-cmp-slide-out-bottom 1s both !important;
            animation: seers-cmp-slide-out-bottom 1s both !important;
        }
        
        /*for rtl languages*/
        .rtl .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-title, .rtl .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-desc, .rtl .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-policy-accordion-tab-content-text, .rtl .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-title, .rtl .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text {
            text-align: right;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-text {
            font-family: "Arial";
            text-transform: unset !important;
            font-size: 13px;
            color: #000;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -webkit-box-pack: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-link {
            width: 70px;
            min-width: 70px;
            max-width: 70px;
            height: 23px;
            min-height: 23px;
            max-height: 23px;
            margin-top: -4px;
            margin-left: 3px;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-scan-staus {
            font-family: "Arial";
            text-transform: unset !important;
            font-size: 12px;
            color: #555;
            display: block;
            background: #EFF3FF;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-link img,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-link svg {
            width: 100%;
            min-width: 100%;
            max-width: 100%;
            height: 100%;
            min-height: 100%;
            max-height: 100%;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer {
            padding: 15px 0 0;
            width: 100%;
            bottom: 0;
            left: 0;
            right: 0;
            position: absolute;
            -webkit-box-shadow: 0 -1px 8px rgb(0 0 0 / 7%);
            -moz-box-shadow: 0 -1px 8px rgb(0 0 0 / 7%);
            -ms-box-shadow: 0 -1px 8px rgb(0 0 0 / 7%);
            -o-box-shadow: 0 -1px 8px rgb(0 0 0 / 7%);
            box-shadow: 0 -1px 8px rgb(0 0 0 / 7%);
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn {
            background: #3B6EF8;
            font-family: "Arial";
            font-weight: 500;
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
            color: #fff;
            border: none;
            padding: 7px 15px;
            line-height: 1.5em;
            white-space: nowrap;
            text-decoration: none;
            text-align: center;
            text-transform: capitalize;
            border-radius: 4px !important;
            -webkit-border-radius: 4px !important;
            width:100% !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn:hover {
            background: #3544ee;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-align: end;
            -moz-box-align: end;
            -webkit-box-pack: end;
            -moz-box-pack: end;
            -ms-flex-pack: end;
            -webkit-justify-content: flex-end;
            -moz-justify-content: flex-end;
            -ms-justify-content: flex-end;
            justify-content: flex-end;
            margin: 0 auto 15px !important;
            padding: 0 19px 0 19px !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header .seers-cmp-cookie-default-banner-logo {
            width: 100px;
            height: 30px;
            min-width: 100px;
            min-height: 30px;
            max-width: 100px;
            max-height: 30px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: start;
            -moz-box-align: start;
            -webkit-box-pack: start;
            -moz-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            -ms-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-box-align: start;
            -moz-box-align: start;
            -ms-flex-align: start;
            -webkit-align-items: flex-start;
            -moz-flex-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
        }
        .rtl .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header .seers-cmp-cookie-default-banner-logo {
            -webkit-justify-content: flex-end;
            -moz-justify-content: flex-end;
            -ms-justify-content: flex-end;
            justify-content: flex-end;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header .seers-cmp-cookie-default-banner-logo svg,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header .seers-cmp-cookie-default-banner-logo img {
            height: 100%;
            min-height: 100%;
            max-height: 100%;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text {
            padding: 20px;
        }
        
        /*.seers-cmp-cookie-policy-accordion-tabs {
            padding-right: 15px;
            overflow-y: auto;
            height: calc(100vh - 300px);
            padding-bottom: 100px;
        }*/
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text {
            height: calc(100vh - 200px);
            overflow-y: auto;
            padding: 20px;
        }
        /*start style seers-cmp-cookie-detail-hol */
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol {
            margin: 0 0 15px 0;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .back-to-seers-cmp-detail {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: start;
            -moz-box-align: start;
            -webkit-box-pack: start;
            -moz-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            -ms-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            font-size: 18px;
            color: #555;
            margin: 30px 0 20px 0;
            font-family: "Arial";
            display: inline-block;
            text-transform: unset !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .back-to-seers-cmp-detail svg {
            cursor: pointer;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-search-cookie {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0 0 20px 0;
            border-bottom: 1px solid #d8d8d8 !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-search-cookie .seers-cmp-search-bar {
            width: 100% !important;
            padding: 11.2px 20px !important;
            height: 47px !important;
            outline: none !important;
            font-size: 16px;
            color: #555 !important;
            font-style: italic !important;
            border: 1px solid #dbdbdb !important;
            overflow-x: hidden !important;
            border-radius: 4px !important;
            -webkit-border-radius: 4px !important;
            font-weight: normal !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-search-cookie .seers-cmp-filter-icon {
            margin: 0 0 0 20px !important;
            cursor: pointer !important;
            width: 47px !important;
            height: 47px !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-search-cookie .seers-cmp-filter-icon:hover svg path {
            fill: #6cc04a !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-view-cookie-table-link {
            font-size: 14px;
            color: #555;
            line-height: 16px;
            font-family: "Arial";
            font-weight: normal;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-view-cookie-table-link:hover {
            color: #3b6ef8 !important;
            text-decoration: underline !important;
        }
        /*
.seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list {
    margin: 0 0 15px 0 !important;
}
*/
        
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr td {
            padding: 10px 2em 10px 0 !important;
            font-size: 14px;
            color: #555;
            line-height: 24px !important;
            font-family: "Arial";
        }
        
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr td:first-child {
            font-weight: bold !important;
        }
        /* .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr td.td-hover-seers:hover {
    overflow-y: scroll !important;
} */
        /*end style seers-cmp-cookie-detail-hol */
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-title {
            font-weight: bold;
            position: relative;
            color: #555;
            margin: 0 0 15px 0 !important;
            font-family: "Arial";
            text-transform: unset !important;
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . (get_option('SCCBPP_cookie_consent_font_size') + 6) . "px !important;"); }else{ echo ("font-size: " . ($this->defaultfontsize + 6) . "px !important;"); }?>
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text {
            margin: 0 0 15px 0 !important;
            color: #696969;
            font-family: "Arial";
            line-height: 20px !important;
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-direction: normal;
            -webkit-box-orient: vertical;
            -moz-box-direction: normal;
            -moz-box-orient: vertical;
            -webkit-box-orient: vertical;
            -moz-box-orient: vertical;
            -ms-box-orient: vertical;
            box-orient: vertical;
            -webkit-flex-direction: column;
            -moz-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-read-cookie {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            color: #696969;
            font-family: "Arial";
            font-size: 13px;
            line-height: 18px !important;
            display: inline-block;
            margin: 0 0 15px 0 !important;
            cursor: default;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-read-cookie svg {
            width: 12px !important;
            vertical-align: middle !important;
            fill: #3b6ef8 !important;
            box-sizing: border-box !important;
            cursor: pointer;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-policy-banner-text-up-link {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: start;
            -moz-box-align: start;
            -webkit-box-pack: start;
            -moz-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            -ms-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            color: #3544ee;
            font-family: "Arial";
            font-size: 13px;
            text-decoration: none;
            cursor: pointer;
            margin: 0 0 15px 0;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-policy-banner-text-up-link svg {
            width: 18px;
            height: 18px;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-policy-banner-text-up-link svg path {
            fill: #3544ee;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-cookie-policy-read-more-info {
            color: #3544ee;
            font-family: "Arial";
            font-size: 13px;
            display: block;
            cursor: pointer;
            text-decoration: none;
            margin: 0 0 15px 0;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-policy-read-more-info:hover {
            color: #6cc04a;
            text-decoration: underline;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-btn {
            background: #3B6EF8;
            font-family: "Arial";
            font-weight: 500 !important;
            font-size: 14px;
            color: #fff;
            border: none;
            padding: 7px 15px !important;
            line-height: 1.5em !important;
            white-space: nowrap;
            text-decoration: none;
            text-transform: capitalize;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            margin: 0 10px 15px !important;
            width: 100% !important;
            border-radius: 4px;
            -webkit-border-radius: 4px;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-data {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100vw;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text {
            padding: 0 30px 0 0;
            margin: 0 0 15px 0 !important;
            -webkit-box-flex: 1;
            -webkit-flex: auto;
            -moz-flex: auto;
            -ms-flex: auto;
            flex: auto;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-title,
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-desc,
        .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-policy-accordion-tab-content-text,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-title,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text {
            -webkit-font-smoothing: auto;
            letter-spacing: normal;
            line-height: normal;
            padding: 0;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            border-radius: 0;
            border: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            background: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-title {
            font-family: "Arial";
            font-weight: bold;
            font-size: 15px;
            color: #000;
            margin: 0 0 5px 0;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-desc {
            font-family: "Arial";
            font-weight: normal;
            font-size: 14px;
            color: #000000;
            margin: 0;
            line-height: 20px;
        }

        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-middle-bar .seers-cmp-policy-desc {
            font-family: "Arial";
            font-weight: normal;
            font-size: 14px;
            color: #000000;
            margin: 0;
            line-height: 20px;
            padding-bottom: 15px;
        }
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-right-bar .seers-cmp-policy-desc {
            font-family: "Arial";
            font-weight: normal;
            font-size: 14px;
            color: #000000;
            margin: 0;
            line-height: 20px;
            padding-bottom: 15px;
        }
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-left-bar .seers-cmp-policy-desc {
            font-family: "Arial";
            font-weight: normal;
            font-size: 14px;
            color: #000000;
            margin: 0;
            line-height: 20px;
            padding-bottom: 15px;
        }
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-left-bar .seers-cmp-policy-desc {
            font-family: "Arial";
            font-weight: normal;
            font-size: 14px;
            color: #000000;
            margin: 0;
            line-height: 20px;
            padding-bottom: 15px;
        }
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-right-bar .seers-cmp-policy-desc {
            font-family: "Arial";
            font-weight: normal;
            font-size: 14px;
            color: #000000;
            margin: 0;
            line-height: 20px;
            padding-bottom: 15px;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-read-more-btn {
            font-family: "Arial";
            font-weight: 500;
            font-size: 12px;
            color: #3B6EF8;
            display: inline-block;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-read-more-btn:hover {
            color: #6cc04a;
            text-decoration: underline;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 -7.5px;
            /*  min-width: 381px;*/
            max-width: 381px;
            width: 381px;
            /* flex-flow: row wrap; */
        }
        .seers-cmp-cookie-policy-hanging-btn-hol {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: block !important;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 -7.5px;
            /* min-width: 381px; */
            max-width: 381px;
            width: 381px;
            /* flex-flow: row wrap; */
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol.seers-cmp-cookie-policy-btn-hol-wrap {
            -webkit-box-orient: horizontal;
            -moz-box-orient: horizontal;
            -webkit-box-direction: normal;
            -moz-box-direction: normal;
            -webkit-flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            min-width: 381px;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol.seers-cmp-cookie-policy-btn-hol-wrap .seers-cmp-btn,
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol.seers-cmp-cookie-policy-btn-hol-wrap .seers-cmp-preference-btn {
            width: 100% !important;
            -webkit-flex: auto !important;
            -moz-flex: auto !important;
            -ms-flex: auto !important;
            flex: auto !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-btn,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn,
        .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-read-cookie {
            -webkit-font-smoothing: auto;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none;
            text-transform: capitalize;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn {
            border: 1px solid transparent !important;
            background: #3B6EF8;
            font-family: "Arial";
            font-weight: 500;
            font-size: 14px;
            color: #fff;
            border: none;
            padding: 7px 15px !important;
            line-height: 1.5em !important;
            white-space: nowrap;
            text-decoration: none;
            margin: 0 7.5px 15px;
            text-transform: capitalize;
            display: inline-block;
            text-align: center;
            cursor: pointer;
        }
        /*seers-cmp-style-btn  */
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn.seers-cmp-default-style-btn {
            border-radius: 4px !important;
            -webkit-border-radius: 4px !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn.seers-cmp-flat-style-btn {
            border-radius: 0px !important;
            -webkit-border-radius: 0px !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn.seers-cmp-rounded-style-btn {
            border-radius: 16px !important;
            -webkit-border-radius: 16px !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn.seers-cmp-stroke-style-btn {
            border-radius: 4px !important;
            -webkit-border-radius: 4px !important;
            border: 1px solid #c1c1c1 !important;
        }
        /*
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn.seers-cmp-default-style-btn {
            border-radius: 4px;
            -webkit-border-radius: 4px;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn.seers-cmp-flat-style-btn {
            border-radius: 0px !important;
            -webkit-border-radius: 0px !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn.seers-cmp-rounded-style-btn {
            border-radius: 16px !important;
            -webkit-border-radius: 16px !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn.seers-cmp-stroke-style-btn {
            border-radius: 4px !important;
            -webkit-border-radius: 4px !important;
        }
*/
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn {
            font-family: "Arial";
            font-weight: 500;
            font-size: 14px;
            color: #3B6EF8;
            border: 1px solid #c1c1c1 !important;
            border: none;
            padding: 7px 15px !important;
            line-height: 1.5em !important;
            white-space: nowrap;
            text-decoration: none;
            margin: 0 7.5px 15px;
            text-transform: capitalize;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            border-radius: 4px;
            -webkit-border-radius: 4px;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn,
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn {
            /* width: 112px; */
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -webkit-box-pack: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 1 !important;
            -webkit-flex: 1 0 auto !important;
            -moz-flex: 1 0 auto !important;
            -ms-flex: 1 0 auto !important;
            flex: 1 0 auto !important;
            min-width: 112px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
        }
        /* .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn:hover {
    background: #3544ee !important;
}
.seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn:hover {
    background: #6cc04a !important;
    color: #fff !important;
} */
        
        .seers-cmp-overlay {
            display: none;
            position: fixed;
            width: 100%;
            z-index: 99999999999999;
            height: 100%;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            -webkit-animation: seers-fade-in .7s ease-in-out;
            -moz-animation: seers-fade-in .7s ease-in-out;
            -ms-animation: seers-fade-in .7s ease-in-out;
            -o-animation: seers-fade-in .7s ease-in-out;
            animation: seers-fade-in .7s ease-in-out;
        }
        
        @-webkit-keyframes seers-fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        @-moz-keyframes seers-fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        @-ms-keyframes seers-fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        @-o-keyframes seers-fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        @keyframes seers-fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content {
            overflow: hidden;
            z-index: 999999999999999;
            background-color: #fff;
            position: fixed;
            top: 0;
            bottom: 0;
            left: -760px;
            max-width: 370px;
            width: 370px;
            -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -ms-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -webkit-transistion-property: all;
            -moz-transistion-property: all;
            -ms-transistion-property: all;
            -o-transistion-property: all;
            transition-property: all;
            -webkit-transition-duration: .5s;
            -moz-transition-duration: .5s;
            -ms-transition-duration: .5s;
            -o-transition-duration: .5s;
            transition-duration: .5s;
        }
        
        .seers-cmp-overlay.seers-cmp-overlay-active {
            display: block;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content.seers-cmp-cookie-banner-active {
            left: 0px;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content.seers-cmp-cookie-banner-no-active {
            left: -760px!important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-default-banner-close {
            position: absolute;
            right: 20px;
            top: 25px;
            cursor: pointer;
            font-size: 30px;
            line-height: 0;
            color: #3B6EF8;
            font-weight: bold;
            z-index: 99;
        }
        /*scrollbar style*/
        
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background-color: #9b9696;
            border: 5px solid transparent;
        }
        
        ::-webkit-scrollbar-button {
            display: none;
        }
        /*accordion*/
        
        .seers-cmp-cookie-policy-accordion-tab {
            overflow: hidden;
            position: relative;
            border: 1px solid #b7b7b7;
            /* background: #fff; */
            border-radius: 7px;
            margin: 15px 0px;
        }
        
        .seers-cmp-cookie-policy-accordion-tab.seers-top-border-none {
            /* border-top: none !important; */
            border: 1px solid #b7b7b7;
            border-radius: 7px;
            margin-bottom: 0px;
        }
        
        .seers-cmp-cookie-policy-accordion-tab input.seers-cmp-cookie-policy-accordion-check {
            position: absolute;
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            outline: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-size: 0 !important;
            line-height: 0 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-label {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            padding: 13px 19.5px 13px 32.5px !important;
            display: block !important;
            font-weight: bold;
            cursor: pointer;
            position: relative;
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . (get_option('SCCBPP_cookie_consent_font_size') + 1) . "px !important;"); }else{ echo ("font-size: " . ($this->defaultfontsize + 1) . "px !important;"); }?>
            color: #555;
            vertical-align: middle;
            margin: 0 0 0 0 !important;
            font-family: "Arial";
            text-transform: unset !important;
            border-radius: 7px;
            -webkit-border-radius: 7px;
            transition: background-color 0.2s ease-out 0.3s, color 0.2s ease-out 0s;
            background-color: transparent;
            /* border: 1px solid #b7b7b7;  */
        }


        









        .seers-cmp-cookie-policy-accordion-tab-universal {
            overflow: hidden;
            position: relative;
            border: 1px solid #b7b7b7;
            /* background: #fff; */
            border-radius: 7px;
            margin: 15px 0px;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-universal.seers-top-border-none {
            /* border-top: none !important; */
            border: 1px solid #b7b7b7;
            border-radius: 7px;
            margin-bottom: 0px;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-universal input.seers-cmp-cookie-policy-accordion-check {
            position: absolute;
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            outline: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-size: 0 !important;
            line-height: 0 !important;
        }

        .seers-cmp-cookie-policy-accordion-tab-universal-label {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            padding: 1em 1.5em 1em 1.5em !important;
            display: block !important;
            font-weight: bold;
            cursor: pointer;
            position: relative;
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . (get_option('SCCBPP_cookie_consent_font_size') + 1) . "px !important;"); }else{ echo ("font-size: " . ($this->defaultfontsize + 1) . "px !important;"); }?>
            color: #555;
            vertical-align: middle;
            margin: 0 0 0 0 !important;
            font-family: "Arial";
            text-transform: unset !important;
            border-radius: 7px;
            -webkit-border-radius: 7px;
            transition: background-color 0.2s ease-out 0.3s, color 0.2s ease-out 0s;
            background-color: transparent;
            /* border: 1px solid #b7b7b7;  */
        }
        
        
        .seers-cms-universal-detail-categories::before {
            content: '';
            position: absolute;
            width: 10px;
            height: 2px;
            background: #3b6ef8;
            right: 15px !important;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        
        .seers-cmp-cookie-policy-accordion-tab-label::after, .seers-cmp-cookie-policy-accordion-tab-label::before {
            content: '';
            position: absolute;
            width: 10px;
            height: 2px;
            background: #3b6ef8;
            left: 15px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        
        .seers-cmp-cookie-policy-accordion-tab-label::after{
            transform: rotate(90deg);
            top: 48%!important;
        }
        
        .rtl .seers-cmp-cookie-policy-accordion-tab-label{
            text-align:left;
        }
        
        .seers-cmp-cookie-policy-accordion-tab input.seers-cmp-cookie-policy-accordion-check:checked+.seers-cmp-cookie-policy-accordion-tab-label::after {
            transform: rotate(0deg)!important;
        }
            
        
        
        .seers-cmp-cookie-policy-accordion-tab input.seers-cmp-cookie-policy-accordion-check:checked+.seers-cmp-cookie-policy-accordion-tab-label {
            color: #3b6ef8 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab input.seers-cmp-cookie-policy-accordion-check:checked+.seers-cmp-cookie-policy-accordion-tab-label::after {
            border-color: #3b6ef8 !important;
            border-width: 0px 0px 1.5px 1.5px !important;
            top: 50% !important;
        }







        .seers-cmp-cookie-policy-accordion-tab-universal-label::after, .seers-cmp-cookie-policy-accordion-tab-universal-label::before {
            content: '';
            position: absolute;
            width: 10px;
            height: 2px;
            background: #3b6ef8;
            right: 15px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        
        .seers-cmp-cookie-policy-accordion-tab-universal-label::after{
            transform: rotate(90deg);
            top: 48%!important;
        }
        
        .rtl .seers-cmp-cookie-policy-accordion-tab-universal-label{
            text-align:left;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-universal input.seers-cmp-cookie-policy-accordion-check:checked+.seers-cmp-cookie-policy-accordion-tab-universal-label::after {
            transform: rotate(0deg)!important;
        }
            
        
        
        .seers-cmp-cookie-policy-accordion-tab-universal input.seers-cmp-cookie-policy-accordion-check:checked+.seers-cmp-cookie-policy-accordion-tab-universal-label {
            color: #3b6ef8 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-universal input.seers-cmp-cookie-policy-accordion-check:checked+.seers-cmp-cookie-policy-accordion-tab-universal-label::after {
            border-color: #3b6ef8 !important;
            border-width: 0px 0px 1.5px 1.5px !important;
            top: 50% !important;
        }
        /*
        .seers-cmp-cookie-policy-accordion-tab-label::after {
            content: '';
            position: absolute;
            width: 10px;
            height: 2px;
            background: #3b6ef8;
            left: 15px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        
        .seers-cmp-cookie-policy-accordion-tab-label::after {
            transform: rotate(90deg);
            top: 48% !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab input.seers-cmp-cookie-policy-accordion-check:checked+.seers-cmp-cookie-policy-accordion-tab-label::after {
            transform: rotate(0deg) !important;
        }
        
*/
        
        .seers-cmp-cookie-policy-accordion-tab-content {
            max-height: 0;
            color: #555;
            /* background: white; */
            overflow: hidden;
            -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -ms-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -webkit-transistion-property: all;
            -moz-transistion-property: all;
            -ms-transistion-property: all;
            -o-transistion-property: all;
            transition-property: all;
            -webkit-transition-duration: .3s;
            -moz-transition-duration: .3s;
            -ms-transition-duration: .3s;
            -o-transition-duration: .3s;
            transition-duration: .3s;
        }








        .seers-cmp-cookie-policy-accordion-tab-universal-content {
            max-height: 0;
            color: #555;
            /* background: white; */
            overflow: hidden;
            -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -ms-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -webkit-transistion-property: all;
            -moz-transistion-property: all;
            -ms-transistion-property: all;
            -o-transistion-property: all;
            transition-property: all;
            -webkit-transition-duration: .3s;
            -moz-transition-duration: .3s;
            -ms-transition-duration: .3s;
            -o-transition-duration: .3s;
            transition-duration: .3s;
        }
        
        .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header {
            padding: 0 20px;
            height: 55px;
            -webkit-box-shadow: 0 2px 4px 0 rgb(0 0 0 / 7%);
            -moz-box-shadow: 0 2px 4px 0 rgb(0 0 0 / 7%);
            -ms-box-shadow: 0 2px 4px 0 rgb(0 0 0 / 7%);
            -o-box-shadow: 0 2px 4px 0 rgb(0 0 0 / 7%);
            box-shadow: 0 2px 4px 0 rgb(0 0 0 / 7%);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: start;
            -moz-box-align: start;
            -webkit-box-pack: start;
            -moz-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            -ms-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        
        .rtl .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header {
            -webkit-justify-content: flex-end;
            -moz-justify-content: flex-end;
            -ms-justify-content: flex-end;
            justify-content: flex-end;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list {
            border-bottom: 1px solid #d8d8d8 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab input:checked~.seers-cmp-cookie-policy-accordion-tab-content {
            max-height: 100vh;
            -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -ms-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -webkit-transistion-property: all;
            -moz-transistion-property: all;
            -ms-transistion-property: all;
            -o-transistion-property: all;
            transition-property: all;
            -webkit-transition-duration: .3s;
            -moz-transition-duration: .3s;
            -ms-transition-duration: .3s;
            -o-transition-duration: .3s;
            transition-duration: .3s;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-policy-accordion-tab-content-text {
            padding: 1.2em;
            margin: 0;
            color: #696969;
            font-family: "Arial";
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
            line-height: 22px !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-policy-detail-btn {
            margin: 0 1.2em 1.2em 1.2em;
            color: rgb(85, 85, 85);
            font-family: "Arial";
            font-size: 14px;
            display: block;
            cursor: pointer;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-policy-detail-btn:hover {
            color: #3b6ef8 !important;
            text-decoration: underline;
        }
        










        .seers-cmp-cookie-policy-accordion-tab-universal-content .seers-cmp-cookie-table-list {
            border-bottom: 1px solid #d8d8d8 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-universal input:checked~.seers-cmp-cookie-policy-accordion-tab-universal-content {
            max-height: 100vh;
            padding: 0px 32px 2px;
            -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -ms-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -webkit-transistion-property: all;
            -moz-transistion-property: all;
            -ms-transistion-property: all;
            -o-transistion-property: all;
            transition-property: all;
            -webkit-transition-duration: .3s;
            -moz-transition-duration: .3s;
            -ms-transition-duration: .3s;
            -o-transition-duration: .3s;
            transition-duration: .3s;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-universal-content .seers-cmp-cookie-policy-accordion-tab-universal-content-text {
            padding: 1.2em;
            margin: 0;
            color: #696969;
            font-family: "Arial";
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
            line-height: 22px !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-universal-content .seers-cmp-cookie-policy-detail-btn {
            margin: 0 1.2em 1.2em 1.2em;
            color: rgb(85, 85, 85);
            font-family: "Arial";
            font-size: 14px;
            display: block;
            cursor: pointer;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-universal-content .seers-cmp-cookie-policy-detail-btn:hover {
            color: #3b6ef8 !important;
            text-decoration: underline;
        }
        
        a.seers-cmp-cookie-policy-detail-btn {
            color: var(--link-color) !important;
        }
        
        span.seers-cmp-cookie-policy-always-active {
            color: var(--link-color) !important;
        }
        /*switch button*/
        
        .seers-cmp-cookie-policy-switchers {
            position: absolute;
            top: 50% !important;
            right: 16px !important;
            -webkit-transform: translateY(-50%) !important;
            -moz-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            -o-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch {
            position: absolute;
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch+label {
            width: 36px;
            height: 15px;
            margin: 0 !important;
            padding: 0 !important;
            background-color: #dddddd;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
            border-radius: 30px;
            display: block;
            position: relative;
            cursor: pointer;
            outline: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch+label::before,
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch+label::after {
            display: block !important;
            position: absolute !important;
            top: 1px !important;
            left: 1px !important;
            bottom: 1px !important;
            content: "" !important;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch+label::before {
            right: 1px !important;
            background-color: #dddddd;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
            border-radius: 30px;
            -webkit-transition: background 0.4s;
            -moz-transition: background 0.4s;
            -o-transition: background 0.4s;
            transition: background 0.4s;
            margin: -1px;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch+label::after {
            width: 20px;
            height: 20px;
            margin-top: -4px;
            margin-left: -4px;
            background-color: #fff;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            -ms-border-radius: 100%;
            -o-border-radius: 100%;
            border-radius: 100%;
            -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            -webkit-transition: margin 0.4s;
            -moz-transition: margin 0.4s;
            -o-transition: margin 0.4s;
            transition: margin 0.4s;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch:checked+label::after {
            margin-left: 18px !important;
            background: #3544ee !important;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch:checked+label:before {
            background-color: #d5e9ff;
        }




/*Preference Banner switch button*/
        .seers-cmp-cookie-policy-switchers-first-preference {
            position: absolute;
            margin: 20px 10px 15px 10px;
            top: 30px;
            /* top: 120% !important;
            right: 36px !important; */
            -webkit-transform: translateY(-50%) !important;
            -moz-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            -o-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }
        .seers-cmp-cookie-policy-switchers-first-preference input.seers-cmp-cookie-policy-banner-switch {
            position: absolute;
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
        }
        
        .seers-cmp-cookie-policy-switchers-first-preference input.seers-cmp-cookie-policy-banner-switch+label {
            width: 36px;
            height: 15px;
            margin: 0 !important;
            padding: 0 !important;
            background-color: #dddddd;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
            border-radius: 30px;
            display: block;
            position: relative;
            cursor: pointer;
            outline: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        .seers-cmp-cookie-policy-switchers-first-preference input.seers-cmp-cookie-policy-banner-switch+label::before,
        .seers-cmp-cookie-policy-switchers-first-preference input.seers-cmp-cookie-policy-banner-switch+label::after {
            display: block !important;
            position: absolute !important;
            top: 1px !important;
            left: 1px !important;
            bottom: 1px !important;
            content: "" !important;
        }
        
        .seers-cmp-cookie-policy-switchers-first-preference input.seers-cmp-cookie-policy-banner-switch+label::before {
            right: 1px !important;
            background-color: #dddddd;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
            border-radius: 30px;
            -webkit-transition: background 0.4s;
            -moz-transition: background 0.4s;
            -o-transition: background 0.4s;
            transition: background 0.4s;
            margin: -1px;
        }
        
        .seers-cmp-cookie-policy-switchers-first-preference input.seers-cmp-cookie-policy-banner-switch+label::after {
            width: 20px;
            height: 20px;
            margin-top: -4px;
            margin-left: -4px;
            background-color: #fff;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            -ms-border-radius: 100%;
            -o-border-radius: 100%;
            border-radius: 100%;
            -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            -webkit-transition: margin 0.4s;
            -moz-transition: margin 0.4s;
            -o-transition: margin 0.4s;
            transition: margin 0.4s;
        }
        
        .seers-cmp-cookie-policy-switchers-first-preference input.seers-cmp-cookie-policy-banner-switch:checked+label::after {
            margin-left: 18px !important;
            background: #3544ee !important;
        }
        
        .seers-cmp-cookie-policy-switchers-first-preference input.seers-cmp-cookie-policy-banner-switch:checked+label:before {
            background-color: #d5e9ff;
        }



        /*Universal Banner switch button*/
        .seers-cmp-cookie-policy-switchers-universal {
            position: absolute;
            top: 50% !important;
            right: 50px !important;
            -webkit-transform: translateY(-50%) !important;
            -moz-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            -o-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }
        
        .seers-cmp-cookie-policy-switchers-universal input.seers-cmp-cookie-policy-banner-switch {
            position: absolute;
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
        }
        
        .seers-cmp-cookie-policy-switchers-universal input.seers-cmp-cookie-policy-banner-switch+label {
            width: 36px;
            height: 15px;
            margin: 0 !important;
            padding: 0 !important;
            background-color: #dddddd;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
            border-radius: 30px;
            display: block;
            position: relative;
            cursor: pointer;
            outline: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        .seers-cmp-cookie-policy-switchers-universal input.seers-cmp-cookie-policy-banner-switch+label::before,
        .seers-cmp-cookie-policy-switchers-universal input.seers-cmp-cookie-policy-banner-switch+label::after {
            display: block !important;
            position: absolute !important;
            top: 1px !important;
            left: 1px !important;
            bottom: 1px !important;
            content: "" !important;
        }
        
        .seers-cmp-cookie-policy-switchers-universal input.seers-cmp-cookie-policy-banner-switch+label::before {
            right: 1px !important;
            background-color: #dddddd;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
            border-radius: 30px;
            -webkit-transition: background 0.4s;
            -moz-transition: background 0.4s;
            -o-transition: background 0.4s;
            transition: background 0.4s;
            margin: -1px;
        }
        
        .seers-cmp-cookie-policy-switchers-universal input.seers-cmp-cookie-policy-banner-switch+label::after {
            width: 20px;
            height: 20px;
            margin-top: -4px;
            margin-left: -4px;
            background-color: #fff;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            -ms-border-radius: 100%;
            -o-border-radius: 100%;
            border-radius: 100%;
            -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            -webkit-transition: margin 0.4s;
            -moz-transition: margin 0.4s;
            -o-transition: margin 0.4s;
            transition: margin 0.4s;
        }
        
        .seers-cmp-cookie-policy-switchers-universal input.seers-cmp-cookie-policy-banner-switch:checked+label::after {
            margin-left: 18px !important;
            background: #3544ee !important;
        }
        
        .seers-cmp-cookie-policy-switchers-universal input.seers-cmp-cookie-policy-banner-switch:checked+label:before {
            background-color: #d5e9ff;
        }
        
        .seers-cmp-cookie-policy-always-active {
            color: rgb(85, 85, 85) !important;
            font-size: 13px !important;
            font-family: arial !important;
            font-weight: normal;
            position: absolute;
            right: 15px !important;
            top: 50% !important;
            -webkit-transform: translateY(-50%) !important;
            -moz-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            -o-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }
        .seers-cmp-cookie-policy-always-active-universal {
            color: rgb(85, 85, 85) !important;
            font-size: 13px !important;
            font-family: arial !important;
            font-weight: normal;
            position: absolute;
            right: 50px !important;
            top: 50% !important;
            -webkit-transform: translateY(-50%) !important;
            -moz-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            -o-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }

        .seers-cmp-cookie-policy-first-preference {
            display: flex;
            margin: 0px 0px 20px;
        }

        .seers-cmp-cookie-policy-accordion-tab-label-first-preference {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            padding: 1em 3.5em 1em 0em !important;
            display: block !important;
            font-weight: bold;
            cursor: pointer;
            position: relative;
            font-size: 13px !important;
            color: #555;
            vertical-align: middle;
            margin: 0 0 0 0 !important;
            font-family: "Arial";
            text-transform: unset !important;
            border-radius: 7px;
            -webkit-border-radius: 7px;
            transition: background-color 0.2s ease-out 0.3s, color 0.2s ease-out 0s;
            background-color: transparent;
            /*  border: 1px solid #b7b7b7; */
        }

        .seers-cmp-show-details {
            margin-top: 28px;
        }
        .seers-cms-header-universal-bar{
            width: 100%;
            background-color: #e3e6e8;
            border-bottom: 1px swolid #d6d6d6;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            display: flex;
            padding: 18px 18px 10px;
        }
        .seers-cmp-cookie-policy-powered-by-link-universal {
            margin-left: auto;
            position: relative;
            top: 10px;
        }
        .seers-cmp-cookie-policy-powered-by-link-universal svg {
            width: 88px;
            height: fit-content;
        }

        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-preference-universal-bar .seers-cmp-cookie-policy-hol {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: block;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }

        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-preference-universal-bar .seers-cmp-cookie-policy-btn-hol {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 0px;
            /* min-width: 381px; */
            max-width: 100%;
            width: 100%;
            /* flex-flow: row wrap; */
            background-color: #e3e3e3;
            padding: 20px 12px 6px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .seers-cms-tabs-universal-bar {
            display: flex;
            border-bottom: 1px solid #d6d6d6;
            /* padding-bottom: 10px; */
        }
        .seers-cmp-consent-tab {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            text-align: center;
            padding: 20px 0 10px;
        }
        .seers-cmp-policy-tab {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            text-align: center;
            padding: 20px 0 10px;
        }
        .seers-cmp-detail-tab {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            text-align: center;
            padding: 20px 0 10px;
        }
        .seers-cmp-consent-tab.active, .seers-cmp-detail-tab.active, .seers-cmp-policy-tab.active {
        border-bottom: 2px solid;
        <?php if(get_option('SCCBPP_cookie_consent_agree_btn_color') && get_option('SCCBPP_cookie_consent_agree_btn_color')!=''){ echo ("border-bottom-color: " . get_option('SCCBPP_cookie_consent_agree_btn_color') . " !important;"); }else{ echo ""; }?>
        }
        .seers-cms-pages-universal-bar {
            padding: 15px 0px 0px;
        }
        .seers-cmp-cookie-policy-universal-choices {
        display: flex;
        margin: 20px 0px 0px;
        width: 100%;
        }

        .seers-cmp-cookie-policy-accordion-tab-label-universal {
            display: flex; 
            gap: 10px;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2em 0em 4em 0em !important;
            font-weight: bold;
            cursor: pointer;
            position: relative;
            font-size: 13px !important;
            color: #555;
            vertical-align: middle;
            margin: 0 !important;
            font-family: "Arial";
            text-transform: unset !important;
            /* border-radius: 7px; */
            transition: background-color 0.2s ease-out 0.3s, color 0.2s ease-out 0s;
            background-color: transparent;
            flex: 1;
            <?php if(get_option('SCCBPP_cookie_consent_body_text_color') && get_option('SCCBPP_cookie_consent_body_text_color')!=''){ echo ("color: " . get_option('SCCBPP_cookie_consent_body_text_color') . " !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_style') && get_option('SCCBPP_cookie_consent_font_style')!='' && get_option('SCCBPP_cookie_consent_font_style')!='inherit'){ echo ("font-family: \"" . get_option('SCCBPP_cookie_consent_font_style') . "\" !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . (get_option('SCCBPP_cookie_consent_font_size') + 2) . "px !important;"); }else{ echo ("font-size: " . ($this->defaultfontsize + 2) . "px !important;"); }?>
            /* display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: center;
            text-align: center;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            padding: 1em 3.5em 1em 0em !important;
            display: block !important;
            font-weight: bold;
            cursor: pointer;
            position: relative;
            font-size: 13px !important;
            color: #555;
            vertical-align: middle;
            margin: 0 0 0 0 !important;
            font-family: "Arial";
            text-transform: unset !important;
            border-radius: 7px;
            -webkit-border-radius: 7px;
            transition: background-color 0.2s ease-out 0.3s, color 0.2s ease-out 0s; */
            background-color: transparent;
            /* border: 1px solid #b7b7b7; */
            /* flex: 1; */
            /* justify-content: center; */
        }
        .seers-cms-universal-content-section {
            background-color: <?php if(get_option('SCCBPP_cookie_consent_banner_bg_color') && get_option('SCCBPP_cookie_consent_banner_bg_color')!=''){ echo(get_option('SCCBPP_cookie_consent_banner_bg_color')); }else{ echo "#fff"; }?>;
        }

        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-preference-universal-bar .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text {
            padding: 0 30px 0 0;
            margin: 0 0 0px 0 !important;
            -webkit-box-flex: 1;
            -webkit-flex: auto;
            -moz-flex: auto;
            -ms-flex: auto;
            flex: auto;
        }

        .seers-cms-universal-detail-categories {
            <?php if(get_option('SCCBPP_cookie_consent_body_text_color') && get_option('SCCBPP_cookie_consent_body_text_color')!=''){ echo ("color: " . get_option('SCCBPP_cookie_consent_body_text_color') . " !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_style') && get_option('SCCBPP_cookie_consent_font_style')!='' && get_option('SCCBPP_cookie_consent_font_style')!='inherit'){ echo ("font-family: \"" . get_option('SCCBPP_cookie_consent_font_style') . "\" !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . (get_option('SCCBPP_cookie_consent_font_size') + 2) . "px !important;"); }else{ echo ("font-size: " . ($this->defaultfontsize + 2) . "px !important;"); }?>
            font-weight: 600;
        }

        .seers-cms-universal-detail-categories-detail {
            <?php if(get_option('SCCBPP_cookie_consent_body_text_color') && get_option('SCCBPP_cookie_consent_body_text_color')!=''){ echo ("color: " . get_option('SCCBPP_cookie_consent_body_text_color') . " !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_style') && get_option('SCCBPP_cookie_consent_font_style')!='' && get_option('SCCBPP_cookie_consent_font_style')!='inherit'){ echo ("font-family: \"" . get_option('SCCBPP_cookie_consent_font_style') . "\" !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . (get_option('SCCBPP_cookie_consent_font_size') + 2) . "px !important;"); }else{ echo ("font-size: " . ($this->defaultfontsize + 2) . "px !important;"); }?>
            font-weight: 500;
        }
        
        .seers-cms-universal-detail-tab-content {
            border: 1px solid #d7d7d7 !important;
        }

        .seers-cmp-banner-bar.seers-cmp-top-hanging-bar .seers-cmp-cookie-policy-text {
            padding-right: 20px;
        }
        .seers-cmp-banner-bar.seers-cmp-banner-hanging-bar .seers-cmp-cookie-policy-text {
            padding-right: 20px;
        }
        .seers-cmp-banner-bar.seers-cmp-banner-preference-bar .seers-cmp-cookie-policy-text {
            padding-right: 20px;
        }
        .seers-cmp-banner-bar.seers-cmp-preference-bottom-hanging-bar .seers-cmp-cookie-policy-text {
            padding-right: 20px;
        }

        .seers-cmp-cookie-policy-switchers-customize-universal {
            top: 50px !important;
        }

        @media screen and (max-width: 1300px) {
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-preference-bottom-hanging-bar {
                position: fixed;
                bottom: 0;
                top: auto;
                left: 0;
                right: 0;
                width: 92%;
                max-width: 92%;
                margin: auto;
                margin-bottom: 55px;
                padding: 30px 3% 15px;
                z-index: 9999999999999;
                -webkit-box-sizing: border-box;
                border: 1px solid #E0DEDE;
                border-radius: 10px;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                background: #ffffff;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: flex;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -webkit-box-align: justify;
                -moz-box-align: justify;
                -webkit-box-pack: justify;
                -moz-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -ms-justify-content: space-between;
                justify-content: space-between;
                box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
                -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
                -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
                -webkit-animation: seers-cmp-slide-in-bottom 1s both;
                -moz-animation: seers-cmp-slide-in-bottom 1s both;
                -ms-animation: seers-cmp-slide-in-bottom 1s both;
                -o-animation: seers-cmp-slide-in-bottom 1s both;
                animation: seers-cmp-slide-in-bottom 1s both;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-preference-bottom-hanging-bar .seers-cmp-cookie-policy-btn-hol {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 -7.5px;
            /* min-width: 381px; */
            max-width: 100%;
            width: 100%;
            /* flex-flow: row wrap; */
        }
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-preference-universal-bar {
            position: fixed;
            border-radius: 20px;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;
            bottom: auto !important;
            right: auto !important;
            width: 40%;
            max-width: 60%;
            padding: 0px 0% 0px;
            z-index: 9999999999999;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background: #ffffff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-animation: seers-cmp-slide-in-bottom 1s both;
            -moz-animation: seers-cmp-slide-in-bottom 1s both;
            -ms-animation: seers-cmp-slide-in-bottom 1s both;
            -o-animation: seers-cmp-slide-in-bottom 1s both;
            animation: seers-cmp-slide-in-bottom 1s both;
        }
        }
        @media screen and (max-width: 991px) {
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-preference-bar .seers-cmp-cookie-policy-btn-hol {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: flex;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin: 0 -7.5px;
                /* min-width: 381px; */
                max-width: 100%;
                width: 100%;
                /* flex-flow: row wrap; */
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-desc {
                margin: 0 0 15px 0 !important;
                padding: 0 20px 0 0 !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-hanging-bar .seers-cmp-policy-desc {
                margin: 0 0 15px 0 !important;
                padding: 0 0px 0 0 !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-hanging-bar .seers-cmp-policy-desc {
                margin: 0 0 15px 0 !important;
                padding: 0 0px 0 0 !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-hanging-bar .seers-cmp-cookie-policy-hol {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: block;
                -webkit-box-align: justify;
                -moz-box-align: justify;
                -webkit-box-pack: justify;
                -moz-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -ms-justify-content: space-between;
                justify-content: space-between;
                -webkit-box-flex: 1;
                -webkit-flex: 1 1 auto;
                -moz-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-hanging-bar .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text {
                padding: 0 0px 0 0;
                margin: 0 0 15px 0 !important;
                -webkit-box-flex: 1;
                -webkit-flex: auto;
                -moz-flex: auto;
                -ms-flex: auto;
                flex: auto;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-hanging-bar .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text {
                padding: 0 0px 0 0;
                margin: 0 0 15px 0 !important;
                -webkit-box-flex: 1;
                -webkit-flex: auto;
                -moz-flex: auto;
                -ms-flex: auto;
                flex: auto;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-hanging-bar .seers-cmp-cookie-policy-btn-hol {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: flex;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin: 0 -7.5px;
                /* min-width: 381px; */
                max-width: 100%;
                width: 100%;
                /* flex-flow: row wrap; */
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-hanging-bar .seers-cmp-cookie-policy-hol {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: block;
                -webkit-box-align: justify;
                -moz-box-align: justify;
                -webkit-box-pack: justify;
                -moz-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -ms-justify-content: space-between;
                justify-content: space-between;
                -webkit-box-flex: 1;
                -webkit-flex: 1 1 auto;
                -moz-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                width: 120px;
            }
                        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-hanging-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn, .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-hanging-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn {
                /* width: 112px; */
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: flex;
                -webkit-box-align: center;
                -moz-box-align: center;
                -webkit-box-pack: center;
                -moz-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                -moz-justify-content: center;
                -ms-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-flex: 1 !important;
                -webkit-flex: 1 0 auto !important;
                -moz-flex: 1 0 auto !important;
                -ms-flex: 1 0 auto !important;
                flex: 1 0 auto !important;
                min-width: 112px;
                border-radius: 4px;
                -webkit-border-radius: 4px;
                width: 100%;
            }
                        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-hanging-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn, .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-hanging-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn {
                /* width: 112px; */
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: flex;
                -webkit-box-align: center;
                -moz-box-align: center;
                -webkit-box-pack: center;
                -moz-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                -moz-justify-content: center;
                -ms-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-flex: 1 !important;
                -webkit-flex: 1 0 auto !important;
                -moz-flex: 1 0 auto !important;
                -ms-flex: 1 0 auto !important;
                flex: 1 0 auto !important;
                min-width: 112px;
                border-radius: 4px;
                -webkit-border-radius: 4px;
                width: 100%;
            }
            .seers-cmp-cookie-policy-hanging-btn-hol {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: block !important;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 -7.5px;
            /* min-width: 381px; */
            max-width: 100% !important;
            width: 100% !important;
            /* flex-flow: row wrap; */
        }
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-hanging-bar {
    position: fixed;
    bottom: 0;
    top: auto;
    left: 0;
    right: 0;
    width: 95%;
    max-width: 95%;
    padding: 30px 3% 15px;
    margin: auto;
    margin-bottom: 50px;
    border-radius: 10px;
    border: 1px solid #E0DEDE;
    z-index: 9999999999999;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    background: #ffffff;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: -moz-box;
    display: -moz-flex;
    display: flex;
    -webkit-box-align: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -moz-flex-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-flow: row wrap;
    -moz-flex-flow: row wrap;
    -ms-flex-flow: row wrap;
    flex-flow: row;
    -webkit-box-align: justify;
    -moz-box-align: justify;
    -webkit-box-pack: justify;
    -moz-box-pack: justify;
    -ms-flex-pack: justify;
    -webkit-justify-content: space-between;
    -moz-justify-content: space-between;
    -ms-justify-content: space-between;
    justify-content: space-between;
    box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
    -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
    -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
    -webkit-animation: seers-cmp-slide-in-bottom 1s both;
    -moz-animation: seers-cmp-slide-in-bottom 1s both;
    -ms-animation: seers-cmp-slide-in-bottom 1s both;
    -o-animation: seers-cmp-slide-in-bottom 1s both;
    animation: seers-cmp-slide-in-bottom 1s both;
}

    .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-hanging-bar {
    top: 0;
    bottom: auto;
    left: 0;
    right: 0;
    -webkit-animation: seers-cmp-slide-in-top-bar 1s both;
    -moz-animation: seers-cmp-slide-in-top-bar 1s both;
    -ms-animation: seers-cmp-slide-in-top-bar 1s both;
    -o-animation: seers-cmp-slide-in-top-bar 1s both;
    animation: 1s both;
    width: 95% !important;
    margin: auto;
    margin-top: 75px;
    border-radius: 10px;
    border: 1px solid #E0DEDE;
}
.seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-preference-bar {
    position: fixed;
    bottom: 0;
    top: auto;
    left: 0;
    right: 0;
    width: 100% !important;
    max-width: 100%;
    padding: 30px 3% 15px;
    z-index: 9999999999999;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    background: #ffffff;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: -moz-box;
    display: -moz-flex;
    display: block;
    -webkit-box-align: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -moz-flex-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-flow: row wrap;
    -moz-flex-flow: row wrap;
    -ms-flex-flow: row wrap;
    flex-flow: row;
    -webkit-box-align: justify;
    -moz-box-align: justify;
    -webkit-box-pack: justify;
    -moz-box-pack: justify;
    -ms-flex-pack: justify;
    -webkit-justify-content: space-between;
    -moz-justify-content: space-between;
    -ms-justify-content: space-between;
    justify-content: space-between;
    box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
    -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
    -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
    -webkit-animation: seers-cmp-slide-in-bottom 1s both;
    -moz-animation: seers-cmp-slide-in-bottom 1s both;
    -ms-animation: seers-cmp-slide-in-bottom 1s both;
    -o-animation: seers-cmp-slide-in-bottom 1s both;
    animation: seers-cmp-slide-in-bottom 1s both;
}
        }
        @media screen and (max-width: 810px) {
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-preference-bar .seers-cmp-cookie-policy-hol {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: block;
                -webkit-box-align: justify;
                -moz-box-align: justify;
                -webkit-box-pack: justify;
                -moz-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -ms-justify-content: space-between;
                justify-content: space-between;
                -webkit-box-flex: 1;
                -webkit-flex: 1 1 auto;
                -moz-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-preference-bar .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text {
                padding: 0 0px 0 0;
                margin: 0 0 15px 0 !important;
                -webkit-box-flex: 1;
                -webkit-flex: auto;
                -moz-flex: auto;
                -ms-flex: auto;
                flex: auto;
                width: 100%;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-preference-bar .seers-cmp-policy-desc {
                margin: 0 0 15px 0 !important;
                padding: 0 20px 0 0 !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-preference-bar .seers-cmp-cookie-policy-btn-hol {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: flex;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin: 45px -7.5px 0px;
                /* min-width: 381px; */
                max-width: 100%;
                width: 100%;
                /* flex-flow: row wrap; */
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-preference-bottom-hanging-bar {
                position: fixed;
                bottom: 0;
                top: auto;
                left: 0;
                right: 0;
                width: 98%;
                max-width: 98%;
                margin: auto;
                margin-bottom: 55px;
                padding: 30px 3% 15px;
                z-index: 9999999999999;
                -webkit-box-sizing: border-box;
                border: 1px solid #E0DEDE;
                border-radius: 10px;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                background: #ffffff;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: flex;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -webkit-box-align: justify;
                -moz-box-align: justify;
                -webkit-box-pack: justify;
                -moz-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -ms-justify-content: space-between;
                justify-content: space-between;
                box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
                -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
                -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
                -webkit-animation: seers-cmp-slide-in-bottom 1s both;
                -moz-animation: seers-cmp-slide-in-bottom 1s both;
                -ms-animation: seers-cmp-slide-in-bottom 1s both;
                -o-animation: seers-cmp-slide-in-bottom 1s both;
                animation: seers-cmp-slide-in-bottom 1s both;

            }
        }
        
        @media screen and (max-width: 767px) {
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol,
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-bar .seers-cmp-cookie-policy-hol {
                -webkit-box-align: start !important;
                -moz-box-align: start !important;
                -ms-flex-align: start !important;
                -webkit-align-items: flex-start !important;
                -moz-flex-align: flex-start !important;
                -ms-flex-align: flex-start !important;
                align-items: flex-start !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-left-bar .seers-cmp-cookie-data-hol .seers-cmp-cookie-policy-hol {
                -webkit-box-orient: horizontal;
                -moz-box-orient: horizontal;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-data {
                -webkit-box-orient: horizontal;
                -moz-box-orient: horizontal;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol .seers-cmp-policy-desc,
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-left-bar .seers-cmp-cookie-data-hol .seers-cmp-cookie-policy-hol .seers-cmp-policy-desc {
                margin: 0 0 15px 0;
            }
            .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content.seers-cmp-cookie-banner-active {
                max-width: 100% !important;
                width: 100% !important;
            }
        }
        
        @media screen and (max-width: 639px) {
            /*.seers-cmp-cookie-policy-accordion-tabs {
                height: 150px !important;
            }*/
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol,
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-bar .seers-cmp-cookie-policy-hol {
                -webkit-box-orient: horizontal;
                -moz-box-orient: horizontal;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text {
                padding: 0 !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol {
                -webkit-box-orient: horizontal;
                -moz-box-orient: horizontal;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                -webkit-flex-flow: row wrap !important;
                -moz-flex-flow: row wrap !important;
                -ms-flex-flow: row wrap !important;
                flex-flow: row wrap !important;
                margin: 0 auto !important;
                width: 100% !important;
                min-width: 100% !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-desc {
                margin: 0 !important;
                padding: 0 !important;
            }
        }
        
        @media screen and (max-width: 479px) {
            /*.seers-cmp-cookie-policy-accordion-tabs {
                height: 110px !important;
            }*/
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar {
    position: fixed;
    bottom: 0;
    top: auto;
    left: 0;
    right: 0;
    width: 100%;
    max-width: 100%;
    padding: 30px 3% 15px;
    z-index: 9999999999999;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    background: #ffffff;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: -moz-box;
    display: -moz-flex;
    display: block;
    -webkit-box-align: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -moz-flex-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-flow: row wrap;
    -moz-flex-flow: row wrap;
    -ms-flex-flow: row wrap;
    flex-flow: row;
    -webkit-box-align: justify;
    -moz-box-align: justify;
    -webkit-box-pack: justify;
    -moz-box-pack: justify;
    -ms-flex-pack: justify;
    -webkit-justify-content: space-between;
    -moz-justify-content: space-between;
    -ms-justify-content: space-between;
    justify-content: space-between;
    box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
    -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
    -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
    -webkit-animation: seers-cmp-slide-in-bottom 1s both;
    -moz-animation: seers-cmp-slide-in-bottom 1s both;
    -ms-animation: seers-cmp-slide-in-bottom 1s both;
    -o-animation: seers-cmp-slide-in-bottom 1s both;
    animation: seers-cmp-slide-in-bottom 1s both;
}
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-preference-universal-bar {
                position: fixed;
                border-radius: 20px;
                top: 50% !important;
                left: 50% !important;
                transform: translate(-50%, -50%) !important;
                bottom: auto !important;
                right: auto !important;
                width: 95%;
                max-width: 100%;
                padding: 0px 0% 0px;
                z-index: 9999999999999;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                background: #ffffff;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: flex;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -webkit-box-align: justify;
                -moz-box-align: justify;
                -webkit-box-pack: justify;
                -moz-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -ms-justify-content: space-between;
                justify-content: space-between;
                box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
                -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
                -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
                -webkit-animation: seers-cmp-slide-in-bottom 1s both;
                -moz-animation: seers-cmp-slide-in-bottom 1s both;
                -ms-animation: seers-cmp-slide-in-bottom 1s both;
                -o-animation: seers-cmp-slide-in-bottom 1s both;
                animation: seers-cmp-slide-in-bottom 1s both;
            }
            .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block {
                -webkit-box-orient: horizontal;
                -moz-box-orient: horizontal;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                margin: 0 8px 0 0 !important;
            }
            .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-cookie-disagree-btn {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                margin: 0 0 10px 0 !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn,
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn {
                width: 100% !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
                -webkit-flex: auto !important;
                -moz-flex: auto !important;
                -ms-flex: auto !important;
                flex: auto !important;
            }
            .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-btn {
                width: 100% !important;
                margin: 0 10px 15px !important;
            }
            .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by {
                -webkit-box-align: center !important;
                -moz-box-align: center !important;
                -webkit-box-pack: center !important;
                -moz-box-pack: center !important;
                -ms-flex-pack: center !important;
                -webkit-justify-content: center !important;
                -moz-justify-content: center !important;
                -ms-justify-content: center !important;
                justify-content: center !important;
            }
            .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-text {
                margin: 0 0 0 auto;
            }
            .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-scan-staus {
                margin: 0 0 0 auto;
            }
            
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-right-bar, .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-left-bar{
                position: fixed;
                bottom: 0;
                top: auto;
                left: 0;
                right: 0;
                width: 100%;
                max-width: 100%;
                padding: 15px 5% 0;
                z-index: 9999999999999;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                background: #fff;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: -moz-box;
                display: -moz-flex;
                display: flex;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -moz-flex-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -webkit-box-align: justify;
                -moz-box-align: justify;
                -webkit-box-pack: justify;
                -moz-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -ms-justify-content: space-between;
                justify-content: space-between;
                box-shadow: 0 -4px 19px rgb(0 0 0 / 7%);
                -webkit-box-shadow: 0 -4px 19px rgb(0 0 0 / 7%);
                -moz-box-shadow: 0 -4px 19px rgba(0,0,0,.07);
                -webkit-animation: seers-cmp-slide-in-bottom 1s both;
                -moz-animation: seers-cmp-slide-in-bottom 1s both;
                -ms-animation: seers-cmp-slide-in-bottom 1s both;
                -o-animation: seers-cmp-slide-in-bottom 1s both;
                animation: seers-cmp-slide-in-bottom 1s both;
            }
            .seers-cmp-cookie-policy-first-preference {
                display: block;
                margin: 10px 0px;
            }
            .seers-cmp-cookie-policy-switchers-first-preference {
                /* position: absolute;
                right: 4px;
                top: 10%; */
                /* margin: 20px 10px 15px 10px; */
                /* -webkit-transform: translateY(-50%) !important;
                -moz-transform: translateY(-50%) !important;
                -ms-transform: translateY(-50%) !important;
                -o-transform: translateY(-50%) !important;
                transform: translateY(-50%) !important; */
                margin: 0;
                transform: translateY(0); 
                        top: 24px;
                        right: 4px;
            }
            .seers-cmp-show-details {
                margin-top: 2px;
                float: right;
                margin-bottom: 10px;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-banner-hanging-bar {
            position: fixed;
            bottom: 0;
            top: auto;
            left: 0;
            right: 0;
            width: 52%;
            max-width: 100%;
            padding: 30px 3% 15px;
            margin: auto;
            margin-bottom: 50px;
            border-radius: 10px;
            border: 1px solid #E0DEDE;
            z-index: 9999999999999;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background: #ffffff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-animation: seers-cmp-slide-in-bottom 1s both;
            -moz-animation: seers-cmp-slide-in-bottom 1s both;
            -ms-animation: seers-cmp-slide-in-bottom 1s both;
            -o-animation: seers-cmp-slide-in-bottom 1s both;
            animation: seers-cmp-slide-in-bottom 1s both;
        }
        .seers-cmp-banner-bar.seers-cmp-top-hanging-bar .seers-cmp-cookie-policy-text {
            padding-right: 0px;
        }
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-hanging-bar {
            top: 0;
            bottom: auto;
            left: 0;
            right: 0;
            -webkit-animation: seers-cmp-slide-in-top-bar 1s both;
            -moz-animation: seers-cmp-slide-in-top-bar 1s both;
            -ms-animation: seers-cmp-slide-in-top-bar 1s both;
            -o-animation: seers-cmp-slide-in-top-bar 1s both;
            animation: 1s both;
            width: 95% !important;
            margin: auto;
            margin-top: 75px;
            border-radius: 10px;
            border: 1px solid #E0DEDE;
        }
        .seers-cmp-banner-bar.seers-cmp-banner-hanging-bar .seers-cmp-cookie-policy-text {
            padding-right: 0px;
        }
        .seers-cmp-banner-bar.seers-cmp-banner-preference-bar .seers-cmp-cookie-policy-text {
            padding-right: 0px;
        }
        .seers-cmp-banner-bar.seers-cmp-preference-bottom-hanging-bar .seers-cmp-cookie-policy-text {
            padding-right: 0px;
        }
        .seers-cmp-cookie-policy-switchers-customize-universal {
            top: 70px !important;
            right: 32px !important;
        }
        }
        
        .btn-flat, .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn.btn-flat{border-radius: 0px !important; -webkit-border-radius: 0px !important;}
        .btn-round, .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn.btn-round{border-radius: 20px !important; -webkit-border-radius: 20px !important;}
        .btn-stroke, .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn.btn-stroke{background:#fff; border:1px solid #C2C2C2 !important; border-radius: 4x !important; -webkit-border-radius: 4px !important; color:#7E7E7E;}
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar-hide-noanimation {
            display:none;
        }
        
        .seers-cmp-banner-bar.seers-cmp-middle-bar.seers-cmp-banner-bar-hide {
            display: none;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-top-bar.seers-cmp-banner-bar-hide {
            display: none;
        }
        .seers-cmp-cookie-data-hol .seers-cmp-top-left-bar.seers-cmp-banner-bar-hide {
            display: none !important;
        }
        .seers-cmp-cookie-data-hol .seers-cmp-top-right-bar.seers-cmp-banner-bar-hide {
            display: none !important;
        }
        .seers-cmp-cookie-data-hol .seers-cmp-top-hanging-bar.seers-cmp-banner-bar-hide {
            display: none;
        }
        .seers-cmp-cookie-data-hol .seers-cmp-preference-universal-bar.seers-cmp-banner-bar-hide {
            display: none;
        }
    </style>
</head>

<?php
$showbadge = get_option("SCCBPP_cookie_consent_show_badge");

?>

<body>
    <div class="seers-cmp-cookie-data-hol">
        <div class="seers-cmp-banner-bar <?php echo ((get_option('SCCBPP_cookie_consent_banner_position') != 'seers-cmp-banner-bar') ? get_option('SCCBPP_cookie_consent_banner_position') : "" );?> <?php echo "seers-cmp-banner-bar-hide seers-cmp-banner-bar-hide-noanimation";?>">
        <?php if ((get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-preference-universal-bar')): ?>
                <div class="seers-cms-header-universal-bar">
                <div class="seers-cmp-cookie-default-banner-logo"><img style="width:45px;" src="https://seers-application-assets.s3.amazonaws.com/images/logo/seersco-logo.png" alt="<?php echo __('seers logo', $this->textdomain); ?>"></div>
                <div class="seers-cmp-cookie-policy-powered-by-link-universal">
                <span style="width=200px" class="seers-cmp-cookie-policy-powered-by-text" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>"><?php echo __("powered by", $this->textdomain);?>&nbsp;<a href="https://seers.ai" target="_blank" class="seers-cmp-cookie-policy-powered-by-link" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>" tabindex="0"><svg width="1000" height="345" viewBox="0 0 1000 345" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M164.765 160.831V166.677C164.765 167.613 164 168.371 163.072 168.371H159.685C158.749 168.371 157.992 167.605 157.992 166.677V160.831C155.704 159.613 154.137 157.207 154.137 154.429C154.137 150.433 157.375 147.187 161.379 147.187C165.382 147.187 168.62 150.425 168.62 154.429C168.62 157.207 167.061 159.613 164.765 160.831ZM161.371 190.891C168.056 183.738 173.931 175.806 178.893 167.204C183.847 158.618 187.783 149.556 190.636 140.183C181.099 137.969 171.294 136.855 161.371 136.855C151.448 136.855 141.636 137.977 132.099 140.183C134.951 149.556 138.888 158.618 143.842 167.204C148.804 175.806 154.679 183.738 161.364 190.891H161.371Z" fill="#121212"/>
<mask id="mask0_2187_164" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="132" y="136" width="59" height="55">
<path d="M164.765 160.831V166.677C164.765 167.613 164 168.371 163.072 168.371H159.685C158.749 168.371 157.992 167.605 157.992 166.677V160.831C155.704 159.613 154.137 157.207 154.137 154.429C154.137 150.433 157.375 147.187 161.379 147.187C165.382 147.187 168.62 150.425 168.62 154.429C168.62 157.207 167.061 159.613 164.765 160.831ZM161.371 190.891C168.056 183.738 173.931 175.806 178.893 167.204C183.847 158.618 187.783 149.556 190.636 140.183C181.099 137.969 171.294 136.855 161.371 136.855C151.448 136.855 141.636 137.977 132.099 140.183C134.951 149.556 138.888 158.618 143.842 167.204C148.804 175.806 154.679 183.738 161.364 190.891H161.371Z" fill="white"/>
</mask>
<g mask="url(#mask0_2187_164)">
<path d="M190.643 136.855H132.106V190.891H190.643V136.855Z" fill="#121212"/>
</g>
<path fill-rule="evenodd" clip-rule="evenodd" d="M279.647 87.3641C254.156 70.2805 224.765 58.5596 193.094 53.8208V76.1186C215.978 79.9513 237.964 87.9286 258.092 99.8054C258.382 130.303 251.341 160.215 237.555 187.43L218.452 176.399L199.341 165.362C197.803 168.526 196.147 171.638 194.379 174.706C185.674 189.784 174.518 203.043 161.363 214.021C156.342 209.831 151.604 205.301 147.192 200.465L127.724 211.703C137.543 223.09 148.833 233.102 161.363 241.488C179.791 229.151 195.56 213.293 207.875 194.709L241.967 214.392L246.075 216.769C247.976 213.82 249.818 210.812 251.586 207.737C273.475 169.826 282.358 127.979 279.64 87.3567L279.647 87.3641Z" fill="#3B6EF8"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M64.6496 99.8056C90.9059 84.319 120.356 75.4503 150.794 73.7791V117.907C154.3 117.654 157.828 117.535 161.371 117.535C178.789 117.535 195.842 120.566 211.923 126.464C210.801 132.911 209.249 139.276 207.273 145.515L226.741 156.754C231.695 142.559 234.718 127.771 235.713 112.722C215.808 102.925 194.208 97.206 171.948 95.8318V51.719C168.442 51.5481 164.921 51.459 161.371 51.459C117.601 51.459 76.9199 64.6876 43.0948 87.3569C41.0448 117.974 45.5905 149.289 57.3186 179.088L76.6302 167.94C68.5045 146.206 64.4267 123.173 64.6496 99.8056Z" fill="#3B6EF8"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M161.371 267.337C134.818 252.34 112.431 231.283 95.756 205.747L127.041 187.69L133.978 183.686C132.01 180.775 130.138 177.781 128.363 174.714C119.658 159.628 113.753 143.347 110.819 126.471C116.962 124.213 123.253 122.378 129.648 120.975V98.4985C114.875 101.306 100.562 106.082 87.0361 112.737C88.5068 134.872 94.3522 156.442 104.29 176.407L85.1867 187.437L78.4944 191.3L74.4687 193.625L66.083 198.467C67.6874 201.587 69.3734 204.684 71.1486 207.759C93.0376 245.67 124.835 274.289 161.371 292.242C188.912 278.708 213.757 259.114 233.693 234.053L214.381 222.904C199.623 240.805 181.708 255.861 161.371 267.352V267.337Z" fill="#3B6EF8"/>
<path d="M933.89 141.551V232.1H918.325V141.551H933.89ZM917.153 117.533C917.153 115.022 917.906 112.902 919.413 111.172C920.975 109.443 923.262 108.578 926.275 108.578C929.232 108.578 931.491 109.443 933.054 111.172C934.672 112.902 935.48 115.022 935.48 117.533C935.48 119.932 934.672 121.996 933.054 123.725C931.491 125.399 929.232 126.236 926.275 126.236C923.262 126.236 920.975 125.399 919.413 123.725C917.906 121.996 917.153 119.932 917.153 117.533Z" fill="black"/>
<path d="M877.234 216.618V170.004C877.234 166.434 876.509 163.337 875.059 160.715C873.664 158.037 871.544 155.973 868.698 154.522C865.853 153.072 862.338 152.346 858.154 152.346C854.248 152.346 850.817 153.016 847.86 154.355C844.959 155.694 842.672 157.451 840.998 159.627C839.38 161.803 838.571 164.146 838.571 166.657H823.089C823.089 163.421 823.926 160.213 825.6 157.033C827.273 153.853 829.672 150.979 832.797 148.413C835.977 145.791 839.771 143.727 844.178 142.22C848.641 140.658 853.607 139.877 859.074 139.877C865.658 139.877 871.46 140.993 876.481 143.224C881.558 145.456 885.519 148.831 888.365 153.351C891.266 157.814 892.716 163.421 892.716 170.172V212.35C892.716 215.362 892.968 218.57 893.47 221.974C894.028 225.377 894.837 228.306 895.897 230.761V232.1H879.745C878.964 230.314 878.35 227.943 877.904 224.986C877.458 221.974 877.234 219.184 877.234 216.618ZM879.912 177.201L880.08 188.081H864.43C860.023 188.081 856.09 188.443 852.631 189.168C849.171 189.838 846.27 190.87 843.927 192.265C841.584 193.66 839.799 195.417 838.571 197.537C837.344 199.601 836.73 202.028 836.73 204.818C836.73 207.663 837.372 210.258 838.655 212.601C839.938 214.944 841.863 216.813 844.429 218.208C847.051 219.547 850.259 220.216 854.053 220.216C858.795 220.216 862.98 219.212 866.606 217.204C870.233 215.195 873.106 212.74 875.226 209.839C877.402 206.938 878.573 204.12 878.741 201.387L885.352 208.835C884.961 211.178 883.901 213.772 882.172 216.618C880.442 219.463 878.127 222.197 875.226 224.819C872.381 227.385 868.977 229.533 865.016 231.263C861.111 232.937 856.703 233.773 851.794 233.773C845.657 233.773 840.273 232.574 835.642 230.175C831.067 227.776 827.497 224.568 824.93 220.551C822.42 216.478 821.164 211.931 821.164 206.91C821.164 202.056 822.113 197.788 824.01 194.106C825.907 190.368 828.64 187.272 832.211 184.817C835.782 182.306 840.078 180.409 845.099 179.126C850.12 177.843 855.727 177.201 861.92 177.201H879.912Z" fill="black"/>
<path d="M778.903 223.898C778.903 221.276 779.712 219.072 781.33 217.287C783.003 215.446 785.402 214.525 788.527 214.525C791.651 214.525 794.022 215.446 795.64 217.287C797.314 219.072 798.151 221.276 798.151 223.898C798.151 226.465 797.314 228.641 795.64 230.426C794.022 232.211 791.651 233.104 788.527 233.104C785.402 233.104 783.003 232.211 781.33 230.426C779.712 228.641 778.903 226.465 778.903 223.898Z" fill="black"/>
<path d="M742.833 208.082C742.833 205.85 742.331 203.786 741.327 201.889C740.379 199.936 738.398 198.179 735.385 196.617C732.428 194.999 727.965 193.604 721.995 192.432C716.974 191.372 712.427 190.117 708.355 188.666C704.338 187.216 700.906 185.458 698.061 183.394C695.272 181.33 693.124 178.903 691.617 176.113C690.111 173.324 689.358 170.06 689.358 166.322C689.358 162.751 690.139 159.376 691.701 156.196C693.319 153.016 695.578 150.198 698.479 147.744C701.436 145.289 704.979 143.364 709.108 141.969C713.236 140.574 717.839 139.877 722.916 139.877C730.169 139.877 736.362 141.16 741.494 143.727C746.627 146.293 750.561 149.724 753.294 154.02C756.028 158.26 757.395 162.974 757.395 168.163H741.913C741.913 165.652 741.16 163.226 739.653 160.882C738.203 158.483 736.055 156.503 733.209 154.941C730.42 153.378 726.989 152.597 722.916 152.597C718.62 152.597 715.133 153.267 712.455 154.606C709.833 155.889 707.908 157.535 706.681 159.543C705.509 161.552 704.923 163.672 704.923 165.904C704.923 167.577 705.202 169.084 705.76 170.423C706.374 171.706 707.434 172.905 708.94 174.021C710.447 175.081 712.567 176.085 715.301 177.034C718.034 177.982 721.521 178.931 725.761 179.879C733.182 181.553 739.291 183.561 744.089 185.905C748.887 188.248 752.457 191.121 754.801 194.524C757.144 197.928 758.316 202.056 758.316 206.91C758.316 210.871 757.479 214.498 755.805 217.789C754.187 221.081 751.816 223.926 748.692 226.325C745.623 228.669 741.941 230.51 737.645 231.849C733.405 233.132 728.635 233.773 723.334 233.773C715.356 233.773 708.606 232.351 703.082 229.505C697.559 226.66 693.375 222.978 690.529 218.459C687.684 213.94 686.261 209.17 686.261 204.148H701.827C702.05 208.388 703.278 211.764 705.509 214.274C707.741 216.729 710.475 218.487 713.71 219.547C716.946 220.551 720.154 221.053 723.334 221.053C727.575 221.053 731.117 220.495 733.963 219.379C736.864 218.264 739.068 216.729 740.574 214.777C742.08 212.824 742.833 210.592 742.833 208.082Z" fill="black"/>
<path d="M647.514 155.777V232.1H632.032V141.551H647.096L647.514 155.777ZM675.8 141.049L675.717 155.443C674.434 155.164 673.206 154.996 672.034 154.941C670.919 154.829 669.635 154.773 668.185 154.773C664.614 154.773 661.462 155.331 658.728 156.447C655.995 157.563 653.679 159.125 651.782 161.133C649.885 163.142 648.379 165.541 647.263 168.33C646.203 171.064 645.506 174.077 645.171 177.369L640.819 179.879C640.819 174.412 641.349 169.279 642.409 164.481C643.525 159.683 645.227 155.443 647.514 151.76C649.802 148.022 652.703 145.121 656.218 143.057C659.788 140.937 664.028 139.877 668.938 139.877C670.054 139.877 671.337 140.016 672.788 140.295C674.238 140.519 675.242 140.77 675.8 141.049Z" fill="black"/>
<path d="M578.724 233.773C572.42 233.773 566.701 232.713 561.568 230.593C556.491 228.418 552.112 225.377 548.43 221.472C544.803 217.566 542.014 212.935 540.061 207.58C538.108 202.224 537.132 196.366 537.132 190.005V186.49C537.132 179.126 538.22 172.571 540.396 166.824C542.571 161.022 545.528 156.112 549.266 152.095C553.004 148.078 557.245 145.038 561.987 142.973C566.729 140.909 571.639 139.877 576.716 139.877C583.187 139.877 588.767 140.993 593.453 143.224C598.195 145.456 602.073 148.58 605.085 152.597C608.098 156.559 610.33 161.245 611.78 166.657C613.231 172.013 613.956 177.871 613.956 184.231V191.177H546.337V178.54H598.474V177.369C598.251 173.352 597.414 169.446 595.964 165.652C594.569 161.859 592.337 158.734 589.269 156.28C586.2 153.825 582.016 152.597 576.716 152.597C573.201 152.597 569.965 153.351 567.008 154.857C564.051 156.307 561.513 158.483 559.393 161.384C557.272 164.286 555.627 167.828 554.455 172.013C553.283 176.197 552.698 181.023 552.698 186.49V190.005C552.698 194.301 553.283 198.346 554.455 202.14C555.682 205.878 557.44 209.17 559.727 212.015C562.07 214.86 564.888 217.092 568.18 218.71C571.527 220.328 575.321 221.137 579.561 221.137C585.029 221.137 589.659 220.021 593.453 217.789C597.247 215.558 600.566 212.573 603.412 208.835L612.785 216.283C610.832 219.24 608.349 222.057 605.337 224.735C602.324 227.413 598.614 229.589 594.206 231.263C589.854 232.937 584.694 233.773 578.724 233.773Z" fill="black"/>
<path d="M487.84 233.773C481.535 233.773 475.817 232.713 470.684 230.593C465.607 228.418 461.227 225.377 457.545 221.472C453.919 217.566 451.129 212.935 449.177 207.58C447.224 202.224 446.248 196.366 446.248 190.005V186.49C446.248 179.126 447.335 172.571 449.511 166.824C451.687 161.022 454.644 156.112 458.382 152.095C462.12 148.078 466.36 145.038 471.103 142.973C475.845 140.909 480.754 139.877 485.831 139.877C492.303 139.877 497.882 140.993 502.569 143.224C507.311 145.456 511.188 148.58 514.201 152.597C517.214 156.559 519.446 161.245 520.896 166.657C522.347 172.013 523.072 177.871 523.072 184.231V191.177H455.453V178.54H507.59V177.369C507.367 173.352 506.53 169.446 505.079 165.652C503.685 161.859 501.453 158.734 498.384 156.28C495.316 153.825 491.132 152.597 485.831 152.597C482.317 152.597 479.081 153.351 476.124 154.857C473.167 156.307 470.628 158.483 468.508 161.384C466.388 164.286 464.742 167.828 463.571 172.013C462.399 176.197 461.813 181.023 461.813 186.49V190.005C461.813 194.301 462.399 198.346 463.571 202.14C464.798 205.878 466.556 209.17 468.843 212.015C471.186 214.86 474.004 217.092 477.295 218.71C480.643 220.328 484.437 221.137 488.677 221.137C494.144 221.137 498.775 220.021 502.569 217.789C506.363 215.558 509.682 212.573 512.527 208.835L521.9 216.283C519.948 219.24 517.465 222.057 514.452 224.735C511.44 227.413 507.729 229.589 503.322 231.263C498.97 232.937 493.81 233.773 487.84 233.773Z" fill="black"/>
<path d="M415.786 201.303C415.786 198.458 415.339 195.947 414.447 193.771C413.61 191.54 412.104 189.531 409.928 187.746C407.808 185.96 404.851 184.259 401.057 182.641C397.319 181.023 392.577 179.377 386.83 177.703C380.805 175.918 375.365 173.937 370.511 171.762C365.657 169.53 361.501 166.991 358.042 164.146C354.583 161.301 351.933 158.037 350.092 154.355C348.251 150.673 347.33 146.46 347.33 141.718C347.33 136.976 348.306 132.596 350.259 128.579C352.212 124.562 355.001 121.075 358.628 118.118C362.31 115.106 366.69 112.762 371.767 111.089C376.844 109.415 382.506 108.578 388.755 108.578C397.905 108.578 405.66 110.336 412.02 113.85C418.436 117.309 423.318 121.856 426.665 127.491C430.013 133.07 431.686 139.04 431.686 145.4H415.618C415.618 140.825 414.642 136.781 412.689 133.266C410.737 129.695 407.78 126.906 403.819 124.897C399.857 122.833 394.836 121.801 388.755 121.801C383.009 121.801 378.266 122.665 374.528 124.395C370.79 126.124 368.001 128.468 366.16 131.425C364.374 134.382 363.482 137.757 363.482 141.551C363.482 144.117 364.012 146.46 365.072 148.58C366.187 150.645 367.889 152.569 370.177 154.355C372.52 156.14 375.477 157.786 379.047 159.292C382.674 160.799 386.998 162.249 392.019 163.644C398.937 165.597 404.907 167.773 409.928 170.172C414.949 172.571 419.077 175.276 422.313 178.289C425.605 181.246 428.032 184.621 429.594 188.415C431.212 192.153 432.021 196.393 432.021 201.136C432.021 206.101 431.017 210.592 429.008 214.609C427 218.626 424.127 222.057 420.389 224.903C416.651 227.748 412.159 229.952 406.915 231.514C401.726 233.02 395.924 233.773 389.508 233.773C383.873 233.773 378.322 232.992 372.855 231.43C367.443 229.868 362.505 227.525 358.042 224.401C353.634 221.276 350.092 217.427 347.414 212.852C344.792 208.221 343.48 202.865 343.48 196.784H359.548C359.548 200.968 360.357 204.567 361.975 207.58C363.593 210.536 365.797 212.991 368.586 214.944C371.432 216.897 374.64 218.347 378.21 219.296C381.837 220.188 385.603 220.635 389.508 220.635C395.143 220.635 399.913 219.854 403.819 218.291C407.724 216.729 410.681 214.498 412.689 211.597C414.754 208.695 415.786 205.264 415.786 201.303Z" fill="black"/>
</svg>
</a></span> 
                </div>
                </div>
                <?php endif; ?>
                <?php if ((get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-preference-universal-bar')): ?>
            <div class="seers-cmp-cookie-policy-data">
                <div class="seers-cmp-cookie-policy-hol">
                    <div class="seers-cms-universal-content-section">
                <div class="seers-cms-tabs-universal-bar">
                    <div class="seers-cmp-consent-tab active">Consents</div>
                    <div class="seers-cmp-detail-tab">Details</div>
                    <div class="seers-cmp-policy-tab">Policy</div>
                </div>
                <div class="seers-cms-pages-universal-bar">
                    <div class="seers-cmp-consent-pages"><p class="seers-cmp-policy-desc" style="padding: 0px 20px !important;" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>"> <?php if(get_option('SCCBPP_cookie_consent_body_text') && get_option('SCCBPP_cookie_consent_body_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_body_text'), $this->textdomain); }else{ esc_html_e( "We use cookies to ensure you get the best experience", $this->textdomain);} ?> </p>
                    <div class="seers-cmp-cookie-policy-universal-choices" style="border-top: 1px solid #d6d6d6; border-bottom: 1px solid #d6d6d6;">
                    <label class="seers-cmp-cookie-policy-accordion-tab-label-universal" for="seers-cmpAccordiannecessary" style="border-right: 1px solid #d6d6d6;">
                                    <?php echo __("Necessary", $this->textdomain); ?>
                                    <div class="seers-cmp-cookie-policy-switchers-first-preference seers-cmp-cookie-policy-switchers-customize-universal " >
                                        <input id="seers-cmp-cookie-policy-necessary-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox" checked disabled>
                                        <label for="seers-cmp-cookie-policy-necessary-switch"></label>
                                    </div>
                                </label>

                                    <label class="seers-cmp-cookie-policy-accordion-tab-label-universal" for="seers-cmpAccordianPreference" style="border-right: 1px solid #d6d6d6;"><?php echo __("Preferences", $this->textdomain); ?>
                                        <div class="seers-cmp-cookie-policy-switchers-first-preference seers-cmp-cookie-policy-switchers-customize-universal" >
                                            <input id="seers-cmp-cookie-policy-preference-switch1" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                            <label for="seers-cmp-cookie-policy-preference-switch1"></label>
                                        </div>
                                    </label>
                                    <label class="seers-cmp-cookie-policy-accordion-tab-label-universal" for="seers-cmpAccordianstatistic" style="border-right: 1px solid #d6d6d6;"><?php echo __("Statistics", $this->textdomain); ?>
                                        <div class="seers-cmp-cookie-policy-switchers-first-preference seers-cmp-cookie-policy-switchers-customize-universal" >
                                            <input id="seers-cmp-cookie-policy-statistic-switch1" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                            <label for="seers-cmp-cookie-policy-statistic-switch1"></label>
                                        </div>
                                    </label>
                                    <label class="seers-cmp-cookie-policy-accordion-tab-label-universal" for="seers-cmpAccordianmarketing"><?php echo __("Marketing", $this->textdomain); ?>
                                        <div class="seers-cmp-cookie-policy-switchers-first-preference seers-cmp-cookie-policy-switchers-customize-universal" >
                                            <input id="seers-cmp-cookie-policy-marketing-switch1" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                            <label for="seers-cmp-cookie-policy-marketing-switch1"></label>
                                        </div>
                                    </label>
                                </div>
                </div>
                    <div class="seers-cmp-detail-pages" style="display:none; padding: 0px 16px 15px; max-height: 335px; overflow: auto;">
                    <div class="seers-cmp-cookie-policy-accordion-tabs" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>">
                            <div class="seers-cmp-cookie-policy-accordion-tab-universal  seers-cms-universal-detail-tab-content" style="margin-top:0px !important;">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordiannecessary" name="seers-cmpAccordiannecessary">
                                <label class="seers-cmp-cookie-policy-accordion-tab-universal-label seers-cms-universal-detail-categories" for="seers-cmpAccordiannecessary"><?php echo __("Necessary", $this->textdomain);?> <span class="seers-cmp-cookie-policy-always-active-universal"><?php echo __("Always Active", $this->textdomain);?></span>
                            </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-universal-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text seers-cms-universal-detail-categories-detail"><?php echo __("Necessary cookies help make a website usable by enabling basic functions like page navigation and access to secure areas of the website. The website cannot function properly without these cookies.", $this->textdomain); ?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab-universal seers-top-border-none   seers-cms-universal-detail-tab-content">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianPreference" name="seers-cmpAccordianPreference">
                                <label class="seers-cmp-cookie-policy-accordion-tab-universal-label seers-cms-universal-detail-categories" for="seers-cmpAccordianPreference"><?php echo __("Preferences", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers-universal">
                                        <input id="seers-cmp-cookie-policy-preference-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                        <label for="seers-cmp-cookie-policy-preference-switch" /> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-universal-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text seers-cms-universal-detail-categories-detail"><?php echo __("Preference cookies enable a website to remember information that changes the way the website behaves or looks, like your preferred language or the region that you are in.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab-universal seers-top-border-none  seers-cms-universal-detail-tab-content">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianstatistic" name="seers-cmpAccordianstatistic">
                                <label class="seers-cmp-cookie-policy-accordion-tab-universal-label seers-cms-universal-detail-categories" for="seers-cmpAccordianstatistic"><?php echo __("Statistics", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers-universal">
                                        <input id="seers-cmp-cookie-policy-statistic-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                        <label for="seers-cmp-cookie-policy-statistic-switch" /> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-universal-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text seers-cms-universal-detail-categories-detail"><?php echo __("Statistic cookies help website owners to understand how visitors interact with websites by collecting and reporting information anonymously.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab-universal seers-top-border-none  seers-cms-universal-detail-tab-content">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianmarketing" name="seers-cmpAccordianmarketing">
                                <label class="seers-cmp-cookie-policy-accordion-tab-universal-label seers-cms-universal-detail-categories" for="seers-cmpAccordianmarketing"><?php echo __("Marketing", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers-universal">
                                        <input id="seers-cmp-cookie-policy-marketing-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                        <label for="seers-cmp-cookie-policy-marketing-switch" /> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-universal-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text seers-cms-universal-detail-categories-detail"><?php echo __("Marketing cookies are used to track visitors across websites. The intention is to display ads that are relevant and engaging for the individual user and thereby more valuable for publishers and third-party advertisers.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab-universal seers-top-border-none  seers-cms-universal-detail-tab-content">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianunclassified" name="seers-cmpAccordianunclassified">
                                <label class="seers-cmp-cookie-policy-accordion-tab-universal-label  seers-cms-universal-detail-categories" for="seers-cmpAccordianunclassified"><?php echo __("Unclassified", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers-universal"> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-universal-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text  seers-cms-universal-detail-categories-detail"><?php echo __("Unclassified cookies are cookies that we are in the process of classifying, together with the providers of individual cookies.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            </div>
                    </div>
                    <div class="seers-cmp-policy-pages" style="display:none;"><p class="seers-cmp-policy-desc" style="padding: 0px 20px !important;" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>"> <?php esc_html_e( "Cookies are small text files that can be used by websites to make the experience of the user more efficient. The law states that we can store cookies on your device if they are strictly necessary for the operation of this site. For all other types of cookies, we need your permission. This site uses different types of cookies. Some cookies are placed by third party services that appear on our pages. You can at any time, change or withdraw your consent from the Cookie Declaration on our website. Learn more about who we are, how you can contact us, and how we process personal data in our Privacy Policy?", $this->textdomain); ?> </p>
                    <?php if(get_option('SCCBPP_cookie_consent_enable_policy') && get_option('SCCBPP_cookie_consent_enable_policy')=='true' ||  get_option('SCCBPP_cookie_consent_enable_policy')=== true){?><a class="seers-cmp-policy-desc" style="margin-left: 20px; border-bottom: 1px solid #000; padding-top:15px;" href="<?php if(get_option('SCCBPP_cookie_consent_policy_declaration_url') && get_option('SCCBPP_cookie_consent_policy_declaration_url')!=''){ if (filter_var(get_option('SCCBPP_cookie_consent_policy_declaration_url'), FILTER_VALIDATE_URL)) {esc_html_e(get_option('SCCBPP_cookie_consent_policy_declaration_url'));} else {echo "#";} }else{ echo "#"; } ?>" target="_blank" class="seers-cmp-policy-banner-read-cookie"><?php echo __("Read Cookie Policy", $this->textdomain);?>&nbsp;<svg style="width: 12px;" fill="#0061fe"  viewBox="0 0 32 40" x="0px" y="0px"><path d="M32 0l-8 1 2.438 2.438-9.5 9.5-1.063 1.063 2.125 2.125 1.063-1.063 9.5-9.5 2.438 2.438 1-8zm-30 3c-.483 0-1.047.172-1.438.563-.391.391-.563.954-.563 1.438v25c0 .483.172 1.047.563 1.438.391.391.954.563 1.438.563h25c.483 0 1.047-.172 1.438-.563.391-.391.563-.954.563-1.438v-15h-3v14h-23v-23h15v-3h-16z"></path></svg>

                        </a><?php } ?>
                    <div class="seers-cmp-cookie-policy-universal-choices" style="border-top: 1px solid #d6d6d6; border-bottom: 1px solid #d6d6d6;">
                    <label class="seers-cmp-cookie-policy-accordion-tab-label-universal" for="seers-cmpAccordiannecessary" style="border-right: 1px solid #d6d6d6;">
                                    <?php echo __("Necessary", $this->textdomain); ?>
                                    <div class="seers-cmp-cookie-policy-switchers-first-preference seers-cmp-cookie-policy-switchers-customize-universal" >
                                        <input id="seers-cmp-cookie-policy-necessary-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox" checked disabled>
                                        <label for="seers-cmp-cookie-policy-necessary-switch"></label>
                                    </div>
                                </label>

                                    <label class="seers-cmp-cookie-policy-accordion-tab-label-universal" for="seers-cmpAccordianPreference" style="border-right: 1px solid #d6d6d6;"><?php echo __("Preferences", $this->textdomain); ?>
                                        <div class="seers-cmp-cookie-policy-switchers-first-preference seers-cmp-cookie-policy-switchers-customize-universal" >
                                            <input id="seers-cmp-cookie-policy-preference-switch2" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                            <label for="seers-cmp-cookie-policy-preference-switch2"></label>
                                        </div>
                                    </label>
                                    <label class="seers-cmp-cookie-policy-accordion-tab-label-universal" for="seers-cmpAccordianstatistic" style="border-right: 1px solid #d6d6d6;"><?php echo __("Statistics", $this->textdomain); ?>
                                        <div class="seers-cmp-cookie-policy-switchers-first-preference seers-cmp-cookie-policy-switchers-customize-universal" >
                                            <input id="seers-cmp-cookie-policy-statistic-switch2" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                            <label for="seers-cmp-cookie-policy-statistic-switch2"></label>
                                        </div>
                                    </label>
                                    <label class="seers-cmp-cookie-policy-accordion-tab-label-universal" for="seers-cmpAccordianmarketing"><?php echo __("Marketing", $this->textdomain); ?>
                                        <div class="seers-cmp-cookie-policy-switchers-first-preference seers-cmp-cookie-policy-switchers-customize-universal" >
                                            <input id="seers-cmp-cookie-policy-marketing-switch2" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                            <label for="seers-cmp-cookie-policy-marketing-switch2"></label>
                                        </div>
                                    </label>
                                </div>
                </div>
                </div>
                    </div>
                <?php endif; ?>
                
                    <div class="seers-cmp-cookie-policy-text">
                    <?php if ((get_option('SCCBPP_cookie_consent_banner_position') !== 'seers-cmp-preference-universal-bar')): ?>
                        <p class="seers-cmp-policy-desc" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>"> <?php if(get_option('SCCBPP_cookie_consent_body_text') && get_option('SCCBPP_cookie_consent_body_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_body_text'), $this->textdomain); }else{ esc_html_e( "We use cookies to ensure you get the best experience", $this->textdomain);} ?> </p>
                        <?php endif; ?>
                        <?php
                            if ((get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-banner-preference-bar') || (get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-preference-bottom-hanging-bar')): ?>
                                <div class="seers-cmp-cookie-policy-first-preference">
                                    <label class="seers-cmp-cookie-policy-accordion-tab-label-first-preference" for="seers-cmpAccordiannecessary"><?php echo __("Necessary", $this->textdomain); ?>
                                        <div class="seers-cmp-cookie-policy-switchers-first-preference">
                                            <input id="seers-cmp-cookie-policy-necessary-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox" checked disabled>
                                            <label for="seers-cmp-cookie-policy-necessary-switch"></label>
                                        </div>
                                    </label>
                                    <label class="seers-cmp-cookie-policy-accordion-tab-label-first-preference" for="seers-cmpAccordianPreference"><?php echo __("Preferences", $this->textdomain); ?>
                                        <div class="seers-cmp-cookie-policy-switchers-first-preference">
                                            <input id="seers-cmp-cookie-policy-preference-switch1" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                            <label for="seers-cmp-cookie-policy-preference-switch1"></label>
                                        </div>
                                    </label>
                                    <label class="seers-cmp-cookie-policy-accordion-tab-label-first-preference" for="seers-cmpAccordianstatistic"><?php echo __("Statistics", $this->textdomain); ?>
                                        <div class="seers-cmp-cookie-policy-switchers-first-preference">
                                            <input id="seers-cmp-cookie-policy-statistic-switch1" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                            <label for="seers-cmp-cookie-policy-statistic-switch1"></label>
                                        </div>
                                    </label>
                                    <label class="seers-cmp-cookie-policy-accordion-tab-label-first-preference" for="seers-cmpAccordianmarketing"><?php echo __("Marketing", $this->textdomain); ?>
                                        <div class="seers-cmp-cookie-policy-switchers-first-preference">
                                            <input id="seers-cmp-cookie-policy-marketing-switch1" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                            <label for="seers-cmp-cookie-policy-marketing-switch1"></label>
                                        </div>
                                    </label>
                                    <div class="seers-cmp-show-details" data-v-15ba1144=""><a  id="seers-cmp-default-banner-opener" style="color: rgb(59, 110, 248) !important;background:transparent !important; cursor: pointer; font-size: 14px;">Show details</a></div>
                                </div>
                            <?php endif; ?>

                    </div>
                    <div class="seers-cmp-cookie-policy-btn-hol <?php echo (get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-top-hanging-bar') || (get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-banner-hanging-bar') || (get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-preference-bottom-hanging-bar') ? 'seers-cmp-cookie-policy-hanging-btn-hol' : ''; ?>"> <a href="#" class="seers-cmp-preference-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>" tabindex="0" id="<?php echo (get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-banner-preference-bar' || get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-preference-bottom-hanging-bar' || get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-preference-universal-bar') ? 'savemychoice1' : 'seers-cmp-default-banner-opener'; ?>"
                    > <?php
                            if (get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-banner-preference-bar' || get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-preference-bottom-hanging-bar' || get_option('SCCBPP_cookie_consent_banner_position') == 'seers-cmp-preference-universal-bar') {
                                echo __("Save my choices", $this->textdomain);
                            } else {
                                if (get_option('SCCBPP_cookie_consent_setting_btn_text') && get_option('SCCBPP_cookie_consent_setting_btn_text') != '') {
                                    esc_html_e(get_option('SCCBPP_cookie_consent_setting_btn_text'), $this->textdomain);
                                } else {
                                    echo __("Preference", $this->textdomain);
                                }
                            }
                            ?>
                            </a>  <a href="#" class="seers-cmp-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" id="seers-idisagree" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>" tabindex="0"> <?php if(get_option('SCCBPP_cookie_consent_reject_btn_text') && get_option('SCCBPP_cookie_consent_reject_btn_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_reject_btn_text'), $this->textdomain); }else{ echo __("Disable All", $this->textdomain); }?> </a><a href="#" class="seers-cmp-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" id="seers-iagree" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>" tabindex="0"> <?php if(get_option('SCCBPP_cookie_consent_accept_btn_text') && get_option('SCCBPP_cookie_consent_accept_btn_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_accept_btn_text'), $this->textdomain); }else{ echo __("Allow All", $this->textdomain); }?> </a> </div>
                </div>
            </div>
        </div>
        <!-- The seers-cmp-default-banner -->
        <div id="seers-cmp-default-cookie-banner" class="seers-cmp-cookie-policy-default-banner" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>">
            <div id="seers-cmp-overlay" class="seers-cmp-overlay"></div>
            <!-- seers-cmp-default-banner content -->
            <!--<div class="seers-cmp-cookie-policy-default-banner-content" id="seers-cmp-cookie-policy-default-banner-content"> <span class="seers-cmp-default-banner-close" title="close">&times;</span>-->
            <div class="seers-cmp-cookie-policy-default-banner-content" id="seers-cmp-cookie-policy-default-banner-content"> 
                <div class="seers-cmp-cookie-policy-default-banner-header">
                    <div class="seers-cmp-cookie-default-banner-logo"><img src="https://seers-application-assets.s3.amazonaws.com/images/logo/seersco-logo.png" alt="<?php echo __('seers logo', $this->textdomain); ?>"></div>
                    <span class="seers-cmp-default-banner-close" title="close" id="SeersCMPBannerSettingCloseButton">×</span>
                </div>
                <div class="seers-cmp-cookie-policy-default-banner-body-text">
                    <h3 class="seers-cmp-policy-banner-title">
                    <?php echo __("About Cookies", $this->textdomain); ?>
                </h3>
                    <div class="seers-cmp-policy-banner-text-large-block">
                        <p class="seers-cmp-policy-banner-text"> <?php if(get_option('SCCBPP_cookie_consent_body_text') && get_option('SCCBPP_cookie_consent_body_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_body_text')); }else{ esc_html_e( "We use cookies to ensure you get the best experience", $this->textdomain);} ?> </p> 
                            <?php if(get_option('SCCBPP_cookie_consent_enable_policy') && get_option('SCCBPP_cookie_consent_enable_policy')=='true' ||  get_option('SCCBPP_cookie_consent_enable_policy')=== true){?><a href="<?php if(get_option('SCCBPP_cookie_consent_policy_declaration_url') && get_option('SCCBPP_cookie_consent_policy_declaration_url')!=''){ if (filter_var(get_option('SCCBPP_cookie_consent_policy_declaration_url'), FILTER_VALIDATE_URL)) {esc_html_e(get_option('SCCBPP_cookie_consent_policy_declaration_url'));} else {echo "#";} }else{ echo "#"; } ?>" target="_blank" class="seers-cmp-policy-banner-read-cookie"><?php echo __("Read Cookie Policy", $this->textdomain);?>&nbsp;<svg  viewBox="0 0 32 40" x="0px" y="0px"><path d="M32 0l-8 1 2.438 2.438-9.5 9.5-1.063 1.063 2.125 2.125 1.063-1.063 9.5-9.5 2.438 2.438 1-8zm-30 3c-.483 0-1.047.172-1.438.563-.391.391-.563.954-.563 1.438v25c0 .483.172 1.047.563 1.438.391.391.954.563 1.438.563h25c.483 0 1.047-.172 1.438-.563.391-.391.563-.954.563-1.438v-15h-3v14h-23v-23h15v-3h-16z"></path></svg>

                        </a><?php } ?>
                        
                            <div class="seers-cmp-policy-banner-text-links">
                                <a href="javascript:void(0);" class="seers-cmp-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" id="seers_allow_all"> <?php echo __("Allow All", $this->textdomain);?> </a>
                                <a href="javascript:void(0);" class="seers-cmp-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" id="seers_disable_all"> <?php echo __("Disable All", $this->textdomain);?> </a>
                            </div>

                        <div class="seers-cmp-cookie-policy-accordion-tabs" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>">
                            <div class="seers-cmp-cookie-policy-accordion-tab">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordiannecessary" name="seers-cmpAccordiannecessary">
                                <label class="seers-cmp-cookie-policy-accordion-tab-label" for="seers-cmpAccordiannecessary"><?php echo __("Necessary", $this->textdomain);?> <span class="seers-cmp-cookie-policy-always-active"><?php echo __("Always Active", $this->textdomain);?></span>
                            </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text"><?php echo __("Necessary cookies help make a website usable by enabling basic functions like page navigation and access to secure areas of the website. The website cannot function properly without these cookies.", $this->textdomain); ?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab seers-top-border-none">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianPreference" name="seers-cmpAccordianPreference">
                                <label class="seers-cmp-cookie-policy-accordion-tab-label" for="seers-cmpAccordianPreference"><?php echo __("Preferences", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers">
                                        <input id="seers-cmp-cookie-policy-preference-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                        <label for="seers-cmp-cookie-policy-preference-switch" /> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text"><?php echo __("Preference cookies enable a website to remember information that changes the way the website behaves or looks, like your preferred language or the region that you are in.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab seers-top-border-none">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianstatistic" name="seers-cmpAccordianstatistic">
                                <label class="seers-cmp-cookie-policy-accordion-tab-label" for="seers-cmpAccordianstatistic"><?php echo __("Statistics", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers">
                                        <input id="seers-cmp-cookie-policy-statistic-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                        <label for="seers-cmp-cookie-policy-statistic-switch" /> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text"><?php echo __("Statistic cookies help website owners to understand how visitors interact with websites by collecting and reporting information anonymously.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab seers-top-border-none">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianmarketing" name="seers-cmpAccordianmarketing">
                                <label class="seers-cmp-cookie-policy-accordion-tab-label" for="seers-cmpAccordianmarketing"><?php echo __("Marketing", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers">
                                        <input id="seers-cmp-cookie-policy-marketing-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                        <label for="seers-cmp-cookie-policy-marketing-switch" /> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text"><?php echo __("Marketing cookies are used to track visitors across websites. The intention is to display ads that are relevant and engaging for the individual user and thereby more valuable for publishers and third-party advertisers.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab seers-top-border-none">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianunclassified" name="seers-cmpAccordianunclassified">
                                <label class="seers-cmp-cookie-policy-accordion-tab-label" for="seers-cmpAccordianunclassified"><?php echo __("Unclassified", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers"> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text"><?php echo __("Unclassified cookies are cookies that we are in the process of classifying, together with the providers of individual cookies.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            </div>
                        </div>
                    </div>
                <div class="seers-cmp-cookie-policy-default-banner-footer">
                    <div class="seers-cmp-cookie-policy-default-banner-footer-block"> <a href="#" class="seers-cmp-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" id="savemychoice" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>" tabindex="0"> 
                            <?php echo __("Save my choices", $this->textdomain);?>
                         </a> </div>
                    <div class="seers-cmp-cookie-policy-power-by" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>">
                                        <span class="seers-cmp-cookie-policy-scan-staus" style="font-family: arial">
                                             
                                        </span>
                                        <span class="seers-cmp-cookie-policy-powered-by-text" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>"><?php echo __("powered by", $this->textdomain);?>&nbsp;<a href="https://seers.ai" target="_blank" class="seers-cmp-cookie-policy-powered-by-link" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>" tabindex="0"><svg width="1000" height="345" viewBox="0 0 1000 345" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M164.765 160.831V166.677C164.765 167.613 164 168.371 163.072 168.371H159.685C158.749 168.371 157.992 167.605 157.992 166.677V160.831C155.704 159.613 154.137 157.207 154.137 154.429C154.137 150.433 157.375 147.187 161.379 147.187C165.382 147.187 168.62 150.425 168.62 154.429C168.62 157.207 167.061 159.613 164.765 160.831ZM161.371 190.891C168.056 183.738 173.931 175.806 178.893 167.204C183.847 158.618 187.783 149.556 190.636 140.183C181.099 137.969 171.294 136.855 161.371 136.855C151.448 136.855 141.636 137.977 132.099 140.183C134.951 149.556 138.888 158.618 143.842 167.204C148.804 175.806 154.679 183.738 161.364 190.891H161.371Z" fill="#121212"/>
<mask id="mask0_2187_164" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="132" y="136" width="59" height="55">
<path d="M164.765 160.831V166.677C164.765 167.613 164 168.371 163.072 168.371H159.685C158.749 168.371 157.992 167.605 157.992 166.677V160.831C155.704 159.613 154.137 157.207 154.137 154.429C154.137 150.433 157.375 147.187 161.379 147.187C165.382 147.187 168.62 150.425 168.62 154.429C168.62 157.207 167.061 159.613 164.765 160.831ZM161.371 190.891C168.056 183.738 173.931 175.806 178.893 167.204C183.847 158.618 187.783 149.556 190.636 140.183C181.099 137.969 171.294 136.855 161.371 136.855C151.448 136.855 141.636 137.977 132.099 140.183C134.951 149.556 138.888 158.618 143.842 167.204C148.804 175.806 154.679 183.738 161.364 190.891H161.371Z" fill="white"/>
</mask>
<g mask="url(#mask0_2187_164)">
<path d="M190.643 136.855H132.106V190.891H190.643V136.855Z" fill="#121212"/>
</g>
<path fill-rule="evenodd" clip-rule="evenodd" d="M279.647 87.3641C254.156 70.2805 224.765 58.5596 193.094 53.8208V76.1186C215.978 79.9513 237.964 87.9286 258.092 99.8054C258.382 130.303 251.341 160.215 237.555 187.43L218.452 176.399L199.341 165.362C197.803 168.526 196.147 171.638 194.379 174.706C185.674 189.784 174.518 203.043 161.363 214.021C156.342 209.831 151.604 205.301 147.192 200.465L127.724 211.703C137.543 223.09 148.833 233.102 161.363 241.488C179.791 229.151 195.56 213.293 207.875 194.709L241.967 214.392L246.075 216.769C247.976 213.82 249.818 210.812 251.586 207.737C273.475 169.826 282.358 127.979 279.64 87.3567L279.647 87.3641Z" fill="#3B6EF8"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M64.6496 99.8056C90.9059 84.319 120.356 75.4503 150.794 73.7791V117.907C154.3 117.654 157.828 117.535 161.371 117.535C178.789 117.535 195.842 120.566 211.923 126.464C210.801 132.911 209.249 139.276 207.273 145.515L226.741 156.754C231.695 142.559 234.718 127.771 235.713 112.722C215.808 102.925 194.208 97.206 171.948 95.8318V51.719C168.442 51.5481 164.921 51.459 161.371 51.459C117.601 51.459 76.9199 64.6876 43.0948 87.3569C41.0448 117.974 45.5905 149.289 57.3186 179.088L76.6302 167.94C68.5045 146.206 64.4267 123.173 64.6496 99.8056Z" fill="#3B6EF8"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M161.371 267.337C134.818 252.34 112.431 231.283 95.756 205.747L127.041 187.69L133.978 183.686C132.01 180.775 130.138 177.781 128.363 174.714C119.658 159.628 113.753 143.347 110.819 126.471C116.962 124.213 123.253 122.378 129.648 120.975V98.4985C114.875 101.306 100.562 106.082 87.0361 112.737C88.5068 134.872 94.3522 156.442 104.29 176.407L85.1867 187.437L78.4944 191.3L74.4687 193.625L66.083 198.467C67.6874 201.587 69.3734 204.684 71.1486 207.759C93.0376 245.67 124.835 274.289 161.371 292.242C188.912 278.708 213.757 259.114 233.693 234.053L214.381 222.904C199.623 240.805 181.708 255.861 161.371 267.352V267.337Z" fill="#3B6EF8"/>
<path d="M933.89 141.551V232.1H918.325V141.551H933.89ZM917.153 117.533C917.153 115.022 917.906 112.902 919.413 111.172C920.975 109.443 923.262 108.578 926.275 108.578C929.232 108.578 931.491 109.443 933.054 111.172C934.672 112.902 935.48 115.022 935.48 117.533C935.48 119.932 934.672 121.996 933.054 123.725C931.491 125.399 929.232 126.236 926.275 126.236C923.262 126.236 920.975 125.399 919.413 123.725C917.906 121.996 917.153 119.932 917.153 117.533Z" fill="black"/>
<path d="M877.234 216.618V170.004C877.234 166.434 876.509 163.337 875.059 160.715C873.664 158.037 871.544 155.973 868.698 154.522C865.853 153.072 862.338 152.346 858.154 152.346C854.248 152.346 850.817 153.016 847.86 154.355C844.959 155.694 842.672 157.451 840.998 159.627C839.38 161.803 838.571 164.146 838.571 166.657H823.089C823.089 163.421 823.926 160.213 825.6 157.033C827.273 153.853 829.672 150.979 832.797 148.413C835.977 145.791 839.771 143.727 844.178 142.22C848.641 140.658 853.607 139.877 859.074 139.877C865.658 139.877 871.46 140.993 876.481 143.224C881.558 145.456 885.519 148.831 888.365 153.351C891.266 157.814 892.716 163.421 892.716 170.172V212.35C892.716 215.362 892.968 218.57 893.47 221.974C894.028 225.377 894.837 228.306 895.897 230.761V232.1H879.745C878.964 230.314 878.35 227.943 877.904 224.986C877.458 221.974 877.234 219.184 877.234 216.618ZM879.912 177.201L880.08 188.081H864.43C860.023 188.081 856.09 188.443 852.631 189.168C849.171 189.838 846.27 190.87 843.927 192.265C841.584 193.66 839.799 195.417 838.571 197.537C837.344 199.601 836.73 202.028 836.73 204.818C836.73 207.663 837.372 210.258 838.655 212.601C839.938 214.944 841.863 216.813 844.429 218.208C847.051 219.547 850.259 220.216 854.053 220.216C858.795 220.216 862.98 219.212 866.606 217.204C870.233 215.195 873.106 212.74 875.226 209.839C877.402 206.938 878.573 204.12 878.741 201.387L885.352 208.835C884.961 211.178 883.901 213.772 882.172 216.618C880.442 219.463 878.127 222.197 875.226 224.819C872.381 227.385 868.977 229.533 865.016 231.263C861.111 232.937 856.703 233.773 851.794 233.773C845.657 233.773 840.273 232.574 835.642 230.175C831.067 227.776 827.497 224.568 824.93 220.551C822.42 216.478 821.164 211.931 821.164 206.91C821.164 202.056 822.113 197.788 824.01 194.106C825.907 190.368 828.64 187.272 832.211 184.817C835.782 182.306 840.078 180.409 845.099 179.126C850.12 177.843 855.727 177.201 861.92 177.201H879.912Z" fill="black"/>
<path d="M778.903 223.898C778.903 221.276 779.712 219.072 781.33 217.287C783.003 215.446 785.402 214.525 788.527 214.525C791.651 214.525 794.022 215.446 795.64 217.287C797.314 219.072 798.151 221.276 798.151 223.898C798.151 226.465 797.314 228.641 795.64 230.426C794.022 232.211 791.651 233.104 788.527 233.104C785.402 233.104 783.003 232.211 781.33 230.426C779.712 228.641 778.903 226.465 778.903 223.898Z" fill="black"/>
<path d="M742.833 208.082C742.833 205.85 742.331 203.786 741.327 201.889C740.379 199.936 738.398 198.179 735.385 196.617C732.428 194.999 727.965 193.604 721.995 192.432C716.974 191.372 712.427 190.117 708.355 188.666C704.338 187.216 700.906 185.458 698.061 183.394C695.272 181.33 693.124 178.903 691.617 176.113C690.111 173.324 689.358 170.06 689.358 166.322C689.358 162.751 690.139 159.376 691.701 156.196C693.319 153.016 695.578 150.198 698.479 147.744C701.436 145.289 704.979 143.364 709.108 141.969C713.236 140.574 717.839 139.877 722.916 139.877C730.169 139.877 736.362 141.16 741.494 143.727C746.627 146.293 750.561 149.724 753.294 154.02C756.028 158.26 757.395 162.974 757.395 168.163H741.913C741.913 165.652 741.16 163.226 739.653 160.882C738.203 158.483 736.055 156.503 733.209 154.941C730.42 153.378 726.989 152.597 722.916 152.597C718.62 152.597 715.133 153.267 712.455 154.606C709.833 155.889 707.908 157.535 706.681 159.543C705.509 161.552 704.923 163.672 704.923 165.904C704.923 167.577 705.202 169.084 705.76 170.423C706.374 171.706 707.434 172.905 708.94 174.021C710.447 175.081 712.567 176.085 715.301 177.034C718.034 177.982 721.521 178.931 725.761 179.879C733.182 181.553 739.291 183.561 744.089 185.905C748.887 188.248 752.457 191.121 754.801 194.524C757.144 197.928 758.316 202.056 758.316 206.91C758.316 210.871 757.479 214.498 755.805 217.789C754.187 221.081 751.816 223.926 748.692 226.325C745.623 228.669 741.941 230.51 737.645 231.849C733.405 233.132 728.635 233.773 723.334 233.773C715.356 233.773 708.606 232.351 703.082 229.505C697.559 226.66 693.375 222.978 690.529 218.459C687.684 213.94 686.261 209.17 686.261 204.148H701.827C702.05 208.388 703.278 211.764 705.509 214.274C707.741 216.729 710.475 218.487 713.71 219.547C716.946 220.551 720.154 221.053 723.334 221.053C727.575 221.053 731.117 220.495 733.963 219.379C736.864 218.264 739.068 216.729 740.574 214.777C742.08 212.824 742.833 210.592 742.833 208.082Z" fill="black"/>
<path d="M647.514 155.777V232.1H632.032V141.551H647.096L647.514 155.777ZM675.8 141.049L675.717 155.443C674.434 155.164 673.206 154.996 672.034 154.941C670.919 154.829 669.635 154.773 668.185 154.773C664.614 154.773 661.462 155.331 658.728 156.447C655.995 157.563 653.679 159.125 651.782 161.133C649.885 163.142 648.379 165.541 647.263 168.33C646.203 171.064 645.506 174.077 645.171 177.369L640.819 179.879C640.819 174.412 641.349 169.279 642.409 164.481C643.525 159.683 645.227 155.443 647.514 151.76C649.802 148.022 652.703 145.121 656.218 143.057C659.788 140.937 664.028 139.877 668.938 139.877C670.054 139.877 671.337 140.016 672.788 140.295C674.238 140.519 675.242 140.77 675.8 141.049Z" fill="black"/>
<path d="M578.724 233.773C572.42 233.773 566.701 232.713 561.568 230.593C556.491 228.418 552.112 225.377 548.43 221.472C544.803 217.566 542.014 212.935 540.061 207.58C538.108 202.224 537.132 196.366 537.132 190.005V186.49C537.132 179.126 538.22 172.571 540.396 166.824C542.571 161.022 545.528 156.112 549.266 152.095C553.004 148.078 557.245 145.038 561.987 142.973C566.729 140.909 571.639 139.877 576.716 139.877C583.187 139.877 588.767 140.993 593.453 143.224C598.195 145.456 602.073 148.58 605.085 152.597C608.098 156.559 610.33 161.245 611.78 166.657C613.231 172.013 613.956 177.871 613.956 184.231V191.177H546.337V178.54H598.474V177.369C598.251 173.352 597.414 169.446 595.964 165.652C594.569 161.859 592.337 158.734 589.269 156.28C586.2 153.825 582.016 152.597 576.716 152.597C573.201 152.597 569.965 153.351 567.008 154.857C564.051 156.307 561.513 158.483 559.393 161.384C557.272 164.286 555.627 167.828 554.455 172.013C553.283 176.197 552.698 181.023 552.698 186.49V190.005C552.698 194.301 553.283 198.346 554.455 202.14C555.682 205.878 557.44 209.17 559.727 212.015C562.07 214.86 564.888 217.092 568.18 218.71C571.527 220.328 575.321 221.137 579.561 221.137C585.029 221.137 589.659 220.021 593.453 217.789C597.247 215.558 600.566 212.573 603.412 208.835L612.785 216.283C610.832 219.24 608.349 222.057 605.337 224.735C602.324 227.413 598.614 229.589 594.206 231.263C589.854 232.937 584.694 233.773 578.724 233.773Z" fill="black"/>
<path d="M487.84 233.773C481.535 233.773 475.817 232.713 470.684 230.593C465.607 228.418 461.227 225.377 457.545 221.472C453.919 217.566 451.129 212.935 449.177 207.58C447.224 202.224 446.248 196.366 446.248 190.005V186.49C446.248 179.126 447.335 172.571 449.511 166.824C451.687 161.022 454.644 156.112 458.382 152.095C462.12 148.078 466.36 145.038 471.103 142.973C475.845 140.909 480.754 139.877 485.831 139.877C492.303 139.877 497.882 140.993 502.569 143.224C507.311 145.456 511.188 148.58 514.201 152.597C517.214 156.559 519.446 161.245 520.896 166.657C522.347 172.013 523.072 177.871 523.072 184.231V191.177H455.453V178.54H507.59V177.369C507.367 173.352 506.53 169.446 505.079 165.652C503.685 161.859 501.453 158.734 498.384 156.28C495.316 153.825 491.132 152.597 485.831 152.597C482.317 152.597 479.081 153.351 476.124 154.857C473.167 156.307 470.628 158.483 468.508 161.384C466.388 164.286 464.742 167.828 463.571 172.013C462.399 176.197 461.813 181.023 461.813 186.49V190.005C461.813 194.301 462.399 198.346 463.571 202.14C464.798 205.878 466.556 209.17 468.843 212.015C471.186 214.86 474.004 217.092 477.295 218.71C480.643 220.328 484.437 221.137 488.677 221.137C494.144 221.137 498.775 220.021 502.569 217.789C506.363 215.558 509.682 212.573 512.527 208.835L521.9 216.283C519.948 219.24 517.465 222.057 514.452 224.735C511.44 227.413 507.729 229.589 503.322 231.263C498.97 232.937 493.81 233.773 487.84 233.773Z" fill="black"/>
<path d="M415.786 201.303C415.786 198.458 415.339 195.947 414.447 193.771C413.61 191.54 412.104 189.531 409.928 187.746C407.808 185.96 404.851 184.259 401.057 182.641C397.319 181.023 392.577 179.377 386.83 177.703C380.805 175.918 375.365 173.937 370.511 171.762C365.657 169.53 361.501 166.991 358.042 164.146C354.583 161.301 351.933 158.037 350.092 154.355C348.251 150.673 347.33 146.46 347.33 141.718C347.33 136.976 348.306 132.596 350.259 128.579C352.212 124.562 355.001 121.075 358.628 118.118C362.31 115.106 366.69 112.762 371.767 111.089C376.844 109.415 382.506 108.578 388.755 108.578C397.905 108.578 405.66 110.336 412.02 113.85C418.436 117.309 423.318 121.856 426.665 127.491C430.013 133.07 431.686 139.04 431.686 145.4H415.618C415.618 140.825 414.642 136.781 412.689 133.266C410.737 129.695 407.78 126.906 403.819 124.897C399.857 122.833 394.836 121.801 388.755 121.801C383.009 121.801 378.266 122.665 374.528 124.395C370.79 126.124 368.001 128.468 366.16 131.425C364.374 134.382 363.482 137.757 363.482 141.551C363.482 144.117 364.012 146.46 365.072 148.58C366.187 150.645 367.889 152.569 370.177 154.355C372.52 156.14 375.477 157.786 379.047 159.292C382.674 160.799 386.998 162.249 392.019 163.644C398.937 165.597 404.907 167.773 409.928 170.172C414.949 172.571 419.077 175.276 422.313 178.289C425.605 181.246 428.032 184.621 429.594 188.415C431.212 192.153 432.021 196.393 432.021 201.136C432.021 206.101 431.017 210.592 429.008 214.609C427 218.626 424.127 222.057 420.389 224.903C416.651 227.748 412.159 229.952 406.915 231.514C401.726 233.02 395.924 233.773 389.508 233.773C383.873 233.773 378.322 232.992 372.855 231.43C367.443 229.868 362.505 227.525 358.042 224.401C353.634 221.276 350.092 217.427 347.414 212.852C344.792 208.221 343.48 202.865 343.48 196.784H359.548C359.548 200.968 360.357 204.567 361.975 207.58C363.593 210.536 365.797 212.991 368.586 214.944C371.432 216.897 374.64 218.347 378.21 219.296C381.837 220.188 385.603 220.635 389.508 220.635C395.143 220.635 399.913 219.854 403.819 218.291C407.724 216.729 410.681 214.498 412.689 211.597C414.754 208.695 415.786 205.264 415.786 201.303Z" fill="black"/>
</svg>
</a></span> 
                                        
                                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Get the seers-cmp-default-banner
        var cmpnsentmodal = document.getElementById("seers-cmp-cookie-policy-default-banner-content");
        var cmpnsentmodaloverlay = document.getElementById("seers-cmp-overlay");
        // Get the button that opens the seers-cmp-default-banner
        var seersOpenbtn = document.getElementById("seers-cmp-default-banner-opener");
        // Get the <span> element that seers-cmp-default-banner-closes the seers-cmp-default-banner
        var seersClosespan = document.getElementsByClassName("seers-cmp-default-banner-close")[0];
        // When the user clicks the button, open the seers-cmp-default-banner 
        if(seersOpenbtn){
        seersOpenbtn.onclick = function () {
                cmpnsentmodal.classList.add("seers-cmp-cookie-banner-active");
                cmpnsentmodal.classList.remove("seers-cmp-cookie-banner-no-active");
                cmpnsentmodaloverlay.classList.add("seers-cmp-overlay-active");
            }
        }
            // When the user clicks on <span> (x), seers-cmp-default-banner-close the seers-cmp-default-banner
        seersClosespan.onclick = function () {
            cmpnsentmodal.classList.remove("seers-cmp-cookie-banner-active");
            cmpnsentmodal.classList.add("seers-cmp-cookie-banner-no-active");
            cmpnsentmodaloverlay.classList.remove("seers-cmp-overlay-active");
        }
        
        //by Shoaib
        /*********** I Agree. **************/
        function savecookieajax(disagree, btnid) {
            let seersbannerbar = document.getElementsByClassName("seers-cmp-banner-bar")[0];

            let consentobj = {"Pref": false , "stat": false, "market": false};
            if (!disagree) {
                
                if (document.getElementById('seers-cmp-cookie-policy-preference-switch').checked || btnid === "seers-iagree" || btnid === "seers_allow_all") {
                consentobj.Pref = true;
                } else {
                    consentobj.Pref = false;
                }
                    if (document.getElementById('seers-cmp-cookie-policy-statistic-switch').checked || btnid === "seers-iagree" || btnid === "seers_allow_all") {
                    consentobj.stat = true;
                } else {
                    consentobj.stat = false;
                }
                    if (document.getElementById('seers-cmp-cookie-policy-marketing-switch').checked || btnid === "seers-iagree" || btnid === "seers_allow_all") {
                    consentobj.market = true;
                } else {
                    consentobj.market = false;
                }

            }
            setUserConsent({
            pref: consentobj.Pref,
            stat: consentobj.stat,
            market: consentobj.market
            });            
            //hide current banner
            cmpnsentmodal.classList.remove("seers-cmp-cookie-banner-active");
            cmpnsentmodal.classList.add("seers-cmp-cookie-banner-no-active");
            cmpnsentmodaloverlay.classList.remove("seers-cmp-overlay-active");
            seersbannerbar.classList.add("seers-cmp-banner-bar-hide");

            //var params = "action=savecookie&consentobj=" + JSON.stringify(consentobj);
            var params = "action=savecookie&savecooienonce=<?php echo wp_create_nonce( 'seers-cooksave-call' );?>&save=y";
            httpRequest = new XMLHttpRequest()
            httpRequest.open('POST', ajaxurl)
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.send(params);
            // beforeSend:
            httpRequest.onreadystatechange = function() {
                // Process the server response here.
                if (httpRequest.readyState === XMLHttpRequest.DONE) {
                    // complete:
                    
                    let data = JSON.parse(httpRequest.response)
                    console.log(data);
                    if (httpRequest.status === 200) {
                        // show success message
                        
                        var expires = "";
                        var days = 30;
                        let name = "SeersCMPConsent";

                        if (days) {
                            let expirindays = <?php echo ((get_option('SCCBPP_cookie_consent_cookies_expiry')) ? get_option('SCCBPP_cookie_consent_cookies_expiry') : 1 );?>;
                            var date = new Date();
                            //date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                            //expires = "; expires=" + date.toGMTString();
                            
                            if (expirindays < 1) {
                                expires = "";
                            } else {
                                days = expirindays;
                                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                                expires = "; expires=" + date.toGMTString();
                            }
                            
                        }

                        const item = {
                            value: JSON.stringify(consentobj),
                            expiry: expires
                        }
                        
                        localStorage.setItem(name, JSON.stringify(item));
                    }
                }
            }
        }
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.seers-cms-tabs-universal-bar > div');
            const pages = document.querySelectorAll('.seers-cms-pages-universal-bar > div');

            tabs.forEach((tab, index) => {
                tab.addEventListener('click', function () {
                    tabs.forEach(t => t.classList.remove('active'));
                    pages.forEach(p => p.style.display = 'none');
                    tab.classList.add('active');
                    pages[index].style.display = 'block';
                });
            });
        });
        const savemychoiceButton = document.getElementById("savemychoice");
        if (savemychoiceButton) {
            savemychoiceButton.addEventListener('click', function(e) {
                e.preventDefault();
                savecookieajax(false, "savemychoice");
                document.getElementById("SeersCMPBannerBadgeIcon").style.display = "block";
            });
        }

        const savemychoice1Button = document.getElementById("savemychoice1");
        if (savemychoice1Button) {
            savemychoice1Button.addEventListener('click', function(e) {
                e.preventDefault();
                savecookieajax(false, "savemychoice1");
                document.getElementById("SeersCMPBannerBadgeIcon").style.display = "block";
            });
        }
        document.getElementById("seers-iagree").addEventListener('click', function(e) {
            e.preventDefault();
            savecookieajax(false, "seers-iagree");
            document.getElementById("SeersCMPBannerBadgeIcon").style.display = "block";
        });
        document.getElementById("seers-idisagree").addEventListener('click', function(e) {
            e.preventDefault();
            savecookieajax(true, "seers-idisagree");
            document.getElementById("SeersCMPBannerBadgeIcon").style.display = "block";
        });
        document.getElementById("seers_allow_all").addEventListener('click', function(e) {
            e.preventDefault();
            savecookieajax(false, "seers_allow_all");
            document.getElementById("SeersCMPBannerBadgeIcon").style.display = "block";
        });
        document.getElementById("seers_disable_all").addEventListener('click', function(e) {
            e.preventDefault();
            savecookieajax(true, "seers_disable_all");
            document.getElementById("SeersCMPBannerBadgeIcon").style.display = "block";
        });
        
function syncSwitches(switch1, switch2, switch3) {
    const element1 = document.getElementById(switch1);
    const element2 = document.getElementById(switch2);
    const element3 = document.getElementById(switch3);

    if (element1 && element2) {
        element1.addEventListener('change', function() {
            element2.checked = this.checked;
            if (element3) element3.checked = this.checked;
        });

        element2.addEventListener('change', function() {
            element1.checked = this.checked;
            if (element3) element3.checked = this.checked;
        });

        if (element3) {
            element3.addEventListener('change', function() {
                element1.checked = this.checked;
                element2.checked = this.checked;
            });
        }
    }
}

syncSwitches('seers-cmp-cookie-policy-preference-switch', 'seers-cmp-cookie-policy-preference-switch1', 'seers-cmp-cookie-policy-preference-switch2');

syncSwitches('seers-cmp-cookie-policy-statistic-switch', 'seers-cmp-cookie-policy-statistic-switch1', 'seers-cmp-cookie-policy-statistic-switch2');

syncSwitches('seers-cmp-cookie-policy-marketing-switch', 'seers-cmp-cookie-policy-marketing-switch1', 'seers-cmp-cookie-policy-marketing-switch2');

function setUserConsent({ pref, stat, market }) {
  if (!window.wp?.consent) {
    console.warn("wp.consent API not available.");
    return;
  }

  wp.consent.setConsent('functional', true); 
  wp.consent.setConsent('analytics', stat);
  wp.consent.setConsent('marketing', market);
  wp.consent.setConsent('personalization', pref);

}


</script>
</body>

</html>