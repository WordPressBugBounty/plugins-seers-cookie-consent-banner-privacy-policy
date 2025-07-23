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
            width: 80px;
            min-width: 80px;
            max-width: 80px;
            height: 23px;
            min-height: 23px;
            max-height: 23px;
            margin-top: -2px;
            margin-left: 1px;
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
            padding: 15px 19.5px 13px 32.5px !important;
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
            width: 108px;
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

        div[class="seers-cmp-banner-bar"] .seers-cmp-cookie-policy-text {
            margin-right: 10px !important;
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
                <span style="width=200px" class="seers-cmp-cookie-policy-powered-by-text" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>"><?php echo __("powered by", $this->textdomain);?>&nbsp;<a href="https://seers.ai" target="_blank" class="seers-cmp-cookie-policy-powered-by-link" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>" tabindex="0"><svg width="894" height="242" viewBox="0 0 894 242" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M122.765 109.831V115.677C122.765 116.613 122 117.371 121.072 117.371H117.685C116.749 117.371 115.992 116.605 115.992 115.677V109.831C113.704 108.613 112.137 106.207 112.137 103.429C112.137 99.433 115.375 96.187 119.379 96.187C123.382 96.187 126.62 99.425 126.62 103.429C126.62 106.207 125.061 108.613 122.765 109.831ZM119.371 139.891C126.056 132.738 131.931 124.806 136.893 116.204C141.847 107.618 145.783 98.556 148.636 89.183C139.099 86.969 129.294 85.855 119.371 85.855C109.448 85.855 99.636 86.977 90.099 89.183C92.951 98.556 96.888 107.618 101.842 116.204C106.804 124.806 112.679 132.738 119.364 139.891H119.371Z" fill="#121212"/>
<mask id="mask0_1_24" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="90" y="85" width="59" height="55">
<path d="M122.765 109.831V115.677C122.765 116.613 122 117.371 121.072 117.371H117.685C116.749 117.371 115.992 116.605 115.992 115.677V109.831C113.704 108.613 112.137 106.207 112.137 103.429C112.137 99.433 115.375 96.187 119.379 96.187C123.382 96.187 126.62 99.425 126.62 103.429C126.62 106.207 125.061 108.613 122.765 109.831ZM119.371 139.891C126.056 132.738 131.931 124.806 136.893 116.204C141.847 107.618 145.783 98.556 148.636 89.183C139.099 86.969 129.294 85.855 119.371 85.855C109.448 85.855 99.636 86.977 90.099 89.183C92.951 98.556 96.888 107.618 101.842 116.204C106.804 124.806 112.679 132.738 119.364 139.891H119.371Z" fill="white"/>
</mask>
<g mask="url(#mask0_1_24)">
<path d="M148.643 85.855H90.106V139.891H148.643V85.855Z" fill="#121212"/>
</g>
<path fill-rule="evenodd" clip-rule="evenodd" d="M237.647 36.3641C212.156 19.2805 182.765 7.5596 151.094 2.8208V25.1186C173.978 28.9513 195.964 36.9286 216.092 48.8054C216.382 79.303 209.341 109.215 195.555 136.43L176.452 125.399L157.341 114.362C155.803 117.526 154.147 120.638 152.379 123.706C143.674 138.784 132.518 152.043 119.363 163.021C114.342 158.831 109.604 154.301 105.192 149.465L85.724 160.703C95.543 172.09 106.833 182.102 119.363 190.488C137.791 178.151 153.56 162.293 165.875 143.709L199.967 163.392L204.075 165.769C205.976 162.82 207.818 159.812 209.586 156.737C231.475 118.826 240.358 76.979 237.64 36.3567L237.647 36.3641Z" fill="#3B6EF8"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.6496 48.8056C48.9059 33.319 78.356 24.4503 108.794 22.7791V66.907C112.3 66.654 115.828 66.535 119.371 66.535C136.789 66.535 153.842 69.566 169.923 75.464C168.801 81.911 167.249 88.276 165.273 94.515L184.741 105.754C189.695 91.559 192.718 76.771 193.713 61.722C173.808 51.925 152.208 46.206 129.948 44.8318V0.718987C126.442 0.548087 122.921 0.458984 119.371 0.458984C75.601 0.458984 34.9199 13.6876 1.09483 36.3569C-0.955171 66.974 3.59053 98.289 15.3186 128.088L34.6302 116.94C26.5045 95.206 22.4267 72.173 22.6496 48.8056Z" fill="#3B6EF8"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M119.371 216.337C92.818 201.34 70.431 180.283 53.756 154.747L85.041 136.69L91.978 132.686C90.01 129.775 88.138 126.781 86.363 123.714C77.658 108.628 71.753 92.347 68.819 75.471C74.962 73.213 81.253 71.378 87.648 69.975V47.4985C72.875 50.306 58.562 55.082 45.0361 61.737C46.5068 83.872 52.3522 105.442 62.29 125.407L43.1867 136.437L36.4944 140.3L32.4687 142.625L24.083 147.467C25.6874 150.587 27.3734 153.684 29.1486 156.759C51.0376 194.67 82.835 223.289 119.371 241.242C146.912 227.708 171.757 208.114 191.693 183.053L172.381 171.904C157.623 189.805 139.708 204.861 119.371 216.352V216.337Z" fill="#3B6EF8"/>
<path d="M891.89 90.551V181.1H876.325V90.551H891.89ZM875.153 66.533C875.153 64.022 875.906 61.902 877.413 60.172C878.975 58.443 881.262 57.578 884.275 57.578C887.232 57.578 889.491 58.443 891.054 60.172C892.672 61.902 893.48 64.022 893.48 66.533C893.48 68.932 892.672 70.996 891.054 72.725C889.491 74.399 887.232 75.236 884.275 75.236C881.262 75.236 878.975 74.399 877.413 72.725C875.906 70.996 875.153 68.932 875.153 66.533Z" fill="black"/>
<path d="M736.903 172.898C736.903 170.276 737.712 168.072 739.33 166.287C741.003 164.446 743.402 163.525 746.527 163.525C749.651 163.525 752.022 164.446 753.64 166.287C755.314 168.072 756.151 170.276 756.151 172.898C756.151 175.465 755.314 177.641 753.64 179.426C752.022 181.211 749.651 182.104 746.527 182.104C743.402 182.104 741.003 181.211 739.33 179.426C737.712 177.641 736.903 175.465 736.903 172.898Z" fill="black"/>
<path d="M700.833 157.082C700.833 154.85 700.331 152.786 699.327 150.889C698.379 148.936 696.398 147.179 693.385 145.617C690.428 143.999 685.965 142.604 679.995 141.432C674.974 140.372 670.427 139.117 666.355 137.666C662.338 136.216 658.906 134.458 656.061 132.394C653.272 130.33 651.124 127.903 649.617 125.113C648.111 122.324 647.358 119.06 647.358 115.322C647.358 111.751 648.139 108.376 649.701 105.196C651.319 102.016 653.578 99.198 656.479 96.744C659.436 94.289 662.979 92.364 667.108 90.969C671.236 89.574 675.839 88.877 680.916 88.877C688.169 88.877 694.362 90.16 699.494 92.727C704.627 95.293 708.561 98.724 711.294 103.02C714.028 107.26 715.395 111.974 715.395 117.163H699.913C699.913 114.652 699.16 112.226 697.653 109.882C696.203 107.483 694.055 105.503 691.209 103.941C688.42 102.378 684.989 101.597 680.916 101.597C676.62 101.597 673.133 102.267 670.455 103.606C667.833 104.889 665.908 106.535 664.681 108.543C663.509 110.552 662.923 112.672 662.923 114.904C662.923 116.577 663.202 118.084 663.76 119.423C664.374 120.706 665.434 121.905 666.94 123.021C668.447 124.081 670.567 125.085 673.301 126.034C676.034 126.982 679.521 127.931 683.761 128.879C691.182 130.553 697.291 132.561 702.089 134.905C706.887 137.248 710.457 140.121 712.801 143.524C715.144 146.928 716.316 151.056 716.316 155.91C716.316 159.871 715.479 163.498 713.805 166.789C712.187 170.081 709.816 172.926 706.692 175.325C703.623 177.669 699.941 179.51 695.645 180.849C691.405 182.132 686.635 182.773 681.334 182.773C673.356 182.773 666.606 181.351 661.082 178.505C655.559 175.66 651.375 171.978 648.529 167.459C645.684 162.94 644.261 158.17 644.261 153.148H659.827C660.05 157.388 661.278 160.764 663.509 163.274C665.741 165.729 668.475 167.487 671.71 168.547C674.946 169.551 678.154 170.053 681.334 170.053C685.575 170.053 689.117 169.495 691.963 168.379C694.864 167.264 697.068 165.729 698.574 163.777C700.08 161.824 700.833 159.592 700.833 157.082Z" fill="black"/>
<path d="M605.514 104.777V181.1H590.032V90.551H605.096L605.514 104.777ZM633.8 90.049L633.717 104.443C632.434 104.164 631.206 103.996 630.034 103.941C628.919 103.829 627.635 103.773 626.185 103.773C622.614 103.773 619.462 104.331 616.728 105.447C613.995 106.563 611.679 108.125 609.782 110.133C607.885 112.142 606.379 114.541 605.263 117.33C604.203 120.064 603.506 123.077 603.171 126.369L598.819 128.879C598.819 123.412 599.349 118.279 600.409 113.481C601.525 108.683 603.227 104.443 605.514 100.76C607.802 97.022 610.703 94.121 614.218 92.057C617.788 89.937 622.028 88.877 626.938 88.877C628.054 88.877 629.337 89.016 630.788 89.295C632.238 89.519 633.242 89.77 633.8 90.049Z" fill="black"/>
<path d="M536.724 182.773C530.42 182.773 524.701 181.713 519.568 179.593C514.491 177.418 510.112 174.377 506.43 170.472C502.803 166.566 500.014 161.935 498.061 156.58C496.108 151.224 495.132 145.366 495.132 139.005V135.49C495.132 128.126 496.22 121.571 498.396 115.824C500.571 110.022 503.528 105.112 507.266 101.095C511.004 97.078 515.245 94.038 519.987 91.973C524.729 89.909 529.639 88.877 534.716 88.877C541.187 88.877 546.767 89.993 551.453 92.224C556.195 94.456 560.073 97.58 563.085 101.597C566.098 105.559 568.33 110.245 569.78 115.657C571.231 121.013 571.956 126.871 571.956 133.231V140.177H504.337V127.54H556.474V126.369C556.251 122.352 555.414 118.446 553.964 114.652C552.569 110.859 550.337 107.734 547.269 105.28C544.2 102.825 540.016 101.597 534.716 101.597C531.201 101.597 527.965 102.351 525.008 103.857C522.051 105.307 519.513 107.483 517.393 110.384C515.272 113.286 513.627 116.828 512.455 121.013C511.283 125.197 510.698 130.023 510.698 135.49V139.005C510.698 143.301 511.283 147.346 512.455 151.14C513.682 154.878 515.44 158.17 517.727 161.015C520.07 163.86 522.888 166.092 526.18 167.71C529.527 169.328 533.321 170.137 537.561 170.137C543.029 170.137 547.659 169.021 551.453 166.789C555.247 164.558 558.566 161.573 561.412 157.835L570.785 165.283C568.832 168.24 566.349 171.057 563.337 173.735C560.324 176.413 556.614 178.589 552.206 180.263C547.854 181.937 542.694 182.773 536.724 182.773Z" fill="black"/>
<path d="M445.84 182.773C439.535 182.773 433.817 181.713 428.684 179.593C423.607 177.418 419.227 174.377 415.545 170.472C411.919 166.566 409.129 161.935 407.177 156.58C405.224 151.224 404.248 145.366 404.248 139.005V135.49C404.248 128.126 405.335 121.571 407.511 115.824C409.687 110.022 412.644 105.112 416.382 101.095C420.12 97.078 424.36 94.038 429.103 91.973C433.845 89.909 438.754 88.877 443.831 88.877C450.303 88.877 455.882 89.993 460.569 92.224C465.311 94.456 469.188 97.58 472.201 101.597C475.214 105.559 477.446 110.245 478.896 115.657C480.347 121.013 481.072 126.871 481.072 133.231V140.177H413.453V127.54H465.59V126.369C465.367 122.352 464.53 118.446 463.079 114.652C461.685 110.859 459.453 107.734 456.384 105.28C453.316 102.825 449.132 101.597 443.831 101.597C440.317 101.597 437.081 102.351 434.124 103.857C431.167 105.307 428.628 107.483 426.508 110.384C424.388 113.286 422.742 116.828 421.571 121.013C420.399 125.197 419.813 130.023 419.813 135.49V139.005C419.813 143.301 420.399 147.346 421.571 151.14C422.798 154.878 424.556 158.17 426.843 161.015C429.186 163.86 432.004 166.092 435.295 167.71C438.643 169.328 442.437 170.137 446.677 170.137C452.144 170.137 456.775 169.021 460.569 166.789C464.363 164.558 467.682 161.573 470.527 157.835L479.9 165.283C477.948 168.24 475.465 171.057 472.452 173.735C469.44 176.413 465.729 178.589 461.322 180.263C456.97 181.937 451.81 182.773 445.84 182.773Z" fill="black"/>
<path d="M373.786 150.303C373.786 147.458 373.339 144.947 372.447 142.771C371.61 140.54 370.104 138.531 367.928 136.746C365.808 134.96 362.851 133.259 359.057 131.641C355.319 130.023 350.577 128.377 344.83 126.703C338.805 124.918 333.365 122.937 328.511 120.762C323.657 118.53 319.501 115.991 316.042 113.146C312.583 110.301 309.933 107.037 308.092 103.355C306.251 99.673 305.33 95.46 305.33 90.718C305.33 85.976 306.306 81.596 308.259 77.579C310.212 73.562 313.001 70.075 316.628 67.118C320.31 64.106 324.69 61.762 329.767 60.089C334.844 58.415 340.506 57.578 346.755 57.578C355.905 57.578 363.66 59.336 370.02 62.85C376.436 66.309 381.318 70.856 384.665 76.491C388.013 82.07 389.686 88.04 389.686 94.4H373.618C373.618 89.825 372.642 85.781 370.689 82.266C368.737 78.695 365.78 75.906 361.819 73.897C357.857 71.833 352.836 70.801 346.755 70.801C341.009 70.801 336.266 71.665 332.528 73.395C328.79 75.124 326.001 77.468 324.16 80.425C322.374 83.382 321.482 86.757 321.482 90.551C321.482 93.117 322.012 95.46 323.072 97.58C324.187 99.645 325.889 101.569 328.177 103.355C330.52 105.14 333.477 106.786 337.047 108.292C340.674 109.799 344.998 111.249 350.019 112.644C356.937 114.597 362.907 116.773 367.928 119.172C372.949 121.571 377.077 124.276 380.313 127.289C383.605 130.246 386.032 133.621 387.594 137.415C389.212 141.153 390.021 145.393 390.021 150.136C390.021 155.101 389.017 159.592 387.008 163.609C385 167.626 382.127 171.057 378.389 173.903C374.651 176.748 370.159 178.952 364.915 180.514C359.726 182.02 353.924 182.773 347.508 182.773C341.873 182.773 336.322 181.992 330.855 180.43C325.443 178.868 320.505 176.525 316.042 173.401C311.634 170.276 308.092 166.427 305.414 161.852C302.792 157.221 301.48 151.865 301.48 145.784H317.548C317.548 149.968 318.357 153.567 319.975 156.58C321.593 159.536 323.797 161.991 326.586 163.944C329.432 165.897 332.64 167.347 336.21 168.296C339.837 169.188 343.603 169.635 347.508 169.635C353.143 169.635 357.913 168.854 361.819 167.291C365.724 165.729 368.681 163.498 370.689 160.597C372.754 157.695 373.786 154.264 373.786 150.303Z" fill="black"/>
<path d="M784.217 182H769.168L812.696 63.4545H827.514L871.043 182H855.993L820.568 82.2088H819.642L784.217 182ZM789.774 135.693H850.436V148.428H789.774V135.693Z" fill="black"/>
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
                                        <span class="seers-cmp-cookie-policy-powered-by-text" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>"><?php echo __("powered by", $this->textdomain);?>&nbsp;<a href="https://seers.ai" target="_blank" class="seers-cmp-cookie-policy-powered-by-link" lang="<?php echo ((version_compare($this->wpcurversion,'4.7.0', '>=')) ? get_user_locale() : get_locale());?>" tabindex="0"><svg width="894" height="242" viewBox="0 0 894 242" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M122.765 109.831V115.677C122.765 116.613 122 117.371 121.072 117.371H117.685C116.749 117.371 115.992 116.605 115.992 115.677V109.831C113.704 108.613 112.137 106.207 112.137 103.429C112.137 99.433 115.375 96.187 119.379 96.187C123.382 96.187 126.62 99.425 126.62 103.429C126.62 106.207 125.061 108.613 122.765 109.831ZM119.371 139.891C126.056 132.738 131.931 124.806 136.893 116.204C141.847 107.618 145.783 98.556 148.636 89.183C139.099 86.969 129.294 85.855 119.371 85.855C109.448 85.855 99.636 86.977 90.099 89.183C92.951 98.556 96.888 107.618 101.842 116.204C106.804 124.806 112.679 132.738 119.364 139.891H119.371Z" fill="#121212"/>
<mask id="mask0_1_24" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="90" y="85" width="59" height="55">
<path d="M122.765 109.831V115.677C122.765 116.613 122 117.371 121.072 117.371H117.685C116.749 117.371 115.992 116.605 115.992 115.677V109.831C113.704 108.613 112.137 106.207 112.137 103.429C112.137 99.433 115.375 96.187 119.379 96.187C123.382 96.187 126.62 99.425 126.62 103.429C126.62 106.207 125.061 108.613 122.765 109.831ZM119.371 139.891C126.056 132.738 131.931 124.806 136.893 116.204C141.847 107.618 145.783 98.556 148.636 89.183C139.099 86.969 129.294 85.855 119.371 85.855C109.448 85.855 99.636 86.977 90.099 89.183C92.951 98.556 96.888 107.618 101.842 116.204C106.804 124.806 112.679 132.738 119.364 139.891H119.371Z" fill="white"/>
</mask>
<g mask="url(#mask0_1_24)">
<path d="M148.643 85.855H90.106V139.891H148.643V85.855Z" fill="#121212"/>
</g>
<path fill-rule="evenodd" clip-rule="evenodd" d="M237.647 36.3641C212.156 19.2805 182.765 7.5596 151.094 2.8208V25.1186C173.978 28.9513 195.964 36.9286 216.092 48.8054C216.382 79.303 209.341 109.215 195.555 136.43L176.452 125.399L157.341 114.362C155.803 117.526 154.147 120.638 152.379 123.706C143.674 138.784 132.518 152.043 119.363 163.021C114.342 158.831 109.604 154.301 105.192 149.465L85.724 160.703C95.543 172.09 106.833 182.102 119.363 190.488C137.791 178.151 153.56 162.293 165.875 143.709L199.967 163.392L204.075 165.769C205.976 162.82 207.818 159.812 209.586 156.737C231.475 118.826 240.358 76.979 237.64 36.3567L237.647 36.3641Z" fill="#3B6EF8"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.6496 48.8056C48.9059 33.319 78.356 24.4503 108.794 22.7791V66.907C112.3 66.654 115.828 66.535 119.371 66.535C136.789 66.535 153.842 69.566 169.923 75.464C168.801 81.911 167.249 88.276 165.273 94.515L184.741 105.754C189.695 91.559 192.718 76.771 193.713 61.722C173.808 51.925 152.208 46.206 129.948 44.8318V0.718987C126.442 0.548087 122.921 0.458984 119.371 0.458984C75.601 0.458984 34.9199 13.6876 1.09483 36.3569C-0.955171 66.974 3.59053 98.289 15.3186 128.088L34.6302 116.94C26.5045 95.206 22.4267 72.173 22.6496 48.8056Z" fill="#3B6EF8"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M119.371 216.337C92.818 201.34 70.431 180.283 53.756 154.747L85.041 136.69L91.978 132.686C90.01 129.775 88.138 126.781 86.363 123.714C77.658 108.628 71.753 92.347 68.819 75.471C74.962 73.213 81.253 71.378 87.648 69.975V47.4985C72.875 50.306 58.562 55.082 45.0361 61.737C46.5068 83.872 52.3522 105.442 62.29 125.407L43.1867 136.437L36.4944 140.3L32.4687 142.625L24.083 147.467C25.6874 150.587 27.3734 153.684 29.1486 156.759C51.0376 194.67 82.835 223.289 119.371 241.242C146.912 227.708 171.757 208.114 191.693 183.053L172.381 171.904C157.623 189.805 139.708 204.861 119.371 216.352V216.337Z" fill="#3B6EF8"/>
<path d="M891.89 90.551V181.1H876.325V90.551H891.89ZM875.153 66.533C875.153 64.022 875.906 61.902 877.413 60.172C878.975 58.443 881.262 57.578 884.275 57.578C887.232 57.578 889.491 58.443 891.054 60.172C892.672 61.902 893.48 64.022 893.48 66.533C893.48 68.932 892.672 70.996 891.054 72.725C889.491 74.399 887.232 75.236 884.275 75.236C881.262 75.236 878.975 74.399 877.413 72.725C875.906 70.996 875.153 68.932 875.153 66.533Z" fill="black"/>
<path d="M736.903 172.898C736.903 170.276 737.712 168.072 739.33 166.287C741.003 164.446 743.402 163.525 746.527 163.525C749.651 163.525 752.022 164.446 753.64 166.287C755.314 168.072 756.151 170.276 756.151 172.898C756.151 175.465 755.314 177.641 753.64 179.426C752.022 181.211 749.651 182.104 746.527 182.104C743.402 182.104 741.003 181.211 739.33 179.426C737.712 177.641 736.903 175.465 736.903 172.898Z" fill="black"/>
<path d="M700.833 157.082C700.833 154.85 700.331 152.786 699.327 150.889C698.379 148.936 696.398 147.179 693.385 145.617C690.428 143.999 685.965 142.604 679.995 141.432C674.974 140.372 670.427 139.117 666.355 137.666C662.338 136.216 658.906 134.458 656.061 132.394C653.272 130.33 651.124 127.903 649.617 125.113C648.111 122.324 647.358 119.06 647.358 115.322C647.358 111.751 648.139 108.376 649.701 105.196C651.319 102.016 653.578 99.198 656.479 96.744C659.436 94.289 662.979 92.364 667.108 90.969C671.236 89.574 675.839 88.877 680.916 88.877C688.169 88.877 694.362 90.16 699.494 92.727C704.627 95.293 708.561 98.724 711.294 103.02C714.028 107.26 715.395 111.974 715.395 117.163H699.913C699.913 114.652 699.16 112.226 697.653 109.882C696.203 107.483 694.055 105.503 691.209 103.941C688.42 102.378 684.989 101.597 680.916 101.597C676.62 101.597 673.133 102.267 670.455 103.606C667.833 104.889 665.908 106.535 664.681 108.543C663.509 110.552 662.923 112.672 662.923 114.904C662.923 116.577 663.202 118.084 663.76 119.423C664.374 120.706 665.434 121.905 666.94 123.021C668.447 124.081 670.567 125.085 673.301 126.034C676.034 126.982 679.521 127.931 683.761 128.879C691.182 130.553 697.291 132.561 702.089 134.905C706.887 137.248 710.457 140.121 712.801 143.524C715.144 146.928 716.316 151.056 716.316 155.91C716.316 159.871 715.479 163.498 713.805 166.789C712.187 170.081 709.816 172.926 706.692 175.325C703.623 177.669 699.941 179.51 695.645 180.849C691.405 182.132 686.635 182.773 681.334 182.773C673.356 182.773 666.606 181.351 661.082 178.505C655.559 175.66 651.375 171.978 648.529 167.459C645.684 162.94 644.261 158.17 644.261 153.148H659.827C660.05 157.388 661.278 160.764 663.509 163.274C665.741 165.729 668.475 167.487 671.71 168.547C674.946 169.551 678.154 170.053 681.334 170.053C685.575 170.053 689.117 169.495 691.963 168.379C694.864 167.264 697.068 165.729 698.574 163.777C700.08 161.824 700.833 159.592 700.833 157.082Z" fill="black"/>
<path d="M605.514 104.777V181.1H590.032V90.551H605.096L605.514 104.777ZM633.8 90.049L633.717 104.443C632.434 104.164 631.206 103.996 630.034 103.941C628.919 103.829 627.635 103.773 626.185 103.773C622.614 103.773 619.462 104.331 616.728 105.447C613.995 106.563 611.679 108.125 609.782 110.133C607.885 112.142 606.379 114.541 605.263 117.33C604.203 120.064 603.506 123.077 603.171 126.369L598.819 128.879C598.819 123.412 599.349 118.279 600.409 113.481C601.525 108.683 603.227 104.443 605.514 100.76C607.802 97.022 610.703 94.121 614.218 92.057C617.788 89.937 622.028 88.877 626.938 88.877C628.054 88.877 629.337 89.016 630.788 89.295C632.238 89.519 633.242 89.77 633.8 90.049Z" fill="black"/>
<path d="M536.724 182.773C530.42 182.773 524.701 181.713 519.568 179.593C514.491 177.418 510.112 174.377 506.43 170.472C502.803 166.566 500.014 161.935 498.061 156.58C496.108 151.224 495.132 145.366 495.132 139.005V135.49C495.132 128.126 496.22 121.571 498.396 115.824C500.571 110.022 503.528 105.112 507.266 101.095C511.004 97.078 515.245 94.038 519.987 91.973C524.729 89.909 529.639 88.877 534.716 88.877C541.187 88.877 546.767 89.993 551.453 92.224C556.195 94.456 560.073 97.58 563.085 101.597C566.098 105.559 568.33 110.245 569.78 115.657C571.231 121.013 571.956 126.871 571.956 133.231V140.177H504.337V127.54H556.474V126.369C556.251 122.352 555.414 118.446 553.964 114.652C552.569 110.859 550.337 107.734 547.269 105.28C544.2 102.825 540.016 101.597 534.716 101.597C531.201 101.597 527.965 102.351 525.008 103.857C522.051 105.307 519.513 107.483 517.393 110.384C515.272 113.286 513.627 116.828 512.455 121.013C511.283 125.197 510.698 130.023 510.698 135.49V139.005C510.698 143.301 511.283 147.346 512.455 151.14C513.682 154.878 515.44 158.17 517.727 161.015C520.07 163.86 522.888 166.092 526.18 167.71C529.527 169.328 533.321 170.137 537.561 170.137C543.029 170.137 547.659 169.021 551.453 166.789C555.247 164.558 558.566 161.573 561.412 157.835L570.785 165.283C568.832 168.24 566.349 171.057 563.337 173.735C560.324 176.413 556.614 178.589 552.206 180.263C547.854 181.937 542.694 182.773 536.724 182.773Z" fill="black"/>
<path d="M445.84 182.773C439.535 182.773 433.817 181.713 428.684 179.593C423.607 177.418 419.227 174.377 415.545 170.472C411.919 166.566 409.129 161.935 407.177 156.58C405.224 151.224 404.248 145.366 404.248 139.005V135.49C404.248 128.126 405.335 121.571 407.511 115.824C409.687 110.022 412.644 105.112 416.382 101.095C420.12 97.078 424.36 94.038 429.103 91.973C433.845 89.909 438.754 88.877 443.831 88.877C450.303 88.877 455.882 89.993 460.569 92.224C465.311 94.456 469.188 97.58 472.201 101.597C475.214 105.559 477.446 110.245 478.896 115.657C480.347 121.013 481.072 126.871 481.072 133.231V140.177H413.453V127.54H465.59V126.369C465.367 122.352 464.53 118.446 463.079 114.652C461.685 110.859 459.453 107.734 456.384 105.28C453.316 102.825 449.132 101.597 443.831 101.597C440.317 101.597 437.081 102.351 434.124 103.857C431.167 105.307 428.628 107.483 426.508 110.384C424.388 113.286 422.742 116.828 421.571 121.013C420.399 125.197 419.813 130.023 419.813 135.49V139.005C419.813 143.301 420.399 147.346 421.571 151.14C422.798 154.878 424.556 158.17 426.843 161.015C429.186 163.86 432.004 166.092 435.295 167.71C438.643 169.328 442.437 170.137 446.677 170.137C452.144 170.137 456.775 169.021 460.569 166.789C464.363 164.558 467.682 161.573 470.527 157.835L479.9 165.283C477.948 168.24 475.465 171.057 472.452 173.735C469.44 176.413 465.729 178.589 461.322 180.263C456.97 181.937 451.81 182.773 445.84 182.773Z" fill="black"/>
<path d="M373.786 150.303C373.786 147.458 373.339 144.947 372.447 142.771C371.61 140.54 370.104 138.531 367.928 136.746C365.808 134.96 362.851 133.259 359.057 131.641C355.319 130.023 350.577 128.377 344.83 126.703C338.805 124.918 333.365 122.937 328.511 120.762C323.657 118.53 319.501 115.991 316.042 113.146C312.583 110.301 309.933 107.037 308.092 103.355C306.251 99.673 305.33 95.46 305.33 90.718C305.33 85.976 306.306 81.596 308.259 77.579C310.212 73.562 313.001 70.075 316.628 67.118C320.31 64.106 324.69 61.762 329.767 60.089C334.844 58.415 340.506 57.578 346.755 57.578C355.905 57.578 363.66 59.336 370.02 62.85C376.436 66.309 381.318 70.856 384.665 76.491C388.013 82.07 389.686 88.04 389.686 94.4H373.618C373.618 89.825 372.642 85.781 370.689 82.266C368.737 78.695 365.78 75.906 361.819 73.897C357.857 71.833 352.836 70.801 346.755 70.801C341.009 70.801 336.266 71.665 332.528 73.395C328.79 75.124 326.001 77.468 324.16 80.425C322.374 83.382 321.482 86.757 321.482 90.551C321.482 93.117 322.012 95.46 323.072 97.58C324.187 99.645 325.889 101.569 328.177 103.355C330.52 105.14 333.477 106.786 337.047 108.292C340.674 109.799 344.998 111.249 350.019 112.644C356.937 114.597 362.907 116.773 367.928 119.172C372.949 121.571 377.077 124.276 380.313 127.289C383.605 130.246 386.032 133.621 387.594 137.415C389.212 141.153 390.021 145.393 390.021 150.136C390.021 155.101 389.017 159.592 387.008 163.609C385 167.626 382.127 171.057 378.389 173.903C374.651 176.748 370.159 178.952 364.915 180.514C359.726 182.02 353.924 182.773 347.508 182.773C341.873 182.773 336.322 181.992 330.855 180.43C325.443 178.868 320.505 176.525 316.042 173.401C311.634 170.276 308.092 166.427 305.414 161.852C302.792 157.221 301.48 151.865 301.48 145.784H317.548C317.548 149.968 318.357 153.567 319.975 156.58C321.593 159.536 323.797 161.991 326.586 163.944C329.432 165.897 332.64 167.347 336.21 168.296C339.837 169.188 343.603 169.635 347.508 169.635C353.143 169.635 357.913 168.854 361.819 167.291C365.724 165.729 368.681 163.498 370.689 160.597C372.754 157.695 373.786 154.264 373.786 150.303Z" fill="black"/>
<path d="M784.217 182H769.168L812.696 63.4545H827.514L871.043 182H855.993L820.568 82.2088H819.642L784.217 182ZM789.774 135.693H850.436V148.428H789.774V135.693Z" fill="black"/>
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