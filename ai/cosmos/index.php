<!DOCTYPE html><html class="html-page no-js device-macintosh browser-chrome device-desktop" xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us" style="--nv-header-height: 45px; --nv-global-nav-pull-up: 45px; --vh: 720px;"><head class="at-element-marker">
	

<title>Physical AI with World Foundation Models | NVIDIA Cosmos</title>
<link rel="preload" href="https://images.nvidia.com/etc/designs/nvidiaGDC/clientlibs_base/fonts/nvidia-sans/NALA/var/NVIDIASansVF_NALA_W_Wght.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="stylesheet" href="../../assets/www.nvidia.com/etc.clientlibs/nvidiaweb/clientlibs/clientlib-site.min.02949d2276e439ab0f1978f394215caf.css" type="text/css">
<link rel="stylesheet" href="../../assets/www.nvidia.com/etc.clientlibs/nvidiaweb/clientlibs/clientlib-base.min.8684b0f16f804cac8396aa31fdf033e6.css" type="text/css">
<link rel="stylesheet" href="../../assets/www.nvidia.com/etc.clientlibs/nvidiaweb/clientlibs/clientlib-nvgdccart.min.d41d8cd98f00b204e9800998ecf8427e.css" type="text/css">
<style class="vjs-styles-defaults">
      .video-js {
        width: 300px;
        height: 150px;
      }

      .vjs-fluid:not(.vjs-audio-only-mode) {
        padding-top: 56.25%
      }
    </style>
<style>
body.v4_design.base_v4 .navigation ul {
    line-height: inherit;
}
 #nv-login-mob { display: flex; align-items: center; } @media (max-width: 1023px) and (min-width: 640px) { .navigation:has(.account-icon):not(:has(.account-icon.logged-in)) .global-nav .nav-header-container .nav-tools-container .nav-header-list .nav-header-item.cart-item

{ right: 80px!important; }
}
@media (max-width: 639px) {
body.v4_design.base_v4 .navigation .global-nav .nav-header-container .nav-tools-container .nav-header-list {
        width: 92%;
    }
}
</style>
<style>@charset "UTF-8";
.vjs-modal-dialog .vjs-modal-dialog-content, .video-js .vjs-modal-dialog, .vjs-button > .vjs-icon-placeholder:before, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.vjs-button > .vjs-icon-placeholder:before, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
  text-align: center;
}

@font-face {
  font-family: VideoJS;
  src: url(data:application/font-woff;charset=utf-8;base64,d09GRgABAAAAABDkAAsAAAAAG6gAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABHU1VCAAABCAAAADsAAABUIIslek9TLzIAAAFEAAAAPgAAAFZRiV3hY21hcAAAAYQAAADaAAADPv749/pnbHlmAAACYAAAC3AAABHQZg6OcWhlYWQAAA3QAAAAKwAAADYZw251aGhlYQAADfwAAAAdAAAAJA+RCLFobXR4AAAOHAAAABMAAACM744AAGxvY2EAAA4wAAAASAAAAEhF6kqubWF4cAAADngAAAAfAAAAIAE0AIFuYW1lAAAOmAAAASUAAAIK1cf1oHBvc3QAAA/AAAABJAAAAdPExYuNeJxjYGRgYOBiMGCwY2BycfMJYeDLSSzJY5BiYGGAAJA8MpsxJzM9kYEDxgPKsYBpDiBmg4gCACY7BUgAeJxjYGS7wTiBgZWBgaWQ5RkDA8MvCM0cwxDOeI6BgYmBlZkBKwhIc01hcPjI+FGJHcRdyA4RZgQRADK3CxEAAHic7dFZbsMgAEXRS0ycyZnnOeG7y+qC8pU1dHusIOXxuoxaOlwZYWQB0Aea4quIEN4E9LzKbKjzDeM6H/mua6Lmc/p8yhg0lvdYx15ZG8uOLQOGjMp3EzqmzJizYMmKNRu27Nhz4MiJMxeu3Ljz4Ekqm7T8P52G8PP3lnTOVk++Z6iN6QZzNN1F7ptuN7eGOjDUoaGODHVsuvU8MdTO9Hd5aqgzQ50b6sJQl4a6MtS1oW4MdWuoO0PdG+rBUI+GejLUs6FeDPVqqDdDvRvqw1CfhpqM9At0iFLaAAB4nJ1YDXBTVRZ+5/22TUlJ8we0pHlJm7RJf5O8F2j6EymlSPkpxaL8U2xpa3DKj0CBhc2IW4eWKSokIoLsuMqssM64f+jA4HSdWXXXscBq67IOs3FXZ1ZYWVyRFdo899yXtIBQZ90k7717zz3v3HPPOfd854YCCj9cL9dL0RQFOqCbGJnrHb5EayiKIWN8iA/hWBblo6hUWm8TtCDwE80WMJus/irwyxOdxeB0MDb14VNJHnXYoLLSl6FfCUYO9nYPTA8Epg9090LprfbBbZ2hY0UlJUXHQp3/vtWkS6EBv8+rPMq5u9692f/dNxJNiqwC1xPE9TCUgCsSdQWgE3XQD25lkG4CN2xmTcOXWBOyser6RN6KnGbKSbmQ3+d0OI1m2W8QzLLkI2sykrWAgJJEtA8vGGW/2Q+CmT3n8zS9wZwu2DCvtuZKZN3xkrLh36yCZuUomQSqGpY8t/25VfHVhw8z4ebGBtfLb0ya9PCaDc+8dGTvk2dsh6z7WzvowlXKUSWo9MJ15a3KrEP2loOr2Ojhw6iW6hf2BDdEccQvZGpaAy7YovSwq8kr7HGllxpd71rkS6G0Sf11sl9OvMK1+jwPPODxjUwkOim9CU3ix1wNjXDfmJSEn618Bs6lpWwUpU+8PCqLMY650zjq8VhCIP17NEKTx3eaLL+s5Pi6yJWaWjTHLR1jYzPSV9VF/6Ojdb/1kO3Mk3uhHC0x6gc1BjlKQ+nQFxTYdaJkZ7ySVxLBbhR1dsboNXp1tCYKW2LRaEzpYcIx2BKNxaL0ZaUnSqfFoiNhHKR/GkX6PWUSAaJelQaqZL1EpoHNsajSEyPSoJ9IjhIxTdjHLmwZvhRDOiFTY/YeQnvrVZmiTQtGncECXtFTBZLOVwwMRgoXHAkXzMzPn1nAJJ8jYSbMDaqN2waGLzNhih/bZynUBMpIWSg7VYi7DRx2m8ALkIdRCJwI6ArJx2EI8kaDWeTQKeAFk9fjl/1AvwktjQ1P7NjyMGQyfd4vjipX6M/i52D7Cq80kqlcxEcGXRr/FEcgs0u5uGgB4VWuMFfpdn2Re6Hi3PqzmxWKsz6+ae2Pn9hXXw/fqM859UiGC0oKYYILJBqJrsn1Z1E5qOs9rQCiUQRREjm8yJcbHF5cUJufX1vAHlefw0XgUoboS3ETfQlTxBC4SOtuE8VPRJTBSCQSjZCpk7Gqzu+masaZ2y7Zjehho4F3g82BNDkAHpORG4+OCS+f6JTPmtRn/PH1kch6d04sp7AQb25aQ/pqUyXeQ8vrebG8OYQdXOQ+585u0sdW9rqalzRURiJ+9F4MweRFrKUjl1GUYhH1A27WOHw5cTFSFPMo9EeUIGnQTZHIaJ7AHLaOKsOODaNF9jkBjYG2QEsQ2xjMUAx2bBEbeTBWMHwskBjngq56S/yfgkBnWBa4K9sqKtq2t1UI8S9He5XuBRbawAdatrQEAi30Aks2+LM8WeCbalVZkWNylvJ+dqJnzVb+OHlSoKW8nPCP7Rd+CcZ2DdWAGqJ2CBFOphgywFFCFBNtfAbGtNPBCwxvygHeYMZMY9ZboBqwq/pVrsbgN5tkv152ODlbMfiqwGMBgxa4Exz3QhovRIUp6acqZmQzRq0ypDXS2TPLT02YIkQETnOE445oOGxOmXAqUJNNG7XgupMjPq2ua9asrj5yY/yuKteO1Kx0YNJTufrirLe1mZnat7OL6rnUdCWenpW6I8mAnbsY8KWs1PuSovCW9A/Z25PQ24a7cNOqgmTkLmBMgh4THgc4b9k2IVv1/g/F5nGljwPLfOgHAzJzh45V/4+WenTzmMtR5Z7us2Tys909UHqrPY7KbckoxRvRHhmVc3cJGE97uml0R1S0jdULVl7EvZtDFVBF35N9cEdjpgmAiOlFZ+Dtoh93+D3zzHr8RRNZQhnCNMNbcegOvpEwZoL+06cJQ07h+th3fZ/7PVbVC6ngTAV/KoLFuO6+2KFcU651gEb5ugPSIb1D+Xp8V4+k3sEIGnw5mYe4If4k1lFYr6SCzmM2EQ8iWtmwjnBI9kTwe1TlfAmXh7H02by9fW2gsjKwtv0aaURKil4OdV7rDL1MXIFNrhdxohcZXYTnq47WisrKitaObbf5+yvkLi5J6lCNZZ+B6GC38VNBZBDidSS/+mSvh6s+srgC8pyKMvDtt+de3c9fU76ZPfuM8ud4Kv0fyP/LqfepMT/3oZxSqpZaTa1DaQYLY8TFsHYbWYsPoRhRWfL5eSSQbhUGgGC3YLbVMk6PitTFNGpAsNrC6D1VNBKgBHMejaiuRWEWGgsSDBTJjqWIl8kJLlsaLJ2tXDr6xGfT85bM2Q06a46x2HTgvdnV8z5YDy/27J4zt6x2VtkzjoYpkq36kaBr4eQSg7tyiVweWubXZugtadl58ydapfbORfKsDTuZ0OBgx4cfdjCf5tbWNITnL120fdOi1RV1C3uKGzNdwYLcMvZ3BxoPyTOCD1XvXTp7U10gWCVmTV9b3r2z0SkGWovb2hp9I89O8a2smlyaO8muMU+dRmtzp60IzAoFpjLr1n388boLyf0dRvxhsHZ0qbWqDkwqvvpkj4l0fY6EIXRi5sQSrAvsVYwXRy4qJ2EVtD1AN7a0HWth9ymvL1xc3WTUKK/TAHA/bXDVtVWfOMfuGxGZv4Ln/jVr9jc3j1yMv0tndmyt9Vq88Y9gH1wtLX3KWjot5++jWHgAoZZkQ14wGQ20Fli71UmKJAy4xKMSTGbVdybW7FDDAut9XpD5AzWrYO7zQ8qffqF8+Ynd/clrHcdyxGy3a/3+mfNnzC/cBsveTjnTvXf1o6vzOlZw7WtqtdmPK/Errz/6NNtD72zmNOZfbmYdTGHfoofqI79Oc+R2n1lrnL6pOm0Up7kwxhTW12Amm7WYkXR2qYrF2AmgmbAsxZjwy1xpg/m1Je2vrp8v/nz2xpmlBg4E9hrMU341wVpTOh/OfmGvAnra8q6uctr60ZQHV3Q+WMQJykMj8ZsWn2QBOmmHMB+m5pDIpTFonYigiaKAhGEiAHF7EliVnQkjoLVIMPtJpBKHYd3A8GYH9jJzrWwmHx5Qjp7vDAX0suGRym1vtm/9W1/HyR8vczfMs6Sk8DSv855/5dlX9oQq52hT8syyp2rx5Id17IAyAM3wIjQPMOHzytEB64q6D5zT91yNbnx3V/nqnd017S9Y0605k3izoXLpsxde2n38yoOV9s1LcjwzNjbdX6asnBVaBj/6/DwKwPkpcqbDG7BnsXoSqWnUAmottYF6jMSdVyYZh3zVXCjwTiwwHH6sGuRiEHQGzuRX6whZkp123oy1BWE2mEfJ/tvIRtM4ZM5bDXiMsPMaAKOTyc5uL57rqyyc5y5JE5pm1i2S2iUX0CcaQ6lC6Zog7JqSqZmYlosl2K6pwNA84zRnQW6SaALYZQGW5lhCtU/W34N6o+bKfZ8cf3/Cl/+iTX3wBzpOY4mRkeNf3rptycGSshQWgGbYt5jFc2e0+DglIrwl6DVWQ7BuwaJ3Xk1J4VL5urnLl/Wf+gHU/hZoZdKNym6lG+I34FaNeZKcSpJIo2IeCVvpdsDGfKvzJnAwmeD37Ow65ZWwSowpgwX5T69s/rB55dP5BcpgDKFV8p7q2sn/1uc93bVzT/w6UrCqDTWvfCq/oCD/qZXNoUj8BL5Kp6GU017frfNXkAtiiyf/SOCEeLqnd8R/Ql9GlCRfctS6k5chvIBuQ1zCCjoCHL2DHNHIXxMJ3kQeO8lbsUXONeSfA5EjcG6/E+KdhN4bP04vBhdi883+BFBzQbxFbvZzQeY9LNBZc0FNfn5NwfDn6rCTnTw6R8o+gfpf5hCom33cRuiTlss3KHmZjD+BPN+5gXuA2ziS/Q73mLxUkpbKN/eqwz5uK0X9F3h2d1V4nGNgZGBgAOJd776+iue3+crAzc4AAje5Bfcg0xz9YHEOBiYQBQA8FQlFAHicY2BkYGBnAAGOPgaG//85+hkYGVCBMgBGGwNYAAAAeJxjYGBgYB8EmKOPgQEAQ04BfgAAAAAAAA4AaAB+AMwA4AECAUIBbAGYAcICGAJYArQC4AMwA7AD3gQwBJYE3AUkBWYFigYgBmYGtAbqB1gIEghYCG4IhAi2COh4nGNgZGBgUGYoZWBnAAEmIOYCQgaG/2A+AwAYCQG2AHicXZBNaoNAGIZfE5PQCKFQ2lUps2oXBfOzzAESyDKBQJdGR2NQR3QSSE/QE/QEPUUPUHqsvsrXjTMw83zPvPMNCuAWP3DQDAejdm1GjzwS7pMmwi75XngAD4/CQ/oX4TFe4Qt7uMMbOzjuDc0EmXCP/C7cJ38Iu+RP4QEe8CU8pP8WHmOPX2EPz87TPo202ey2OjlnQSXV/6arOjWFmvszMWtd6CqwOlKHq6ovycLaWMWVydXKFFZnmVFlZU46tP7R2nI5ncbi/dDkfDtFBA2DDXbYkhKc+V0Bqs5Zt9JM1HQGBRTm/EezTmZNKtpcAMs9Yu6AK9caF76zoLWIWcfMGOSkVduvSWechqZsz040Ib2PY3urxBJTzriT95lipz+TN1fmAAAAeJxtkMl2wjAMRfOAhABlKm2h80C3+ajgCKKDY6cegP59TYBzukAL+z1Zsq8ctaJTTKPrsUQLbXQQI0EXKXroY4AbDDHCGBNMcYsZ7nCPB8yxwCOe8IwXvOIN7/jAJ76wxHfUqWX+OzgumWAjJMV17i0Ndlr6irLKO+qftdT7i6y4uFSUvCknay+lFYZIZaQcmfH/xIFdYn98bqhra1aKTM/6lWMnyaYirx1rFUQZFBkb2zJUtoXeJCeg0WnLtHeSFc3OtrnozNwqi0TkSpBMDB1nSde5oJXW23hTS2/T0LilglXX7dmFVxLnq5U0vYATHFk3zX3BOisoQHNDFDeZnqKDy9hRNawN7Vh727hFzcJ5c8TILrKZfH7tIPxAFP0BpLeJPA==) format("woff");
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-play, .video-js .vjs-play-control .vjs-icon-placeholder, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-play:before, .video-js .vjs-play-control .vjs-icon-placeholder:before, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
  content: "\f101";
}

.vjs-icon-play-circle {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-play-circle:before {
  content: "\f102";
}

.vjs-icon-pause, .video-js .vjs-play-control.vjs-playing .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-pause:before, .video-js .vjs-play-control.vjs-playing .vjs-icon-placeholder:before {
  content: "\f103";
}

.vjs-icon-volume-mute, .video-js .vjs-mute-control.vjs-vol-0 .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-volume-mute:before, .video-js .vjs-mute-control.vjs-vol-0 .vjs-icon-placeholder:before {
  content: "\f104";
}

.vjs-icon-volume-low, .video-js .vjs-mute-control.vjs-vol-1 .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-volume-low:before, .video-js .vjs-mute-control.vjs-vol-1 .vjs-icon-placeholder:before {
  content: "\f105";
}

.vjs-icon-volume-mid, .video-js .vjs-mute-control.vjs-vol-2 .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-volume-mid:before, .video-js .vjs-mute-control.vjs-vol-2 .vjs-icon-placeholder:before {
  content: "\f106";
}

.vjs-icon-volume-high, .video-js .vjs-mute-control .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-volume-high:before, .video-js .vjs-mute-control .vjs-icon-placeholder:before {
  content: "\f107";
}

.vjs-icon-fullscreen-enter, .video-js .vjs-fullscreen-control .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-fullscreen-enter:before, .video-js .vjs-fullscreen-control .vjs-icon-placeholder:before {
  content: "\f108";
}

.vjs-icon-fullscreen-exit, .video-js.vjs-fullscreen .vjs-fullscreen-control .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-fullscreen-exit:before, .video-js.vjs-fullscreen .vjs-fullscreen-control .vjs-icon-placeholder:before {
  content: "\f109";
}

.vjs-icon-square {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-square:before {
  content: "\f10a";
}

.vjs-icon-spinner {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-spinner:before {
  content: "\f10b";
}

.vjs-icon-subtitles, .video-js .vjs-subs-caps-button .vjs-icon-placeholder,
.video-js.video-js:lang(en-GB) .vjs-subs-caps-button .vjs-icon-placeholder,
.video-js.video-js:lang(en-IE) .vjs-subs-caps-button .vjs-icon-placeholder,
.video-js.video-js:lang(en-AU) .vjs-subs-caps-button .vjs-icon-placeholder,
.video-js.video-js:lang(en-NZ) .vjs-subs-caps-button .vjs-icon-placeholder, .video-js .vjs-subtitles-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-subtitles:before, .video-js .vjs-subs-caps-button .vjs-icon-placeholder:before,
.video-js.video-js:lang(en-GB) .vjs-subs-caps-button .vjs-icon-placeholder:before,
.video-js.video-js:lang(en-IE) .vjs-subs-caps-button .vjs-icon-placeholder:before,
.video-js.video-js:lang(en-AU) .vjs-subs-caps-button .vjs-icon-placeholder:before,
.video-js.video-js:lang(en-NZ) .vjs-subs-caps-button .vjs-icon-placeholder:before, .video-js .vjs-subtitles-button .vjs-icon-placeholder:before {
  content: "\f10c";
}

.vjs-icon-captions, .video-js:lang(en) .vjs-subs-caps-button .vjs-icon-placeholder,
.video-js:lang(fr-CA) .vjs-subs-caps-button .vjs-icon-placeholder, .video-js .vjs-captions-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-captions:before, .video-js:lang(en) .vjs-subs-caps-button .vjs-icon-placeholder:before,
.video-js:lang(fr-CA) .vjs-subs-caps-button .vjs-icon-placeholder:before, .video-js .vjs-captions-button .vjs-icon-placeholder:before {
  content: "\f10d";
}

.vjs-icon-chapters, .video-js .vjs-chapters-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-chapters:before, .video-js .vjs-chapters-button .vjs-icon-placeholder:before {
  content: "\f10e";
}

.vjs-icon-share {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-share:before {
  content: "\f10f";
}

.vjs-icon-cog {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-cog:before {
  content: "\f110";
}

.vjs-icon-circle, .vjs-seek-to-live-control .vjs-icon-placeholder, .video-js .vjs-volume-level, .video-js .vjs-play-progress {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-circle:before, .vjs-seek-to-live-control .vjs-icon-placeholder:before, .video-js .vjs-volume-level:before, .video-js .vjs-play-progress:before {
  content: "\f111";
}

.vjs-icon-circle-outline {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-circle-outline:before {
  content: "\f112";
}

.vjs-icon-circle-inner-circle {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-circle-inner-circle:before {
  content: "\f113";
}

.vjs-icon-hd {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-hd:before {
  content: "\f114";
}

.vjs-icon-cancel, .video-js .vjs-control.vjs-close-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-cancel:before, .video-js .vjs-control.vjs-close-button .vjs-icon-placeholder:before {
  content: "\f115";
}

.vjs-icon-replay, .video-js .vjs-play-control.vjs-ended .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-replay:before, .video-js .vjs-play-control.vjs-ended .vjs-icon-placeholder:before {
  content: "\f116";
}

.vjs-icon-facebook {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-facebook:before {
  content: "\f117";
}

.vjs-icon-gplus {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-gplus:before {
  content: "\f118";
}

.vjs-icon-linkedin {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-linkedin:before {
  content: "\f119";
}

.vjs-icon-twitter {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-twitter:before {
  content: "\f11a";
}

.vjs-icon-tumblr {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-tumblr:before {
  content: "\f11b";
}

.vjs-icon-pinterest {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-pinterest:before {
  content: "\f11c";
}

.vjs-icon-audio-description, .video-js .vjs-descriptions-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-audio-description:before, .video-js .vjs-descriptions-button .vjs-icon-placeholder:before {
  content: "\f11d";
}

.vjs-icon-audio, .video-js .vjs-audio-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-audio:before, .video-js .vjs-audio-button .vjs-icon-placeholder:before {
  content: "\f11e";
}

.vjs-icon-next-item {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-next-item:before {
  content: "\f11f";
}

.vjs-icon-previous-item {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-previous-item:before {
  content: "\f120";
}

.vjs-icon-picture-in-picture-enter, .video-js .vjs-picture-in-picture-control .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-picture-in-picture-enter:before, .video-js .vjs-picture-in-picture-control .vjs-icon-placeholder:before {
  content: "\f121";
}

.vjs-icon-picture-in-picture-exit, .video-js.vjs-picture-in-picture .vjs-picture-in-picture-control .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-picture-in-picture-exit:before, .video-js.vjs-picture-in-picture .vjs-picture-in-picture-control .vjs-icon-placeholder:before {
  content: "\f122";
}

.video-js {
  display: block;
  vertical-align: top;
  box-sizing: border-box;
  color: #fff;
  background-color: #000;
  position: relative;
  padding: 0;
  font-size: 10px;
  line-height: 1;
  font-weight: normal;
  font-style: normal;
  font-family: Arial, Helvetica, sans-serif;
  word-break: initial;
}
.video-js:-moz-full-screen {
  position: absolute;
}
.video-js:-webkit-full-screen {
  width: 100% !important;
  height: 100% !important;
}

.video-js[tabindex="-1"] {
  outline: none;
}

.video-js *,
.video-js *:before,
.video-js *:after {
  box-sizing: inherit;
}

.video-js ul {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  list-style-position: outside;
  margin-left: 0;
  margin-right: 0;
  margin-top: 0;
  margin-bottom: 0;
}

.video-js.vjs-fluid,
.video-js.vjs-16-9,
.video-js.vjs-4-3,
.video-js.vjs-9-16,
.video-js.vjs-1-1 {
  width: 100%;
  max-width: 100%;
}

.video-js.vjs-fluid:not(.vjs-audio-only-mode),
.video-js.vjs-16-9:not(.vjs-audio-only-mode),
.video-js.vjs-4-3:not(.vjs-audio-only-mode),
.video-js.vjs-9-16:not(.vjs-audio-only-mode),
.video-js.vjs-1-1:not(.vjs-audio-only-mode) {
  height: 0;
}

.video-js.vjs-16-9:not(.vjs-audio-only-mode) {
  padding-top: 56.25%;
}

.video-js.vjs-4-3:not(.vjs-audio-only-mode) {
  padding-top: 75%;
}

.video-js.vjs-9-16:not(.vjs-audio-only-mode) {
  padding-top: 177.7777777778%;
}

.video-js.vjs-1-1:not(.vjs-audio-only-mode) {
  padding-top: 100%;
}

.video-js.vjs-fill:not(.vjs-audio-only-mode) {
  width: 100%;
  height: 100%;
}

.video-js .vjs-tech {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.video-js.vjs-audio-only-mode .vjs-tech {
  display: none;
}

body.vjs-full-window {
  padding: 0;
  margin: 0;
  height: 100%;
}

.vjs-full-window .video-js.vjs-fullscreen {
  position: fixed;
  overflow: hidden;
  z-index: 1000;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
}

.video-js.vjs-fullscreen:not(.vjs-ios-native-fs) {
  width: 100% !important;
  height: 100% !important;
  padding-top: 0 !important;
}

.video-js.vjs-fullscreen.vjs-user-inactive {
  cursor: none;
}

.vjs-hidden {
  display: none !important;
}

.vjs-disabled {
  opacity: 0.5;
  cursor: default;
}

.video-js .vjs-offscreen {
  height: 1px;
  left: -9999px;
  position: absolute;
  top: 0;
  width: 1px;
}

.vjs-lock-showing {
  display: block !important;
  opacity: 1 !important;
  visibility: visible !important;
}

.vjs-no-js {
  padding: 20px;
  color: #fff;
  background-color: #000;
  font-size: 18px;
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  width: 300px;
  height: 150px;
  margin: 0px auto;
}

.vjs-no-js a,
.vjs-no-js a:visited {
  color: #66A8CC;
}

.video-js .vjs-big-play-button {
  font-size: 3em;
  line-height: 1.5em;
  height: 1.63332em;
  width: 3em;
  display: block;
  position: absolute;
  top: 10px;
  left: 10px;
  padding: 0;
  cursor: pointer;
  opacity: 1;
  border: 0.06666em solid #fff;
  background-color: #2B333F;
  background-color: rgba(43, 51, 63, 0.7);
  border-radius: 0.3em;
  transition: all 0.4s;
}
.vjs-big-play-centered .vjs-big-play-button {
  top: 50%;
  left: 50%;
  margin-top: -0.81666em;
  margin-left: -1.5em;
}

.video-js:hover .vjs-big-play-button,
.video-js .vjs-big-play-button:focus {
  border-color: #fff;
  background-color: #73859f;
  background-color: rgba(115, 133, 159, 0.5);
  transition: all 0s;
}

.vjs-controls-disabled .vjs-big-play-button,
.vjs-has-started .vjs-big-play-button,
.vjs-using-native-controls .vjs-big-play-button,
.vjs-error .vjs-big-play-button {
  display: none;
}

.vjs-has-started.vjs-paused.vjs-show-big-play-button-on-pause .vjs-big-play-button {
  display: block;
}

.video-js button {
  background: none;
  border: none;
  color: inherit;
  display: inline-block;
  font-size: inherit;
  line-height: inherit;
  text-transform: none;
  text-decoration: none;
  transition: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.vjs-control .vjs-button {
  width: 100%;
  height: 100%;
}

.video-js .vjs-control.vjs-close-button {
  cursor: pointer;
  height: 3em;
  position: absolute;
  right: 0;
  top: 0.5em;
  z-index: 2;
}
.video-js .vjs-modal-dialog {
  background: rgba(0, 0, 0, 0.8);
  background: linear-gradient(180deg, rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0));
  overflow: auto;
}

.video-js .vjs-modal-dialog > * {
  box-sizing: border-box;
}

.vjs-modal-dialog .vjs-modal-dialog-content {
  font-size: 1.2em;
  line-height: 1.5;
  padding: 20px 24px;
  z-index: 1;
}

.vjs-menu-button {
  cursor: pointer;
}

.vjs-menu-button.vjs-disabled {
  cursor: default;
}

.vjs-workinghover .vjs-menu-button.vjs-disabled:hover .vjs-menu {
  display: none;
}

.vjs-menu .vjs-menu-content {
  display: block;
  padding: 0;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  overflow: auto;
}

.vjs-menu .vjs-menu-content > * {
  box-sizing: border-box;
}

.vjs-scrubbing .vjs-control.vjs-menu-button:hover .vjs-menu {
  display: none;
}

.vjs-menu li {
  list-style: none;
  margin: 0;
  padding: 0.2em 0;
  line-height: 1.4em;
  font-size: 1.2em;
  text-align: center;
  text-transform: lowercase;
}

.vjs-menu li.vjs-menu-item:focus,
.vjs-menu li.vjs-menu-item:hover,
.js-focus-visible .vjs-menu li.vjs-menu-item:hover {
  background-color: #73859f;
  background-color: rgba(115, 133, 159, 0.5);
}

.vjs-menu li.vjs-selected,
.vjs-menu li.vjs-selected:focus,
.vjs-menu li.vjs-selected:hover,
.js-focus-visible .vjs-menu li.vjs-selected:hover {
  background-color: #fff;
  color: #2B333F;
}

.video-js .vjs-menu *:not(.vjs-selected):focus:not(:focus-visible),
.js-focus-visible .vjs-menu *:not(.vjs-selected):focus:not(.focus-visible) {
  background: none;
}

.vjs-menu li.vjs-menu-title {
  text-align: center;
  text-transform: uppercase;
  font-size: 1em;
  line-height: 2em;
  padding: 0;
  margin: 0 0 0.3em 0;
  font-weight: bold;
  cursor: default;
}

.vjs-menu-button-popup .vjs-menu {
  display: none;
  position: absolute;
  bottom: 0;
  width: 10em;
  left: -3em;
  height: 0em;
  margin-bottom: 1.5em;
  border-top-color: rgba(43, 51, 63, 0.7);
}

.vjs-menu-button-popup .vjs-menu .vjs-menu-content {
  background-color: #2B333F;
  background-color: rgba(43, 51, 63, 0.7);
  position: absolute;
  width: 100%;
  bottom: 1.5em;
  max-height: 15em;
}

.vjs-layout-tiny .vjs-menu-button-popup .vjs-menu .vjs-menu-content,
.vjs-layout-x-small .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
  max-height: 5em;
}

.vjs-layout-small .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
  max-height: 10em;
}

.vjs-layout-medium .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
  max-height: 14em;
}

.vjs-layout-large .vjs-menu-button-popup .vjs-menu .vjs-menu-content,
.vjs-layout-x-large .vjs-menu-button-popup .vjs-menu .vjs-menu-content,
.vjs-layout-huge .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
  max-height: 25em;
}

.vjs-workinghover .vjs-menu-button-popup.vjs-hover .vjs-menu,
.vjs-menu-button-popup .vjs-menu.vjs-lock-showing {
  display: block;
}

.video-js .vjs-menu-button-inline {
  transition: all 0.4s;
  overflow: hidden;
}

.video-js .vjs-menu-button-inline:before {
  width: 2.222222222em;
}

.video-js .vjs-menu-button-inline:hover,
.video-js .vjs-menu-button-inline:focus,
.video-js .vjs-menu-button-inline.vjs-slider-active,
.video-js.vjs-no-flex .vjs-menu-button-inline {
  width: 12em;
}

.vjs-menu-button-inline .vjs-menu {
  opacity: 0;
  height: 100%;
  width: auto;
  position: absolute;
  left: 4em;
  top: 0;
  padding: 0;
  margin: 0;
  transition: all 0.4s;
}

.vjs-menu-button-inline:hover .vjs-menu,
.vjs-menu-button-inline:focus .vjs-menu,
.vjs-menu-button-inline.vjs-slider-active .vjs-menu {
  display: block;
  opacity: 1;
}

.vjs-no-flex .vjs-menu-button-inline .vjs-menu {
  display: block;
  opacity: 1;
  position: relative;
  width: auto;
}

.vjs-no-flex .vjs-menu-button-inline:hover .vjs-menu,
.vjs-no-flex .vjs-menu-button-inline:focus .vjs-menu,
.vjs-no-flex .vjs-menu-button-inline.vjs-slider-active .vjs-menu {
  width: auto;
}

.vjs-menu-button-inline .vjs-menu-content {
  width: auto;
  height: 100%;
  margin: 0;
  overflow: hidden;
}

.video-js .vjs-control-bar {
  display: none;
  width: 100%;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 3em;
  background-color: #2B333F;
  background-color: rgba(43, 51, 63, 0.7);
}

.vjs-has-started .vjs-control-bar,
.vjs-audio-only-mode .vjs-control-bar {
  display: flex;
  visibility: visible;
  opacity: 1;
  transition: visibility 0.1s, opacity 0.1s;
}

.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
  visibility: visible;
  opacity: 0;
  pointer-events: none;
  transition: visibility 1s, opacity 1s;
}

.vjs-controls-disabled .vjs-control-bar,
.vjs-using-native-controls .vjs-control-bar,
.vjs-error .vjs-control-bar {
  display: none !important;
}

.vjs-audio.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar,
.vjs-audio-only-mode.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.vjs-has-started.vjs-no-flex .vjs-control-bar {
  display: table;
}

.video-js .vjs-control {
  position: relative;
  text-align: center;
  margin: 0;
  padding: 0;
  height: 100%;
  width: 4em;
  flex: none;
}

.video-js .vjs-control.vjs-visible-text {
  width: auto;
  padding-left: 1em;
  padding-right: 1em;
}

.vjs-button > .vjs-icon-placeholder:before {
  font-size: 1.8em;
  line-height: 1.67;
}

.vjs-button > .vjs-icon-placeholder {
  display: block;
}

.video-js .vjs-control:focus:before,
.video-js .vjs-control:hover:before,
.video-js .vjs-control:focus {
  text-shadow: 0em 0em 1em white;
}

.video-js *:not(.vjs-visible-text) > .vjs-control-text {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

.vjs-no-flex .vjs-control {
  display: table-cell;
  vertical-align: middle;
}

.video-js .vjs-custom-control-spacer {
  display: none;
}

.video-js .vjs-progress-control {
  cursor: pointer;
  flex: auto;
  display: flex;
  align-items: center;
  min-width: 4em;
  touch-action: none;
}

.video-js .vjs-progress-control.disabled {
  cursor: default;
}

.vjs-live .vjs-progress-control {
  display: none;
}

.vjs-liveui .vjs-progress-control {
  display: flex;
  align-items: center;
}

.vjs-no-flex .vjs-progress-control {
  width: auto;
}

.video-js .vjs-progress-holder {
  flex: auto;
  transition: all 0.2s;
  height: 0.3em;
}

.video-js .vjs-progress-control .vjs-progress-holder {
  margin: 0 10px;
}

.video-js .vjs-progress-control:hover .vjs-progress-holder {
  font-size: 1.6666666667em;
}

.video-js .vjs-progress-control:hover .vjs-progress-holder.disabled {
  font-size: 1em;
}

.video-js .vjs-progress-holder .vjs-play-progress,
.video-js .vjs-progress-holder .vjs-load-progress,
.video-js .vjs-progress-holder .vjs-load-progress div {
  position: absolute;
  display: block;
  height: 100%;
  margin: 0;
  padding: 0;
  width: 0;
}

.video-js .vjs-play-progress {
  background-color: #fff;
}
.video-js .vjs-play-progress:before {
  font-size: 0.9em;
  position: absolute;
  right: -0.5em;
  top: -0.3333333333em;
  z-index: 1;
}

.video-js .vjs-load-progress {
  background: rgba(115, 133, 159, 0.5);
}

.video-js .vjs-load-progress div {
  background: rgba(115, 133, 159, 0.75);
}

.video-js .vjs-time-tooltip {
  background-color: #fff;
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 0.3em;
  color: #000;
  float: right;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1em;
  padding: 6px 8px 8px 8px;
  pointer-events: none;
  position: absolute;
  top: -3.4em;
  visibility: hidden;
  z-index: 1;
}

.video-js .vjs-progress-holder:focus .vjs-time-tooltip {
  display: none;
}

.video-js .vjs-progress-control:hover .vjs-time-tooltip,
.video-js .vjs-progress-control:hover .vjs-progress-holder:focus .vjs-time-tooltip {
  display: block;
  font-size: 0.6em;
  visibility: visible;
}

.video-js .vjs-progress-control.disabled:hover .vjs-time-tooltip {
  font-size: 1em;
}

.video-js .vjs-progress-control .vjs-mouse-display {
  display: none;
  position: absolute;
  width: 1px;
  height: 100%;
  background-color: #000;
  z-index: 1;
}

.vjs-no-flex .vjs-progress-control .vjs-mouse-display {
  z-index: 0;
}

.video-js .vjs-progress-control:hover .vjs-mouse-display {
  display: block;
}

.video-js.vjs-user-inactive .vjs-progress-control .vjs-mouse-display {
  visibility: hidden;
  opacity: 0;
  transition: visibility 1s, opacity 1s;
}

.video-js.vjs-user-inactive.vjs-no-flex .vjs-progress-control .vjs-mouse-display {
  display: none;
}

.vjs-mouse-display .vjs-time-tooltip {
  color: #fff;
  background-color: #000;
  background-color: rgba(0, 0, 0, 0.8);
}

.video-js .vjs-slider {
  position: relative;
  cursor: pointer;
  padding: 0;
  margin: 0 0.45em 0 0.45em;
  /* iOS Safari */
  -webkit-touch-callout: none;
  /* Safari */
  -webkit-user-select: none;
  /* Konqueror HTML */
  /* Firefox */
  -moz-user-select: none;
  /* Internet Explorer/Edge */
  -ms-user-select: none;
  /* Non-prefixed version, currently supported by Chrome and Opera */
  user-select: none;
  background-color: #73859f;
  background-color: rgba(115, 133, 159, 0.5);
}

.video-js .vjs-slider.disabled {
  cursor: default;
}

.video-js .vjs-slider:focus {
  text-shadow: 0em 0em 1em white;
  box-shadow: 0 0 1em #fff;
}

.video-js .vjs-mute-control {
  cursor: pointer;
  flex: none;
}
.video-js .vjs-volume-control {
  cursor: pointer;
  margin-right: 1em;
  display: flex;
}

.video-js .vjs-volume-control.vjs-volume-horizontal {
  width: 5em;
}

.video-js .vjs-volume-panel .vjs-volume-control {
  visibility: visible;
  opacity: 0;
  width: 1px;
  height: 1px;
  margin-left: -1px;
}

.video-js .vjs-volume-panel {
  transition: width 1s;
}
.video-js .vjs-volume-panel.vjs-hover .vjs-volume-control, .video-js .vjs-volume-panel:active .vjs-volume-control, .video-js .vjs-volume-panel:focus .vjs-volume-control, .video-js .vjs-volume-panel .vjs-volume-control:active, .video-js .vjs-volume-panel.vjs-hover .vjs-mute-control ~ .vjs-volume-control, .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active {
  visibility: visible;
  opacity: 1;
  position: relative;
  transition: visibility 0.1s, opacity 0.1s, height 0.1s, width 0.1s, left 0s, top 0s;
}
.video-js .vjs-volume-panel.vjs-hover .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-horizontal, .video-js .vjs-volume-panel.vjs-hover .vjs-mute-control ~ .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-horizontal {
  width: 5em;
  height: 3em;
  margin-right: 0;
}
.video-js .vjs-volume-panel.vjs-hover .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-vertical, .video-js .vjs-volume-panel.vjs-hover .vjs-mute-control ~ .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-vertical {
  left: -3.5em;
  transition: left 0s;
}
.video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover, .video-js .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active {
  width: 10em;
  transition: width 0.1s;
}
.video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-mute-toggle-only {
  width: 4em;
}

.video-js .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical {
  height: 8em;
  width: 3em;
  left: -3000em;
  transition: visibility 1s, opacity 1s, height 1s 1s, width 1s 1s, left 1s 1s, top 1s 1s;
}

.video-js .vjs-volume-panel .vjs-volume-control.vjs-volume-horizontal {
  transition: visibility 1s, opacity 1s, height 1s 1s, width 1s, left 1s 1s, top 1s 1s;
}

.video-js.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-horizontal {
  width: 5em;
  height: 3em;
  visibility: visible;
  opacity: 1;
  position: relative;
  transition: none;
}

.video-js.vjs-no-flex .vjs-volume-control.vjs-volume-vertical,
.video-js.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical {
  position: absolute;
  bottom: 3em;
  left: 0.5em;
}

.video-js .vjs-volume-panel {
  display: flex;
}

.video-js .vjs-volume-bar {
  margin: 1.35em 0.45em;
}

.vjs-volume-bar.vjs-slider-horizontal {
  width: 5em;
  height: 0.3em;
}

.vjs-volume-bar.vjs-slider-vertical {
  width: 0.3em;
  height: 5em;
  margin: 1.35em auto;
}

.video-js .vjs-volume-level {
  position: absolute;
  bottom: 0;
  left: 0;
  background-color: #fff;
}
.video-js .vjs-volume-level:before {
  position: absolute;
  font-size: 0.9em;
  z-index: 1;
}

.vjs-slider-vertical .vjs-volume-level {
  width: 0.3em;
}
.vjs-slider-vertical .vjs-volume-level:before {
  top: -0.5em;
  left: -0.3em;
  z-index: 1;
}

.vjs-slider-horizontal .vjs-volume-level {
  height: 0.3em;
}
.vjs-slider-horizontal .vjs-volume-level:before {
  top: -0.3em;
  right: -0.5em;
}

.video-js .vjs-volume-panel.vjs-volume-panel-vertical {
  width: 4em;
}

.vjs-volume-bar.vjs-slider-vertical .vjs-volume-level {
  height: 100%;
}

.vjs-volume-bar.vjs-slider-horizontal .vjs-volume-level {
  width: 100%;
}

.video-js .vjs-volume-vertical {
  width: 3em;
  height: 8em;
  bottom: 8em;
  background-color: #2B333F;
  background-color: rgba(43, 51, 63, 0.7);
}

.video-js .vjs-volume-horizontal .vjs-menu {
  left: -2em;
}

.video-js .vjs-volume-tooltip {
  background-color: #fff;
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 0.3em;
  color: #000;
  float: right;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1em;
  padding: 6px 8px 8px 8px;
  pointer-events: none;
  position: absolute;
  top: -3.4em;
  visibility: hidden;
  z-index: 1;
}

.video-js .vjs-volume-control:hover .vjs-volume-tooltip,
.video-js .vjs-volume-control:hover .vjs-progress-holder:focus .vjs-volume-tooltip {
  display: block;
  font-size: 1em;
  visibility: visible;
}

.video-js .vjs-volume-vertical:hover .vjs-volume-tooltip,
.video-js .vjs-volume-vertical:hover .vjs-progress-holder:focus .vjs-volume-tooltip {
  left: 1em;
  top: -12px;
}

.video-js .vjs-volume-control.disabled:hover .vjs-volume-tooltip {
  font-size: 1em;
}

.video-js .vjs-volume-control .vjs-mouse-display {
  display: none;
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: #000;
  z-index: 1;
}

.video-js .vjs-volume-horizontal .vjs-mouse-display {
  width: 1px;
  height: 100%;
}

.vjs-no-flex .vjs-volume-control .vjs-mouse-display {
  z-index: 0;
}

.video-js .vjs-volume-control:hover .vjs-mouse-display {
  display: block;
}

.video-js.vjs-user-inactive .vjs-volume-control .vjs-mouse-display {
  visibility: hidden;
  opacity: 0;
  transition: visibility 1s, opacity 1s;
}

.video-js.vjs-user-inactive.vjs-no-flex .vjs-volume-control .vjs-mouse-display {
  display: none;
}

.vjs-mouse-display .vjs-volume-tooltip {
  color: #fff;
  background-color: #000;
  background-color: rgba(0, 0, 0, 0.8);
}

.vjs-poster {
  display: inline-block;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size: contain;
  background-color: #000000;
  cursor: pointer;
  margin: 0;
  padding: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  height: 100%;
}

.vjs-has-started .vjs-poster,
.vjs-using-native-controls .vjs-poster {
  display: none;
}

.vjs-audio.vjs-has-started .vjs-poster,
.vjs-has-started.vjs-audio-poster-mode .vjs-poster {
  display: block;
}

.video-js .vjs-live-control {
  display: flex;
  align-items: flex-start;
  flex: auto;
  font-size: 1em;
  line-height: 3em;
}

.vjs-no-flex .vjs-live-control {
  display: table-cell;
  width: auto;
  text-align: left;
}

.video-js:not(.vjs-live) .vjs-live-control,
.video-js.vjs-liveui .vjs-live-control {
  display: none;
}

.video-js .vjs-seek-to-live-control {
  align-items: center;
  cursor: pointer;
  flex: none;
  display: inline-flex;
  height: 100%;
  padding-left: 0.5em;
  padding-right: 0.5em;
  font-size: 1em;
  line-height: 3em;
  width: auto;
  min-width: 4em;
}

.vjs-no-flex .vjs-seek-to-live-control {
  display: table-cell;
  width: auto;
  text-align: left;
}

.video-js.vjs-live:not(.vjs-liveui) .vjs-seek-to-live-control,
.video-js:not(.vjs-live) .vjs-seek-to-live-control {
  display: none;
}

.vjs-seek-to-live-control.vjs-control.vjs-at-live-edge {
  cursor: auto;
}

.vjs-seek-to-live-control .vjs-icon-placeholder {
  margin-right: 0.5em;
  color: #888;
}

.vjs-seek-to-live-control.vjs-control.vjs-at-live-edge .vjs-icon-placeholder {
  color: red;
}

.video-js .vjs-time-control {
  flex: none;
  font-size: 1em;
  line-height: 3em;
  min-width: 2em;
  width: auto;
  padding-left: 1em;
  padding-right: 1em;
}

.vjs-live .vjs-time-control {
  display: none;
}

.video-js .vjs-current-time,
.vjs-no-flex .vjs-current-time {
  display: none;
}

.video-js .vjs-duration,
.vjs-no-flex .vjs-duration {
  display: none;
}

.vjs-time-divider {
  display: none;
  line-height: 3em;
}

.vjs-live .vjs-time-divider {
  display: none;
}

.video-js .vjs-play-control {
  cursor: pointer;
}

.video-js .vjs-play-control .vjs-icon-placeholder {
  flex: none;
}

.vjs-text-track-display {
  position: absolute;
  bottom: 3em;
  left: 0;
  right: 0;
  top: 0;
  pointer-events: none;
}

.video-js.vjs-controls-disabled .vjs-text-track-display,
.video-js.vjs-user-inactive.vjs-playing .vjs-text-track-display {
  bottom: 1em;
}

.video-js .vjs-text-track {
  font-size: 1.4em;
  text-align: center;
  margin-bottom: 0.1em;
}

.vjs-subtitles {
  color: #fff;
}

.vjs-captions {
  color: #fc6;
}

.vjs-tt-cue {
  display: block;
}

video::-webkit-media-text-track-display {
  transform: translateY(-3em);
}

.video-js.vjs-controls-disabled video::-webkit-media-text-track-display,
.video-js.vjs-user-inactive.vjs-playing video::-webkit-media-text-track-display {
  transform: translateY(-1.5em);
}

.video-js .vjs-picture-in-picture-control {
  cursor: pointer;
  flex: none;
}
.video-js.vjs-audio-only-mode .vjs-picture-in-picture-control {
  display: none;
}

.video-js .vjs-fullscreen-control {
  cursor: pointer;
  flex: none;
}
.video-js.vjs-audio-only-mode .vjs-fullscreen-control {
  display: none;
}

.vjs-playback-rate > .vjs-menu-button,
.vjs-playback-rate .vjs-playback-rate-value {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.vjs-playback-rate .vjs-playback-rate-value {
  pointer-events: none;
  font-size: 1.5em;
  line-height: 2;
  text-align: center;
}

.vjs-playback-rate .vjs-menu {
  width: 4em;
  left: 0em;
}

.vjs-error .vjs-error-display .vjs-modal-dialog-content {
  font-size: 1.4em;
  text-align: center;
}

.vjs-error .vjs-error-display:before {
  color: #fff;
  content: "X";
  font-family: Arial, Helvetica, sans-serif;
  font-size: 4em;
  left: 0;
  line-height: 1;
  margin-top: -0.5em;
  position: absolute;
  text-shadow: 0.05em 0.05em 0.1em #000;
  text-align: center;
  top: 50%;
  vertical-align: middle;
  width: 100%;
}

.vjs-loading-spinner {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -25px 0 0 -25px;
  opacity: 0.85;
  text-align: left;
  border: 6px solid rgba(43, 51, 63, 0.7);
  box-sizing: border-box;
  background-clip: padding-box;
  width: 50px;
  height: 50px;
  border-radius: 25px;
  visibility: hidden;
}

.vjs-seeking .vjs-loading-spinner,
.vjs-waiting .vjs-loading-spinner {
  display: block;
  -webkit-animation: vjs-spinner-show 0s linear 0.3s forwards;
          animation: vjs-spinner-show 0s linear 0.3s forwards;
}

.vjs-loading-spinner:before,
.vjs-loading-spinner:after {
  content: "";
  position: absolute;
  margin: -6px;
  box-sizing: inherit;
  width: inherit;
  height: inherit;
  border-radius: inherit;
  opacity: 1;
  border: inherit;
  border-color: transparent;
  border-top-color: white;
}

.vjs-seeking .vjs-loading-spinner:before,
.vjs-seeking .vjs-loading-spinner:after,
.vjs-waiting .vjs-loading-spinner:before,
.vjs-waiting .vjs-loading-spinner:after {
  -webkit-animation: vjs-spinner-spin 1.1s cubic-bezier(0.6, 0.2, 0, 0.8) infinite, vjs-spinner-fade 1.1s linear infinite;
  animation: vjs-spinner-spin 1.1s cubic-bezier(0.6, 0.2, 0, 0.8) infinite, vjs-spinner-fade 1.1s linear infinite;
}

.vjs-seeking .vjs-loading-spinner:before,
.vjs-waiting .vjs-loading-spinner:before {
  border-top-color: white;
}

.vjs-seeking .vjs-loading-spinner:after,
.vjs-waiting .vjs-loading-spinner:after {
  border-top-color: white;
  -webkit-animation-delay: 0.44s;
  animation-delay: 0.44s;
}

@keyframes vjs-spinner-show {
  to {
    visibility: visible;
  }
}
@-webkit-keyframes vjs-spinner-show {
  to {
    visibility: visible;
  }
}
@keyframes vjs-spinner-spin {
  100% {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes vjs-spinner-spin {
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes vjs-spinner-fade {
  0% {
    border-top-color: #73859f;
  }
  20% {
    border-top-color: #73859f;
  }
  35% {
    border-top-color: white;
  }
  60% {
    border-top-color: #73859f;
  }
  100% {
    border-top-color: #73859f;
  }
}
@-webkit-keyframes vjs-spinner-fade {
  0% {
    border-top-color: #73859f;
  }
  20% {
    border-top-color: #73859f;
  }
  35% {
    border-top-color: white;
  }
  60% {
    border-top-color: #73859f;
  }
  100% {
    border-top-color: #73859f;
  }
}
.video-js.vjs-audio-only-mode .vjs-captions-button {
  display: none;
}

.vjs-chapters-button .vjs-menu ul {
  width: 24em;
}

.video-js.vjs-audio-only-mode .vjs-descriptions-button {
  display: none;
}

.video-js .vjs-subs-caps-button + .vjs-menu .vjs-captions-menu-item .vjs-menu-item-text .vjs-icon-placeholder {
  vertical-align: middle;
  display: inline-block;
  margin-bottom: -0.1em;
}

.video-js .vjs-subs-caps-button + .vjs-menu .vjs-captions-menu-item .vjs-menu-item-text .vjs-icon-placeholder:before {
  font-family: VideoJS;
  content: "";
  font-size: 1.5em;
  line-height: inherit;
}

.video-js.vjs-audio-only-mode .vjs-subs-caps-button {
  display: none;
}

.video-js .vjs-audio-button + .vjs-menu .vjs-main-desc-menu-item .vjs-menu-item-text .vjs-icon-placeholder {
  vertical-align: middle;
  display: inline-block;
  margin-bottom: -0.1em;
}

.video-js .vjs-audio-button + .vjs-menu .vjs-main-desc-menu-item .vjs-menu-item-text .vjs-icon-placeholder:before {
  font-family: VideoJS;
  content: " ";
  font-size: 1.5em;
  line-height: inherit;
}

.video-js.vjs-layout-small .vjs-current-time,
.video-js.vjs-layout-small .vjs-time-divider,
.video-js.vjs-layout-small .vjs-duration,
.video-js.vjs-layout-small .vjs-remaining-time,
.video-js.vjs-layout-small .vjs-playback-rate,
.video-js.vjs-layout-small .vjs-volume-control, .video-js.vjs-layout-x-small .vjs-current-time,
.video-js.vjs-layout-x-small .vjs-time-divider,
.video-js.vjs-layout-x-small .vjs-duration,
.video-js.vjs-layout-x-small .vjs-remaining-time,
.video-js.vjs-layout-x-small .vjs-playback-rate,
.video-js.vjs-layout-x-small .vjs-volume-control, .video-js.vjs-layout-tiny .vjs-current-time,
.video-js.vjs-layout-tiny .vjs-time-divider,
.video-js.vjs-layout-tiny .vjs-duration,
.video-js.vjs-layout-tiny .vjs-remaining-time,
.video-js.vjs-layout-tiny .vjs-playback-rate,
.video-js.vjs-layout-tiny .vjs-volume-control {
  display: none;
}
.video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal:hover, .video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active, .video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal:hover, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal:hover, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover {
  width: auto;
  width: initial;
}
.video-js.vjs-layout-x-small .vjs-progress-control, .video-js.vjs-layout-tiny .vjs-progress-control {
  display: none;
}
.video-js.vjs-layout-x-small .vjs-custom-control-spacer {
  flex: auto;
  display: block;
}
.video-js.vjs-layout-x-small.vjs-no-flex .vjs-custom-control-spacer {
  width: auto;
}

.vjs-modal-dialog.vjs-text-track-settings {
  background-color: #2B333F;
  background-color: rgba(43, 51, 63, 0.75);
  color: #fff;
  height: 70%;
}

.vjs-text-track-settings .vjs-modal-dialog-content {
  display: table;
}

.vjs-text-track-settings .vjs-track-settings-colors,
.vjs-text-track-settings .vjs-track-settings-font,
.vjs-text-track-settings .vjs-track-settings-controls {
  display: table-cell;
}

.vjs-text-track-settings .vjs-track-settings-controls {
  text-align: right;
  vertical-align: bottom;
}

@supports (display: grid) {
  .vjs-text-track-settings .vjs-modal-dialog-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr;
    padding: 20px 24px 0px 24px;
  }

  .vjs-track-settings-controls .vjs-default-button {
    margin-bottom: 20px;
  }

  .vjs-text-track-settings .vjs-track-settings-controls {
    grid-column: 1/-1;
  }

  .vjs-layout-small .vjs-text-track-settings .vjs-modal-dialog-content,
.vjs-layout-x-small .vjs-text-track-settings .vjs-modal-dialog-content,
.vjs-layout-tiny .vjs-text-track-settings .vjs-modal-dialog-content {
    grid-template-columns: 1fr;
  }
}
.vjs-track-setting > select {
  margin-right: 1em;
  margin-bottom: 0.5em;
}

.vjs-text-track-settings fieldset {
  margin: 5px;
  padding: 3px;
  border: none;
}

.vjs-text-track-settings fieldset span {
  display: inline-block;
}

.vjs-text-track-settings fieldset span > select {
  max-width: 7.3em;
}

.vjs-text-track-settings legend {
  color: #fff;
  margin: 0 0 5px 0;
}

.vjs-text-track-settings .vjs-label {
  position: absolute;
  clip: rect(1px 1px 1px 1px);
  clip: rect(1px, 1px, 1px, 1px);
  display: block;
  margin: 0 0 5px 0;
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}

.vjs-track-settings-controls button:focus,
.vjs-track-settings-controls button:active {
  outline-style: solid;
  outline-width: medium;
  background-image: linear-gradient(0deg, #fff 88%, #73859f 100%);
}

.vjs-track-settings-controls button:hover {
  color: rgba(43, 51, 63, 0.75);
}

.vjs-track-settings-controls button {
  background-color: #fff;
  background-image: linear-gradient(-180deg, #fff 88%, #73859f 100%);
  color: #2B333F;
  cursor: pointer;
  border-radius: 2px;
}

.vjs-track-settings-controls .vjs-default-button {
  margin-right: 1em;
}

@media print {
  .video-js > *:not(.vjs-tech):not(.vjs-poster) {
    visibility: hidden;
  }
}
.vjs-resize-manager {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
  z-index: -1000;
}

.js-focus-visible .video-js *:focus:not(.focus-visible) {
  outline: none;
}

.video-js *:focus:not(:focus-visible) {
  outline: none;
}
</style>
<style>.cleanslate,.cleanslate a,.cleanslate abbr,.cleanslate acronym,.cleanslate address,.cleanslate applet,.cleanslate area,.cleanslate article,.cleanslate aside,.cleanslate audio,.cleanslate b,.cleanslate big,.cleanslate blockquote,.cleanslate button,.cleanslate canvas,.cleanslate caption,.cleanslate cite,.cleanslate code,.cleanslate col,.cleanslate colgroup,.cleanslate datalist,.cleanslate dd,.cleanslate del,.cleanslate dfn,.cleanslate div,.cleanslate dl,.cleanslate dt,.cleanslate em,.cleanslate fieldset,.cleanslate figcaption,.cleanslate figure,.cleanslate footer,.cleanslate form,.cleanslate h1,.cleanslate h2,.cleanslate h3,.cleanslate h4,.cleanslate h5,.cleanslate h6,.cleanslate header,.cleanslate hr,.cleanslate i,.cleanslate iframe,.cleanslate img,.cleanslate input,.cleanslate ins,.cleanslate kbd,.cleanslate label,.cleanslate legend,.cleanslate li,.cleanslate main,.cleanslate map,.cleanslate mark,.cleanslate menu,.cleanslate meta,.cleanslate nav,.cleanslate object,.cleanslate ol,.cleanslate optgroup,.cleanslate option,.cleanslate output,.cleanslate p,.cleanslate pre,.cleanslate progress,.cleanslate q,.cleanslate samp,.cleanslate section,.cleanslate select,.cleanslate small,.cleanslate span,.cleanslate strike,.cleanslate strong,.cleanslate sub,.cleanslate summary,.cleanslate sup,.cleanslate svg,.cleanslate table,.cleanslate tbody,.cleanslate td,.cleanslate textarea,.cleanslate tfoot,.cleanslate th,.cleanslate thead,.cleanslate time,.cleanslate tr,.cleanslate tt,.cleanslate ul,.cleanslate var,.cleanslate video{backgroundImage:none;clip:auto;font-feature-settings:normal;-webkit-backface-visibility:visible;-moz-backface-visibility:visible;-ms-backface-visibility:visible;-o-backface-visibility:visible;backface-visibility:visible;background-attachment:scroll;-webkit-background-clip:border-box;background-clip:initial;background-color:#0000;-webkit-background-origin:padding-box;background-origin:initial;background-position:0 0;background-repeat:repeat;-webkit-background-size:auto;-moz-background-size:auto;background-size:auto;border:none;-webkit-border-image:none;-moz-border-image:none;-o-border-image:none;border-image:none;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;bottom:auto;-webkit-box-shadow:none;box-shadow:none;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:initial;clear:none;color:inherit;-webkit-column-count:auto;-moz-column-count:auto;-webkit-column-gap:normal;-moz-column-gap:normal;column-gap:normal;-webkit-column-rule:medium none #000;-moz-column-rule:medium none #000;column-rule:medium none #000;-webkit-column-span:1;-moz-column-span:1;column-span:1;-webkit-column-width:auto;-moz-column-width:auto;columns:auto;counter-increment:none;counter-reset:none;direction:inherit;display:inline;float:none;font-family:inherit;font-size:inherit;font-style:inherit;font-variant:normal;font-weight:inherit;height:auto;-webkit-hyphens:manual;-moz-hyphens:manual;hyphens:manual;left:auto;letter-spacing:normal;line-height:inherit;list-style-image:none;list-style-position:outside;list-style-type:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;opacity:1;outline:medium none invert;overflow:visible;overflow-x:visible;overflow-y:visible;padding:0;-webkit-perspective:none;-moz-perspective:none;-ms-perspective:none;-o-perspective:none;perspective:none;-webkit-perspective-origin:50% 50%;-moz-perspective-origin:50% 50%;-ms-perspective-origin:50% 50%;-o-perspective-origin:50% 50%;perspective-origin:50% 50%;position:static;quotes:" "";right:auto;table-layout:auto;text-align:inherit;text-decoration:inherit;text-indent:0;text-shadow:none;text-transform:none;top:auto;-webkit-transform:none;-moz-transform:none;-ms-transform:none;-o-transform:none;transform:none;-webkit-transform-origin:50% 50%;-moz-transform-origin:50% 50%;-ms-transform-origin:50% 50%;-o-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-transform-style:flat;-moz-transform-style:flat;-ms-transform-style:flat;-o-transform-style:flat;transform-style:flat;-webkit-transition:all 0s ease 0s;transition:all 0s ease 0s;unicode-bidi:normal;vertical-align:initial;visibility:inherit;white-space:normal;width:auto;word-break:normal;word-spacing:normal;z-index:auto}.cleanslate,.cleanslate address,.cleanslate article,.cleanslate audio,.cleanslate blockquote,.cleanslate caption,.cleanslate colgroup,.cleanslate dd,.cleanslate dialog,.cleanslate div,.cleanslate dl,.cleanslate dt,.cleanslate fieldset,.cleanslate figure,.cleanslate footer,.cleanslate form,.cleanslate h1,.cleanslate h2,.cleanslate h3,.cleanslate h4,.cleanslate h5,.cleanslate h6,.cleanslate header,.cleanslate hgroup,.cleanslate hr,.cleanslate main,.cleanslate menu,.cleanslate nav,.cleanslate ol,.cleanslate option,.cleanslate p,.cleanslate pre,.cleanslate progress,.cleanslate section,.cleanslate summary,.cleanslate ul,.cleanslate video{display:block}.cleanslate h1,.cleanslate h2,.cleanslate h3,.cleanslate h4,.cleanslate h5,.cleanslate h6{font-weight:700}.cleanslate h1{font-size:2em;padding:.67em 0}.cleanslate h2{font-size:1.5em;padding:.83em 0}.cleanslate h3{font-size:1.17em;padding:.83em 0}.cleanslate h4{font-size:1em}.cleanslate h5{font-size:.83em}.cleanslate p{margin:1em 0}.cleanslate table{display:table}.cleanslate thead{display:table-header-group}.cleanslate tbody{display:table-row-group}.cleanslate tfoot{display:table-footer-group}.cleanslate tr{display:table-row}.cleanslate td,.cleanslate th{display:table-cell;padding:2px}.cleanslate ol,.cleanslate ul{margin:1em 0}.cleanslate ol li,.cleanslate ol ol li,.cleanslate ol ol ol li,.cleanslate ol ol ul li,.cleanslate ol ul ul li,.cleanslate ul li,.cleanslate ul ol ol li,.cleanslate ul ul li,.cleanslate ul ul ol li,.cleanslate ul ul ul li{list-style-position:inside;margin-top:.08em}.cleanslate ol ol,.cleanslate ol ol ol,.cleanslate ol ol ul,.cleanslate ol ul,.cleanslate ol ul ul,.cleanslate ul ol,.cleanslate ul ol ol,.cleanslate ul ul,.cleanslate ul ul ol,.cleanslate ul ul ul{margin:0;padding-left:40px}.cleanslate nav ol,.cleanslate nav ul{list-style-type:none}.cleanslate menu,.cleanslate ul{list-style-type:disc}.cleanslate ol{list-style-type:decimal}.cleanslate menu menu,.cleanslate menu ul,.cleanslate ol menu,.cleanslate ol ul,.cleanslate ul menu,.cleanslate ul ul{list-style-type:circle}.cleanslate menu menu menu,.cleanslate menu menu ul,.cleanslate menu ol menu,.cleanslate menu ol ul,.cleanslate menu ul menu,.cleanslate menu ul ul,.cleanslate ol menu menu,.cleanslate ol menu ul,.cleanslate ol ol menu,.cleanslate ol ol ul,.cleanslate ol ul menu,.cleanslate ol ul ul,.cleanslate ul menu menu,.cleanslate ul menu ul,.cleanslate ul ol menu,.cleanslate ul ol ul,.cleanslate ul ul menu,.cleanslate ul ul ul{list-style-type:square}.cleanslate li{display:list-item;min-height:auto;min-width:auto;padding-left:20px}.cleanslate strong{font-weight:700}.cleanslate em{font-style:italic}.cleanslate code,.cleanslate kbd,.cleanslate pre,.cleanslate samp{font-family:monospace}.cleanslate a{color:blue;text-decoration:underline}.cleanslate a:visited{color:#529}.cleanslate a,.cleanslate a *,.cleanslate button,.cleanslate input[type=button],.cleanslate input[type=checkbox],.cleanslate input[type=radio],.cleanslate input[type=submit],.cleanslate select{cursor:pointer}.cleanslate button,.cleanslate input[type=submit]{-webkit-appearance:push-button;background:#d3d3d3;background:#fff;background:-moz-linear-gradient(top,#fff 0,#ddd 100%,#d1d1d1 100%,#ddd 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#fff),color-stop(100%,#ddd),color-stop(100%,#d1d1d1),color-stop(100%,#ddd));background:-webkit-linear-gradient(top,#fff,#ddd 100%,#d1d1d1 0,#ddd 0);background:-o-linear-gradient(top,#fff 0,#ddd 100%,#d1d1d1 100%,#ddd 100%);background:-ms-linear-gradient(top,#fff 0,#ddd 100%,#d1d1d1 100%,#ddd 100%);background:linear-gradient(180deg,#fff 0,#ddd 100%,#d1d1d1 0,#ddd 0);border:1px solid #a6a6a6;border-radius:4px;-webkit-box-shadow:1px 1px 0 #eee;-moz-box-shadow:1px 1px 0 #eee;-o-box-shadow:1px 1px 0 #eee;box-shadow:1px 1px 0 #eee;color:buttontext;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff",endColorstr="#dddddd",GradientType=0);font-family:arial,helvetica,sans-serif;font-size:small;padding:2px 6px 3px;text-align:center;text-decoration:none}.cleanslate button:active,.cleanslate input[type=button]:active,.cleanslate input[type=submit]:active{background:#3b679e;background:-moz-linear-gradient(top,#3b679e 0,#2b88d9 50%,#207cca 51%,#7db9e8 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#3b679e),color-stop(50%,#2b88d9),color-stop(51%,#207cca),color-stop(100%,#7db9e8));background:-webkit-linear-gradient(top,#3b679e,#2b88d9 50%,#207cca 51%,#7db9e8);background:-o-linear-gradient(top,#3b679e 0,#2b88d9 50%,#207cca 51%,#7db9e8 100%);background:-ms-linear-gradient(top,#3b679e 0,#2b88d9 50%,#207cca 51%,#7db9e8 100%);background:linear-gradient(180deg,#3b679e 0,#2b88d9 50%,#207cca 51%,#7db9e8);border-color:#5259b0}.cleanslate button{margin-right:5px;padding:1px 6px 2px}.cleanslate input[type=hidden]{display:none}.cleanslate textarea{word-wrap:break-word;-webkit-appearance:textarea;background:#fff;font-family:arial,helvetica,sans-serif;font-size:11px;line-height:13px;margin-left:4px;padding:2px;resize:both;white-space:pre-wrap}.cleanslate input,.cleanslate select,.cleanslate textarea{border:1px solid #ccc}.cleanslate select{display:inline-block;font-family:helvetica,arial,sans-serif;font-size:11px}.cleanslate input:focus,.cleanslate textarea:focus{outline:5px auto -webkit-focus-ring-color;outline:initial}.cleanslate input[type=text]{background:#fff;font-family:initial;font-size:small;padding:1px}.cleanslate input[type=checkbox],.cleanslate input[type=radio]{border:1px solid #2b2b2b;border-radius:4px;outline:initial}.cleanslate input[type=radio]{margin:2px 2px 3px}.cleanslate abbr[title],.cleanslate acronym[title],.cleanslate dfn[title]{border-bottom-style:dotted;border-bottom-width:1px;cursor:help}.cleanslate ins{background-color:#ff9;color:#000}.cleanslate del{text-decoration:line-through}.cleanslate blockquote,.cleanslate q{quotes:none}.cleanslate blockquote:after,.cleanslate blockquote:before,.cleanslate li:after,.cleanslate li:before,.cleanslate q:after,.cleanslate q:before{content:""}.cleanslate input,.cleanslate select{vertical-align:middle}.cleanslate table{border-collapse:collapse;border-spacing:0}.cleanslate hr{border:0;border-top:1px solid #ccc;display:block;height:1px;margin:1em 0}.cleanslate [dir=rtl]{direction:rtl}.cleanslate mark{background-color:#ff9;color:#000;font-style:italic;font-weight:700}.cleanslate menu{padding-left:40px;padding-top:8px}.cleanslate [hidden],.cleanslate template{display:none}.cleanslate abbr[title]{border-bottom:1px dotted}.cleanslate sub,.cleanslate sup{font-size:75%;line-height:0;position:relative;vertical-align:initial}.cleanslate sup{top:-.5em}.cleanslate sub{bottom:-.25em}.cleanslate img{border:0}.cleanslate figure{margin:0}.cleanslate textarea{overflow:auto;vertical-align:top}.cleanslate{color:#000;direction:ltr;font-family:Times New Roman,Times,serif;font-size:medium;font-style:normal;font-weight:400;line-height:1;list-style-type:disc;text-align:left;text-align:start;text-decoration:none}.cleanslate pre{white-space:pre}body[data-edit-mode=""] .hide-modal-content,body[data-edit-mode=""] .hide-price,body[data-edit-mode=""] .parsys .new.section{display:none}body[data-edit-mode=true] .hide-desktop,body[data-edit-mode=true] .hide-desktop-devices,body[data-edit-mode=true] .hide-laptop,body[data-edit-mode=true] .hide-modal-content,body[data-edit-mode=true] .hide-price{display:block}body[data-edit-mode=true] .navigation .global-nav{position:static}body[data-edit-mode=true] #page-content{margin-top:0}.text-bold{font-weight:700}.text-center{text-align:center}@media screen and (max-width:639px){.text-center.mob-text-left,.text-center.mob-text-left .description,.text-center.mob-text-left .text-button,.text-center.mob-text-left .title{text-align:left}.text-center.mob-text-left .text-button .mobile-align-center{text-align:center}.text-center.mob-text-left .text-button .text-center.mobile-align{text-align:left}}@media screen and (min-width:640px)and (max-width:1023px){.text-center.tab-text-left,.text-center.tab-text-left .description,.text-center.tab-text-left .text-button,.text-center.tab-text-left .title{text-align:left}.text-center.tab-text-left .text-button .mobile-align-center{text-align:center}.text-center.tab-text-left .text-button .text-center.mobile-align{text-align:left}}@media screen and (max-width:639px){.text-center.mob-text-right,.text-center.mob-text-right .description,.text-center.mob-text-right .text-button,.text-center.mob-text-right .title{text-align:right}.text-center.mob-text-right .text-button .mobile-align-center{text-align:center}.text-center.mob-text-right .text-button .text-center.mobile-align{text-align:right}}@media screen and (min-width:640px)and (max-width:1023px){.text-center.tab-text-right,.text-center.tab-text-right .description,.text-center.tab-text-right .text-button,.text-center.tab-text-right .title{text-align:right}.text-center.tab-text-right .text-button .mobile-align-center{text-align:center}.text-center.tab-text-right .text-button .text-center.mobile-align{text-align:right}}.text-left{text-align:left}@media screen and (max-width:639px){.text-left.mob-text-center,.text-left.mob-text-center .description,.text-left.mob-text-center .text-button,.text-left.mob-text-center .title{text-align:center}}@media screen and (min-width:640px)and (max-width:1023px){.text-left.tab-text-center,.text-left.tab-text-center .description,.text-left.tab-text-center .text-button,.text-left.tab-text-center .title{text-align:center}}@media screen and (max-width:639px){.text-left.mob-text-right,.text-left.mob-text-right .description,.text-left.mob-text-right .text-button,.text-left.mob-text-right .title{text-align:right}.text-left.mob-text-right .text-button .mobile-align-center{text-align:center}.text-left.mob-text-right .text-button .text-center.mobile-align{text-align:right}}@media screen and (min-width:640px)and (max-width:1023px){.text-left.tab-text-right,.text-left.tab-text-right .description,.text-left.tab-text-right .text-button,.text-left.tab-text-right .title{text-align:right}.text-left.tab-text-right .text-button .mobile-align-center{text-align:center}.text-left.tab-text-right .text-button .text-center.mobile-align{text-align:right}}.text-right{text-align:right}@media screen and (max-width:639px){.text-right.mob-text-center,.text-right.mob-text-center .description,.text-right.mob-text-center .text-button,.text-right.mob-text-center .title{text-align:center}}@media screen and (min-width:640px)and (max-width:1023px){.text-right.tab-text-center,.text-right.tab-text-center .description,.text-right.tab-text-center .text-button,.text-right.tab-text-center .title{text-align:center}}@media screen and (max-width:639px){.text-right.mob-text-left,.text-right.mob-text-left .description,.text-right.mob-text-left .text-button,.text-right.mob-text-left .title{text-align:left}.text-right.mob-text-left .text-button .mobile-align-center{text-align:center}.text-right.mob-text-left .text-button .text-center.mobile-align{text-align:left}}@media screen and (min-width:640px)and (max-width:1023px){.text-right.tab-text-left,.text-right.tab-text-left .description,.text-right.tab-text-left .text-button,.text-right.tab-text-left .title{text-align:left}.text-right.tab-text-left .text-button .mobile-align-center{text-align:center}.text-right.tab-text-left .text-button .text-center.mobile-align{text-align:left}}@media screen and (max-width:639px){.mob-text-center{text-align:center}.mob-text-left{text-align:left}.mob-text-right{text-align:right}}@media screen and (min-width:640px)and (max-width:1023px){.tab-text-left{text-align:left}.tab-text-right{text-align:right}}.text-underline{text-decoration:underline}.background-white{background-color:#fff}.background-black{background-color:#000}.background-none{background-color:#0000}.background-body-copy{background-color:#eee}.background-ui-elements{background-color:#ccc}.background-light-grey{background-color:#333!important}.background-dark-grey{background-color:#666}.background-section-grey{background-color:#f1f1f1}.background-secondary-grey{background-color:#1a1a1a}.background-dark-green{background-color:#004831}.background-brand-green{background-color:#76b900}.background-yellow{background-color:#ffeb3b}.background-red{background-color:#f44336}.background-lightgray-1{background-color:#f7f7f7}.background-lightgray-3{background-color:#ddd}.background-lightuigraphics{background-color:#999}.background-darkgray-3{background-color:#222}.background-darkgray-1{background-color:#111}.color-brand-green,.color-brand-green ol,.color-brand-green ul{color:#76b900}.color-black,.color-black ol,.color-black ul{color:#000}.color-error-red{color:#f44336}.color-white{color:#fff}.color-secondary-grey{color:#1a1a1a}.color-section-grey{color:#f1f1f1}.color-light-grey{color:#333}.color-dark-green{color:#004831}.color-dark-grey{color:#666}.color-yellow{color:#ffeb3b}.color-red{color:#f44336}.color-inherit{color:inherit}.color-body-copy,.color-body-copy ol,.color-body-copy ul{color:#eee}.color-ui-elements,.color-ui-elements ol,.color-ui-elements ul{color:#ccc}.clearfix:after,.clearfix:before{content:" ";display:table}.clearfix:after{clear:both}.no-padding{padding:0}@media screen and (min-width:1024px){.p-h-110{padding-left:109.95px;padding-right:109.95px}.p-h-85{padding-left:84.9px;padding-right:84.9px}.p-h-30{padding-left:30px;padding-right:30px}.p-t-0{padding-top:0}.p-t-8{padding-top:8px}.p-t-15{padding-top:15px}.p-t-25{padding-top:24.9px}.p-t-30{padding-top:30px}.p-t-45{padding-top:45px}.p-t-60{padding-top:60px}.p-t-75{padding-top:75px}.p-t-90{padding-top:90px}.p-t-105{padding-top:105px}.p-t-120{padding-top:120px}.p-r-5{padding-right:5px}.p-r-15{padding-right:15px}.p-r-30{padding-right:30px}.p-r-45{padding-right:45px}.p-r-110{padding-right:109.95px}.p-r-150{padding-right:150px}.p-r-160{padding-right:159.9px}.p-l-5{padding-left:5px}.p-l-15{padding-left:15px}.p-l-30{padding-left:30px}.p-l-45{padding-left:45px}.p-l-110{padding-left:109.95px}.p-l-120{padding-left:120px}.p-l-150{padding-left:150px}.p-l-160{padding-left:159.9px}.p-b-0{padding-bottom:0}.p-b-8{padding-bottom:8px}.p-b-15{padding-bottom:15px}.p-b-25{padding-bottom:24.9px}.p-b-30{padding-bottom:30px}.p-b-45{padding-bottom:45px}.p-b-60{padding-bottom:60px}.p-b-75{padding-bottom:75px}.p-b-90{padding-bottom:90px}.p-b-105{padding-bottom:105px}.p-b-120{padding-bottom:120px}.m-r-7{margin-right:7px}.m-t-0{margin-top:0}.m-t-5{margin-top:5px}.m-t-10{margin-top:10px}.m-t-15{margin-top:15px}.m-t-20,.m-t-25{margin-top:24.9px}.m-t-30{margin-top:30px}.m-t-45{margin-top:45px}.m-t-60{margin-top:60px}.m-t-75{margin-top:75px}.m-t-90{margin-top:90px}.m-t-105{margin-top:105px}.m-t-120{margin-top:120px}.m-t-135{margin-top:135px}.m-t-150{margin-top:150px}.m-t-165{margin-top:165px}.m-t-170{margin-top:169.95px}.m-t-180{margin-top:180px}.m-t-185{margin-top:184.5px}.m-t-195{margin-top:195px}.m-t-200{margin-top:199.5px}.m-t-255{margin-top:255px}.m-b-0{margin-bottom:0}.m-b-5{margin-bottom:5px}.m-b-10{margin-bottom:10px}.m-b-15{margin-bottom:15px}.m-b-30{margin-bottom:30px}.m-b-45{margin-bottom:45px}.m-b-60{margin-bottom:60px}.m-b-75{margin-bottom:75px}.m-b-90{margin-bottom:90px}.m-b-105{margin-bottom:105px}.m-b-120{margin-bottom:120px}.m-b-135{margin-bottom:135px}.m-b-150{margin-bottom:150px}.m-b-165{margin-bottom:165px}.m-b-180{margin-bottom:180px}.m-b-185{margin-bottom:184.5px}.m-b-195{margin-bottom:195px}.m-b-200{margin-bottom:199.5px}.m-b-315{margin-bottom:315px}.m-r-15{margin-right:15px}.m-r-30{margin-right:30px}.m-l-30{margin-left:30px}}@media screen and (max-width:639px){.mob-m-r-7{margin-right:7px}.mob-m-r-15{margin-right:15px}.mob-m-r-30{margin-right:30px}.mob-m-l-30{margin-left:30px}.mob-p-l-0{padding-left:0}.mob-p-l-5{padding-left:5px}.mob-p-l-15{padding-left:15px}.mob-p-l-30{padding-left:30px}.mob-p-l-40{padding-left:39.9px}.mob-p-r-5{padding-right:5px}.mob-p-r-15{padding-right:15px}.mob-p-r-30{padding-right:30px}.mob-p-r-45{padding-right:45px}.mob-m-t-0{margin-top:0}.mob-m-t-5{margin-top:5px}.mob-m-t-10{margin-top:10px}.mob-m-t-20{margin-top:19.95px}.mob-m-t-15{margin-top:15px}.mob-m-t-25{margin-top:24.9px}.mob-m-t-30{margin-top:30px}.mob-m-t-45{margin-top:45px}.mob-m-t-60{margin-top:60px}.mob-m-t-75{margin-top:75px}.mob-m-t-90{margin-top:90px}.mob-m-t-105{margin-top:105px}.mob-m-t-120{margin-top:120px}.mob-m-t-135{margin-top:135px}.mob-m-t-150{margin-top:150px}.mob-m-t-170{margin-top:169.95px}.mob-m-b-0{margin-bottom:0}.mob-m-b-5{margin-bottom:5px}.mob-m-b-10{margin-bottom:10px}.mob-m-b-15{margin-bottom:15px}.mob-m-b-30{margin-bottom:30px}.mob-m-b-45{margin-bottom:45px}.mob-m-b-60{margin-bottom:60px}.mob-m-b-75{margin-bottom:75px}.mob-m-b-90{margin-bottom:90px}.mob-m-b-105{margin-bottom:105px}.mob-m-b-120{margin-bottom:120px}.mob-m-b-135{margin-bottom:135px}.mob-m-b-150{margin-bottom:150px}.mob-p-t-0{padding-top:0}.mob-p-t-5{padding-top:5px}.mob-p-t-8{padding-top:8px}.mob-p-t-10{padding-top:10px}.mob-p-t-15{padding-top:15px}.mob-p-t-25{padding-top:24.9px}.mob-p-t-30{padding-top:30px}.mob-p-t-45{padding-top:45px}.mob-p-t-60{padding-top:60px}.mob-p-t-75{padding-top:75px}.mob-p-t-90{padding-top:90px}.mob-p-t-105{padding-top:105px}.mob-p-t-120{padding-top:120px}.mob-p-b-5{padding-bottom:5px}.mob-p-b-8{padding-bottom:8px}.mob-p-b-10{padding-bottom:10px}.mob-p-b-15{padding-bottom:15px}.mob-p-b-25{padding-bottom:24.9px}.mob-p-b-30{padding-bottom:30px}.mob-p-b-45{padding-bottom:45px}.mob-p-b-60{padding-bottom:60px}.mob-p-b-75{padding-bottom:75px}.mob-p-b-90{padding-bottom:90px}.mob-p-b-105{padding-bottom:105px}.mob-p-b-120{padding-bottom:120px}.mob-text-small{font-size:14px}}@media screen and (min-width:640px)and (max-width:1023px){.tab-p-l-5{padding-left:5px}.tab-p-l-15{padding-left:15px}.tab-p-l-30{padding-left:30px}.tab-p-l-60{padding-left:60px}.tab-p-l-90{padding-left:90px}.tab-p-r-60{padding-right:60px}.tab-p-r-5{padding-right:5px}.tab-p-r-15{padding-right:15px}.tab-p-r-30{padding-right:30px}.tab-m-r-7{margin-right:7px}.tab-m-r-15{margin-right:15px}.tab-m-r-30{margin-right:30px}.tab-m-l-30{margin-left:30px}.tab-m-l-5-per{margin-left:5%}.tab-m-t-10{margin-top:10px}.tab-m-t-0{margin-top:0}.tab-m-t-15{margin-top:15px}.tab-m-t-20,.tab-m-t-25{margin-top:24.9px}.tab-m-t-30{margin-top:30px}.tab-m-t-40{margin-top:39.9px}.tab-m-t-45{margin-top:45px}.tab-m-t-60{margin-top:60px}.tab-m-t-75{margin-top:75px}.tab-m-t-90{margin-top:90px}.tab-m-t-105{margin-top:105px}.tab-m-t-120{margin-top:120px}.tab-m-t-135{margin-top:135px}.tab-m-t-150{margin-top:150px}.tab-m-t-190{margin-top:189.9px}.tab-m-b-0{margin-bottom:0}.tab-m-b-5{margin-bottom:5px}.tab-m-b-15{margin-bottom:15px}.tab-m-b-30{margin-bottom:30px}.tab-m-b-45{margin-bottom:45px}.tab-m-b-60{margin-bottom:60px}.tab-m-b-75{margin-bottom:75px}.tab-m-b-90{margin-bottom:90px}.tab-m-b-105{margin-bottom:105px}.tab-m-b-120{margin-bottom:120px}.tab-m-b-135{margin-bottom:135px}.tab-m-b-150{margin-bottom:150px}.tab-m-b-255{margin-bottom:255px}.tab-p-t-5{padding-top:5px}.tab-p-t-8{padding-top:8px}.tab-p-t-7{padding-top:7px}.tab-p-t-6{padding-top:6px}.tab-p-t-10{padding-top:10px}.tab-p-t-15{padding-top:15px}.tab-p-t-25{padding-top:24.9px}.tab-p-t-30{padding-top:30px}.tab-p-t-45{padding-top:45px}.tab-p-t-60{padding-top:60px}.tab-p-t-75{padding-top:75px}.tab-p-t-90{padding-top:90px}.tab-p-t-105{padding-top:105px}.tab-p-t-120{padding-top:120px}.tab-p-t-135{padding-top:135px}.tab-p-t-150{padding-top:150px}.tab-p-b-5{padding-bottom:5px}.tab-p-b-8{padding-bottom:8px}.tab-p-b-10{padding-bottom:10px}.tab-p-b-15{padding-bottom:15px}.tab-p-b-20{padding-bottom:20px}.tab-p-b-25{padding-bottom:24.9px}.tab-p-b-30{padding-bottom:30px}.tab-p-b-45{padding-bottom:45px}.tab-p-b-60{padding-bottom:60px}.tab-p-b-75{padding-bottom:75px}.tab-p-b-90{padding-bottom:90px}.tab-p-b-105{padding-bottom:105px}.tab-p-b-120{padding-bottom:120px}.tab-p-b-135{padding-bottom:135px}.tab-p-b-150{padding-bottom:150px}}@media screen and (min-width:1290px){.xl-p-l-75{padding-left:75px}.xl-p-l-240{padding-left:210px}.xl-p-r-75{padding-right:75px}.xl-p-r-240{padding-right:210px}}@media screen and (min-width:1024px){.op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}.video .op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.video .op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.video .op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.video .op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.video .op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}}@media screen and (min-width:640px)and (max-width:1023px){.tab-op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.tab-op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.tab-op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.tab-op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.tab-op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}.video .tab-op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.video .tab-op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.video .tab-op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.video .tab-op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.video .tab-op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}}@media screen and (max-width:639px){.mob-op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.mob-op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.mob-op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.mob-op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.mob-op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}.video .mob-op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.video .mob-op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.video .mob-op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.video .mob-op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.video .mob-op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}}.line-height-small{line-height:1}.line-height-medium{line-height:1.5}.break-word{word-break:break-word}.no-wrap{white-space:nowrap}.hide{display:none!important}.show{display:block!important}.fade{opacity:0}.fade.in{opacity:1}.pull-left{float:left}.pull-right{float:right}.noscroll{height:100vh!important;overflow:hidden!important}.pos-absolute{position:absolute}.btn-more{border:1px solid #76b900;color:#fff;font-family:NVIDIA Sans,Arial,Helvetica,Sans-Serif;font-size:18px;font-weight:700;line-height:1}.btn-more:lang(ja-jp){font-family:NVIDIA Sans,source-han-sans-japanese,Arial,Helvetica,Sans-Serif}.btn-more:lang(ko-kr){font-family:NVIDIA Sans,source-han-sans-korean,Arial,Helvetica,Sans-Serif}.btn-more:lang(zh-tw){font-family:NVIDIA Sans,source-han-sans-traditional,Arial,Helvetica,Sans-Serif}.btn-more:lang(zh-cn){font-family:NVIDIA Sans,Source-Han-Sans-SC,Arial,Helvetica,Sans-Serif}.btn-more{background-color:#76b900;display:inline-block;margin:0 auto;min-width:50px;position:relative;text-align:center;text-decoration:none}.btn-more .txt-more{display:block;min-width:205px;padding:15px;text-align:center}@media screen and (min-width:640px)and (max-width:1023px){.btn-more .txt-more{padding:12px}}@media screen and (max-width:639px){.btn-more .txt-more{padding:12px}}.btn-more:active,.btn-more:hover{background-color:#76d300}@media screen and (max-width:639px){.hide-mob{display:none}}@media screen and (min-width:640px)and (max-width:1023px){.hide-tablet{display:none}}@media screen and (min-width:1024px){.hide-desktop{display:none}}.card{box-shadow:0 8px 6px -6px #ccc}.notched-g{font-family:GeForce-alt!important}.rounded-img{border-radius:50%}.text-uppercase{text-transform:uppercase}.auto-height{height:auto}.ht-560{height:560px}.ht-660{height:660px}.ht-760{height:760px}.brand-spinner{animation:spin 1.4s linear infinite;border:6px solid #76b900;border-radius:50%;border-right-color:#0000;height:60px;margin:50vh auto;width:60px}@keyframes spin{0%{transform:rotate(0deg)}50%{transform:rotate(220deg)}to{transform:rotate(1turn)}}.full-overlay{background-color:#000;height:100%;left:0;opacity:.85;position:fixed;top:0;width:100%;z-index:10000}.block-display{display:block}.flex-display{display:flex}.inline-flex-display{display:inline-flex}.align-items-center{align-items:center}.justify-content-center{justify-content:center}.justify-content-end{justify-content:flex-end}.justify-content-space-between{justify-content:space-between}.justify-content-space-around{justify-content:space-around}.justify-content-space-evenly{justify-content:space-evenly}.flex-wrap{flex-wrap:wrap}.flex-column{flex-direction:column}@media screen and (max-width:639px){.mob-flex-wrap{flex-wrap:wrap}}.inline-block-display{display:inline-block}.radix-modal-overlay{background-color:#00000073;inset:0;position:fixed;z-index:1000}.radix-modal-wrapper{align-items:flex-start;display:flex;inset:0;justify-content:center;outline:0;overflow:auto;padding:100px 0 24px;position:fixed;z-index:1000}.radix-modal-wrapper.centered{align-items:center;padding:0}.radix-modal-content{background-clip:padding-box;background-color:#fff;border:0;border-radius:2px;box-shadow:0 3px 6px -4px #0000001f,0 6px 16px 0 #00000014,0 9px 28px 8px #0000000d;margin:0 auto;max-width:calc(100vw - 32px);pointer-events:auto;position:relative;width:520px}.radix-modal-content:focus{outline:none}.radix-modal-close-btn{align-items:center;background:#0000;border:0;color:#00000073;cursor:pointer;display:flex;font-size:22px;font-weight:300;height:56px;justify-content:center;line-height:1;padding:0;position:absolute;right:0;text-decoration:none;top:0;width:56px;z-index:10}.radix-modal-close-btn:hover{color:#000000bf}.radix-modal-body{word-wrap:break-word;font-size:14px;line-height:1.5715;padding:24px}.radix-modal-footer{background:#0000;border-radius:0 0 2px 2px;border-top:1px solid #eee;padding:10px 16px;text-align:right}.sr-only{clip:rect(0,0,0,0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.ondemand-modal-wrapper .radix-modal-content{width:260px!important}.ondemand-modal-wrapper .radix-modal-content .radix-modal-body{color:#666;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;padding:12px 16px}.ondemand-modal-wrapper .radix-modal-content .title{margin-bottom:10px}.ondemand-modal-wrapper .radix-modal-content .instructions{padding:15px;text-align:center}.ondemand-modal-wrapper .radix-modal-content .list-container{margin-bottom:7.5px;max-height:220px;min-height:20px;overflow-y:auto}.ondemand-modal-wrapper .radix-modal-content .list-checkbox{display:flex;padding-bottom:10px}.ondemand-modal-wrapper .radix-modal-content .list-checkbox:last-child{padding-bottom:5px}.ondemand-modal-wrapper .radix-modal-content .loading{color:#999;font-size:12px;height:20px}.ondemand-modal-wrapper .radix-modal-content .popover-btn{background:none;border:none;border-radius:0;box-shadow:none;display:inline;margin:0;padding:0;text-decoration:none}.ondemand-modal-wrapper .radix-modal-content .popover-btn:focus,.ondemand-modal-wrapper .radix-modal-content .popover-btn:hover{text-decoration:none}.ondemand-modal-wrapper .radix-modal-content .popover-btn{color:#666;color:#666!important;cursor:pointer;display:block!important;font-family:inherit;font-size:15px;font-weight:400;line-height:15px}.ondemand-modal-wrapper .radix-modal-content .popover-btn:hover{color:#76b900!important}.ondemand-modal-wrapper .radix-modal-content .popover-btn:hover .btn-container span{color:#76b900}.ondemand-modal-wrapper .radix-modal-content .popover-btn .btn-container{display:table-row}.ondemand-modal-wrapper .radix-modal-content .popover-btn .btn-container .svg-container{display:table-cell;vertical-align:middle}.ondemand-modal-wrapper .radix-modal-content .popover-btn .btn-container span{color:#1a1a1a;cursor:pointer;display:table-cell;line-height:24px;padding:8px;vertical-align:middle}.ondemand-modal-wrapper .radix-modal-content .popover-btn .btn-container span.add{padding-left:3px}.ondemand-modal-wrapper .radix-modal-content .popover-actions{border-top:1px solid #ccc;margin-top:10px;padding-bottom:5px;padding-top:15px;text-align:center}.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn:focus,.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn:hover{text-decoration:none}.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn{color:#666;color:#666!important;font-family:inherit;font-size:15px;font-weight:400;line-height:15px}.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn:hover{color:#76b900!important}.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn.primary{font-weight:700;margin-right:40px}.ondemand-modal-wrapper .radix-modal-content .new-list-input{border:none;height:26px;margin-bottom:5px;width:220px}.ondemand-modal-wrapper .radix-modal-content .new-list-input:focus{outline:none!important}.ondemand-modal-wrapper.share .radix-modal-content{width:155px!important}.ondemand-info-modal-wrapper .radix-modal-content .radix-modal-body{color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;line-height:24px}@media screen and (min-width:640px){.ondemand-info-modal-wrapper .radix-modal-content .modal-content{display:flex}}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-image{margin-right:20px;padding-top:15px;width:130px}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-image img{max-width:100%}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-image .profile-photo-placeholder{background-color:#ccc;height:130px}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-info{flex:1}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-info .speaker-name{font-size:22px;font-weight:400;line-height:30px;margin-bottom:15px;margin-top:10px}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-info .speaker-bio{margin-bottom:20px}.ondemand-info-modal-wrapper .radix-modal-content .modal-action-btn{background-color:#999;border:none;color:#fff;cursor:pointer;font-family:inherit;font-size:16px;font-weight:700;line-height:23px;margin-bottom:20px;min-width:100px;padding:10px 15px}.ondemand-info-modal-wrapper .radix-modal-content .modal-action-btn:hover{background-color:#8c8c8c}.ondemand-info-modal-wrapper .radix-modal-content .modal-action-btn.primary{background-color:#76b900;font-weight:700}.ondemand-info-modal-wrapper .radix-modal-content .modal-action-btn.primary:hover{background-color:#66a000}.ondemand-info-modal-wrapper .radix-modal-content .fade-in{animation:fadeIn 1s ease}.ondemand-info-modal-wrapper .radix-modal-content img.profile-image{opacity:0}.ondemand-info-modal-wrapper .radix-modal-content img.profile-image.fade-in{opacity:1}.ondemand-info-modal-wrapper .video-player-widget{padding-top:25px}.ondemand-info-modal-wrapper .event-details-wrapper{padding-bottom:0}.ondemand-confirm-modal-wrapper .radix-modal-content{text-align:center}.ondemand-confirm-modal-wrapper .radix-modal-content:focus{outline:none}.ondemand-confirm-modal-wrapper .radix-modal-content .title{color:#76b900;font-family:inherit;font-size:32px;font-weight:400;line-height:40px}.ondemand-confirm-modal-wrapper .radix-modal-content .message{color:#1a1a1a;font-family:inherit;font-size:18px;font-weight:400;line-height:23px;padding:30px 0}.ondemand-confirm-modal-wrapper .radix-modal-content .actions{border-top:1px solid #ccc;padding-bottom:15px;padding-top:30px}.ondemand-confirm-modal-wrapper .radix-modal-content .actions .modal-action-btn{margin:0 15px}.small-confirm-modal .radix-modal-content{width:350px!important}.session-rating .radix-modal-content{text-align:center}.session-rating .radix-modal-content .radix-modal-body{padding:48px 24px}.session-rating .radix-modal-content .title{font-size:24px;margin-bottom:15px}.session-rating .radix-modal-content .message{font-size:18px}.session-rating .radix-modal-content .rating{display:flex;margin-top:30px;width:100%}.session-rating .radix-modal-content .rating button{background-color:#fff;border:1px solid #999;border-right:none;color:#1a1a1a;flex:1;font-size:16px;padding:7px 0;text-align:center}.session-rating .radix-modal-content .rating button:hover{color:#76b900;cursor:pointer}.session-rating .radix-modal-content .rating button.selected{background-color:#76b900;color:#1a1a1a;font-weight:700}.session-rating .radix-modal-content .rating button:first-child{border-bottom-left-radius:20px;border-top-left-radius:20px}.session-rating .radix-modal-content .rating button:last-child{border-bottom-right-radius:20px;border-right:1px solid #999;border-top-right-radius:20px}.session-rating .radix-modal-content .rating-label{display:flex;margin-bottom:30px}.session-rating .radix-modal-content .rating-label .rating-label-item{color:#1a1a1a;flex:1;font-size:12px;font-weight:400;padding-top:5px;text-align:center}.session-rating .radix-modal-content .modal-action-btn{color:#000;font-size:14px;margin-bottom:0;padding:5px 15px}.session-rating .radix-modal-content .modal-action-btn.disabled{opacity:.6}.session-rating .radix-modal-content .modal-action-btn.disabled:hover{background-color:#76b900;cursor:inherit}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body{color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;text-align:center}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .title{font-size:22px;font-weight:400;line-height:30px;margin-bottom:15px;margin-top:10px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-buttons{border-bottom:1px solid #ccc;font-size:12px;line-height:16px;padding:15px 0 30px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button{background-color:#0000;border:none;box-shadow:none;cursor:pointer;margin:0 15px;text-align:center}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame{border-radius:25px;color:#fff;height:36px;margin:0 auto 4px;padding:5px;width:36px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame.facebook{background-color:#1877f2}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame.linkedin{background-color:#007ab7}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame.twitter{background-color:#1d9bf0}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame.weibo{background-color:#d52a2a}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame.wechat{background-color:#2cc100}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button:focus{outline:none!important}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button:focus .facebook{background-color:#0d6ae4}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button:focus .linkedin{background-color:#00699e}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button:focus .twitter{background-color:#0f8ee4}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection{padding:30px 0 15px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .radix-slider,.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url,.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .subtitle{margin-bottom:30px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field{background-color:#f1f1f1;display:flex;height:36px;padding:0 10px;text-align:left}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field input{background:#0000;border:none;flex:1;font-size:14px;height:100%;width:100%}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field input:focus{outline:none!important}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field button{background:#0000;border:none;box-shadow:none;color:#76b900;cursor:pointer;font-family:inherit;font-size:14px;font-weight:700;height:100%;line-height:20px;padding-left:10px;padding-right:0}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field button:hover{color:#66a000}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field button:focus{color:#66a000;outline:none!important}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .time-fields{display:flex;font-size:14px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .time-fields .end-time{display:flex;flex:1;justify-content:flex-end}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .time-fields input{border:none;border-bottom:1px solid #999;font-size:14px;height:24px;margin-left:15px;width:60px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .time-fields input:focus{outline:none!important}.radix-popover-content{background-clip:padding-box;background-color:#fff;border-radius:2px;box-shadow:0 3px 6px -4px #0000001f,0 6px 16px 0 #00000014,0 9px 28px 8px #0000000d;padding:12px 16px;z-index:1030}.radix-popover-content:focus{outline:none}.radix-popover-content.ondemand-popover-wrapper{color:#666;font-family:inherit;font-size:16px;font-weight:400;line-height:18px;width:260px}.radix-popover-content.ondemand-popover-wrapper.share{width:160px}.radix-popover-content.ondemand-popover-wrapper.hidden{padding:0}.radix-popover-content.ondemand-popover-wrapper .title{margin-bottom:10px}.radix-popover-content.ondemand-popover-wrapper .instructions{padding:15px;text-align:center}.radix-popover-content.ondemand-popover-wrapper .list-container{margin-bottom:7.5px;max-height:220px;min-height:20px;overflow-y:auto}.radix-popover-content.ondemand-popover-wrapper .loading{color:#999;font-size:12px;height:20px}.radix-popover-content.ondemand-popover-wrapper .popover-btn{background:none;border:none;border-radius:0;box-shadow:none;display:inline;margin:0;padding:0;text-decoration:none}.radix-popover-content.ondemand-popover-wrapper .popover-btn:focus,.radix-popover-content.ondemand-popover-wrapper .popover-btn:hover{text-decoration:none}.radix-popover-content.ondemand-popover-wrapper .popover-btn{color:#666;color:#666!important;cursor:pointer;display:block!important;font-family:inherit;font-size:15px;font-weight:400;line-height:15px}.radix-popover-content.ondemand-popover-wrapper .popover-btn:hover{color:#76b900!important}.radix-popover-content.ondemand-popover-wrapper .popover-btn:hover .btn-container span{color:#76b900}.radix-popover-content.ondemand-popover-wrapper .popover-btn .btn-container{display:table-row}.radix-popover-content.ondemand-popover-wrapper .popover-btn .btn-container .svg-container{display:table-cell;vertical-align:middle}.radix-popover-content.ondemand-popover-wrapper .popover-btn .btn-container span{color:#1a1a1a;cursor:pointer;display:table-cell;line-height:24px;padding:8px;vertical-align:middle}.radix-popover-content.ondemand-popover-wrapper .popover-btn .btn-container span.add{padding-left:3px}.radix-popover-content.ondemand-popover-wrapper .popover-actions{border-top:1px solid #ccc;margin-top:10px;padding-bottom:5px;padding-top:15px;text-align:center}.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn:focus,.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn:hover{text-decoration:none}.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn{color:#666;color:#666!important;font-family:inherit;font-size:15px;font-weight:400;line-height:15px}.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn:hover{color:#76b900!important}.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn.primary{font-weight:700;margin-right:40px}.radix-popover-content.ondemand-popover-wrapper .new-list-input{border:none;height:26px;margin-bottom:5px;width:220px}.radix-popover-content.ondemand-popover-wrapper .new-list-input:focus{outline:none!important}.radix-popover-content.ondemand-popover-wrapper .list-checkbox{display:flex;padding-bottom:10px}.radix-popover-content.ondemand-popover-wrapper .list-checkbox:last-child{padding-bottom:5px}.radix-checkbox-wrapper{align-items:center;cursor:pointer;display:inline-flex;gap:10px;line-height:1}.radix-checkbox-root{-webkit-tap-highlight-color:rgba(0,0,0,0);all:unset;align-items:center;background-color:#fff;border:2px solid #999;border-radius:2px;box-sizing:border-box;cursor:pointer;display:inline-flex;flex-shrink:0;height:18px;justify-content:center;transition:background-color .3s,border-color .3s;width:18px}.radix-checkbox-root:active,.radix-checkbox-root:focus-visible{background:#fff;border-color:#999;box-shadow:none;outline:none}.radix-checkbox-root.radix-checkbox-checked,.radix-checkbox-root[data-state=checked]{background:#76b900;border-color:#76b900}.radix-checkbox-root.radix-checkbox-checked:active,.radix-checkbox-root[data-state=checked]:active{background:#76b900;border-color:#76b900;box-shadow:none}.radix-checkbox-indicator{align-items:center;color:#fff;display:flex;justify-content:center;line-height:0}.radix-checkbox-indicator:after{border:solid #fff;border-width:0 2px 2px 0;content:"";display:block;height:8px;margin-top:-2px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);width:4px}.radix-checkbox-label{user-select:none}.cleanslate .radix-checkbox-wrapper{align-items:center;cursor:pointer;display:inline-flex;gap:10px;line-height:1}.cleanslate .radix-checkbox-root{-webkit-tap-highlight-color:rgba(0,0,0,0);all:unset;align-items:center;background-color:#fff;border:2px solid #999;border-radius:2px;box-sizing:border-box;cursor:pointer;display:inline-flex;flex-shrink:0;height:18px;justify-content:center;transition:background-color .3s,border-color .3s;width:18px}.cleanslate .radix-checkbox-root:active,.cleanslate .radix-checkbox-root:focus-visible{background:#fff;border-color:#999;box-shadow:none;outline:none}.cleanslate .radix-checkbox-root.radix-checkbox-checked,.cleanslate .radix-checkbox-root[data-state=checked]{background:#76b900;border-color:#76b900}.cleanslate .radix-checkbox-root.radix-checkbox-checked:active,.cleanslate .radix-checkbox-root[data-state=checked]:active{background:#76b900;border-color:#76b900;box-shadow:none}.cleanslate .radix-checkbox-indicator{align-items:center;color:#fff;display:flex;justify-content:center;line-height:0}.cleanslate .radix-checkbox-indicator:after{border:solid #fff;border-width:0 2px 2px 0;content:"";display:block;height:8px;margin-top:-2px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);width:4px}.cleanslate .radix-checkbox-label{user-select:none}.cleanslate .radix-accordion{background:none;border:none}.cleanslate .radix-accordion-item{border-bottom:none;padding-bottom:15px}.cleanslate .radix-accordion-header{all:unset;align-items:center;border-bottom:1px solid #ccc;display:flex;margin:0}.cleanslate .radix-accordion-trigger{-webkit-tap-highlight-color:rgba(0,0,0,0);all:unset;align-items:center;box-sizing:border-box;color:#999;cursor:pointer;display:flex;flex:1;font-family:inherit;font-size:16px;font-weight:700;line-height:24px;padding-bottom:7.5px;padding-left:37.5px;position:relative;user-select:none}.cleanslate .radix-accordion-trigger:active{background:none}.cleanslate .radix-accordion-arrow{display:inline-flex;height:16px;left:8px;position:absolute;transition:transform .3s;width:16px}.cleanslate .radix-accordion-arrow:before{border-bottom:2px solid #999;border-right:2px solid #999;content:"";display:block;height:8px;margin:auto;transform:rotate(45deg);transition:transform .3s;width:8px}.cleanslate .radix-accordion-trigger[data-state=open] .radix-accordion-arrow:before{transform:rotate(-135deg)}.cleanslate .radix-accordion-extra .facets-checkbox-group-clear{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .radix-accordion-extra .facets-checkbox-group-clear:focus,.cleanslate .radix-accordion-extra .facets-checkbox-group-clear:hover{text-decoration:none}.cleanslate .radix-accordion-extra .facets-checkbox-group-clear{color:#76b900;font-family:inherit;font-size:12px;font-weight:400;line-height:15px}.cleanslate .radix-accordion-extra .facets-checkbox-group-clear:hover{text-decoration:underline}.cleanslate .radix-accordion-content{overflow:hidden}.cleanslate .radix-accordion-content[data-state=open]{animation:radix-accordion-slideDown .2s ease-out}.cleanslate .radix-accordion-content[data-state=closed]{animation:radix-accordion-slideUp .2s ease-out}.cleanslate .radix-accordion-content-box{padding:15px 5px 5px;position:relative}@keyframes radix-accordion-slideDown{0%{height:0}to{height:var(--radix-accordion-content-height)}}@keyframes radix-accordion-slideUp{0%{height:var(--radix-accordion-content-height)}to{height:0}}.cleanslate .radix-autocomplete-dropdown{background-color:#f7f7f7;border:none;border-radius:0;box-shadow:0 5px 5px #00000026;left:0;max-height:750px;overflow-y:auto;padding:0;position:absolute;width:100%;z-index:1050}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-label{color:#999;font-family:inherit;font-size:12px;font-weight:400;height:auto;line-height:15px;padding:15px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options{padding-bottom:5px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option{align-items:center;color:#999;cursor:pointer;display:flex;font-family:inherit;font-size:16px;font-weight:400;line-height:20px;padding:5px 15px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option.radix-autocomplete-option-active,.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option:hover{background-color:#999;color:#eee}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option.radix-autocomplete-option-active svg,.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option:hover svg{fill:#eee}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option:last-child{border-radius:0}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option span{cursor:pointer}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option span.search-suggestion-icon{flex:0 0 15px;padding-top:2px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option span.search-suggestion-icon svg{height:20px;width:20px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option span.search-suggestion-text{flex:1;padding-left:12px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option span.search-quicklink-text{flex:1;font-weight:bolder;padding-left:12px}@media screen and (min-width:640px){.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option{color:#999;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;padding:10px 15px}}.radix-slider{align-items:center;display:flex;height:20px;position:relative;touch-action:none;user-select:none;width:100%}.radix-slider[data-disabled]{opacity:.5;pointer-events:none}.radix-slider-track{background-color:#ccc;border-radius:2px;flex-grow:1;height:4px;position:relative}.radix-slider-range{background-color:#76b900;border-radius:2px;height:100%;position:absolute}.radix-slider-thumb{-webkit-tap-highlight-color:rgba(0,0,0,0);all:unset;background-color:#fff;border:2px solid #76b900;border-radius:50%;cursor:pointer;display:block;height:14px;width:14px}.radix-slider-thumb:hover{background-color:#76b900}.radix-slider-thumb:focus-visible{box-shadow:0 0 0 3px #76b9004d}.radix-slider-thumb:active{background:#fff}.cleanslate .radix-slider{align-items:center;display:flex;height:20px;position:relative;touch-action:none;user-select:none;width:100%}.cleanslate .radix-slider[data-disabled]{opacity:.5;pointer-events:none}.cleanslate .radix-slider-track{background-color:#ccc;border-radius:2px;flex-grow:1;height:4px;position:relative}.cleanslate .radix-slider-range{background-color:#76b900;border-radius:2px;height:100%;position:absolute}.cleanslate .radix-slider-thumb{-webkit-tap-highlight-color:rgba(0,0,0,0);all:unset;background-color:#fff;border:2px solid #76b900;border-radius:50%;cursor:pointer;display:block;height:14px;width:14px}.cleanslate .radix-slider-thumb:hover{background-color:#76b900}.cleanslate .radix-slider-thumb:focus-visible{box-shadow:0 0 0 3px #76b9004d}.cleanslate .radix-slider-thumb:active{background:#fff}.cleanslate{font-family:inherit}.cleanslate a{font-weight:700;text-transform:none}.cleanslate .h1,.cleanslate .h2,.cleanslate .h3,.cleanslate .h4,.cleanslate .h5,.cleanslate .h6,.cleanslate h1,.cleanslate h2,.cleanslate h3,.cleanslate h4,.cleanslate h5,.cleanslate h6{color:#000;font-weight:700;line-height:1.25em;text-transform:none}.cleanslate .h--large,.cleanslate .h1,.cleanslate h1{font-size:28px}.cleanslate .h--medium,.cleanslate .h2,.cleanslate h2{font-size:24px}.cleanslate .h--small,.cleanslate .h3,.cleanslate h3{font-size:20px}.cleanslate .h--smaller,.cleanslate .h4,.cleanslate h4{font-size:18px}.cleanslate .h--smallest,.cleanslate .h5,.cleanslate h5{font-size:16px}.cleanslate .p-large,.cleanslate .p-medium{font-size:15px}.cleanslate .p-small{font-size:11px}.cleanslate .anticon-down svg,.cleanslate .anticon-up svg{height:14px;padding-left:5px;width:16px}@media screen and (min-width:640px){.cleanslate .h--large,.cleanslate .h1,.cleanslate h1{font-size:36px}.cleanslate .h--medium,.cleanslate .h2,.cleanslate h2{font-size:28px}.cleanslate .h--small,.cleanslate .h3,.cleanslate h3{font-size:24px}.cleanslate .h--smaller,.cleanslate .h4,.cleanslate h4{font-size:20px}.cleanslate .h--smallest,.cleanslate .h5,.cleanslate h5{font-size:18px}.cleanslate .p-large{font-size:20px}}@media screen and (min-width:1024px){.cleanslate .h--large,.cleanslate .h1,.cleanslate h1{font-size:48px}.cleanslate .h--medium,.cleanslate .h2,.cleanslate h2{font-size:36px}.cleanslate .h--small,.cleanslate .h3,.cleanslate h3{font-size:28px}.cleanslate .h--smaller,.cleanslate .h4,.cleanslate h4{font-size:24px}.cleanslate .h--smallest,.cleanslate .h5,.cleanslate h5{font-size:20px}.cleanslate .p-large{font-size:22px}}.cleanslate .display-flex{display:flex}.cleanslate .brand-highlight{color:#000;font-weight:700;text-decoration:underline;text-decoration-color:#76b900;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate .brand-highlight:hover{text-decoration:underline;text-decoration-color:#000;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate button.icon-btn svg{cursor:pointer}.cleanslate button.icon-btn.slick-disabled{cursor:inherit}.cleanslate button.icon-btn.slick-disabled svg{cursor:inherit;opacity:.4}.cleanslate button.icon-btn:hover{color:#76b900!important}.cleanslate button.icon-btn:hover:disabled{color:#1a1a1a!important}.cleanslate .action-rate{color:#000;font-weight:700}.cleanslate .action-rate-icon{color:#666}.cleanslate .next-video-label{color:#1a1a11}.cleanslate .search-page-container{min-height:530px}.cleanslate .search-page-header.background{background:#eee 0 0 no-repeat padding-box;padding:15px}.cleanslate .search-page-header .search-form-container{background:#fff 0 0 no-repeat padding-box;border:2px solid #999}.cleanslate .search-page-header .search-form-container:focus-within{border-color:#76b900}@media screen and (min-width:640px){.cleanslate .search-page-header.background{padding:30px}.cleanslate .search-page-header .search-form-container{margin:0 auto}}.cleanslate .search-page-content{position:relative}@media screen and (min-width:1024px){.cleanslate .search-page-content{margin:0 auto;max-width:1290px}}.cleanslate .search-header{color:#1a1a1a;font-family:inherit;font-size:28px;font-weight:700;line-height:36px;margin-top:30px;padding:0 7.5px}@media screen and (min-width:640px){.cleanslate .search-header{font-size:36px;line-height:45px;margin:30px 0 15px}}.cleanslate .playlist-header{border-bottom:1px solid #ccc;color:#1a1a1a;font-family:inherit;font-size:32px;font-weight:400;line-height:32px;padding:0}.cleanslate .playlist-header .playlist-name{display:block;flex:1}.cleanslate .playlist-header .playlist-name h2{font-size:28px;line-height:35px}.cleanslate .playlist-header .playlist-info{display:flex}.cleanslate .playlist-header .playlist-info .playlist-summary{flex:1;font-size:22px;line-height:38px}.cleanslate .playlist-header .playlist-actions{display:flex;margin-top:15px;min-width:142px}.cleanslate .playlist-header .playlist-actions .search-result-action-btn{display:inline-flex;margin:auto 15px auto 0;padding:0}@media screen and (min-width:640px){.cleanslate .playlist-header .playlist-name{display:flex;flex:1}.cleanslate .playlist-header .playlist-name span{flex:1}.cleanslate .playlist-header .playlist-actions{margin-left:35px;margin-top:0}}.cleanslate .nod-drag-handle-container{display:flex}.cleanslate .nod-drag-handle-container .nod-drag-handle{padding-top:10px;width:32px}.cleanslate .nod-drag-handle-container .nod-drag-handle .drag-icons{color:#666;margin:auto 0}.cleanslate .nod-drag-handle-container .nod-drag-handle .drag-icons .search-result-action-btn{padding:0}.cleanslate .nod-drag-handle-container .nod-drag-handle svg{display:block}.cleanslate .nod-drag-handle-container .nod-drag-handle:hover{cursor:grab}.cleanslate .nod-drag-handle-container .nod-drag-content{flex:1}.cleanslate .nod-draggable{background-color:inherit;padding:15px 5px 15px 0;transition:background-color .2s ease}.cleanslate .nod-draggable.nod-draggable-dragging{background-color:#fff;box-shadow:0 3px 6px rgba(0,0,0,.161)}.cleanslate div.is-dnd-dragging{cursor:grabbing}.cleanslate div.is-dnd-dragging .nod-draggable{transition:transform .2s cubic-bezier(.2,0,0,1),opacity .2s cubic-bezier(.2,0,0,1)}.cleanslate .session-attribute-item{align-items:center;background-color:#eee;border-radius:50px;display:inline-flex;margin:0 10px 15px 0;padding:5px 10px;width:fit-content}@media screen and (min-width:1024px){.cleanslate .session-attribute-item{display:flex}}.cleanslate .session-attribute-item .region-select{background-color:#0000;border:none;box-shadow:none;cursor:pointer;font-family:inherit;font-size:inherit;outline:none}.cleanslate .session-attribute-item .region-select option{font-family:inherit;font-size:inherit}.cleanslate .session-attribute-item button{flex:1}.cleanslate .to-search-page{background:none!important;border:none;color:#000;cursor:pointer;font-size:15px;margin-left:5px;padding:0!important;text-align:left;text-decoration:none}.cleanslate .anticon-right svg{fill:#76b900;font-size:small}.cleanslate .select-box{background-color:#fff;border:1px solid #999;color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;height:36px;line-height:24px;padding-left:15px;padding-right:15px}.cleanslate .select-box option:hover{box-shadow:inset 0 0 10px 100px #76b900}.cleanslate .search-data-container{flex:1;padding-top:20px}.cleanslate .search-data-container.first-search{padding-left:0}.cleanslate .search-facets-container,.cleanslate .search-results-container,.cleanslate .search-summary-container{padding:15px 7.5px 0}@media screen and (min-width:640px){.cleanslate .search-facets-container,.cleanslate .search-results-container,.cleanslate .search-summary-container{margin:0 auto}}.cleanslate .search-results-container{padding-top:0}.cleanslate .search-pager-container{padding:15px 0}@media screen and (min-width:640px){.cleanslate .search-pager-container{margin:0 auto;max-width:1290px;padding:30px 0 15px}}@media screen and (min-width:1024px){.cleanslate .search-pager-container,.cleanslate .search-results-container,.cleanslate .search-summary-container{margin:0}.cleanslate .search-facets-container{border-right:1px solid #0000;margin:30px 30px 0 0;padding-right:40px;padding-top:0;right:0;top:0;width:300px}.cleanslate .search-facets-container>div:first-child{margin-top:-16px}.cleanslate .search-facets-container.border{border-right:1px solid #ccc}}.cleanslate .banner-list-container{margin-top:30px;overflow:hidden}.cleanslate .banner-list-container #mobile-generated-banner-list{display:flex;flex-wrap:nowrap;overflow-x:auto}.cleanslate .banner-list-container #mobile-generated-banner-list a{flex:0 0 auto;margin:0 15px 0 0}.cleanslate .banner-list-container #mobile-generated-banner-list.single a{margin:0 auto}.cleanslate #search-promo-container{overflow:auto}.cleanslate .promoted-item-image{background-origin:content-box;background-repeat:no-repeat;background-size:100%;height:300px;margin:0 auto 15px;width:300px}@media screen and (min-width:1024px){.cleanslate .promoted-item-image{height:300px;margin-bottom:15px;padding:0;width:300px}}.cleanslate .promoted-item-facet-image{background-origin:content-box;background-repeat:no-repeat;background-size:100%;height:auto;margin:0 auto 15px;width:300px}@media screen and (min-width:1024px){.cleanslate .promoted-item-facet-image{height:auto;padding:0;width:300px}}.cleanslate .search-input-wrapper{position:relative}.cleanslate .search-input-wrapper *,.cleanslate .search-input-wrapper :after{-webkit-box-sizing:inherit;-moz-box-sizing:inherit;box-sizing:inherit}.cleanslate .search-input-wrapper ul li{margin:0;padding-left:0}.cleanslate .search-input-wrapper .search-input-block{align-items:normal;background:#fff 0 0 no-repeat padding-box;display:flex;height:18px;padding:15px}.cleanslate .search-input-wrapper .search-input-block .search-input-right{flex:1}.cleanslate .search-input-wrapper .search-input-block .search-input-right input{border:none;color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;height:100%;letter-spacing:0;line-height:24px;width:100%}.cleanslate .search-input-wrapper .search-input-block .search-input-right input::placeholder{color:#999}.cleanslate .search-input-wrapper .search-input-block .search-input-right input::-webkit-input-placeholder{color:#999}.cleanslate .search-input-wrapper .search-input-block .search-input-right input:-ms-input-placeholder{color:#999}.cleanslate .search-input-wrapper .search-input-block .search-input-left{flex:0 0 30px;text-align:left}.cleanslate .search-input-wrapper .search-input-block .search-input-left button{background:none;border:none;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;color:#999;height:22px;margin:0;padding:0;width:22px}.cleanslate .search-input-wrapper .search-input-block .search-input-left button .search-icon{cursor:pointer}.cleanslate .search-input-wrapper .search-input-block .search-input-left button:hover{filter:brightness(.5)}.cleanslate .search-input-wrapper .search-input-block .search-input-left button svg{height:22px;width:22px}.cleanslate .search-container{display:flex;margin:0 auto 15px;max-width:100%}.cleanslate .search-container .search-form-container{flex:1;margin:7.5px}.cleanslate .search-container .search-filter{margin:auto 0;padding-right:10px;text-align:right}.cleanslate .search-container .search-filter button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .search-container .search-filter button:focus,.cleanslate .search-container .search-filter button:hover{text-decoration:none}.cleanslate .search-container .search-filter button{color:#1a1a1a;font-size:15px}.cleanslate .search-container .search-filter button svg{margin-bottom:-6px}.cleanslate .search-container .search-filter button span{cursor:pointer;display:none;margin-bottom:5px;padding-left:10px}@media screen and (min-width:481px){.cleanslate .search-container .search-filter{flex:0 0 90px}.cleanslate .search-container .search-filter button span{display:inline-block}}.cleanslate .nvidia-on-demand .search-page-header{background:#0000;margin:0 auto;max-width:1290px;padding:0}.cleanslate .nvidia-on-demand .search-container{margin:0;max-width:100%}.cleanslate .nvidia-on-demand .search-form-container{border:2px solid #999;margin:7.5px}.cleanslate .nvidia-on-demand .search-form-container:focus-within{border-color:#76b900}@media screen and (min-width:640px){.cleanslate .nvidia-on-demand .search-form-container{max-width:600px}}.cleanslate .nvidia-on-demand .search-pager-container,.cleanslate .nvidia-on-demand .search-results-container,.cleanslate .nvidia-on-demand .search-summary-container{margin:0 auto;max-width:1290px}@media screen and (min-width:1024px){.cleanslate .nvidia-on-demand .search-results-container,.cleanslate .nvidia-on-demand .search-summary-container{margin:0;width:calc(100% - 15px)}}@media screen and (min-width:640px){.cleanslate .nvidia-on-demand .my-playlists{display:flex}.cleanslate .nvidia-on-demand .my-playlists .list-container{flex:1}.cleanslate .nvidia-on-demand .my-playlists .promotion{text-align:right;width:310px}}@media screen and (min-width:1024px){.cleanslate .nvidia-on-demand .my-playlists .promotion{width:330px}.cleanslate .nvidia-on-demand .search-pager-container{margin:0;width:100%}}.cleanslate .nvidia-on-demand .ondemand-facets-wrapper .facet-label span{font-weight:700}.cleanslate .ondemand-facets-wrapper{background-color:#fff;height:0;overflow:hidden;position:relative;-webkit-transition:height .2s;-moz-transition:height .2s;-ie-transition:height .2s;-o-transition:height .2s;transition:height .2s;width:100%}.cleanslate .ondemand-facets-wrapper .facets-loading{background-color:#00000080;border-radius:4px;color:#fff;font-family:inherit;font-size:16px;font-weight:400;height:100%;left:50%;line-height:25px;position:absolute;top:50%;transform:translate(-50%,-50%);width:100%;z-index:100}.cleanslate .ondemand-facets-wrapper .facets-loading .swg-spinner-wrapper{height:100%;padding:0}.cleanslate .ondemand-facets-wrapper .facets-loading .swg-spinner-wrapper .swg-spinner{border-color:#76b900 #76b900 #76b900 #0000}.cleanslate .ondemand-facets-wrapper .facet-groups{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:400;line-height:25px;min-height:20px;padding:15px}.cleanslate .ondemand-facets-wrapper .facet-groups .parent-child-facet-group{display:block}.cleanslate .ondemand-facets-wrapper .facet-groups .parent-child-facet-group .parent-container{height:100%}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group{display:inline-block;margin:15px;max-width:375px;vertical-align:top}@media screen and (min-width:640px){.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group.max-width{width:375px}}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group.partitioned{max-width:550px}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .header,.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .main-header{border-bottom:1px solid #ccc;font-weight:700;margin-bottom:10px;padding-bottom:7.5px}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets{display:block}@media screen and (min-width:640px){.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets{display:flex}}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets .facet-group:first-child{margin:0 30px 15px 0}@media screen and (min-width:640px){.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets .facet-group:first-child{margin:0 15px 0 0}}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets .facet-group:last-child{margin:0}@media screen and (min-width:640px){.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets .facet-group:last-child{margin:0 0 0 15px}}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets .header{border-bottom:none;margin-bottom:2px}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .facets-checkbox-item{color:#1a1a1a;display:flex;font-family:inherit;font-size:15px;font-weight:400;line-height:25px;padding-bottom:7.5px}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .facets-checkbox-item.expanded-item{display:block;position:relative}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .facets-checkbox-item.expanded-item.hidden-item{display:none;position:absolute}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .facets-checkbox-item label.facet-label{flex:1;padding-left:10px;padding-top:2px}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .search-facets-subitems{padding-left:24px}.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group{display:flex;flex-direction:column;max-width:375px}@media(max-width:639px){.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group{height:270px}}.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group.hidden{visibility:hidden}@media(max-width:639px){.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group.hidden{display:none}}.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group .header{border-bottom:none;margin-bottom:0}.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group .child-facet-container{border:1px solid #ccc;flex:1;overflow-y:auto;padding:10px 15px}@media(min-width:850px){.cleanslate .ondemand-facets-wrapper .facet-groups .parent-child-facet-group{display:inline-flex}.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group{display:inline-flex;width:375px}}.cleanslate .ondemand-facets-wrapper .facet-actions{background-color:#333;color:#666;font-family:inherit;font-size:16px;font-weight:400;height:44px;line-height:18px;text-align:center}.cleanslate .ondemand-facets-wrapper .facet-actions button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .ondemand-facets-wrapper .facet-actions button:focus,.cleanslate .ondemand-facets-wrapper .facet-actions button:hover{text-decoration:none}.cleanslate .ondemand-facets-wrapper .facet-actions button{color:#666;margin:0 25px;padding:13px}.cleanslate .ondemand-facets-wrapper .facet-actions button:hover{cursor:pointer}.cleanslate .ondemand-facets-wrapper .facet-actions button.facet-actions-done{color:#76b900;font-weight:700}.cleanslate .ondemand-facets-wrapper .facet-actions button.facet-actions-reset{color:#f7f7f7}.cleanslate .ondemand-facets-wrapper.dark-theme{background-color:#eee}.cleanslate .ondemand-facets-wrapper.dark-theme .facet-groups{padding-top:0;text-align:center}.cleanslate .ondemand-facets-wrapper.dark-theme .facet-groups .facet-group{min-width:300px;text-align:left}.cleanslate .ondemand-facets-wrapper.dark-theme .facet-actions{background-color:#ddd}.cleanslate .search-summary-wrapper{border-bottom:1px solid #ccc}.cleanslate .search-summary-wrapper,.cleanslate .search-summary-wrapper .summary-spelling{align-items:left;display:flex;flex-direction:column}.cleanslate .search-summary-wrapper .summary-spelling .spelling-suggestion{color:#1a1a1a;flex:1;font-family:inherit;font-size:16px;font-weight:700;letter-spacing:0;line-height:1.25em}.cleanslate .search-summary-wrapper .summary-spelling .spelling-dontsuggest{color:#1a1a1a;flex:1;font-family:inherit;font-size:14px;font-weight:400;letter-spacing:0;line-height:1.25em}.cleanslate .search-summary-wrapper .summary-spelling .spelling-dontsuggest button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .search-summary-wrapper .summary-spelling .spelling-dontsuggest button:focus,.cleanslate .search-summary-wrapper .summary-spelling .spelling-dontsuggest button:hover{text-decoration:none}.cleanslate .search-summary-wrapper .summary-spelling .spelling-dontsuggest button{color:#76b900;font-family:inherit;font-size:inherit;text-decoration:underline}.cleanslate .search-summary-wrapper .search-summary-info{align-items:center;border-bottom:1px solid #ccc;display:flex}.cleanslate .search-summary-wrapper .search-summary-info .summary-total{color:#1a1a1a;flex:1;font-family:inherit;font-size:12px;font-weight:700;letter-spacing:0;line-height:1.25em;overflow-x:hidden;text-overflow:ellipsis;white-space:nowrap}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting{align-items:center;display:flex;justify-content:flex-end;margin:0 0 3px}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li{list-style:none;margin:0;padding:0 1px}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button{background:none;border:none;border-radius:0;box-shadow:none;display:inline;margin:0;padding:0}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button:focus,.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button:hover{text-decoration:none}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button{align-items:center;color:#999;cursor:pointer;display:flex;font-family:inherit;font-size:12px;font-weight:400;height:24px;line-height:24px;padding:5px 7.5px;text-decoration:none}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button svg{fill:#999;cursor:pointer;width:24px}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button.order-desc svg{transform:rotate(0deg)}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button.order-asc svg{-webkit-transform:rotate(180deg) scaleX(-1);-moz-transform:rotate(180deg) scaleX(-1);-o-transform:rotate(180deg) scaleX(-1);transform:rotate(180deg) scaleX(-1)}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button.active,.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button:hover{border-bottom:3px solid #76b900;margin-bottom:-3px}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button:disabled{cursor:default}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button span{margin-left:10px}.cleanslate .search-summary-wrapper .search-summary-info.on-demand .summary-total{align-items:center;display:flex;font-weight:400}.cleanslate .search-summary-wrapper .search-summary-info.on-demand ul.summary-sorting>li button{color:#1a1a1a}.cleanslate .search-summary-wrapper .search-summary-info.on-demand ul.summary-sorting>li button span{color:#666}@media screen and (min-width:640px){.cleanslate .search-summary-wrapper .search-summary-info .summary-total{font-size:16px}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button{font-size:16px;padding:10px 7.5px}.cleanslate .search-summary-wrapper .search-summary-info.on-demand .summary-total,.cleanslate .search-summary-wrapper .search-summary-info.on-demand ul.summary-sorting>li button{font-size:22px}}.cleanslate ul.summary-layout-select{align-items:center;display:flex;flex:0 0 70px;justify-content:flex-end;margin:0 0 3px}.cleanslate ul.summary-layout-select>li{list-style:none;margin:0;padding:0 1px}.cleanslate ul.summary-layout-select>li button{background:none;border:none;border-radius:0;box-shadow:none;display:inline;margin:0;padding:0}.cleanslate ul.summary-layout-select>li button:focus,.cleanslate ul.summary-layout-select>li button:hover{text-decoration:none}.cleanslate ul.summary-layout-select>li button{color:#999;cursor:pointer;display:block;font-family:inherit;font-size:12px;font-weight:400;height:24px;line-height:24px;padding:5px 7.5px;text-decoration:none}.cleanslate ul.summary-layout-select>li button svg{cursor:pointer}.cleanslate ul.summary-layout-select>li button.active,.cleanslate ul.summary-layout-select>li button:hover{color:#76b900}.cleanslate ul.summary-layout-select>li button:disabled,.cleanslate ul.summary-layout-select>li button:disabled svg{cursor:default}.cleanslate .search-tips{background-color:#f7f7f7;color:#1a1a1a;margin:30px 0;padding:30px}.cleanslate .search-tips .search-tips-text{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:700;line-height:25px}.cleanslate .search-tips ul{list-style:none;margin:0}.cleanslate .search-tips ul li{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:400;line-height:25px;padding-left:15px;position:relative}.cleanslate .search-tips ul li:before{color:#76b900;content:">";height:20px;left:0;position:absolute;top:0;width:20px}.cleanslate .search-no-results-popular{border-bottom:1px solid #999}.cleanslate .search-no-results-headline{color:#000;font-family:inherit;font-size:20px;font-weight:400;line-height:25px}.cleanslate .search-no-results-headline .bold{color:#000;font-family:inherit;font-size:20px;font-weight:700;line-height:25px}.cleanslate .grid-layout-wrapper{display:block;padding-top:15px}.cleanslate .grid-layout-wrapper .search-results-item.no-results{color:#76b900;font-family:inherit;font-size:18px;font-weight:400;line-height:25px;text-decoration:none}@media screen and (min-width:640px){.cleanslate .grid-layout-wrapper .search-results-item.no-results{font-size:24px;line-height:31px}}.cleanslate .grid-layout-wrapper .grid-cell{display:inline-flex;width:33%}.cleanslate .grid-layout-wrapper .grid-cell .grid-cell-contents{padding:7.5px;width:100%}@media screen and (min-width:1024px){.cleanslate .grid-layout-wrapper .grid-cell .grid-cell-contents{padding:15px}}@media(max-width:1023px){.cleanslate .grid-layout-wrapper .grid-cell,.cleanslate .grid-layout-wrapper .grid-cell.reduced{width:50%}}@media(max-width:666px){.cleanslate .grid-layout-wrapper .grid-cell{width:100%}}.cleanslate .grid-layout-wrapper.reduced .grid-cell{width:33%}@media(max-width:1023px){.cleanslate .grid-layout-wrapper.reduced .grid-cell{width:50%}}@media(max-width:414px){.cleanslate .grid-layout-wrapper.reduced .grid-cell{width:100%}}.cleanslate .fade-in{animation:fadeIn 1s ease;-webkit-animation:fadeIn 1s ease;-moz-animation:fadeIn 1s ease}@keyframes fadeIn{0%{opacity:0}to{opacity:1}}@-moz-keyframes fadeIn{0%{opacity:0}to{opacity:1}}@-webkit-keyframes fadeIn{0%{opacity:0}to{opacity:1}}.cleanslate .item-image{background-color:#ccc;height:0;padding-bottom:56.25%;position:relative;width:100%}.cleanslate .item-image .overlay{background-color:#000;bottom:0;left:0;opacity:.2;position:absolute;right:0;top:0;z-index:100}.cleanslate .item-image .private{bottom:7px;position:absolute;right:10px;z-index:999}.cleanslate .item-image .private svg{color:#fff}.cleanslate .item-image img.thumbnail{height:100%;left:0;opacity:0;position:absolute;transition:opacity 1s ease;width:100%}.cleanslate .item-image img.thumbnail.in{opacity:1}.cleanslate .item-image .video-duration-container{background-color:#333;color:#f1f1f1;font-family:inherit;font-size:11px;font-weight:400;line-height:11px;padding:5px;position:absolute;right:5px;text-decoration:none;top:5px;z-index:100}.cleanslate img.ondemand-ad{opacity:0}.cleanslate img.ondemand-ad.fade-in{opacity:1}.cleanslate .img-placeholder{height:0;padding-bottom:56.25%;position:relative;width:100%}.cleanslate .img-placeholder .img-placeholder-inner{height:100%;left:0;opacity:0;position:absolute;width:100%}.cleanslate .img-placeholder .img-placeholder-inner.fade-in{opacity:1}.cleanslate .search-results-wrapper{padding-top:30px}@media screen and (min-width:640px){.cleanslate .search-results-wrapper.my-playlists{flex:1}}.cleanslate .search-results-wrapper .related-sessions-container{padding-bottom:50px}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .related-sessions-container{padding-bottom:75px}}.cleanslate .search-results-wrapper .search-results-event-item,.cleanslate .search-results-wrapper .search-results-item{letter-spacing:0;overflow-wrap:break-word;padding-bottom:50px}.cleanslate .search-results-wrapper .search-results-event-item>div,.cleanslate .search-results-wrapper .search-results-item>div{line-height:1.25em}.cleanslate .search-results-wrapper .search-results-event-item .item-title a,.cleanslate .search-results-wrapper .search-results-event-item.no-results,.cleanslate .search-results-wrapper .search-results-item .item-title a,.cleanslate .search-results-wrapper .search-results-item.no-results{color:#1a1a1a;font-size:18px;line-height:26px;text-decoration:none}.cleanslate .search-results-wrapper .search-results-event-item .item-title,.cleanslate .search-results-wrapper .search-results-event-item.no-results,.cleanslate .search-results-wrapper .search-results-item .item-title,.cleanslate .search-results-wrapper .search-results-item.no-results{padding-bottom:5px}.cleanslate .search-results-wrapper .search-results-event-item .item-title a,.cleanslate .search-results-wrapper .search-results-event-item.no-results a,.cleanslate .search-results-wrapper .search-results-item .item-title a,.cleanslate .search-results-wrapper .search-results-item.no-results a{color:#1a1a1a;font-size:16px;line-height:24px;text-decoration:none}.cleanslate .search-results-wrapper .search-results-event-item .item-new,.cleanslate .search-results-wrapper .search-results-item .item-new{color:red;font-weight:700}.cleanslate .search-results-wrapper .search-results-event-item .item-summary,.cleanslate .search-results-wrapper .search-results-item .item-summary{color:#1a1a1a;font-size:16px;padding-bottom:5px}.cleanslate .search-results-wrapper .search-results-event-item .item-footer,.cleanslate .search-results-wrapper .search-results-item .item-footer{color:#999;font-size:12px;overflow-x:hidden;padding-bottom:0;text-overflow:ellipsis}.cleanslate .search-results-wrapper .search-results-event-item .item-footer .item-footer-inner,.cleanslate .search-results-wrapper .search-results-event-item .item-footer .item-footer-inner *,.cleanslate .search-results-wrapper .search-results-item .item-footer .item-footer-inner,.cleanslate .search-results-wrapper .search-results-item .item-footer .item-footer-inner *{white-space:nowrap}.cleanslate .search-results-wrapper .search-results-event-item .item-footer .item-footer-inner .item-date,.cleanslate .search-results-wrapper .search-results-item .item-footer .item-footer-inner .item-date{font-weight:700}.cleanslate .search-results-wrapper .search-results-event-item .item-footer .item-footer-inner .item-link a,.cleanslate .search-results-wrapper .search-results-item .item-footer .item-footer-inner .item-link a{color:#999;text-decoration:none}.cleanslate .search-results-wrapper .search-results-item:last-child{padding-bottom:30px}.cleanslate .search-results-wrapper .nod-drag-content .search-results-event-item{padding-bottom:0}.cleanslate .search-results-wrapper .search-results-event-item{display:flex}.cleanslate .search-results-wrapper .promoted-item{align-content:center;align-items:flex-start;display:flex;flex-direction:row}.cleanslate .search-results-wrapper .promoted-item:not(:last-child){margin-bottom:30px}.cleanslate .search-results-wrapper .promoted-item .recommended{border:2px solid #ccc;color:#1a1a1a;display:inline-block;font-size:16px;line-height:24px;margin-bottom:8px;padding:0 5px}.cleanslate .search-results-wrapper .promoted-item a.call-to-action{color:#76b900;text-decoration:none}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .promoted-item .event-item-image{min-width:26%;width:26%}}.cleanslate .search-results-wrapper .promoted-item .promoted-item-image{background-origin:content-box;background-repeat:no-repeat;background-size:100%;height:0;margin-bottom:15px;padding-bottom:56.25%;width:100%}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .promoted-item .promoted-item-image{height:176px;margin-bottom:0;margin-right:15px;padding-bottom:0;width:176px}}.cleanslate .search-results-wrapper .promoted-item.small-view{display:block}.cleanslate .search-results-wrapper .promoted-item.small-view .event-item-image{display:block;margin-bottom:15px;max-width:310px;width:100%}.cleanslate .search-results-wrapper .event-item-image{display:inline-block;min-width:50%;padding:0 15px 0 0;width:50%}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .event-item-image{height:auto;min-width:30%;padding:0 30px 0 0;width:30%}.cleanslate .search-results-wrapper.reduced .event-item-image{padding:0 15px 0 0}}@media screen and (min-width:1024px){.cleanslate .search-results-wrapper.reduced .event-item-image{padding:0 30px 0 0}}.cleanslate .search-results-wrapper .event-item-info{display:flex;flex:1}.cleanslate .search-results-wrapper .event-item-info .event-item-text{flex:1}.cleanslate .search-results-wrapper .event-item-info .event-item-text .item-summary{display:none}.cleanslate .search-results-wrapper .event-item-info .event-item-text .item-summary.playlists{display:block}.cleanslate .search-results-wrapper .event-item-info .event-item-text .item-date{color:#999;font-size:15px;font-style:italic;line-height:25px}.cleanslate .search-results-wrapper .event-item-info .event-item-text .authors{font-size:15px;line-height:25px;margin-bottom:10px}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags{display:flex;margin-bottom:15px}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type{background-color:#fff;border:2px solid #999;border-radius:18px;color:#1a1a1a;font-family:inherit;font-size:12px;font-weight:500;line-height:12px;margin-right:10px;overflow:hidden;padding:4px 8px;text-overflow:ellipsis;white-space:nowrap}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.talk{background-color:#ef9100;border-color:#ef9100}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.tutorial{background-color:#d73d00;border-color:#d73d00;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.panel{background-color:#ef9100;border-color:#ef9100}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.demo{background-color:#cd8ef0;border-color:#cd8ef0}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.inception-startup-showcase,.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.startup-showcase{background-color:#0074df;border-color:#0074df;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.special-event{background-color:#961515;border-color:#961515;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.poster,.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.posters{background-color:#4d1368;border-color:#4d1368;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.dli-training,.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.training-lab{background-color:#1dbba4;border-color:#1dbba4}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.episode{background-color:#bff230;border-color:#bff230}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.keynote{background-color:#76b900;border-color:#76b900}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.expo-theater{background-color:#741d9d;border-color:#741d9d;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.fireside-chat{background-color:#c21e1e;border-color:#c21e1e;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.training{background-color:#f9c500;border-color:#f9c500}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.sponsored-talk{background-color:#0046a4;border-color:#0046a4;color:#fff}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .event-item-info .event-item-text .item-summary{display:block}}.cleanslate .search-results-wrapper .event-item-info .event-item-actions,.cleanslate .search-results-wrapper .event-item-info .event-item-share{margin-left:5px}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .event-item-info .event-item-actions,.cleanslate .search-results-wrapper .event-item-info .event-item-share{margin-left:25px}}.cleanslate .search-results-wrapper .search-result-action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .search-results-wrapper .search-result-action-btn:focus,.cleanslate .search-results-wrapper .search-result-action-btn:hover{text-decoration:none}.cleanslate .search-results-wrapper .search-result-action-btn{color:#666;display:block;font-size:14pt;margin-left:auto;padding:5px 0 5px 5px}.cleanslate .search-results-wrapper .search-result-action-btn svg{cursor:pointer}.cleanslate .search-results-wrapper .search-result-action-btn:hover{color:#76b900}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .search-results-event-item,.cleanslate .search-results-wrapper .search-results-item{padding-bottom:50px}.cleanslate .search-results-wrapper .search-results-event-item .item-title a,.cleanslate .search-results-wrapper .search-results-event-item.no-results,.cleanslate .search-results-wrapper .search-results-item .item-title a,.cleanslate .search-results-wrapper .search-results-item.no-results{font-size:24px;line-height:30px}.cleanslate .search-results-wrapper .search-results-event-item .item-summary,.cleanslate .search-results-wrapper .search-results-item .item-summary{font-size:15px;line-height:22px}.cleanslate .search-results-wrapper .search-results-event-item .item-footer,.cleanslate .search-results-wrapper .search-results-item .item-footer{font-size:12px;padding-bottom:0}.cleanslate .search-results-wrapper.reduced .search-results-event-item .item-title a{font-size:16px;line-height:24px}}@media screen and (min-width:1024px){.cleanslate .search-results-wrapper.reduced .search-results-event-item .item-title a{font-size:24px;line-height:30px}}.cleanslate .search-facets-wrapper .radix-accordion-content-box .facets-checkbox-item{color:#1a1a1a;display:flex;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;padding-bottom:10px}.cleanslate .search-facets-wrapper .radix-accordion-content-box .facets-checkbox-item.expanded-item{opacity:1;position:relative;visibility:visible}.cleanslate .search-facets-wrapper .radix-accordion-content-box .facets-checkbox-item.expanded-item.hidden-item{opacity:0;position:absolute;visibility:hidden}.cleanslate .search-facets-wrapper .radix-accordion-content-box .facets-checkbox-item label.facet-label{flex:1;padding-left:5px}.cleanslate .search-facets-wrapper .radix-accordion-content-box .search-facets-subitems{padding-left:23px}.cleanslate .search-facets-show-more-wrapper{padding-bottom:5px}.cleanslate .search-facets-show-more-wrapper .search-facets-show-more-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .search-facets-show-more-wrapper .search-facets-show-more-btn:focus,.cleanslate .search-facets-show-more-wrapper .search-facets-show-more-btn:hover{text-decoration:none}.cleanslate .search-facets-show-more-wrapper .search-facets-show-more-btn{align-items:center;color:#000;display:inline-flex;font-family:inherit;font-size:16px;font-weight:700;gap:8px;line-height:24px;padding-left:25.5px}.cleanslate .search-facets-show-more-wrapper .facet-show-more-arrow{border-bottom:2px solid #000;border-right:2px solid #000;display:inline-block;height:8px;width:8px}.cleanslate .search-facets-show-more-wrapper .facet-show-more-arrow.down{margin-bottom:6px;transform:rotate(45deg)}.cleanslate .search-facets-show-more-wrapper .facet-show-more-arrow.up{margin-top:2px;transform:rotate(-135deg)}.cleanslate .slick-slider{-webkit-touch-callout:none;-webkit-tap-highlight-color:rgba(0,0,0,0);box-sizing:border-box;display:block;position:relative;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-khtml-user-select:none}.cleanslate .slick-list{display:block;margin:0;overflow:hidden;padding:0;position:relative}.cleanslate .slick-list:focus{outline:none}.cleanslate .slick-list.dragging{cursor:pointer;cursor:hand}.cleanslate .slick-slider .slick-list,.cleanslate .slick-slider .slick-track{-webkit-transform:translateZ(0);-moz-transform:translateZ(0);-ms-transform:translateZ(0);-o-transform:translateZ(0);transform:translateZ(0)}.cleanslate .slick-track{display:block;left:0;margin-left:auto;margin-right:auto;position:relative;top:0}.cleanslate .slick-track:after,.cleanslate .slick-track:before{content:"";display:table}.cleanslate .slick-track:after{clear:both}.cleanslate .slick-loading .slick-track{visibility:hidden}.cleanslate .slick-slide{display:none;float:left;height:100%;min-height:1px}.cleanslate [dir=rtl] .slick-slide{float:right}.cleanslate .slick-slide img{display:block}.cleanslate .slick-slide.slick-loading img{display:none}.cleanslate .slick-slide.dragging img{pointer-events:none}.cleanslate .slick-initialized .slick-slide{display:block}.cleanslate .slick-loading .slick-slide{visibility:hidden}.cleanslate .slick-vertical .slick-slide{border:1px solid #0000;display:block;height:auto}.cleanslate .slick-arrow.slick-hidden{display:none}.cleanslate .slick-next,.cleanslate .slick-prev{background:#0000;border:none;color:#0000;cursor:pointer;display:block;font-size:0;height:20px;line-height:0;outline:none;padding:0;position:absolute;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);width:20px}.cleanslate .slick-next:focus,.cleanslate .slick-next:hover,.cleanslate .slick-prev:focus,.cleanslate .slick-prev:hover{background:#0000;color:#0000;outline:none}.cleanslate .slick-next:focus:before,.cleanslate .slick-next:hover:before,.cleanslate .slick-prev:focus:before,.cleanslate .slick-prev:hover:before{opacity:1}.cleanslate .slick-next.slick-disabled,.cleanslate .slick-prev.slick-disabled{opacity:.25}.cleanslate .slick-next:before,.cleanslate .slick-prev:before{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;color:#fff;font-family:slick;font-size:20px;line-height:1;opacity:.75}.cleanslate .slick-prev{left:-30px}.cleanslate [dir=rtl] .slick-prev{left:auto;right:-30px}.cleanslate .slick-prev:before,.cleanslate [dir=rtl] .slick-prev:before{content:none!important}.cleanslate .slick-next{right:-30px}.cleanslate [dir=rtl] .slick-next{left:-30px;right:auto}.cleanslate .slick-next:before,.cleanslate [dir=rtl] .slick-next:before{content:none!important}.cleanslate.small .slick-prev{left:-20px}.cleanslate.small .slick-next,.cleanslate.small [dir=rtl] .slick-prev{right:-20px}.cleanslate.small [dir=rtl] .slick-next{left:-20px}.cleanslate .featured-videos-container{border-bottom:1px solid #d8d8d8;border-top:1px solid #d8d8d8;padding:30px 0}@media screen and (min-width:640px){.cleanslate .featured-videos-container{margin:-15px 0 -30px}}.cleanslate .gallery-wrapper .next button,.cleanslate .gallery-wrapper .prev button{align-items:center;background:none;background-color:#76b900;border:none;border-radius:0;box-shadow:none;color:#1a1a1a;display:flex;height:35px;justify-content:center;padding:0;width:30px}.cleanslate .gallery-wrapper .next button.slick-disabled:hover,.cleanslate .gallery-wrapper .prev button.slick-disabled:hover{background-color:#76b900!important;cursor:inherit}.cleanslate .gallery-wrapper .next button:hover,.cleanslate .gallery-wrapper .prev button:hover{background-color:#66a000}.cleanslate .gallery-wrapper .next button svg:hover,.cleanslate .gallery-wrapper .prev button svg:hover{cursor:pointer}.cleanslate .gallery-wrapper .next button.slick-disabled svg:hover,.cleanslate .gallery-wrapper .prev button.slick-disabled svg:hover{cursor:inherit}.cleanslate .gallery-wrapper .next button{margin-right:0}.cleanslate .gallery-wrapper .contents{color:#1a1a1a;flex:1;flex-direction:column;font-family:inherit;font-size:16px;font-weight:400;line-height:22px}.cleanslate .gallery-wrapper .contents .item-col{box-sizing:border-box;-webkit-box-sizing:border-box;padding-bottom:8px;padding-left:7.5px;padding-right:7.5px}@media screen and (min-width:1290px){.cleanslate .gallery-wrapper .contents .item-col{padding-left:15px;padding-right:15px}}.cleanslate .gallery-wrapper .contents .see-all{text-align:center}.cleanslate .gallery-wrapper .contents .see-all a{border-bottom:2px solid #76b900;color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:700;line-height:20px;text-decoration:none}.cleanslate .gallery-wrapper .contents .header{align-items:end;display:flex;justify-content:space-between;margin-bottom:15px;padding:0 7.5px}@media screen and (min-width:1290px){.cleanslate .gallery-wrapper .contents .header{padding:0 15px}}.cleanslate .gallery-wrapper .contents .header .heading{color:#1a1a1a;flex:1;font-family:inherit;font-size:24px;font-weight:700;line-height:24px;padding:0;text-align:left}.cleanslate .gallery-wrapper .contents .header .heading span{font-size:15px;font-weight:300;margin-left:10px}.cleanslate .gallery-wrapper .contents .header .heading a{color:#1a1a1a;text-decoration:none}.cleanslate .gallery-wrapper .contents .header .heading.small-heading{font-size:18px;line-height:18px}.cleanslate .gallery-wrapper .contents .header .header-actions{align-items:center;display:flex}.cleanslate .gallery-wrapper .contents .header .header-actions .nav-buttons{align-items:center;display:flex;margin-left:15px}.cleanslate .gallery-wrapper .contents .footer{margin-top:15px}.cleanslate .gallery-wrapper.featured .contents .item-col{padding-bottom:0;padding-left:7.5px;padding-right:7.5px}@media screen and (min-width:1290px){.cleanslate .gallery-wrapper.featured .contents .item-col{padding-left:15px;padding-right:15px}}.cleanslate .gallery-wrapper.featured .contents .card{box-shadow:none}.cleanslate .gallery-wrapper.featured .contents .topic{padding-left:12px}.cleanslate .gallery-wrapper .card,.cleanslate .grid-layout-wrapper .card{border-radius:0;box-shadow:0 3px 6px rgba(0,0,0,.161)}.cleanslate .gallery-wrapper .card a,.cleanslate .grid-layout-wrapper .card a{text-decoration:none}.cleanslate .gallery-wrapper .card .item-info,.cleanslate .grid-layout-wrapper .card .item-info{background-color:#fff;height:195px;overflow:hidden;padding:15px}.cleanslate .gallery-wrapper .card .item-info .more,.cleanslate .grid-layout-wrapper .card .item-info .more{background:none;float:right;position:relative;text-align:right}.cleanslate .gallery-wrapper .card .item-info .more button,.cleanslate .grid-layout-wrapper .card .item-info .more button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .gallery-wrapper .card .item-info .more button:focus,.cleanslate .gallery-wrapper .card .item-info .more button:hover,.cleanslate .grid-layout-wrapper .card .item-info .more button:focus,.cleanslate .grid-layout-wrapper .card .item-info .more button:hover{text-decoration:none}.cleanslate .gallery-wrapper .card .item-info .more button,.cleanslate .grid-layout-wrapper .card .item-info .more button{color:#1a1a1a}.cleanslate .gallery-wrapper .card .item-info .speakers,.cleanslate .grid-layout-wrapper .card .item-info .speakers{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:700;height:20px;line-height:20px;margin-bottom:15px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.cleanslate .gallery-wrapper .card .item-info .title,.cleanslate .grid-layout-wrapper .card .item-info .title{color:#000;font-family:inherit;font-size:18px;font-weight:700;line-height:24px;margin-bottom:15px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:100%}.cleanslate .gallery-wrapper .card .item-info .summary,.cleanslate .grid-layout-wrapper .card .item-info .summary{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:400;line-height:25px;overflow:hidden}.cleanslate .gallery-wrapper .card .item-info .session-tags,.cleanslate .grid-layout-wrapper .card .item-info .session-tags{display:flex;margin-bottom:15px}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type{background-color:#fff;border:2px solid #999;border-radius:18px;color:#1a1a1a;font-family:inherit;font-size:12px;font-weight:500;line-height:12px;margin-right:10px;overflow:hidden;padding:4px 8px;text-overflow:ellipsis;white-space:nowrap}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.talk,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.talk{background-color:#ef9100;border-color:#ef9100}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.tutorial,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.tutorial{background-color:#d73d00;border-color:#d73d00;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.panel,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.panel{background-color:#ef9100;border-color:#ef9100}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.demo,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.demo{background-color:#cd8ef0;border-color:#cd8ef0}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.inception-startup-showcase,.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.startup-showcase,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.inception-startup-showcase,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.startup-showcase{background-color:#0074df;border-color:#0074df;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.special-event,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.special-event{background-color:#961515;border-color:#961515;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.poster,.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.posters,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.poster,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.posters{background-color:#4d1368;border-color:#4d1368;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.dli-training,.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.training-lab,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.dli-training,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.training-lab{background-color:#1dbba4;border-color:#1dbba4}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.episode,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.episode{background-color:#bff230;border-color:#bff230}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.keynote,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.keynote{background-color:#76b900;border-color:#76b900}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.expo-theater,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.expo-theater{background-color:#741d9d;border-color:#741d9d;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.fireside-chat,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.fireside-chat{background-color:#c21e1e;border-color:#c21e1e;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.training,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.training{background-color:#f9c500;border-color:#f9c500}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.sponsored-talk,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.sponsored-talk{background-color:#0046a4;border-color:#0046a4;color:#fff}.cleanslate .gallery-wrapper .card .item-info.grid .more,.cleanslate .grid-layout-wrapper .card .item-info.grid .more{background:none;margin-right:0;margin-top:0;padding-right:0;width:auto}.cleanslate .gallery-wrapper .card .item-info.grid .more button,.cleanslate .grid-layout-wrapper .card .item-info.grid .more button{color:#1a1a1a}.cleanslate .gallery-wrapper .card .item-info.grid .speakers,.cleanslate .grid-layout-wrapper .card .item-info.grid .speakers{display:block}@media screen and (min-width:481px){.cleanslate .gallery-wrapper .card .item-info,.cleanslate .grid-layout-wrapper .card .item-info{padding:15px}}@media screen and (min-width:640px){.cleanslate .gallery-wrapper .card .item-info .title,.cleanslate .grid-layout-wrapper .card .item-info .title{font-size:24px;line-height:30px}}.cleanslate .gallery-wrapper .card .featured-info,.cleanslate .grid-layout-wrapper .card .featured-info{background:linear-gradient(0deg,#000,#0000);display:flex;flex-flow:row;height:68px;line-height:normal;margin-top:-95px;padding:20px 15px 10px;pointer-events:none;position:relative;z-index:101}.cleanslate .gallery-wrapper .card .featured-info.no-background,.cleanslate .grid-layout-wrapper .card .featured-info.no-background{background:none}.cleanslate .gallery-wrapper .card .featured-info .info,.cleanslate .grid-layout-wrapper .card .featured-info .info{display:flex;flex:1;flex-flow:column}.cleanslate .gallery-wrapper .card .featured-info .info .title,.cleanslate .grid-layout-wrapper .card .featured-info .info .title{color:#fff;font-family:inherit;font-size:22px;font-weight:700;line-height:23px;max-height:49px;overflow:hidden;padding-bottom:5px}.cleanslate .gallery-wrapper .card .featured-info .info .speakers,.cleanslate .grid-layout-wrapper .card .featured-info .info .speakers{color:#fff;font-family:inherit;font-size:15px;font-weight:400;line-height:21px;margin-bottom:5px;margin-top:auto;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.cleanslate .gallery-wrapper .card .featured-info .more,.cleanslate .grid-layout-wrapper .card .featured-info .more{display:flex;flex-flow:column;min-width:24px}.cleanslate .gallery-wrapper .card .featured-info .more button,.cleanslate .grid-layout-wrapper .card .featured-info .more button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .gallery-wrapper .card .featured-info .more button:focus,.cleanslate .gallery-wrapper .card .featured-info .more button:hover,.cleanslate .grid-layout-wrapper .card .featured-info .more button:focus,.cleanslate .grid-layout-wrapper .card .featured-info .more button:hover{text-decoration:none}.cleanslate .gallery-wrapper .card .featured-info .more button,.cleanslate .grid-layout-wrapper .card .featured-info .more button{color:#fff;margin-top:auto;pointer-events:all}.cleanslate .gallery-wrapper .card .featured-info .more button svg,.cleanslate .grid-layout-wrapper .card .featured-info .more button svg{margin-bottom:-3px}.cleanslate .related-item-small{padding-bottom:30px}.cleanslate .related-item-small a{text-decoration:none}.cleanslate .related-item-small .item-info{background-color:#fff;height:68px;padding:10px 0}.cleanslate .related-item-small .item-info .speakers{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:400;line-height:20px}.cleanslate .related-item-small .item-info .title{color:#76b900;font-family:inherit;font-size:16px;font-weight:400;line-height:22px;margin-bottom:13px;max-height:44px;overflow:hidden}.cleanslate .related-item-small .item-info .item-date{color:#999;font-family:inherit;font-size:12px;font-weight:700;line-height:18px}.cleanslate .error-message{color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;padding:30px}.cleanslate .event-details-wrapper{padding-bottom:30px}.cleanslate .event-details-wrapper a{color:#76b900;text-decoration:none}.cleanslate .event-details-wrapper a:hover{text-decoration:underline}.cleanslate .event-details-wrapper .placeholder{background-color:#000;height:0;overflow:hidden;padding-top:40%;width:100%}.cleanslate .event-details-wrapper .event-details{display:block;width:100%}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .event-details{display:flex}}.cleanslate .event-details-wrapper .event-details .session-details{color:#1a1a1a;flex:1;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;margin-right:30px}.cleanslate .event-details-wrapper .event-details .session-details .header-info{flex:1}.cleanslate .event-details-wrapper .event-details .session-details .header-info .title{color:#1a1a1a;font-size:32px;margin-bottom:22.5px;padding:0}.cleanslate .event-details-wrapper .event-details .session-details .header-info .speakers{margin-bottom:22.5px}.cleanslate .event-details-wrapper .event-details .session-details .info{flex:1}.cleanslate .event-details-wrapper .event-details .session-details .info .summary{margin-bottom:22.5px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic{border-top:1px solid #ccc;margin-bottom:30px;margin-top:30px;padding-top:30px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic h3{font-size:26px;padding-top:0}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic h4{font-size:20px;margin-bottom:10px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic ul{list-style-type:none}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item{margin-bottom:8px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item .topic-item-bullet{font-size:12px;padding-right:10px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item .topic-item-label{font-weight:700;margin-right:10px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item .topic-item-link{padding-left:6px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item ul.topic-sub-item-list{list-style-type:circle}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item ul.topic-sub-item-list li.topic-sub-item{list-style-position:outside;padding-left:5px}.cleanslate .event-details-wrapper .event-details .session-metadata{width:100%}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .event-details .session-metadata{width:300px}}.cleanslate .event-details-wrapper .event-details .session-metadata .actions{text-align:left;width:100%}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container{display:inline-flex}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn:focus,.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn:hover{text-decoration:none}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn{color:#666;display:inline-block;font-size:15px;line-height:167%;margin-right:30px;max-width:80px}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn i,.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn span,.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn span{color:#000;font-weight:700}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container:last-child .action-btn{margin-right:0}.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom{display:flex;flex-direction:column}@media screen and (min-width:640px){.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom{flex-direction:row}}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom{flex-direction:column}}.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom .event-data{color:#1a1a1a;flex:1;font-family:inherit;font-size:15px;font-weight:500;line-height:15px;margin-bottom:30px;margin-top:30px}.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom .event-data .label{font-weight:700}.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom .promotion{margin-bottom:30px;margin-top:30px;max-width:300px}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments{margin-top:30px}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link:focus,.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link:hover{text-decoration:none}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link{color:#76b900;display:block;font-family:inherit;font-size:15px;font-weight:400;line-height:22px;text-align:left}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link:hover{text-decoration:underline;text-decoration-color:#000;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link span{cursor:pointer}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link svg{cursor:pointer;margin-bottom:-5px}.cleanslate .event-details-wrapper .header{color:#1a1a1a;display:block;font-family:inherit;font-size:16px;font-weight:400;line-height:24px}.cleanslate .event-details-wrapper .header .header-info{flex:1}.cleanslate .event-details-wrapper .header .header-info .title{color:#1a1a1a;font-size:24px;margin-bottom:30px;padding:0}.cleanslate .event-details-wrapper .header .header-info .speakers{margin-bottom:15px}.cleanslate .event-details-wrapper .header .actions{border-top:1px solid #ccc;padding-top:15px;text-align:left;width:100%}.cleanslate .event-details-wrapper .header .actions .btn-container{display:inline-block}.cleanslate .event-details-wrapper .header .actions .action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .header .actions .action-btn:focus,.cleanslate .event-details-wrapper .header .actions .action-btn:hover{text-decoration:none}.cleanslate .event-details-wrapper .header .actions .action-btn{color:#666;display:inline-block;font-size:16pt;margin:0 15px;max-width:80px;padding:5px 0 5px 5px}.cleanslate .event-details-wrapper .header .actions .action-btn i,.cleanslate .event-details-wrapper .header .actions .action-btn span,.cleanslate .event-details-wrapper .header .actions .action-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .header .actions .action-btn span{color:#000;font-size:16px;font-weight:700}@media screen and (min-width:640px){.cleanslate .event-details-wrapper .header{display:flex}.cleanslate .event-details-wrapper .header .actions{border-top:none;padding-top:0;text-align:right;width:325px}}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .header .actions{width:350px}.cleanslate .event-details-wrapper .header .actions .action-btn{margin:0 15px}.cleanslate .event-details-wrapper .header .actions .action-btn span{color:#1a1a1a;font-size:16px;font-weight:700}}.cleanslate .event-details-wrapper .details{color:#1a1a1a;display:block;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;margin-bottom:30px}.cleanslate .event-details-wrapper .details .info{flex:1}.cleanslate .event-details-wrapper .details .info .summary{margin:15px 0}.cleanslate .event-details-wrapper .details .info .event-data{border-top:1px solid #ccc;margin-bottom:30px;margin-top:30px;padding-top:30px}.cleanslate .event-details-wrapper .details .info .event-data .label{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:600;line-height:32px}.cleanslate .event-details-wrapper .details .info .download-link{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .details .info .download-link:focus,.cleanslate .event-details-wrapper .details .info .download-link:hover{text-decoration:none}.cleanslate .event-details-wrapper .details .info .download-link{color:#76b900;display:block;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;margin-right:20px}.cleanslate .event-details-wrapper .details .info .download-link:hover{text-decoration:underline;text-decoration-color:#000;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate .event-details-wrapper .details .info .download-link span{cursor:pointer}.cleanslate .event-details-wrapper .details .info .download-link svg{cursor:pointer;margin-bottom:-5px}.cleanslate .event-details-wrapper .details .promotion{text-align:left;width:100%}@media screen and (min-width:640px){.cleanslate .event-details-wrapper .details{display:flex}.cleanslate .event-details-wrapper .details .info .summary{margin-top:0}.cleanslate .event-details-wrapper .details .promotion{text-align:right;width:325px}}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .details .promotion{width:350px}}.cleanslate .event-details-wrapper .ai-summary-details-container{background:linear-gradient(90deg,#e9f5fb,#f4fae0);border-radius:4px;box-shadow:0 3px 6px #0000001f;margin:30px auto;width:100%}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header{align-items:center;color:#1a1a1a;cursor:pointer;display:flex;justify-content:space-between;padding:15px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header span{color:#666;margin-left:6px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header .ai-summary-details-actions,.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header .ai-summary-details-header-text{align-items:center;display:flex}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header .ai-summary-details-actions .summary-actions{align-items:center;display:none}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header .ai-summary-details-actions .summary-actions .summary-action-btn{align-items:center;background:#0000;border:none;box-shadow:none;cursor:pointer;display:flex;padding:6px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header .ai-summary-details-actions svg.summary-toggle{margin-left:15px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header.open .ai-summary-details-actions .summary-actions{display:flex}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header.open .ai-summary-details-actions svg.summary-toggle{-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content{padding:0 20px}@media(max-width:396px){.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content.open{padding:15px}}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content h3{color:#1a1a1a;font-size:20px;padding-top:0}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content li{list-style-type:disc}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content li::marker{color:#76b900}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-text{color:#1a1a1a}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-text ul{margin:0;padding-left:15px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-text ul li{list-style-position:outside;margin-bottom:15px;padding-left:5px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-footer{color:#666;font-size:13px;padding:15px 0;text-align:left}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-footer a{border-bottom:2px solid #76b900;color:#666}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-footer a:hover{text-decoration:none}.cleanslate .search-pagination-wrapper{color:inherit;display:flex;font-family:inherit;font-size:12px;font-weight:700;line-height:1.25em}.cleanslate .search-pagination-wrapper .pager-left{flex:0 0 128px}.cleanslate .search-pagination-wrapper .pager-center{background:#eee 0 0 no-repeat padding-box;color:#999;display:flex;flex:1;flex-direction:column;justify-content:center;letter-spacing:0;text-align:center}.cleanslate .search-pagination-wrapper .pager-right{flex:0 0 128px}.cleanslate .search-pagination-wrapper button{background:#76b900 0 0 no-repeat padding-box;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;color:#fff;height:29px;margin:0;padding:0;text-align:center;width:128px}.cleanslate .search-pagination-wrapper button:disabled{background-color:#ccc}@media screen and (min-width:640px){.cleanslate .search-pagination-wrapper{font-size:16px}.cleanslate .search-pagination-wrapper button{height:39px}}.cleanslate .rating-container{display:flex;margin-bottom:22.5px;max-width:360px}.cleanslate .rating-container .rating-summary{background-color:#fff;border:2px solid #999;border-radius:30px;color:#1a1a1a;display:flex;font-size:15px;line-height:15px;margin-right:15px;padding:4px 10px;width:max-content}.cleanslate .rating-container .rating-summary.no-rating{border-color:#999;color:#999}.cleanslate .rating-container .add-rating-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .rating-container .add-rating-btn:focus,.cleanslate .rating-container .add-rating-btn:hover{text-decoration:none}.cleanslate .rating-container .add-rating-btn{align-items:center;color:#1a1a1a;display:flex;font-family:inherit;font-size:16px;font-weight:700;line-height:16px}.cleanslate .rating-container .add-rating-btn span{border-bottom:2px solid #76b900}.cleanslate .rating-container .add-rating-btn svg{color:#666;margin-left:10px}.cleanslate .rating-container.display-rating{margin:30px 0}.cleanslate .stars{background-color:#fff;border-radius:30px;color:#666;display:flex;font-size:14px;margin-right:15px;padding:5px 15px 0;width:max-content}.cleanslate .stars svg{color:#76b900}.cleanslate .stars span{padding-left:10px;vertical-align:middle}.cleanslate .search-box-wrapper .search-box-popper{background-color:#fff;border-radius:0;margin:11px;max-width:300px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow{height:10px;position:absolute;width:24px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=bottom]{height:10px;left:0;margin-top:-9px;top:0;width:24px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=bottom]:before{border-color:#0000 #0000 #fff;border-width:0 12px 10px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=top]{bottom:0;height:10px;left:0;margin-bottom:-9px;width:24px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=top]:before{border-color:#fff #0000 #0000;border-width:10px 12px 0}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=right]{height:24px;left:0;margin-left:-9px;width:10px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=right]:before{border-color:#0000 #fff #0000 #0000;border-width:12px 10px 12px 0}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=left]{height:24px;margin-right:-9px;right:0;width:10px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=left]:before{border-color:#0000 #0000 #0000 #fff;border-width:12px 0 12px 10px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow:before{border-style:solid;content:"";display:block;height:0;margin:auto;width:0}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content{background-color:#fff;opacity:1}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content .search-input-wrapper .search-input-suggestions-dropdown{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;top:28px!important}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content .search-input-wrapper .search-input-block{align-items:center;padding:5px 15px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content .search-input-wrapper .search-input-block input{color:#1a1a1a;font-family:inherit;font-size:18px;font-weight:400;line-height:24px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content .search-input-wrapper .search-input-block .search-input-right button{padding-top:5px;width:24px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content .search-input-wrapper .search-input-block .search-input-right button svg{width:100%}.cleanslate .animated-thumbnail{position:relative}.cleanslate .animated-thumbnail .main-thumbnail{bottom:0;left:0;position:absolute;right:0;top:0;z-index:101}.cleanslate .speaker-info-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .speaker-info-btn:focus,.cleanslate .speaker-info-btn:hover{text-decoration:none}.cleanslate .speaker-info-btn{color:#1a1a1a;font-family:inherit;font-size:inherit;font-weight:700;text-align:left;text-decoration:underline;text-decoration-color:#76b900;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate .speaker-info-btn:active,.cleanslate .speaker-info-btn:focus{background:none}.cleanslate .speaker-info-btn:hover{text-decoration:underline;text-decoration-color:#000;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate .swg-spinner-wrapper{align-items:center;display:flex;justify-content:center;padding:21px}.cleanslate .spinner-overlay{background-color:#0000;bottom:0;left:0;padding:0;position:absolute;right:0;top:0;z-index:101}.cleanslate .swg-spinner,.cleanslate .swg-spinner:after{border-radius:50%;height:5em;width:5em}.cleanslate .swg-spinner{-webkit-animation:load8 1.1s linear infinite;animation:load8 1.1s linear infinite;border:.6em solid #666;border-left-color:#0000;font-size:10px;margin:20px 0;position:relative;text-indent:-9999em;-webkit-transform:translateZ(0);-ms-transform:translateZ(0);transform:translateZ(0)}.cleanslate .spinner-overlay .swg-spinner-wrapper .swg-spinner{border:.6em solid #76b900;border-left-color:#0000;font-size:8px}.cleanslate .gallery-spinner-wrapper{height:300px}.cleanslate .gallery-spinner-wrapper.featured{height:250px}.cleanslate .gallery-spinner-wrapper .swg-spinner-wrapper .swg-spinner{margin-top:50px}.cleanslate .featured-videos-spinner-wrapper{height:180px}.cleanslate .featured-videos-spinner-wrapper .swg-spinner-wrapper .swg-spinner{border-color:#fff #fff #fff #0000;margin-top:50px}.cleanslate .thumbnail-slices-container{height:0;padding-bottom:56.25%;position:relative;width:100%}@-webkit-keyframes load8{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes load8{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}.swg-small-spinner-wrapper{align-items:center;display:flex;justify-content:center}.swg-small-spinner,.swg-small-spinner:after{border-radius:50%;height:3em;width:3em}.swg-small-spinner{-webkit-animation:load8 1.1s linear infinite;animation:load8 1.1s linear infinite;border:.6em solid #666;border-left-color:#0000;font-size:5px;position:relative;text-indent:-9999em;-webkit-transform:translateZ(0);-ms-transform:translateZ(0);transform:translateZ(0)}.details-actions{align-items:center;display:flex;flex-direction:column;justify-content:center}@media screen and (min-width:640px){.details-actions{flex-direction:row;justify-content:space-between}}.details-actions .actions{display:flex}.details-actions .actions .btn-container{display:inline-block}.details-actions .actions .btn-container .action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.details-actions .actions .btn-container .action-btn:focus,.details-actions .actions .btn-container .action-btn:hover{text-decoration:none}.details-actions .actions .btn-container .action-btn{color:#666;display:inline-block;font-size:15px;line-height:167%;margin-right:30px;max-width:80px}.details-actions .actions .btn-container .action-btn i,.details-actions .actions .btn-container .action-btn span,.details-actions .actions .btn-container .action-btn svg{cursor:pointer}.details-actions .actions .btn-container .action-btn span{color:#000;font-weight:700}.details-actions .actions .btn-container:last-child .action-btn{margin-right:0}.player-view-toggle{display:flex;justify-content:center}.details-actions,.player-view-toggle{margin-bottom:30px}.details-actions .toggle-container,.player-view-toggle .toggle-container{background-color:#fff;border:1px solid #ccc;border-radius:50px;display:flex;margin-bottom:30px;padding:5px}@media screen and (min-width:640px){.details-actions .toggle-container,.player-view-toggle .toggle-container{margin-bottom:0}}.details-actions .toggle-container .toggles,.player-view-toggle .toggle-container .toggles{background-color:#f7f7f7;border-radius:50px;display:flex}.details-actions .toggle-container .toggles button.toggle-btn,.player-view-toggle .toggle-container .toggles button.toggle-btn{background:#0000;border:none;border-radius:50px;color:#666;font-size:16px;font-weight:700;padding:5px 10px}.details-actions .toggle-container .toggles button.toggle-btn sup,.player-view-toggle .toggle-container .toggles button.toggle-btn sup{font-size:12px;top:-.5em!important}.details-actions .toggle-container .toggles button.toggle-btn:hover,.player-view-toggle .toggle-container .toggles button.toggle-btn:hover{cursor:pointer}.details-actions .toggle-container .toggles button.toggle-btn.active,.player-view-toggle .toggle-container .toggles button.toggle-btn.active{background-color:#76b900;color:#1a1a1a}.details-actions .toggle-container .toggles button.toggle-btn.active:hover,.player-view-toggle .toggle-container .toggles button.toggle-btn.active:hover{cursor:default}.cleanslate .event-details-wrapper .session-video-container,.session-video-container{display:flex;flex-direction:row}.cleanslate .event-details-wrapper .session-video-player-container,.session-video-player-container{background-color:#000;height:240px;margin:0 auto 30px;position:relative;width:426px}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .session-video-player-container,.session-video-player-container{height:360px;width:640px}}@media screen and (min-width:1290px){.cleanslate .event-details-wrapper .session-video-player-container,.session-video-player-container{height:540px;width:960px}}.cleanslate .event-details-wrapper .session-video-player-container.sticky,.session-video-player-container.sticky{background-color:#f1f1f1;position:-webkit-sticky;position:sticky;top:46px;z-index:1}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search,.session-video-player-container .open-transcript-search{position:absolute;right:-38px;top:0}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search button,.session-video-player-container .open-transcript-search button{align-items:center;background-color:#fff;border:1px solid #ccc;border-left:none;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;display:flex;height:38px;margin:0;padding:0;width:38px}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search button .search-icon,.session-video-player-container .open-transcript-search button .search-icon{cursor:pointer}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search button .icon-container,.session-video-player-container .open-transcript-search button .icon-container{align-items:center;background:none;display:flex;height:100%;width:100%}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search button .icon-container:hover,.session-video-player-container .open-transcript-search button .icon-container:hover{cursor:pointer;filter:brightness(.5)}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search button svg,.session-video-player-container .open-transcript-search button svg{height:24px;margin:0 auto;width:24px}.cleanslate .transcript-search-container,.transcript-search-container{background-color:#fff;border:1px solid #ccc;box-sizing:border-box;color:#1a1a1a;display:flex;flex:1;flex-direction:column;font-family:inherit;font-size:16px;font-weight:400;height:360px;line-height:24px;margin-bottom:30px}@media screen and (min-width:1290px){.cleanslate .transcript-search-container,.transcript-search-container{height:540px}}.cleanslate .transcript-search-container .transcript-search-header,.transcript-search-container .transcript-search-header{border-bottom:1px solid #ccc;display:flex;flex-direction:row;padding:8px 15px 0}.cleanslate .transcript-search-container .transcript-search-header .search-header-title,.transcript-search-container .transcript-search-header .search-header-title{color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:600;line-height:24px;margin-right:15px;padding-bottom:4px}.cleanslate .transcript-search-container .transcript-search-header .search-header-title sup,.transcript-search-container .transcript-search-header .search-header-title sup{font-size:.75em;position:relative;top:-.5em;vertical-align:initial}.cleanslate .transcript-search-container .transcript-search-header .search-header-title button,.transcript-search-container .transcript-search-header .search-header-title button{background-color:#0000;border:none;font:inherit;outline:none}.cleanslate .transcript-search-container .transcript-search-header .search-header-title button:hover,.transcript-search-container .transcript-search-header .search-header-title button:hover{color:#76b900;cursor:pointer}.cleanslate .transcript-search-container .transcript-search-header .search-header-title.active,.transcript-search-container .transcript-search-header .search-header-title.active{border-bottom:3px solid #76b900}.cleanslate .transcript-search-container .transcript-search-header .search-header-title.active button:hover,.transcript-search-container .transcript-search-header .search-header-title.active button:hover{color:inherit;cursor:default}.cleanslate .transcript-search-container .transcript-search-header .search-header-close,.transcript-search-container .transcript-search-header .search-header-close{flex:1;padding-bottom:4px;text-align:right;width:24px}.cleanslate .transcript-search-container .transcript-search-header .search-header-close .search-close-btn,.transcript-search-container .transcript-search-header .search-header-close .search-close-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .transcript-search-container .transcript-search-header .search-header-close .search-close-btn:focus,.cleanslate .transcript-search-container .transcript-search-header .search-header-close .search-close-btn:hover,.transcript-search-container .transcript-search-header .search-header-close .search-close-btn:focus,.transcript-search-container .transcript-search-header .search-header-close .search-close-btn:hover{text-decoration:none}.cleanslate .transcript-search-container .transcript-search-header .search-header-close .search-close-btn,.transcript-search-container .transcript-search-header .search-header-close .search-close-btn{color:#999;font-size:18px}.cleanslate .transcript-search-container .transcript-search-header .search-header-close .search-close-btn:hover,.transcript-search-container .transcript-search-header .search-header-close .search-close-btn:hover{filter:brightness(.5)}.cleanslate .transcript-search-container .transcript-search-content,.transcript-search-container .transcript-search-content{display:none}.cleanslate .transcript-search-container .transcript-search-content.active,.transcript-search-container .transcript-search-content.active{display:block}.cleanslate .transcript-search-container .transcript-search-input,.transcript-search-container .transcript-search-input{border-bottom:1px solid #ccc}.cleanslate .transcript-search-container .search-input-block,.transcript-search-container .search-input-block{align-items:normal;background:#fff 0 0 no-repeat padding-box;display:flex;padding:8px 15px 3px}.cleanslate .transcript-search-container .search-input-block .search-input-left,.transcript-search-container .search-input-block .search-input-left{display:flex;flex:1;flex-direction:row}.cleanslate .transcript-search-container .search-input-block .search-input-left .search-icon-wrapper,.transcript-search-container .search-input-block .search-input-left .search-icon-wrapper{width:35px}.cleanslate .transcript-search-container .search-input-block .search-input-left input,.transcript-search-container .search-input-block .search-input-left input{border:none;color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;height:22px;letter-spacing:0;line-height:24px;outline:none;width:100%}.cleanslate .transcript-search-container .search-input-block .search-input-left input::placeholder,.transcript-search-container .search-input-block .search-input-left input::placeholder{color:#999}.cleanslate .transcript-search-container .search-input-block .search-input-left input::-webkit-input-placeholder,.transcript-search-container .search-input-block .search-input-left input::-webkit-input-placeholder{color:#999}.cleanslate .transcript-search-container .search-input-block .search-input-left input:-ms-input-placeholder,.transcript-search-container .search-input-block .search-input-left input:-ms-input-placeholder{color:#999}.cleanslate .transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-cancel-button,.cleanslate .transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-decoration,.cleanslate .transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-results-button,.cleanslate .transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-results-decoration,.transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-cancel-button,.transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-decoration,.transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-results-button,.transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-results-decoration{display:none}.cleanslate .transcript-search-container .search-input-block button,.transcript-search-container .search-input-block button{background:none;border:none;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;color:#999;cursor:pointer;font-size:18px;height:24px;margin:0;padding:0;text-align:right;width:24px}.cleanslate .transcript-search-container .search-input-block button .search-icon,.transcript-search-container .search-input-block button .search-icon{cursor:pointer}.cleanslate .transcript-search-container .search-input-block button:hover,.transcript-search-container .search-input-block button:hover{filter:brightness(.5)}.cleanslate .transcript-search-container .search-input-block button svg,.transcript-search-container .search-input-block button svg{height:24px;width:24px}.cleanslate .transcript-search-container .search-input-block .search-input-right,.transcript-search-container .search-input-block .search-input-right{flex:0 0 20px;text-align:right}.cleanslate .transcript-search-container .search-input-block .search-input-right button,.transcript-search-container .search-input-block .search-input-right button{font-size:12px}.cleanslate .transcript-search-container .transcript-search-items,.transcript-search-container .transcript-search-items{flex:1;overflow-y:auto}.cleanslate .transcript-search-container .transcript-search-items .no-items,.transcript-search-container .transcript-search-items .no-items{padding:15px;text-align:center}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row,.transcript-search-container .transcript-search-items .transcript-search-row{border-left:3px solid #fff;color:#333;cursor:pointer;display:flex;flex-direction:row;font-size:14px;line-height:20px;padding:8px 15px 8px 12px}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row:hover,.transcript-search-container .transcript-search-items .transcript-search-row:hover{background-color:#eee;border-left:3px solid #76b900}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row .time-container,.transcript-search-container .transcript-search-items .transcript-search-row .time-container{overflow:hidden}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row .time-container.minute-width,.transcript-search-container .transcript-search-items .transcript-search-row .time-container.minute-width{width:40px}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row .time-container.hour-width,.transcript-search-container .transcript-search-items .transcript-search-row .time-container.hour-width{width:52px}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row .text-container,.transcript-search-container .transcript-search-items .transcript-search-row .text-container{flex:1;padding-left:8px;word-break:break-word}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row .text-container span,.transcript-search-container .transcript-search-items .transcript-search-row .text-container span{color:#76b900;font-weight:700}.cleanslate .transcript-search-container .transcript-search-footer,.transcript-search-container .transcript-search-footer{border-top:1px solid #ccc;display:flex;flex-direction:row;justify-content:space-between;padding:0}.cleanslate .transcript-search-container .transcript-search-footer .language-selector,.transcript-search-container .transcript-search-footer .language-selector{flex:1;padding:8px 10px 4px 8px}.cleanslate .transcript-search-container .transcript-search-footer .language-selector .transcript-language-select,.transcript-search-container .transcript-search-footer .language-selector .transcript-language-select{background:#0000;border:none;color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:600;line-height:24px}.cleanslate .transcript-search-container .transcript-search-footer .download-container,.transcript-search-container .transcript-search-footer .download-container{border-left:1px solid #ccc;padding:8px 8px 4px}.cleanslate .transcript-search-container .transcript-search-footer .download-container button,.transcript-search-container .transcript-search-footer .download-container button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .transcript-search-container .transcript-search-footer .download-container button:focus,.cleanslate .transcript-search-container .transcript-search-footer .download-container button:hover,.transcript-search-container .transcript-search-footer .download-container button:focus,.transcript-search-container .transcript-search-footer .download-container button:hover{text-decoration:none}.cleanslate .transcript-search-container .transcript-search-footer .download-container button,.transcript-search-container .transcript-search-footer .download-container button{color:#666}.cleanslate .transcript-search-container .transcript-search-footer .download-container button:hover,.transcript-search-container .transcript-search-footer .download-container button:hover{color:#76b900}.cleanslate .transcript-search-container .transcript-search-footer .download-container .download-icon,.transcript-search-container .transcript-search-footer .download-container .download-icon{cursor:pointer}.cleanslate .transcript-search-container .nv-container #tabs-container,.transcript-search-container .nv-container #tabs-container{display:none}.cleanslate .transcript-search-container .nv-container .general-container,.transcript-search-container .nv-container .general-container{padding:0}.cleanslate .transcript-search-container .nv-container #main_wrapper,.transcript-search-container .nv-container #main_wrapper{height:auto}.cleanslate .transcript-search-container .nv-container #main_wrapper h2,.transcript-search-container .nv-container #main_wrapper h2{font-size:18px}.cleanslate .transcript-search-container .nv-container #main_wrapper #chatbot_wrapper,.transcript-search-container .nv-container #main_wrapper #chatbot_wrapper{height:498px}@media screen and (min-width:1024px){.cleanslate .transcript-search-container .nv-container #main_wrapper #chatbot_wrapper,.transcript-search-container .nv-container #main_wrapper #chatbot_wrapper{height:318px}}@media screen and (min-width:1290px){.cleanslate .transcript-search-container .nv-container #main_wrapper #chatbot_wrapper,.transcript-search-container .nv-container #main_wrapper #chatbot_wrapper{height:498px}}.cleanslate .transcript-search-container .nv-container #main_wrapper #chatbot_wrapper #vss_chats_container,.transcript-search-container .nv-container #main_wrapper #chatbot_wrapper #vss_chats_container{height:auto}.cleanslate .transcript-search-container .nv-container #main_wrapper #chatbot_wrapper #userInput,.transcript-search-container .nv-container #main_wrapper #chatbot_wrapper #userInput{font-size:12px}.cleanslate .transcript-search-container .nv-container #mobile_main_wrapper,.transcript-search-container .nv-container #mobile_main_wrapper{gap:0;padding-top:0}.cleanslate .transcript-search-container .nv-container #mobile_main_wrapper #chatbot_wrapper,.transcript-search-container .nv-container #mobile_main_wrapper #chatbot_wrapper{height:360px}.transcript-search-container.tabs .transcript-search-container{height:499px}@media screen and (min-width:1024px){.transcript-search-container.tabs .transcript-search-container{height:319px}}@media screen and (min-width:1290px){.transcript-search-container.tabs .transcript-search-container{height:499px}}.cleanslate .event-details-wrapper .event-details-player,.event-details-player{height:0;padding-top:56.25%;position:relative}.cleanslate .event-details-wrapper .event-details-player .video-error,.event-details-player .video-error{align-items:center;display:flex;height:100%;justify-content:center}.cleanslate .event-details-wrapper .event-details-player .video-error .video-error-message,.event-details-player .video-error .video-error-message{text-align:center}.cleanslate .event-details-wrapper .event-details-player .player-container,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail,.event-details-player .player-container,.event-details-player .video-thumbnail{background-color:#000;color:#fff;height:100%;left:0;margin:0 auto;position:absolute;top:0;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container.has-played .playkit-pre-playback-play-overlay .playkit-pre-playback-play-button,.cleanslate .event-details-wrapper .event-details-player .player-container.mobile-related-state .playkit-gui-area .playkit-bottom-bar,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail.has-played .playkit-pre-playback-play-overlay .playkit-pre-playback-play-button,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail.mobile-related-state .playkit-gui-area .playkit-bottom-bar,.event-details-player .player-container.has-played .playkit-pre-playback-play-overlay .playkit-pre-playback-play-button,.event-details-player .player-container.mobile-related-state .playkit-gui-area .playkit-bottom-bar,.event-details-player .video-thumbnail.has-played .playkit-pre-playback-play-overlay .playkit-pre-playback-play-button,.event-details-player .video-thumbnail.mobile-related-state .playkit-gui-area .playkit-bottom-bar{display:none}.cleanslate .event-details-wrapper .event-details-player .player-container .kaltura-player,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .kaltura-player,.event-details-player .player-container .kaltura-player,.event-details-player .video-thumbnail .kaltura-player{height:100%;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .react-player,.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .react-player,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player,.event-details-player .player-container .react-player,.event-details-player .player-container .video-js-player,.event-details-player .video-thumbnail .react-player,.event-details-player .video-thumbnail .video-js-player{height:100%;position:relative;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player .video-js .vjs-play-progress,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player .video-js .vjs-play-progress,.event-details-player .player-container .video-js-player .video-js .vjs-play-progress,.event-details-player .video-thumbnail .video-js-player .video-js .vjs-play-progress{background-color:#76b900}.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player .video-js .vjs-control-bar,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player .video-js .vjs-control-bar,.event-details-player .player-container .video-js-player .video-js .vjs-control-bar,.event-details-player .video-thumbnail .video-js-player .video-js .vjs-control-bar{z-index:1}.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player .video-js .vjs-menu-item,.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player .video-js .vjs-menu-title,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-item,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-title,.event-details-player .player-container .video-js-player .video-js .vjs-menu-item,.event-details-player .player-container .video-js-player .video-js .vjs-menu-title,.event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-item,.event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-title{color:#fff}.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player .video-js .vjs-menu-item.vjs-selected,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-item.vjs-selected,.event-details-player .player-container .video-js-player .video-js .vjs-menu-item.vjs-selected,.event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-item.vjs-selected{background-color:#76b900;color:#000}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay,.event-details-player .player-container .player-overlay,.event-details-player .video-thumbnail .player-overlay{bottom:0;left:0;overflow:hidden;pointer-events:none;position:absolute;right:0;top:0;z-index:1}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay.hidden,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay.hidden,.event-details-player .player-container .player-overlay.hidden,.event-details-player .video-thumbnail .player-overlay.hidden{visibility:hidden}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay.show-related,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay.show-related,.event-details-player .player-container .player-overlay.show-related,.event-details-player .video-thumbnail .player-overlay.show-related{background-color:#000c}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn,.event-details-player .player-container .player-overlay .skip-btn,.event-details-player .video-thumbnail .player-overlay .skip-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn:focus,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn:focus,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn:hover,.event-details-player .player-container .player-overlay .skip-btn:focus,.event-details-player .player-container .player-overlay .skip-btn:hover,.event-details-player .video-thumbnail .player-overlay .skip-btn:focus,.event-details-player .video-thumbnail .player-overlay .skip-btn:hover{text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn,.event-details-player .player-container .player-overlay .skip-btn,.event-details-player .video-thumbnail .player-overlay .skip-btn{align-items:center;border:1px solid #fff;border-right:none;bottom:60px;color:#fff;display:flex;justify-content:center;opacity:.4;padding:5px;pointer-events:all;position:absolute;right:0;width:80px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn i,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn span,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn i,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn svg,.event-details-player .player-container .player-overlay .skip-btn i,.event-details-player .player-container .player-overlay .skip-btn span,.event-details-player .player-container .player-overlay .skip-btn svg,.event-details-player .video-thumbnail .player-overlay .skip-btn i,.event-details-player .video-thumbnail .player-overlay .skip-btn span,.event-details-player .video-thumbnail .player-overlay .skip-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn span,.event-details-player .player-container .player-overlay .skip-btn span,.event-details-player .video-thumbnail .player-overlay .skip-btn span{font-size:16px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn:hover,.event-details-player .player-container .player-overlay .skip-btn:hover,.event-details-player .video-thumbnail .player-overlay .skip-btn:hover{border-color:#76b900!important;color:#76b900!important;opacity:1}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .ad-banner,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .ad-banner,.event-details-player .player-container .player-overlay .ad-banner,.event-details-player .video-thumbnail .player-overlay .ad-banner{margin-left:15px;margin-top:15px;max-height:150px;max-width:700px;overflow:hidden;pointer-events:all}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .ad-banner a,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .ad-banner a,.event-details-player .player-container .player-overlay .ad-banner a,.event-details-player .video-thumbnail .player-overlay .ad-banner a{height:100%;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .ad-banner a img,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .ad-banner a img,.event-details-player .player-container .player-overlay .ad-banner a img,.event-details-player .video-thumbnail .player-overlay .ad-banner a img{height:auto;width:auto}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container,.event-details-player .player-container .player-overlay .overlay-share-container,.event-details-player .video-thumbnail .player-overlay .overlay-share-container{background:linear-gradient(90deg,#0000,#0000004d);bottom:0;padding:15px 0 20px 20px;position:absolute;right:-130px;text-align:center;top:0;-webkit-transition:right .3s;-moz-transition:right .3s;-ie-transition:right .3s;-o-transition:right .3s;transition:right .3s}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container.shown,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container.shown,.event-details-player .player-container .player-overlay .overlay-share-container.shown,.event-details-player .video-thumbnail .player-overlay .overlay-share-container.shown{right:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container.add-rating,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating,.event-details-player .player-container .player-overlay .overlay-share-container.add-rating,.event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating{right:-240px;width:240px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container.add-rating.shown,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating.shown,.event-details-player .player-container .player-overlay .overlay-share-container.add-rating.shown,.event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating.shown{right:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container.add-rating .btn-container,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating .btn-container,.event-details-player .player-container .player-overlay .overlay-share-container.add-rating .btn-container,.event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating .btn-container{display:inline-block}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn:focus,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:focus,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:hover,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn:focus,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn:hover,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:focus,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:hover{text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn{color:#fff;display:block;font-size:16pt;margin:2px 15px;padding:5px 0 5px 5px;pointer-events:all;width:80px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn i,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn span,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn i,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn svg,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn i,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn span,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn svg,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn i,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn span,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn span,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn span,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn span{font-size:14px;font-weight:700}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:hover,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn:hover,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:hover{color:#76b900!important}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container,.event-details-player .player-container .player-overlay .overlay-related-videos-container,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container{bottom:50px;left:0;padding:0 10px;pointer-events:all;position:absolute;right:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container.small,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container.small,.event-details-player .player-container .player-overlay .overlay-related-videos-container.small,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container.small{top:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .error-message,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .error-message,.event-details-player .player-container .player-overlay .overlay-related-videos-container .error-message,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .error-message{color:#fff}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos{margin:0 auto;max-width:1600px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper.mobile,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper.mobile,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper.mobile,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper.mobile{padding:15px 20px 0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header{color:#fff;display:flex;font-family:inherit;font-size:20px;font-weight:400;justify-content:space-between;line-height:20px;margin-bottom:15px;padding:0 8px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header .nav-buttons,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header .nav-buttons,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header .nav-buttons,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header .nav-buttons{display:flex}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col{padding-bottom:0;padding-left:7.5px;padding-right:7.5px}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col{padding-left:15px;padding-right:15px}}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .card.next-session,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .card.next-session,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .card.next-session,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .card.next-session{border:3px solid #76b900}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .featured-info .info .title,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .featured-info .info .title,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .featured-info .info .title,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .featured-info .info .title{font-size:18px;line-height:20px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile{padding-left:5px;padding-right:5px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info{padding:25px 8px 8px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info .info .title,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info .info .title,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info .info .title,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info .info .title{font-size:14px;max-height:58px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions{display:flex;padding-top:15px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions .play-next,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions .play-next,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions .play-next,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions .play-next{display:flex;flex:1;justify-content:flex-end}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button{background:none;border:1px solid #76b900;border-radius:0;box-shadow:none;color:#76b900;cursor:pointer;font-family:inherit;font-size:15px;font-weight:700;line-height:23px;margin:0 8px;min-width:100px;padding:8px 15px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button:hover,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button:hover,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button:hover{background-color:#76b900;color:#fff}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button.primary,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button.primary,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button.primary,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button.primary{background-color:#76b900;border:none;color:#fff}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button.primary:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button.primary:hover,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button.primary:hover,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button.primary:hover{background-color:#66a000}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button span,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button span,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button span{cursor:pointer;display:flex;vertical-align:middle}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button span svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button span svg,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button span svg,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button span svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .play-prev .action-button,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .play-prev .action-button,.event-details-player .player-container .player-overlay .overlay-related-videos-container .play-prev .action-button,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .play-prev .action-button{padding-left:10px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .play-next .action-button,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .play-next .action-button,.event-details-player .player-container .player-overlay .overlay-related-videos-container .play-next .action-button,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .play-next .action-button{padding-right:10px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-container,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-container,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-container,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-container{margin:15px auto;max-width:150px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls,.event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls{margin-top:25px;text-align:center}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn,.event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn{background:#0000;border:none;box-shadow:none;color:#fff}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn svg,.event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn svg,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:hover,.event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:hover,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:hover{color:#76b900}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:last-child,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:last-child,.event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:last-child,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:last-child{margin:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control{margin:8px;padding:10px 0;position:relative}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar{background-color:#eee;height:4px;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar .progression-bar,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar .progression-bar,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar .progression-bar,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar .progression-bar{background-color:#76b900;height:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn{background:#0000;border:none;box-shadow:none;margin:0;padding:0;position:absolute;right:-3px;top:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn svg,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn svg,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .video-login,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-login,.event-details-player .player-container .video-login,.event-details-player .video-thumbnail .video-login{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .video-login:focus,.cleanslate .event-details-wrapper .event-details-player .player-container .video-login:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-login:focus,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-login:hover,.event-details-player .player-container .video-login:focus,.event-details-player .player-container .video-login:hover,.event-details-player .video-thumbnail .video-login:focus,.event-details-player .video-thumbnail .video-login:hover{text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .video-login,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-login,.event-details-player .player-container .video-login,.event-details-player .video-thumbnail .video-login{height:100%;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .login-overlay,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .login-overlay,.event-details-player .player-container .login-overlay,.event-details-player .video-thumbnail .login-overlay{bottom:0;left:0;position:absolute;right:0;top:0;z-index:998}.cleanslate .event-details-wrapper .event-details-player .player-container .login-overlay:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .login-overlay:hover,.event-details-player .player-container .login-overlay:hover,.event-details-player .video-thumbnail .login-overlay:hover{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .overlay-instructions,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .overlay-instructions,.event-details-player .player-container .overlay-instructions,.event-details-player .video-thumbnail .overlay-instructions{background-color:#000000b3;border:1px solid #76b900;color:#76b900;font-family:inherit;font-size:14px;font-weight:700;left:50%;line-height:18px;margin:0;max-width:300px;padding:10px 20px 8px;position:absolute;text-align:center;top:50%;transform:translate(-51%,-51%);z-index:999}.cleanslate .event-details-wrapper .event-details-player .player-container .overlay-instructions span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .overlay-instructions span,.event-details-player .player-container .overlay-instructions span,.event-details-player .video-thumbnail .overlay-instructions span{position:relative;z-index:1000}.cleanslate .event-details-wrapper .event-details-player .player-container .overlay-instructions:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .overlay-instructions:hover,.event-details-player .player-container .overlay-instructions:hover,.event-details-player .video-thumbnail .overlay-instructions:hover{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .download-control,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .download-control,.event-details-player .player-container .download-control,.event-details-player .video-thumbnail .download-control{background:#00000080;border-radius:50px;color:#fff;cursor:pointer;height:100px;left:50%;position:absolute;top:50%;transform:translate(-51%,-51%);width:100px;z-index:999}.cleanslate .event-details-wrapper .event-details-player .player-container .download-control svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .download-control svg,.event-details-player .player-container .download-control svg,.event-details-player .video-thumbnail .download-control svg{color:#fff;cursor:pointer;padding:18px}.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .item-image,.event-details-player .video-thumbnail .item-image{background-color:inherit;height:100%;max-width:100%;padding-bottom:0}.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .item-image img.thumbnail,.event-details-player .video-thumbnail .item-image img.thumbnail{display:block;height:auto;margin:0 auto;max-height:100%;max-width:100%;position:relative;width:auto}.audio-player-container{margin-bottom:30px;width:100%}.audio-player-container .kaltura-player-container{border-bottom-left-radius:0;border-bottom-right-radius:0}.audio-player-container .kaltura-audio-player{height:100%;position:relative;width:100%}.audio-player-container .kaltura-audio-player .playkit-player .playkit-seek-bar .playkit-progress-bar .playkit-progress{background-color:#76b900}.audio-player-container .kaltura-audio-player .playkit-ap-background-image,.audio-player-container .kaltura-audio-player .playkit-ap-bottom-controls .playkit-ap-current-time,.audio-player-container .kaltura-audio-player .playkit-ap-bottom-controls .playkit-ap-duration,.audio-player-container .kaltura-audio-player .playkit-ap-bottom-controls .playkit-ap-playback-controls{display:none}.audio-player-container .kaltura-audio-player .custom-player-controls{align-items:center;bottom:0;color:#ccc;display:flex;justify-content:space-between;left:272px;padding:0 16px 16px;pointer-events:auto;position:absolute;right:0;z-index:100}.audio-player-container .kaltura-audio-player .custom-player-controls.medium{left:122px;padding:0 8px 8px}.audio-player-container .kaltura-audio-player .custom-player-controls.small{left:0;padding:0 8px 8px}.audio-player-container .kaltura-audio-player .custom-player-controls .volume-slider-container{align-items:center;background:#1a1a1a;border:none;border-radius:6px;display:flex;height:24px;left:0;padding:0 8px;position:absolute;top:0;transform:translateY(-100%);width:80px;z-index:100}.audio-player-container .kaltura-audio-player .custom-player-controls .volume-slider-container .radix-slider-track{background-color:#999}.audio-player-container .kaltura-audio-player .custom-player-controls .volume-slider-container .radix-slider-range{background-color:#76b900}.audio-player-container .kaltura-audio-player .custom-player-controls .volume-slider-container .radix-slider-thumb{background-color:#76b900;border-color:#76b900;height:10px;width:10px}.audio-player-container .kaltura-audio-player .custom-player-controls .left-controls{align-items:center;display:flex}.audio-player-container .kaltura-audio-player .custom-player-controls .playback-rate-select{appearance:none;-webkit-appearance:none;-moz-appearance:none;background-color:#0000;border:none;border-radius:6px;color:#ccc;font-size:16px;outline:none}.audio-player-container .kaltura-audio-player .custom-player-controls .playback-rate-select.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .playback-rate-select.small{font-size:14px}.audio-player-container .kaltura-audio-player .custom-player-controls .playback-rate-select:hover{color:#76b900;cursor:pointer}.audio-player-container .kaltura-audio-player .custom-player-controls .center-controls{align-items:center;display:flex}.audio-player-container .kaltura-audio-player .custom-player-controls .right-controls{align-items:center;display:flex;justify-content:flex-end;min-width:100px}.audio-player-container .kaltura-audio-player .custom-player-controls .right-controls.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .right-controls.small{font-size:14px;min-width:85px}@media(min-width:381px)and (max-width:450px){.audio-player-container .kaltura-audio-player .custom-player-controls .right-controls{min-width:auto!important}}.audio-player-container .kaltura-audio-player .custom-player-controls .right-controls span{font-family:Lato,Helvetica Neue,Segoe UI,sans-serif!important}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn{align-items:center;background-color:#76b900;border:none;border-radius:4px;display:flex;height:40px;justify-content:center;padding:16px 8px;width:40px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn.small{height:32px;padding:8px;width:32px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .pause-icon{height:24px;width:24px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .pause-icon.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .pause-icon.small{height:18px;width:18px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .play-icon{color:#000;height:24px;width:24px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .play-icon.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .play-icon.small{height:18px;width:18px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn:hover{background-color:#66a000;cursor:pointer}.audio-player-container .kaltura-audio-player .custom-player-controls .player-control-btn{background:#0000;border:none;color:#ccc;height:32px;margin:0 15px;padding:0;width:32px}.audio-player-container .kaltura-audio-player .custom-player-controls .player-control-btn.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .player-control-btn.small{margin:0 4px}.audio-player-container .kaltura-audio-player .custom-player-controls .player-control-btn:hover{color:#76b900;cursor:pointer}.audio-player-container .kaltura-audio-player .custom-player-controls .player-control-btn:first-child{margin-left:0}.audio-player-container .ai-podcast-details-container{background:linear-gradient(90deg,#e9f5fb,#f4fae0);border-bottom-left-radius:6px;border-bottom-right-radius:6px;box-shadow:0 3px 6px #0000001f;margin:0 auto;width:100%}.audio-player-container .ai-podcast-details-container .ai-podcast-details-collapsible-header{align-items:center;color:#1a1a1a;cursor:pointer;display:flex;font-size:18px;font-weight:700;justify-content:space-between;padding:15px;user-select:none}.audio-player-container .ai-podcast-details-container .ai-podcast-details-collapsible-header.open{padding:15px 15px 0}.audio-player-container .ai-podcast-details-container .ai-podcast-details-collapsible-header.open svg{transform:rotate(180deg)}.audio-player-container .ai-podcast-details-container .ai-podcast-details-collapsible-header span{margin-right:15px}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content{padding:0 15px;transition:"0.3s ease-in-out"}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content.open{padding:0 15px 15px}@media(max-width:396px){.audio-player-container .ai-podcast-details-container .ai-podcast-details-content.open{padding:15px}}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content li{list-style-type:disc}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content li::marker{color:#76b900}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content .ai-podcast-details-header{font-size:18px;font-weight:700;margin-bottom:0!important}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content .ai-podcast-details-header sup{font-size:16px}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content .ai-podcast-details-formatted-text{line-height:1.3}.display-block{display:block}.display-none{display:none}.share-actions-container{color:#1a1a1a;display:flex;flex-direction:row;font-family:inherit;font-size:16px;font-weight:400;justify-content:center;line-height:24px}.share-actions-container .share-action-item{margin:0 30px}.share-actions-container .share-action-item .share-action-title{margin-bottom:15px}.share-actions-container .share-action-item .share-action-content{box-shadow:0 3px 7px 1px #00000026;margin-bottom:15px;padding:8px 8px 4px;position:relative}.share-actions-container .share-action-item .share-action-content.small{box-shadow:none;padding-top:0}.share-actions-container .share-action-item .share-action-content svg.icon{border-radius:30px}.share-actions-container .share-action-item .share-action-content .qr-icon-container{align-items:center;background-color:#0000;bottom:0;display:flex;justify-content:center;left:0;position:absolute;right:0;top:0}.share-actions-container .share-action-item .share-action-content .qr-icon{border:1px solid #fff;border-radius:2px}.share-actions-container .share-action-item .share-action-footer button{background-color:#76b900;border:none;color:#fff;cursor:pointer;margin-top:5px;padding:10px 4px;width:100%}.share-actions-container .share-action-item .share-action-footer button:hover{background-color:#66a000}.thumbnail-player-container{display:block}.thumbnail-player-container .thumbnail-player{margin-bottom:15px;padding:0;width:100%}.thumbnail-player-container .thumbnail-player-details{margin-bottom:15px}.thumbnail-player-container .thumbnail-player-details .item-title{color:#1a1a1a;font-family:inherit;font-size:24px;font-weight:400;line-height:32px;margin-bottom:15px}.thumbnail-player-container .thumbnail-player-details .speakers{margin-bottom:15px}.thumbnail-player-container .thumbnail-player-details .speaker-name{font-weight:700}@media screen and (min-width:640px){.thumbnail-player-container{display:flex}.thumbnail-player-container .thumbnail-player{height:auto;padding:0 15px 0 0;width:50%}.thumbnail-player-container .thumbnail-player-details{flex:1}}@media screen and (min-width:1024px){.thumbnail-player-container .thumbnail-player{padding:0 30px 0 0;width:33%}}</style>
<style>.vertex-ul-list {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
    padding-left: 0px;
}

.vertex-results {
    margin-bottom: 60px;
    font-weight: 400;
}

/* tablet and mobile viewport */
@media screen and (max-width: 1023px) {
    .vertex-results {
        margin-bottom: 50px;
    }
}

.vertex-result-title { 
    color: #000;
    text-decoration: none;
    font-weight: bold;
    display: inline;
    font-size: 20px;
    line-height: normal;
}

.vertex-result-description {
    font-size: 16px;
    color: #1a1a1a;
    padding-top: 10px;
    padding-bottom: 10px;
}

/* mobile and tablet viewport */
@media screen and (max-width: 1023px) {
    .vertex-result-description {
        line-height: 22px;
    }
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
    .vertex-result-description {
        line-height: 24px;
    }
}

.vertex-result-item {
    text-decoration: none !important;
}

.vertex-result-link {
    color: #999;
    overflow-wrap: break-word;
    font-size: 14px;
    line-height: 22px;
}

</style>
<style>.vertex-box-container{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: auto;
  min-height: 50vh;
  margin: 0 auto;
  max-width: 1070px;
  max-width: 100%;
}
.vertex-error{
  padding: 20px;
}

.vertex-result-count-and-promos {
  width: 100%;
  padding-top: 30px;
}

.vertex-results-container{
  height: 260px;
  margin: auto;
  display: flex;
  justify-content: center;
}

.vertex-results-count{
  font-size: 18px; 
  font-weight: 700; 
  color:#000;
  line-height: 125%;
}

.vertex-recommendedForYouDesktopAndLaptop{
  width: 370px;
  border-right: 2px solid #DEDFDF;
  margin-right: 60px;
  padding-right: 60px;
}

#nv__card__container {
  padding: 0px !important;
}

/* Mobile devices */
@media only screen and (max-width: 639px) {
  .vertex-box-container{
    width: 458px;
  }
  .vertex-recommendedForYouDesktopAndLaptop{
    display: none;
  }
}

/* Tablet devices */
@media only screen and (min-width: 640px) and (max-width: 1023px) {
  .vertex-box-container{
    width: 520px; 
  }
  .vertex-recommendedForYouDesktopAndLaptop{
    display: none;
  }
}

/* Laptop Devices */
@media only screen and (min-width: 1024px) and (max-width: 1349px) {
  .vertex-box-container{
    width: 790px; 
  }
  .vertex-recommendedForYouMobileandTablet{
    display: none;
  }
}

/* Desktop Devices */
@media only screen and (min-width: 1350px) {
  .vertex-box-container{
    width: 1070px; 
  }
  .vertex-recommendedForYouMobileandTablet{
    display: none;
  }
}

.vertex-recommendedForYouMobileandTablet {
  margin-top: 30px;
  align-self: flex-start;
}

#mobile-generated-banner-list {
  padding-left: 0px !important;
  padding-right: 0px !important;
}

#search-promo-container #nv__rfc__section__wrapper #rfu123 .nv-teaser {
  margin-bottom: 30px !important;
}

#mobile-generated-banner-list #nv__rfc__section__wrapper-2 #rfu123-2 .nv-teaser {
  margin-right: 20px !important;
}

#mobile-generated-banner-list .at-rec-container-mobile {
  padding-left: 0px !important;
}

#nv__rfc__section__wrapper #rfu123 .nv-card-data {
  padding-bottom: 15px !important;
}

#search-promo-container #nv__rfc__section__wrapper h4 {
  font-size: 20px !important;
  padding-top: 0px !important;
}

#mobile-generated-banner-list #nv__rfc__section__wrapper-2 h4 {
  font-size: 20px !important;
  padding-top: 0px !important;
}
</style>
<style>.vertex-search-input-wrapper {
    border: 2px solid var(--colors-neutral-gray-400, #999);
    width: 100%;
    display: flex;
    padding-left: 15px;
    padding-right: 15px;
    align-items: center;
}

.vertex-resultsContainer {
    padding-top: 50px;
    width: 100%;
}

.vertex-search-input {
    border: none;
    width: 100% !important;
    height: 50px;
    font-size: 20px;
    padding-left: 10px;
    font-weight: 400;
    margin-top: 3px;
    background-color: #fff !important;
    line-height: 100%;
}

.vertex-search-input:focus {
    outline: none;
}

.vertex-search-icon {
    background-color: #fff;
    border: none;
    align-items: center;
    color: #666;
    margin-right: 15px;
    cursor: pointer
}

/* Mobile devices */
@media only screen and (max-width: 639px) {
    .vertex-search-icon {
        margin-right: 0px !important;
    }
}

.vertex-genAI-loader-title {
    font-size: 16px;
    color: #666;
    font-weight: bold;
    margin-top: 25px;
}</style>
<style>.vertex-search-pagination-wrapper {
  display: flex;
  width: 100%;
  padding: 20px 0;
  font-size: 16px;
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
  .vertex-search-pagination-wrapper {
    font-size: 14px;
    padding: 10px 0px;
  }
}

/* only tablet viewport */
@media screen and (min-width: 640px) and (max-width: 1023px) {
  .vertex-search-pagination-wrapper {
    padding: 10px 0px;
  }
}

.vertex-pager-left {
  flex: 0 0 128px;
}

.vertex-pager-center {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  background: #f7f7f7 0 0 no-repeat padding-box;
  letter-spacing: 0;
  color: #000;
  font-weight: bold;
}

.vertex-pager-right {
  flex: 0 0 128px;
}

.vertex-search-pagination-button {
  width: 128px;
  height: 29px;
  margin: 0;
  padding: 0;
  border: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  background: #76B900 0 0 no-repeat padding-box;
  text-align: center;
  color: #000;
  font-weight: bold;
  -webkit-appearance: none;
  -moz-appearance: none;
  cursor: pointer;

  &:disabled {
    background-color: #fff;
    border: 2px solid #76B900;
    cursor: auto;
  }
}</style>
<style>.vertex-show-more {
    font-size: 16px;
    white-space: nowrap;
    font-weight: bold;
}

.vertex-show-more-button{
    display: flex;
    align-items: center;
    background: transparent;
    cursor: pointer;
    border: none;
    line-height: 125%;
    font-weight: 700;
    color: #1A1A1A;
}

.vertex-show-more-btn-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 80px;
    position: relative;
    padding: 20px 0;
}

.vertex-arrow {
    display: inline-block;
    margin-left: 5px;
    transition: transform 0.3s ease;
    color: var(--brand-color);
    font-size: 24px;
    padding-top: 5px;
}

.vertex-rotated {
    transform: rotate(-180deg);
    padding-top: 0px;
}

.vertex-genai-summery{
    background-image: linear-gradient(to right, #DAEBFB,#F5F0E7 );
    width: 100vw;
    margin-top: 24px;
}
.vertex-genai-container{
    background-color: #fff;
    margin: 30px 0 30px 0;
    border-radius: 10px 10px 10px 10px;
    padding: 30px 30px 0px 30px;
    max-width: 100%;
}
.vertex-ai-summery-text{
    display: -webkit-box;
    /* -webkit-line-clamp: 10;    */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}
.vertex-show-less-text{
    max-height: 300px;
}
.vertex-genAi-summery-title{
    font-size: 16px;
    color: #666;
    font-weight: 500;
    line-height: 130%;
}

.vertex-genAI-summary-btn-container{
    display: flex;
    width: 100px;
    justify-content: flex-end;
    position: relative;
}

.vertex-tooltiptext {
    position: relative;
    display: inline-block;
  }
  
  .vertex-tooltiptext .vertex-tooltiptexttext {
    visibility: hidden;
    width: 130px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 5px;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.3s;
  }
  
  .vertex-tooltiptext .vertex-tooltiptexttext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
  }
  
  .vertex-tooltiptext:hover .vertex-tooltiptexttext {
    visibility: visible;
    opacity: 1;
  }

/* Mobile devices */
@media only screen and (max-width: 639px) {
    .vertex-genai-container{
      width: 458px;
    }
    .vertex-show-more-btn-container{
        flex-direction: column;
        text-align: center;
        height: fit-content;
    }
  }
  
  /* Tablet devices */
  @media only screen and (min-width: 640px) and (max-width: 1023px) {
    .vertex-genai-container{
      width: 520px; 
    }
    .vertex-show-more-btn-container{
        flex-direction: column;
        text-align: center;
        height: fit-content;
    }
  }
  
  /*Laptop*/
  @media only screen and (min-width: 1024px) and (max-width: 1349px) {
    .vertex-genai-container{
      width: 790px; 
    }
    .vertex-fix-to-right{
      justify-content: flex-end;
    }
  }
  
  /*Desktop*/
  @media only screen and (min-width: 1350px) {
    .vertex-genai-container{
      width: 1070px; 
    }
    .vertex-fix-to-right{
      justify-content: flex-end;
    }
  }</style>
<style>.vertex-search-results-wrapper {
    padding-top: 30px;
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .vertex-search-results-wrapper .vertex-search-results-item {
        padding-bottom: 40px;
    }
}


/* tablet, laptop and desktop viewport */
@media screen and (min-width: 640px) {
    .vertex-search-results-wrapper .vertex-search-results-item {
        padding-bottom: 30px;
    }
}

/* .vertex-search-results-wrapper .vertex-search-results-item:last-child {
    padding-bottom: 30px;
} */

.vertex-search-results-wrapper .vertex-promoted-item {
    align-content: center;
    align-items: flex-start;
    display: flex;
    flex-direction: row;
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
    .vertex-search-results-wrapper .vertex-promoted-item .vertex-event-item-image {
        min-width: 30%;
        width: 30%;
    }

    .vertex-search-results-wrapper .vertex-event-item-image {
        display: inline-block;
        padding: 0 30px 0 0;
        height: auto;
    }
}

/* only tablet viewport */
@media screen and (min-width: 640px) and (max-width: 1023px) {
    .vertex-search-results-wrapper .vertex-promoted-item .vertex-event-item-image {
        min-width: 50%;
        width: 50%;
    }

    .vertex-search-results-wrapper .vertex-event-item-image {
        display: inline-block;
        padding: 0 15px 0 0;
        height: auto;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .vertex-search-results-wrapper .vertex-promoted-item .vertex-event-item-image {
        min-width: 50%;
        width: 50%;
    }

    .vertex-search-results-wrapper .vertex-event-item-image {
        display: inline-block;
        padding: 0 30px 0 0;
        height: auto;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .vertex-search-results-text {
        max-width: 50%
    }
}

/* only tablet viewport */
@media screen and (min-width: 640px) and (max-width: 1023px) {
    .vertex-search-results-text {
        max-width: 50%
    }
}

.vertex-item-image {
    background-color: #ccc;
    height: 0;
    padding-bottom: 56.25%;
    position: relative;
    width: 100%;
}

.vertex-item-image img.thumbnail {
    height: 100%;
    left: 0;
    opacity: 0;
    position: absolute;
    transition: opacity 1s ease;
    width: 100%;
}

.vertex-item-image img.thumbnail.in {
    opacity: 1;
}

.vertex-search-results-wrapper .vertex-search-results-item>div {
    line-height: 1.25em;
}

.vertex-search-results-wrapper .vertex-promoted-item .vertex-recommended {
    border: 2px solid #ccc;
    color: #000;
    display: inline-block;
    font-size: 14px;
    line-height: 24px;
    padding: 0 5px;
    font-weight: 500;
}

/* mobile and tablet viewport */
@media screen and (max-width: 1023px) {
    .vertex-search-results-wrapper .vertex-promoted-item .vertex-recommended {
        margin-bottom: 10px;
    }
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
    .vertex-search-results-wrapper .vertex-promoted-item .vertex-recommended {
        margin-bottom: 15px;
    }
}

.vertex-search-results-wrapper .vertex-search-results-item .vertex-item-title {
    font-weight: bold;
}

/* mobile and tablet viewport */
@media screen and (max-width: 1023px) {
    .vertex-search-results-wrapper .vertex-search-results-item .vertex-item-title {
        padding-bottom: 5px;
    }
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
    .vertex-search-results-wrapper .vertex-search-results-item .vertex-item-title {
        padding-bottom: 10px;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .vertex-search-results-wrapper .vertex-search-results-item .vertex-item-title a {
        font-size: 20px;
        line-height: normal;
    }
}

/* tablet, laptop and desktop viewport */
@media screen and (min-width: 640px) {
    .vertex-search-results-wrapper .vertex-search-results-item .vertex-item-title a {
        font-size: 20px;
        line-height: normal;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .vertex-search-results-wrapper .vertex-search-results-item .vertex-item-summary {
        font-size: 16px;
        line-height: 24px;
        padding-bottom: 5px;
        color: #1a1a1a;
    }
}

/* tablet, laptop and desktop viewport */
@media screen and (min-width: 640px) {
    .vertex-search-results-wrapper .vertex-search-results-item .vertex-item-summary {
        font-size: 16px;
        line-height: 24px;
        padding-bottom: 10px;
        color: #1a1a1a;
    }
}

.vertex-search-results-wrapper .vertex-search-results-item .vertex-item-footer {
    padding-bottom: 0;
    overflow-x: hidden;
    text-overflow: ellipsis;
    font-size: 14px;
    line-height: 22px;
}

.vertex-search-results-wrapper .vertex-search-results-item .vertex-item-footer .vertex-item-footer-inner {
    white-space: nowrap;
    clip: auto;
}

.vertex-search-results-wrapper .vertex-search-results-item .vertex-item-footer .vertex-item-footer-inner .vertex-item-link a {
    color: #999;
    text-decoration: none;
}

.vertex-result-item {
    text-decoration: none !important;
}</style>
<style>.vertex-no-results-text {
  font-size: 22px;
  line-height: 38.5px;
}

.vertex-no-results-list {
  list-style-type: disc;
  padding-left: 15px;
  font-size: 15px;
  line-height: 25px;
}
.vertex-no-result-tips {
  font-size: 15px;
  font-weight: 700;
}

.vertex-search-tips-container {
  background-color: #f7f7f7;
  padding: 20px 30px;
}
</style>
<style>/* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: NVIDIA-NALA, Arial, Helvetica, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

ul{
    list-style-type: none;
    padding-left: 0px;
}

a {
    /* text-decoration: none !important; */
    /* color: #000000; */
/* } */</style>
<style>.vertex-overlay-container {
    /* background-image: linear-gradient(to right, #daebfb, #f5f0e7); */
    width: 100vw;
    min-height: 370px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: var(--colors-neutral-gray-50, #F7F7F7);
}

.vertex-overlay-text {
    font-size: 32px !important;
    font-weight: 700 !important;
    line-height: 32px !important;
    color: #000000 !important;
    text-align: center !important;
}

.vertex-overlay-text-container {
    margin: 0 auto;
}

.vertex-overlay {
    position: fixed;
    top: 44px;
    left: 0;
    height: calc(100% - 40px);
    width: 100%;
    min-height: 50%;
    background-color: transparent;
    box-shadow: 0 2px 4px #000d;
    background-color: #000d;
    display: flex;
    flex-direction: column;
    z-index: 1000;
}

.vertex-show-overlay {
    display: block;
}

.vertex-close-button {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 30px;
    cursor: pointer;
}

.vertex-search-input-container {
    border: 2px solid var(--colors-neutral-gray-400, #999);
    width: 910px;
    max-width: 100vw;
    display: flex;
    padding-left: 10px;
    background-color: #fff;
    flex-shrink: 0;
}

/* Mobile devices */
@media only screen and (max-width: 639px) {
    .vertex-overlay-text-container {
        max-width: 90vw;
    }

    .vertex-search-input-container {
        width: 455px;
        max-width: 90vw;
    }

    .vertex-search-input {
        font-size: 18px;
    }
}

/* Tablets devices */
@media only screen and (min-width: 640px) and (max-width: 1023px) {
    .vertex-search-input-container {
        width: 520px;
    }
}

@media only screen and (min-width: 1024px) and (max-width: 1349px) {
    .vertex-search-input-container {
        width: 790px;
        height: 60px;
        flex-shrink: 0;
    }
}

@media only screen and (min-width: 1350px) {
    .vertex-search-input-container {
        width: 910px;
    }
}

#vertex-magnifying-glass-icon-btn {
    border: none;
    background: #fff;
    padding-right: 20px;
    cursor: pointer;

    &:disabled {
        cursor: auto;
    }
}</style>
<style>/* :root {
  --app-font: NVIDIA Sans, Arial, Helvetica, sans-serif;
  --padding-tb-30: 30px 0px;
  --padding-tb-15: 15px 0px;
  --brand-color: #76b900;
} */

/* body {
  font-family: var(--app-font);
} */
</style>
<style>.librarian-ul-list {
  margin-top: 0px !important;
  margin-bottom: 0px !important;
  padding-left: 0px;
  list-style: none !important;
}

.librarian-results {
  margin-bottom: 45px;
  font-weight: 400;
  list-style: none !important;
}


.librarian-result-heading {
  display: flex;
  align-items: flex-start;
  gap: 4px;
  margin-bottom: 8px;
  justify-content: left;
  text-align: left;
}

.librarian-result-body {
  display: flex;
  flex-direction: column;
  flex: 1;
  min-width: 0;
}

.librarian-result-title {
  color: #000;
  text-decoration: none;
  font-weight: bold;
  font-size: 20px;
  line-height: normal;
}

.librarian-result-number {
  display: inline-block;
  box-sizing: border-box;
  min-width: calc(1.25em + 4px);
  padding: 0 4px;
  margin-right: 4px;
  border: 2px solid #76B900;
  color: #1a1a1a;
  font-weight: 700;
  line-height: 1.25;
  text-align: center;
  vertical-align: bottom;
}

.librarian-result-item:hover .librarian-result-number,
.librarian-result-item:focus-visible .librarian-result-number {
  border-color: #000;
}

.librarian-result-description {
    font-size: 16px;
    color: #1a1a1a;
    padding-bottom: 0px !important;
    margin-bottom: 10px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    -webkit-line-clamp: 3;
    line-clamp: 3;
}

/* mobile and tablet viewport */
@media screen and (max-width: 1023px) {
  .librarian-result-description {
    line-height: 22px;
  }
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
  .librarian-result-description {
    line-height: 24px;
    margin-bottom: 5px;
  }
}

.librarian-result-item {
  text-decoration: none !important;
  display: block;
  border-radius: 4px;
}

.librarian-result-item:focus {
  outline: none;
}

.librarian-result-item:focus-visible {
  outline: 2px solid #76B900;
  outline-offset: -2px;
}

.librarian-result-link {
  color: #999;
  overflow-wrap: break-word;
  font-size: 14px;
  line-height: 22px;
}
</style>
<style>.librarian-box-container{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: auto;
  min-height: 50vh;
  margin: 0 auto;
  max-width: 1070px;
  max-width: 100%;
}

.librarian-results-layout {
  display: flex;
}

.librarian-search-row {
  width: 100%;
  display: flex;
}

.librarian-genai-summery-active {
  margin-top: 30px;
}

.librarian-results-divider {
  background: #ccc;
  border: none;
  height: 1px;
}

#target-div {
  height: 10px;
  background: transparent;
}
.librarian-error{
  padding: 20px;
}

.librarian-result-count-and-promos {
  width: 100%
}

.librarian-page-cascade {
  width: 100%;
}

.librarian-page-cascade > * {
  opacity: 0;
}

.librarian-page-cascade-ready > * {
  animation: librarian-page-cascade-in 0.45s ease-out both;
}

.librarian-page-cascade-ready > *:nth-child(1) { animation-delay: 1.4s; }
.librarian-page-cascade-ready > *:nth-child(2) { animation-delay: 1.5s; }
.librarian-page-cascade-ready > *:nth-child(3) { animation-delay: 1.6s; }
.librarian-page-cascade-ready > *:nth-child(4) { animation-delay: 1.7s; }
.librarian-page-cascade-ready > *:nth-child(n+5) { animation-delay: 1.8s; }

@keyframes librarian-page-cascade-in {
  from { opacity: 0; transform: translateY(8px); }
  to { opacity: 1; transform: translateY(0); }
}
.librarian-loader-container{
  height: 260px;
  display: flex;
  justify-content: center;
}

.librarian-results-count{
  font-size: 18px; 
  font-weight: 700; 
  color:#000;
  line-height: 125%;
  padding: 0px !important
}

.librarian-recommendedForYouDesktopAndLaptop{
  width: 370px;
  border-right: 2px solid #DEDFDF;
  margin-right: 60px;
  padding-right: 60px;
}

.librarian-showFilterIcon {
  display: none;
  width: 120px;
  justify-content: space-evenly;
}

.librarian-showFilterIcon-opened {
  p {
    color: #76b900 !important;
  }
  svg {
    path{
    stroke: #76b900 !important;
  }
}
}

.librarian-showFilterIcon-label{
  color: #76b900 !important;
}
.librarian-showFilterIcon-path{
  stroke: #76b900 !important;
}

#nv__card__container {
  padding: 0px !important;
}

/* Mobile devices */
@media only screen and (max-width: 639px) {
  .librarian-box-container{
    width: 458px;
  }
  .librarian-recommendedForYouDesktopAndLaptop{
    display: none;
  }
  .librarian-result-count-and-promos {
    padding-top: 40px;
  }
  .librarian-showFilterIcon{
    display: flex;
    align-items: center;
  }
}

/* Tablet devices */
@media only screen and (min-width: 640px) and (max-width: 1023px) {
  .librarian-box-container{
    width: 620px; 
  }
  .librarian-recommendedForYouDesktopAndLaptop{
    display: none;
  }
  .librarian-result-count-and-promos {
    padding-top: 40px;
  }
  .librarian-showFilterIcon{
    display: flex;
    align-items: center;
  }
}

/* Laptop Devices */
@media only screen and (min-width: 1024px) and (max-width: 1349px) {
  .librarian-box-container{
    width: 790px; 
  }
  .librarian-recommendedForYouMobileandTablet{
    display: none;
  }
  .librarian-result-count-and-promos {
    padding-top: 50px;
  }
}

/* Desktop Devices */
@media only screen and (min-width: 1350px) {
  .librarian-box-container{
    width: 1070px;
  }
  .librarian-search-row {
    max-width: 900px;
    align-self: flex-start;
  }
  .librarian-recommendedForYouMobileandTablet{
    display: none;
  }
  .librarian-result-count-and-promos {
    padding-top: 50px;
  }
}

.librarian-recommendedForYouMobileandTablet {
  margin-top: 30px;
  align-self: flex-start;
}

#mobile-generated-banner-list {
  padding-left: 0px !important;
  padding-right: 0px !important;
}

#search-promo-container #nv__rfc__section__wrapper #rfu123 .nv-teaser {
  margin-bottom: 30px !important;
}

#mobile-generated-banner-list #nv__rfc__section__wrapper-2 #rfu123-2 .nv-teaser {
  margin-right: 20px !important;
}

#mobile-generated-banner-list .at-rec-container-mobile {
  padding-left: 0px !important;
}

#search-promo-container #nv__rfc__section__wrapper #rfu123 .nv-card-data {
  padding-bottom: 15px !important;
}

#search-promo-container #nv__rfc__section__wrapper h4 {
  font-size: 20px !important;
  padding-top: 0px !important;
}

#mobile-generated-banner-list #nv__rfc__section__wrapper-2 h4 {
  font-size: 20px !important;
  padding-top: 0px !important;
}

</style>
<style>@property --angle {
  syntax: "<angle>";
  initial-value: 0deg;
  inherits: false;
}

@keyframes rotateGradientBorder {
  from { --angle: 0deg; }
  to   { --angle: 360deg; }
}

.rotating-gradient-border {
  position: relative;
  isolation: isolate;
  border: 2px solid transparent;
  background-origin: border-box;
  background-clip: padding-box, border-box;
  background-image:
    linear-gradient(
      var(--gradient-border-bg, transparent),
      var(--gradient-border-bg, transparent)
    ),
    conic-gradient(
      from var(--angle, 0deg),
      #8b7355 0%, #6d5a3a 5%, #7a6542 10%, #d4c4a8 15%, #b8956e 20%,
      #c9a86c 25%, #e8dcc4 30%, #f5ede0 35%, #c4a064 40%, #8b7355 45%,
      #7a6542 50%, #b89b6a 55%, #d4c4a8 60%, #e8dcc4 65%, #c9a86c 70%,
      #b8956e 75%, #a68b5b 80%, #8b7355 85%, #6d5a3a 90%, #9a8262 95%,
      #8b7355 100%
    );
  animation: rotateGradientBorder 20s linear infinite;
}

@media (prefers-reduced-motion: reduce) {
  .rotating-gradient-border {
    animation: none;
  }
}
</style>
<style>.librarian-search-input-wrapper {
    box-sizing: border-box;
    border-radius: 12px;
    width: 100%;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 6px 6px 6px 14px;
    height: 51px !important;
    background-color: #0b0b0b;
    box-shadow: 0 0 24px rgba(196, 160, 100, 0.18);
    --gradient-border-bg: #0b0b0b;
}

.librarian-search-input-wrapper .librarian-search-ai-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    flex-shrink: 0;
}

.librarian-resultsContainer {
    padding-top: 30px;
    width: 100%;
}

.librarian-search-input {
    border: none;
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    background-color: transparent;
    color: #fff;
    caret-color: #d4c4a8;
}

.librarian-search-input::placeholder {
    color: #b3b3b3;
    opacity: 1;
}

.librarian-search-input:focus {
    outline: none;
}

.librarian-search-icon {
    background-color: transparent;
    border: none;
    align-items: center;
    color: #b3b3b3;
    cursor: pointer;
}

.librarian-cross-icon {
    background-color: transparent;
    border: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #b3b3b3;
    cursor: pointer;
    padding: 4px;
}

.librarian-cross-icon:hover {
    color: #fff;
}

.librarian-paperplane-icon {
    border: none;
    background: #76B900;
    width: 36px;
    height: 36px;
    border-radius: 6px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    cursor: pointer;
    padding: 0;
    transition: background 0.2s ease, opacity 0.2s ease;
}

.librarian-paperplane-icon:hover:not(:disabled) {
    background: #8FD400;
}

.librarian-paperplane-icon:disabled {
    cursor: auto;
    opacity: 0.6;
}

.librarian-genAI-loader-title {
    font-size: 16px;
    color: #666;
    font-weight: 500;
    padding: 40px !important;
    margin-block-start: 0px !important;
}

</style>
<style>.librarian-search-pagination-wrapper {
  display: flex;
  width: 100%;
  padding: 20px 0;
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
  .librarian-search-pagination-wrapper {
    font-size: 14px;
  }
}

/* tablet, laptop and desktop viewport */
@media screen and (min-width: 640px) {
  .librarian-search-pagination-wrapper {
    font-size: 16px;
  }
}

.librarian-pager-left {
  flex: 0 0 128px;
}

.librarian-pager-center {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  background: #f7f7f7 0 0 no-repeat padding-box;
  letter-spacing: 0;
  color: #000;
  font-weight: bold;
  font-size: 20px;
  height: 50px;
}

.librarian-pager-right {
  flex: 0 0 128px;
}

.librarian-pagination-button {
  width: 128px;
  padding: 12px !important;
  margin: 0;
  padding: 0;
  border: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  background: #76B900 0 0 no-repeat padding-box;
  text-align: center;
  color: #000;
  font-weight: bold;
  -webkit-appearance: none;
  -moz-appearance: none;
  cursor: pointer;
  font-size: 18px;
  box-sizing: border-box;
  height: 50px;

  &:disabled {
    background-color: #fff;
    border: 2px solid #76B900;
    cursor: auto;
  }
}</style>
<style>.librarian-show-more {
  font-size: 16px;
  white-space: nowrap;
  font-weight: bold;
}

.librarian-show-more-button {
  display: inline-flex;
  align-items: center;
  background: transparent;
  cursor: pointer;
  border: none;
  outline: none;
  line-height: 125%;
  font-weight: 700;
  color: #EEE;
  justify-content: flex-start;
  padding: 0px !important;
  gap: 6px;
}

.librarian-show-more-button:focus-visible {
  outline: 2px solid #76B900;
  outline-offset: 4px;
  border-radius: 4px;
}

.librarian-show-more-btn-container {
  display: flex;
  box-sizing: border-box;
  justify-content: center;
  align-items: center;
  padding: 16px;
  width: 100%;
  background-color: #000;
  border-radius: 0 0 10px 10px;
}

.librarian-genAI-summary-btn-container .librarian-show-more-button {
  margin-right: auto;
}

.librarian-show-more-btn-sub-container {
  display: flex;
  justify-content: space-between;
  width: 100%;
  gap: 30px;
}

.librarian-arrow {
  display: inline-block;
  margin-left: 5px;
  transition: transform 0.3s ease;
  color: #76b900;
}

.librarian-rotated {
  transform: rotate(-180deg);
  padding-top: 0px;
}

.librarian-genai-summery {
  width: 100%;
  position: relative;
}

.librarian-genai-wrapper {
  background-color: #161616;
  margin: 20px;
  padding: 20px;
  border-radius: 0 10px 10px 10px;
  color: #EEE;
}

.librarian-genai-container{
  p{
    margin-bottom: 0px !important;
  }
}

.librarian-genai-container {
  box-sizing: border-box;
  border-radius: 12px;
  padding: 14px 14px 0px 14px;
  max-width: 100%;
  color: #EEE;
  background-color: #000;
  overflow: hidden;
  transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  max-height: 80px;
  --gradient-border-bg: #000;
}

.librarian-genai-container.librarian-genai-measured {
  max-height: var(--librarian-genai-container-height, 80px);
}

.librarian-genai-container.librarian-genai-revealed {
  max-height: none;
}

.librarian-genai-container.librarian-genai-empty {
  padding-bottom: 14px;
}

.librarian-genai-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.librarian-genai-title-text {
  padding-left: 10px;
}

.librarian-genai-fade-in {
  animation: librarian-genai-fade-in 0.45s ease-out both;
  animation-delay: 0.5s;
}

.librarian-genai-fade-in ~ .librarian-genai-fade-in {
  animation-delay: 0.6s;
}

.librarian-genai-fade-in ~ .librarian-genai-fade-in ~ .librarian-genai-fade-in {
  animation-delay: 0.7s;
}

@keyframes librarian-genai-fade-in {
  from { opacity: 0; transform: translateY(8px); }
  to { opacity: 1; transform: translateY(0); }
}

.librarian-ai-summery-text {
  position: relative;
  display: block;
  color: #EEE;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-top: 0;
  margin-bottom: 0;
  padding-bottom: 30px !important;
  padding-top: 30px !important;
  padding-left: 65px !important;
  font-size: 15px;
  line-height: 25px;
  white-space: pre-line;
  list-style: none !important;
  transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.librarian-ai-summery-text::before {
  content: "";
  position: absolute;
  top: 4px;
  bottom: 4px;
  left: 15px;
  width: 2px;
  background-color: #76B900;
  border-radius: 2px;
}

.librarian-ai-summery-text > li {
  margin-bottom: 15px;
  list-style: none !important;
  animation: librarian-genai-fade-in 0.45s ease-out both;
}

.librarian-ai-summery-text > li:nth-child(1) { animation-delay: 0.50s; }
.librarian-ai-summery-text > li:nth-child(2) { animation-delay: 0.58s; }
.librarian-ai-summery-text > li:nth-child(3) { animation-delay: 0.66s; }
.librarian-ai-summery-text > li:nth-child(4) { animation-delay: 0.74s; }
.librarian-ai-summery-text > li:nth-child(5) { animation-delay: 0.82s; }
.librarian-ai-summery-text > li:nth-child(6) { animation-delay: 0.90s; }
.librarian-ai-summery-text > li:nth-child(7) { animation-delay: 0.98s; }
.librarian-ai-summery-text > li:nth-child(8) { animation-delay: 1.06s; }
.librarian-ai-summery-text > li:nth-child(9) { animation-delay: 1.14s; }
.librarian-ai-summery-text > li:nth-child(10) { animation-delay: 1.22s; }
.librarian-ai-summery-text > li:nth-child(n+11) { animation-delay: 1.30s; }

.librarian-ai-summery-text.librarian-summery-measured {
  max-height: var(--librarian-genai-content-height, none);
}

.librarian-ai-summery-text.librarian-summery-measured.librarian-show-less-text {
  max-height: 242px;
}

.librarian-ai-summery-text > li::marker {
  content: '';
}

.librarian-ai-summery-text > li:last-child {
  margin-bottom: 0;
}

.librarian-ai-summery-text>li::before {
  content: "";
  display: inline-block;
  width: 8px;
  height: 14px;
  margin-left: -16px;
  margin-right: 10px;
  vertical-align: middle;
  background: url("data:image/svg+xml;utf8,<svg xmlns=%27http://www.w3.org/2000/svg%27 width=%278%27 height=%2714%27 viewBox=%270 0 8 14%27 fill=%27none%27><path d=%27M1 1l6 6-6 6%27 stroke=%27%23EEEEEE%27 stroke-width=%272%27 stroke-linecap=%27square%27/></svg>") no-repeat center / contain;
}

.librarian-citation {
  display: inline-block;
  box-sizing: border-box;
  min-width: 20px;
  height: 20px;
  padding: 0 4px;
  font-weight: 700 !important;
  color: #EEE !important;
  font-family: inherit;
  border: 1px solid #76B900;
  text-decoration: none !important;
  font-size: 12px !important;
  line-height: 18px !important;
  text-align: center;
  margin-right: 5px !important;
}

.librarian-citation:hover,
.librarian-citation:focus-visible {
  border-color: #FFFFFF;
}

.librarian-citation:last-child {
  margin-right: 0px !important;
}

.librarian-show-less-text {
  max-height: 242px;
}

.librarian-ai-summery-text::after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 70px;
  pointer-events: none;
  opacity: 0;
  background: linear-gradient(
    180deg,
    rgba(0, 0, 0, 0) 0%,
    rgba(0, 0, 0, 0.7) 60%,
    #000 100%
  );
  transition: opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.librarian-show-less-text::after {
  opacity: 1;
}

.librarian-genAi-summery-title {
  font-size: 15px;
  color: #EEE;
  font-weight: 700;
  line-height: 1;
  display: flex;
  align-items: center;
  padding-top: 0px;
  padding: 0px !important;
}

.librarian-genAi-summery-title > span {
  display: inline-flex;
  align-items: center;
}

.librarian-genAI-summary-btn-container {
  display: flex;
  width: 100%;
  box-sizing: border-box;
  justify-content: flex-end;
  align-items: center;
  gap: 20px;
  padding: 8px 16px;

  &:hover {
    svg {
      cursor: pointer;
    }
  }
}

.librarian-tooltip > div,
.librarian-thumbs-up > div,
.librarian-thumbs-down > div {
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.librarian-tooltip,
.librarian-thumbs-up,
.librarian-thumbs-down {
  position: relative;
  display: inline-block;
}

.librarian-tooltip .librarian-tooltiptext,
.librarian-thumbs-up .librarian-thumbsuptext,
.librarian-thumbs-down .librarian-thumbsdowntext {
  visibility: hidden;
  width: max-content;
  max-width: 240px;
  background-color: #313131;
  color: #fff;
  text-align: center;
  font-family: "NVIDIA Sans", "NVIDIA Sans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 12px;
  font-style: normal;
  font-weight: 500;
  line-height: 1;
  padding: 8px 16px;
  border: 1px solid #636363;
  border-radius: 4px;
  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.12);
  position: absolute;
  z-index: 1080;
  bottom: calc(100% + 8px);
  left: 50%;
  transform: translateX(-50%);
  margin-left: 0;
  opacity: 0;
  transition: opacity 0.3s;
}

/* .librarian-tooltip .librarian-tooltiptext::after, .librarian-thumbs-up .librarian-thumbsuptext::after, .librarian-thumbs-down .librarian-thumbsdowntext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
} */

.librarian-tooltip:hover .librarian-tooltiptext,
.librarian-thumbs-up:hover .librarian-thumbsuptext,
.librarian-thumbs-down:hover .librarian-thumbsdowntext {
  visibility: visible;
  opacity: 1;
}

/* Mobile devices */
@media only screen and (max-width: 639px) {
  .librarian-genai-container {
    max-width: 460px;
  }

  .librarian-show-more-btn-container {
    flex-direction: column;
    text-align: center;
  }

  .librarian-show-more-btn-sub-container {
    flex-direction: column;
    text-align: center;
    align-items: center;
  }

  .librarian-show-less-text,
  .librarian-ai-summery-text.librarian-summery-measured.librarian-show-less-text {
    max-height: calc(240px + var(--librarian-btn-bar-height, 130px) + 12px);
  }

  .librarian-disclaimer-container {
    margin-top: 5px;
  }
}

/* Tablet devices */
@media only screen and (min-width: 640px) and (max-width: 1023px) {
  .librarian-show-more-btn-container {
    flex-direction: column;
    text-align: center;
  }

  .librarian-show-more-btn-sub-container {
    flex-direction: column;
    text-align: center;
    align-items: center;
  }

  .librarian-show-less-text,
  .librarian-ai-summery-text.librarian-summery-measured.librarian-show-less-text {
    max-height: calc(203px + var(--librarian-btn-bar-height, 120px) + 12px);
  }

  .librarian-disclaimer-container {
    margin: auto;
    margin-top: 5px;
  }
}

/*Laptop*/
@media only screen and (min-width: 1024px) and (max-width: 1349px) {
  .librarian-genai-container {
    max-width: 790px;
  }
}

/*Desktop*/
@media only screen and (min-width: 1350px) {
  .librarian-genai-container {
    max-width: 900px;
  }
}

.librarian-search-refinements {
  margin-top: 30px;
  align-self: flex-start;
}

.librarian-search-refinements-header {
  font-size: 15px;
  font-style: normal;
  font-weight: 700;
  line-height: 166.7%;
  padding: 0 !important
}

.librarian-search-refinements-items {
  color: #EEE;
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  line-height: 100%;
  border-bottom: 1px solid #76B900;
  cursor: pointer;
  padding-top: 15px;
  width: fit-content
}

.librarian-search-refinements-container {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  padding-top: 16px;
}

.librarian-search-refinements-capsule {
  color: #222;
  font-size: 11px;
  font-style: normal;
  font-weight: 700;
  line-height: 15.4px;
  border-radius: 18px;
  border: 1px solid #808080;
  padding: 5px 10px;
  align-items: center;
  cursor: pointer;
}

.librarian-disclaimer-container {
  font-size: 10px !important;
  line-height: 130%;
  p{
    color: #CCC !important;
    font-size: 10px !important;
    padding: 0;
  }
}

.librarian-disclaimer-container a {
  text-decoration-thickness: 1px !important;
  &:hover{
    text-decoration-color: #fff;
  }
}

.librarian-generating-dots > span {
  display: inline-block;
  opacity: 0;
  animation: librarian-generating-dot 1.2s ease-in-out infinite;
}

.librarian-generating-dots > span:nth-child(2) {
  animation-delay: 0.2s;
}

.librarian-generating-dots > span:nth-child(3) {
  animation-delay: 0.4s;
}

@keyframes librarian-generating-dot {
  0%, 80%, 100% { opacity: 0; }
  40% { opacity: 1; }
}</style>
<style>img {
    border: 0;
}

.librarian-search-results-wrapper {
    padding-top: 30px;
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .librarian-search-results-wrapper .search-results-item {
        padding-bottom: 40px;
    }

    .librarian-search-results-wrapper .search-results-item:last-child {
        padding-bottom: 0px !important;
    }
}


/* tablet, laptop and desktop viewport */
@media screen and (min-width: 640px) {
    .librarian-search-results-wrapper .search-results-item {
        padding-bottom: 30px;
    }

    .librarian-search-results-wrapper .search-results-item:last-child {
        padding-bottom: 0px !important;
    }
}

.librarian-search-results-wrapper .promoted-item {
    align-content: center;
    align-items: flex-start;
    display: flex;
    flex-direction: row;
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
    .librarian-search-results-wrapper .promoted-item .event-item-image {
        min-width: 30%;
        width: 30%;
    }

    .librarian-search-results-wrapper .event-item-image {
        display: inline-block;
        padding: 0 30px 0 0;
        height: auto;
    }
}

/* only tablet viewport */
@media screen and (min-width: 640px) and (max-width: 1023px) {
    .librarian-search-results-wrapper .promoted-item .event-item-image {
        min-width: 50%;
        width: 50%;
    }

    .librarian-search-results-wrapper .event-item-image {
        display: inline-block;
        padding: 0 15px 0 0;
        height: auto;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .librarian-search-results-wrapper .promoted-item .event-item-image {
        min-width: 50%;
        width: 50%;
    }

    .librarian-search-results-wrapper .event-item-image {
        display: none;
        padding: 0 30px 0 0;
        height: auto;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .librarian-search-results-text {
        max-width: 100%
    }
}

/* only tablet viewport */
@media screen and (min-width: 640px) and (max-width: 1023px) {
    .librarian-search-results-text {
        max-width: 50%
    }
}

.librarian-item-image {
    background-color: #ccc;
    height: 0;
    padding-bottom: 56.25%;
    position: relative;
    width: 100%;
}

.librarian-item-image img.thumbnail {
    height: 100%;
    left: 0;
    opacity: 0;
    position: absolute;
    transition: opacity 1s ease;
    width: 100%;
}

.librarian-item-image img.thumbnail.in {
    opacity: 1;
}

.librarian-search-results-wrapper .search-results-item>div {
    line-height: 1.25em;
}

.librarian-search-results-wrapper .promoted-item .recommended {
    border: 2px solid #ccc;
    color: #000;
    display: inline-block;
    font-size: 14px;
    line-height: 24px;
    padding: 0 5px;
    font-weight: 500;
}

/* mobile and tablet viewport */
@media screen and (max-width: 1023px) {
    .librarian-search-results-wrapper .promoted-item .recommended {
        margin-bottom: 10px;
    }
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
    .librarian-search-results-wrapper .promoted-item .recommended {
        margin-bottom: 15px;
    }
}

.librarian-search-results-wrapper .search-results-item .librarian-item-title {
    font-weight: bold;
}

/* mobile and tablet viewport */
@media screen and (max-width: 1023px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-title {
        padding-bottom: 5px;
    }
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-title {
        padding-bottom: 10px;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-title a {
        font-size: 20px;
        line-height: normal;
    }
}

/* tablet, laptop and desktop viewport */
@media screen and (min-width: 640px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-title a {
        font-size: 20px;
        line-height: normal;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-summary {
        font-size: 16px;
        line-height: 24px;
        padding-bottom: 5px;
        color: #1a1a1a;
    }
}

/* tablet, laptop and desktop viewport */
@media screen and (min-width: 640px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-summary {
        font-size: 16px;
        line-height: 24px;
        padding-bottom: 10px;
        color: #1a1a1a;
    }
}

.librarian-search-results-wrapper .search-results-item .librarian-item-footer {
    padding-bottom: 0;
    overflow-x: hidden;
    text-overflow: ellipsis;
    font-size: 14px;
    line-height: 22px;
}

.librarian-search-results-wrapper .search-results-item .librarian-item-footer .librarian-item-footer-inner {
    white-space: wrap;
    clip: auto;
}

.librarian-search-results-wrapper .search-results-item .librarian-item-footer .librarian-item-footer-inner .librarian-item-link a {
    color: #999;
    text-decoration: none;
}

.librarian-result-item {
    text-decoration: none !important;
}</style>
<style>.librarian-no-results-container {
  width: 100%;
}

.librarian-no-results-text {
  font-size: 22px;
  line-height: 175%;
}

.librarian-no-results-term {
  font-weight: bold;
}

.librarian-no-results-list {
  list-style-type: disc;
  padding-left: 15px;
  font-size: 15px;
  line-height: 25px;
  color: #666 !important;
}
.librarian-no-results-list li span{
  color: #000 !important;
}

.librarian-no-result-tips {
  font-size: 15px;
  font-weight: 700;
}

.librarian-search-tips-container {
  background-color: #f7f7f7;
  padding: 20px 30px;  
}
</style>
<style>.librarian-show-all-btn {
  color: #000;
  font-size: 15px;
  font-style: normal;
  font-weight: 700;
  line-height: 25px;
  background-color: transparent;
  border: none;
  cursor: pointer;
  padding-left: 0px !important;
  display: flex;
  align-items: center;
  width: 100%;
  gap: 12px;
  margin-top: -15px;
  line-height: 1em;
}

.librarian-show-all-btn::before,
.librarian-show-all-btn::after {
  content: "";
  flex: 1;
  height: 1px;
  background-color: #ccc;
}

.librarian-more-less-btn {
  color: #000;
  font-size: 15px;
  font-style: normal;
  font-weight: 700;
  line-height: 25px;
  background-color: transparent;
  border: none;
  cursor: pointer;
  display: inline-block;
  text-decoration: underline;
  text-align: center;
  padding: 0;
  padding-left: 15px;
  line-height: 1em;
}

.librarian-hide-filters {
  max-height: 0;
  display: none;
  transition: max-height 1s ease-in-out;
  transition: height 0.2s;
}

.librarian-filters-container {
  width: 100%;
  justify-content: space-around;
  background-color: #F7F7F7;
  display: flex;
  flex-direction: column;
  opacity: 1;
  /* max-height: 5000px; */
  transition: opacity 0.5s ease, max-height 0.5s ease;
  overflow: hidden;
  margin-top: 30px;
}

.librarian-filters-container-items {
  display: flex;
  padding: 30px;
}

.librarian-filters-container-hide {
  opacity: 0;
  max-height: 0;
  margin-top: 0px;
  transition: opacity 0.5s ease, max-height 0.5s ease, margin-top 0.5s ease;
}

.librarian-filter-title {
  font-size: 18px !important;
  font-style: normal;
  font-weight: 700;
  line-height: 125%;
}

.librarian-filters-reset-apply-container {
  background-color: transparent !important;
  margin-top: 8px !important;
  display: flex !important;
  justify-content: center !important;
  gap: 16px !important;
  margin-top: 15px !important;
}

.librarian-reset-btn {
  cursor: pointer !important;
  background-color: #fff !important;
  border-radius: 0 !important;
  outline: none !important;
  font-weight: 700 !important;
  font-size: 14px !important;
  padding: 6px !important;
  color: #000 !important;
  flex: 1 !important;
  max-width: 130px !important;
  text-transform: none !important;
  line-height: normal !important;
  text-align: center !important;
  border: 2px solid  #76B900
}

.librarian-reset-btn:hover {
  background-color: #f2f2f2 !important;
}

.librarian-apply-btn {
  cursor: pointer !important;
  background-color: #76b900 !important;
  border: 2px solid #76b900 !important;
  border-radius: 0 !important;
  outline: none !important;
  font-weight: 700 !important;
  font-size: 14px !important;
  padding: 6px !important;
  color: #000 !important;
  flex: 1 !important;
  max-width: 160px !important;
  text-transform: none !important;
  line-height: normal !important;
  text-align: center !important;
}

.librarian-apply-btn:hover {
  background-color: #659f00 !important;
  border-color: #659f00 !important;
}

.librarian-filter-items-container {
  padding: 30px 0;
}

.librarian-checkbox-item {
  display: flex;
  align-items: flex-start;
}

.librarian-checkbox-label {
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  line-height: 140%;
  padding-left: 15px;
  cursor: pointer;
  color: #000 !important;
}

.librarian-checkbox-label-disabled {
  color: #999 !important;
  cursor: auto;
}

.librarian-select-deselect-top {
  padding-top: 15px;
}

.librarian-site-filters-list {
  padding: 30px 0 0 0;
}

.librarian-mobile-filters-content {
  width: 100%;
}

.librarian-checkbox {
  width: 16px;
  height: 16px;
  accent-color: #fff !important;
  cursor: pointer;
  appearance: none;
  content: '' !important;
  -webkit-appearance: none;
  border-radius: 0;
  background-color: transparent !important;
  position: relative;
  margin:2px;

  @supports (-webkit-touch-callout: none) {
    content: '';
    accent-color: #fff !important;
  }
}

.librarian-checkbox-span {
  width: 16px;
  height: 16px;
  border-radius: 0;
  position: relative;
  margin:2px;
  cursor: pointer;
}

.librarian-checkbox:disabled {
  cursor: auto;
}

.librarian-checkbox:checked::before {
  outline: 2px solid #999;
  content: '\f00c';
  display: block;
  text-align: center;
  color: #666;
  font-family: "Font Awesome 6 Pro";
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: 125%;
}

.librarian-checkbox:not(:checked) {
  outline: 2px solid #999;
  border-radius: 0px;

  @supports (-webkit-touch-callout: none) {
    outline: 2px solid #999;
    border: none;
    -webkit-appearance: none;
    border-radius: 0px;
  }
}

.librarian-filter-title-container {
  display: flex;
  justify-content: space-between;
  padding-bottom: 12px;
  border-bottom: 2px solid #dedfdf;
}

.librarian-arrow-icon {
  display: inline-block;
  transition: transform 0.3s ease;
  cursor: pointer;
}

.librarian-arrow-icon-rotated {
  transform: rotate(180deg);
}

.librarian-filter-headings {
  width: 220px;
  display: flex;
  flex-direction: column;
  gap: 12px;
  padding-bottom: 30px;
}

.librarian-items-container {
  display: flex;
  column-gap: 40px;
  row-gap: 0;
  flex-wrap: wrap;
  padding-top: 30px
}

.librarian-filter-headings p {
  font-weight: bold;
  font-size: 15px;
  color: #000;
  margin: 0;
  padding: 0 !important;
  line-height: 1em;
}

.librarian-select-deselect {
  cursor: pointer;
  color: #000;
  font-family: "NVIDIA Sans";
  font-size: 14px;
  font-style: normal;
  font-weight: 700;
  line-height: 166.7%;
  text-decoration-style: solid;
  text-decoration-skip-ink: none;
  text-decoration-thickness: auto;
  text-underline-offset: auto;
  text-underline-position: from-font;
}

.librarian-checkbox-all {
  display: flex;
  align-items: center;
  cursor: pointer;
}

.librarian-select-deselect-label {
  font-weight: 700;
  text-decoration: none;
}

/*Mobile*/
@media only screen and (max-width: 639px) {
  .librarian-filters-container-items {
    justify-content: center;
    padding-bottom: 0px !important;
  }
}

/*Tablet*/
@media only screen and (min-width: 640px) and (max-width: 1023px) {
  .librarian-filters-container-items {
    justify-content: center;
  }

  /* .librarian-checkbox-item {
    display: block;
  } */
}

/*Laptop and Desktop*/
@media only screen and (min-width: 1024px) {
  .librarian-filters-container {
    display: none !important;
  }

  .librarian-filters-reset-apply-container {
    justify-content: flex-start !important;
    margin: 15px !important;
  }

  .librarian-reset-btn,
  .librarian-apply-btn {
    flex: none !important;
    min-width: 100px !important;
  }
}</style>
<style>.librarian-notfound-container {
  text-align: center;
  padding: 80px 20px;
  background-color: #fff;
  color: #000;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 40px;
}

.librarian-notfound-status {
  color: #000;
  font-size: 20px !important;
  font-weight:700;
  line-height: 25px !important;
}

.librarian-notfound-title {
  color: #000;
  font-size: 48px;
  font-weight:700;
  line-height: 60px;
}

.librarian-notfound-description {
  font-size: 15px !important;
  color: #000;
  width: 740px;
  max-width: 90%;
  margin: auto;
  font-weight: 400;
  line-height: 25px;
}

.librarian-notfound-button {
  background-color: #76b900;
  color: #000;
  border: none;
  outline: none;
  text-decoration: none !important;
  padding: 13px 15px;
  font-weight: 700 !important;
  font-family: 18px !important;
  display: inline-block;
  &:hover {
    background-color: #91c733;;
  }
}

/* Tablet devices */
@media only screen and (min-width: 640px) and (max-width: 1023px) {
  .librarian-notfound-title{
    font-size: 36px !important;
    line-height: 45px !important;
  }
}

/* Mobile devices */
@media only screen and (max-width: 639px){
  .librarian-notfound-title{
    font-size: 36px !important;
    line-height: 45px !important;
  }
}</style>
<style>/* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: NVIDIA-NALA, Arial, Helvetica, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

ul{
    list-style-type: none;
    padding-left: 0px;
}

a {
    color: #000000;
} */</style>
<style>.librarian-overlay-container {
  background: #161616;
  box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.19), 0px 0px 2px 0px rgba(0, 0, 0, 0.19);
  padding: 60px 0;
  text-align: center;
  width: 100%;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.librarian-overlay-text {
  font-size: 36px !important;
  font-weight: 700 !important;
  line-height: 45px !important;
  color: #fff !important;
}

@media only screen and (max-width: 1199px) {
  .librarian-overlay-text {
    font-size: 28px !important;
    line-height: 35px !important;
  }
}

@media only screen and (max-width: 1023px) {
  .librarian-overlay-text {
    font-size: 24px !important;
    line-height: 30px !important;
  }
}

.librarian-overlay-text-container {
  margin: 0 auto;
}

.librarian-overlay-topWrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 30px;
}

.librarian-overlay {
  position: fixed;
  top: var(--nv-global-nav-pull-up, 44px);
  left: 0;
  height: calc(100% - 40px);
  width: 100%;
  min-height: 50%;
  background-color: transparent;
  box-shadow: 0 2px 4px #000d;
  background-color: #0009;
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
  z-index: 1000;
}

.librarian-inline {
  width: 100%;
  display: block;
}

.librarian-inline .librarian-overlay-container.librarian-inline-container {
  position: relative;
  width: 100%;
  max-width: 100%;
  padding: 60px 0;
  box-shadow: none;
}

@media only screen and (max-width: 1023px) {
  .librarian-overlay-container,
  .librarian-inline .librarian-overlay-container.librarian-inline-container {
    padding: 30px 0;
  }
}

@media only screen and (max-width:639px){
  .librarian-overlay-container,
  .librarian-inline .librarian-overlay-container.librarian-inline-container {
    padding-top: 0 !important;
  }
}

.librarian-show-overlay {
  display: block;
}

.librarian-close-button {
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 30px;
  cursor: pointer;
}

.librarian-search-input-home {
  max-width: 910px;
}

.librarian-search-ai-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  flex-shrink: 0;
}

.librarian-search-input-container .librarian-search-input {
  flex: 1;
  background-color: transparent !important;
  color: #fff !important;
  border: none !important;
  outline: none !important;
  font-size: 16px;
  height: 100%;
  caret-color: #d4c4a8;
}

.librarian-search-input-container .librarian-search-input::placeholder {
  color: #b3b3b3;
  opacity: 1;
}

.librarian-suggestedPillsWrapper {
  /* overflow-x: scroll;
  scrollbar-width: none; */
  width: 731px;
  margin: 0 auto;
  flex-direction: column;
  text-align: center;
}

.librarian-try-searches-header {
  margin: 30px auto 0;
  color: #fff !important;
  font-size: 15px;
  font-style: normal;
  font-weight: 700;
  line-height: 166.7%;
  padding: 0 !important;
  background: transparent;
  border: none;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.librarian-try-searches-header:focus-visible {
  outline: 2px solid #d4c4a8;
  outline-offset: 4px;
  border-radius: 4px;
}

.librarian-try-searches-chevron {
  display: inline-flex;
  align-items: center;
  transition: transform 0.25s ease;
}

.librarian-try-searches-chevron.librarian-rotated {
  transform: rotate(180deg);
}

.librarian-suggestedPillsContainer {
  /* scrollbar-width: none;
  -ms-overflow-style: none; */
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

/* .librarian-suggestedPillsContainer::-webkit-scrollbar {
  display: none;
} */


.librarian-suggestedPills {
  color: #EEE;
  font-size: 11px;
  font-style: normal;
  font-weight: 700;
  line-height: 15.4px;
  border-radius: 18px;
  border: 1px solid #808080;
  padding: 5px 10px;
  align-items: center;
  cursor: pointer;
  margin-right: 16px;
  margin-top: 16px;
}

.librarian-hidden-div{
  display: none;
}

@media only screen and (max-width:639px) {
  .librarian-hidden-div{
    display: block;
    height: 100px;
  }
}

/* Mobile devices */
@media (max-width:639px) {
  .librarian-overlay-topWrapper {
    margin-top: 60px;
  }
}

@media only screen and (max-width:399px) {
  .librarian-overlay-container{
    min-height: none;
    overflow: scroll;
  }
}
@media only screen and (max-width: 639px) {
  .librarian-overlay-container,
  .librarian-inline .librarian-overlay-container.librarian-inline-container {
    padding-left: 16px;
    padding-right: 16px;
  }

  .librarian-overlay-container .general-container {
    max-width: 630px !important;
    width: 100% !important;
    padding: 0px !important;
  }

  .librarian-search-input-home {
    max-width: 455px;
  }

  .librarian-search-input {
    font-size: 16px;
  }

  .librarian-suggestedPillsWrapper {
    width: 100%;
    max-width: 100%;
  }
}

/* Tablet devices */
@media only screen and (min-width: 640px) and (max-width: 1023px) {
  .librarian-overlay-container .general-container {
    max-width: 630px !important;
    width: 100% !important;
  }

  .librarian-search-input-home {
    max-width: 620px;
  }

  .librarian-search-input {
    font-size: 16px;
  }

  .librarian-suggestedPillsWrapper {
    width: 630px;
    max-width: 100vw;
  }
}


/* Laptop devices */
@media only screen and (min-width: 1024px) and (max-width: 1349px) {
  .librarian-overlay-container .general-container {
    max-width: 954px !important;
    width: 100% !important;
  }

  .librarian-search-input-home {
    max-width: 790px;
  }
}

/* Desktop devices */
@media only screen and (min-width: 1350px) {
  .librarian-overlay-container .general-container {
    max-width: 1290px !important;
    width: 100% !important;
  }

  .librarian-search-input-home {
    max-width: 910px;
  }
}

#paperplane-icon-btn {
  border: none;
  background: #76b900;
  width: 30px;
  height: 30px;
  border-radius: 2px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  flex-shrink: 0;
  transition: background 0.2s ease, opacity 0.2s ease;
}

#paperplane-icon-btn:hover:not(:disabled) {
  background: #8fd400;
}

#paperplane-icon-btn:disabled {
  cursor: auto;
  background: #ccc;
  opacity: 0.7;
  cursor: not-allowed;
}


.librarian-search-input-container .librarian-search-icon[aria-label="cross-button"] {
  background: transparent;
  border: none;
  color: #b3b3b3;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 4px;
  margin-right: 4px;
}

.librarian-search-input-container .librarian-search-icon[aria-label="cross-button"]:hover {
  color: #fff;
}</style>
<style>/* :root {
  --app-font: NVIDIA Sans, Arial, Helvetica, sans-serif;
  --padding-tb-30: 30px 0px;
  --padding-tb-15: 15px 0px;
  --brand-color: #76b900;
} */

/* body {
  font-family: NVIDIA-NALA, Arial, Helvetica, sans-serif;
} */
</style>
<style> @media(min-width:1024px) and (max-width:1349px){ .navigation .global-nav .desktop-nav .nav-header-container .nv-menu .nv-menu-list.left .nv-menu3-container ul.menu-level-3 li.menu-level-3.menu-col-4 { width: calc(63% + 10px); } }
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) { .navigation .global-nav .sub-brand-nav .brand-nav-left { opacity: 1; } } 


  .navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab8:checked~.menu3-container .nv-level3-tab8 {
  background-color:#eee;
  opacity:1;
  -webkit-transform:rotateX(0);
  transform:rotateX(0);
  transition:.2s ease-out;
  -webkit-transition:.2s ease-out;
  -o-transition:.2s ease-out;
  visibility:visible;
  width:100%
}
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab8:checked ~ .nv-level2-list-container .nv-menu-level2-list .slider-menu {
  opacity: 1;
}
  
  .navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab9:checked~.menu3-container .nv-level3-tab9 {
  background-color:#eee;
  opacity:1;
  -webkit-transform:rotateX(0);
  transform:rotateX(0);
  transition:.2s ease-out;
  -webkit-transition:.2s ease-out;
  -o-transition:.2s ease-out;
  visibility:visible;
  width:100%
}
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab9:checked ~ .nv-level2-list-container .nv-menu-level2-list .slider-menu {
  opacity: 1;
}
  
</style>
<style id="_6si-shortening">/* This stylesheet is created by 6sense */
            .mktoForm .mktoFormRow:has(._6si_sff_filled) {
                display: none;
            }
            .mktoForm .mktoFormRow ._6si_sff_filled {
                display: none;
            }
            .hs-form .hs-form-field:has(._6si_sff_filled) {
                display: none;
            }
            .hs-form .hs-form-field ._6si_sff_filled {
                display: none;
            }
            form .form-field:not(.error):has(._6si_sff_filled) {
                display: none;
            }
            form .form-field:not(.error) ._6si_sff_filled {
                display: none;
            }
            .elq-form .row:has(._6si_sff_filled) {
                display: none;
            }
            .elq-form .row ._6si_sff_filled {
                display: none;
            }
            .elq-form .field-wrapper:has(._6si_sff_filled) {
                display: none;
            }
            .elq-form .field-wrapper ._6si_sff_filled {
                display: none;
            }</style>
<script src="../../assets/www.nvidia.com/etc.clientlibs/clientlibs/granite/jquery.min.cee8557e8779d371fe722bbcdd3b3eb7.js"></script>
<script src="../../assets/www.nvidia.com/etc.clientlibs/clientlibs/granite/utils.min.4a192b590a2c2926fb000264370c0588.js"></script>
<script src="../../assets/www.nvidia.com/etc.clientlibs/foundation/clientlibs/shared.min.e9d9a3990d7779c2e8e3361187f3d36b.js"></script>
<script src="../../assets/www.nvidia.com/etc.clientlibs/nvidiaweb/clientlibs/clientlib-webfoundation.min.efc0fdf7ab6cfd024ef52932bbdebd3a.js"></script>
<script type="text/javascript">

var NVIDIAGDC = NVIDIAGDC || {};

;(function ( nvidiaGDC ){
  

    nvidiaGDC.addProperty = function(obj, name, val){
        if (!obj && !name){
            return;
        }
        
        nvidiaGDC[obj] = nvidiaGDC[obj] || {};
        
        if(typeof val != "undefined" && val != null){
            if(!nvidiaGDC[obj].hasOwnProperty(name) || !nvidiaGDC[obj][name]){
                nvidiaGDC[obj][name] = val;
            }    
        }
    };


   nvidiaGDC.addProperty('Accounts', 'LoginPage', 'https://www.nvidia.com/en-us/account/');
   nvidiaGDC.addProperty('Accounts', 'LoginGatePage', 'https://www.nvidia.com/en-us/account/login-gate/');
	nvidiaGDC.addProperty('Accounts', 'accountsJarvisSrvcBase', 'https://accounts.nvgs.nvidia.com');
	nvidiaGDC.addProperty('Accounts', 'accountsJarvisHeaderMagicValue', '');
	nvidiaGDC.addProperty('Accounts', 'accountsJarvisHeaderCFGRefereID', 'Account Mini-Site');
	nvidiaGDC.addProperty('apps', 'endpoint', 'https://api-prod.nvidia.com');
	nvidiaGDC.addProperty('web', 'env', 'p-prod');
    nvidiaGDC.addProperty('web', 'q1', '');
    nvidiaGDC.addProperty('web', 'q2', '');
    nvidiaGDC.addProperty('web', 'q3', '');
    var genai="true";
    if(genai===""){
    	genai="true";
    }
    nvidiaGDC.addProperty('ai', 'gen', genai);

})(NVIDIAGDC);
</script>
<script src="../../assets/www.nvidia.com/etc.clientlibs/nvidiaweb/clientlibs/clientlib-preload.min.b4fa5377a892c2f813b44eff3ffe516a.js"></script>
<script type="text/javascript">

var nvidiaGDClogqueue = [];
var nvidiaGDClog = function() {
    nvidiaGDClogqueue.push(arguments)
};

;(function ( nvidiaGDC ){
    
    nvidiaGDC.SC = nvidiaGDC.SC || {};
    nvidiaGDC.SC.vars = nvidiaGDC.SC.vars || {};
    nvidiaGDC.SC.vars.pageTemplate = "/conf/nvidiaweb/settings/wcm/templates/enterprise-template".toLowerCase();
    

    var nvidiaGDCFunctionQueue = function(){
                this.queue = [];
            };
            nvidiaGDCFunctionQueue.prototype.addToQueue = function(funcItem){
                nvidiaGDClog("funcqueue/add");
                nvidiaGDClog(funcItem);
                this.queue.push(funcItem);
            };
            nvidiaGDCFunctionQueue.prototype.clearQueue = function(){
                this.queue.length = 0;
            };
            nvidiaGDCFunctionQueue.prototype.executeQueue = function(){

                var nQueueLength = this.queue.length;
                var sTargetID,
                    sMethodName,
                    aParams,
                    $targetElement,
                    fMethod;

                for (var i = 0; i < this.queue.length; i++) {
                    try {
                        var funcItem = this.queue[i];

                        if (typeof funcItem === 'object') {
                            nvidiaGDClog("funcqueue/object: " + funcItem['method']);
                                sTargetID = funcItem['id'];
                                sMethodName = funcItem['method'];
                                aParams = funcItem['params'];
                                $targetElement = $(document.getElementById(sTargetID));
                                fMethod = $targetElement[sMethodName];

                            fMethod.apply($targetElement, aParams);

                        } else if (typeof funcItem === 'string' && nvidiaGDC.Func) {
                            nvidiaGDClog("funcqueue/string: " + funcItem);
                            if (typeof nvidiaGDC.Func[funcItem] === 'function') {
                                nvidiaGDC.Func[funcItem].call();
                            }

                        }
                    } catch(err) {
                        if (typeof console == "object") {
                            nvidiaGDClog("Error running script - " + err + " (Has plugin been included?)");
                            nvidiaGDClog({
                                "sTargetID" : sTargetID,
                                "sMethodName" : sMethodName,
                                "aParams" : aParams,
                                "$targetElement" : $targetElement,
                                "fMethod" : fMethod
                            });
                        }
                    }
                }
                this.clearQueue();
            };

            nvidiaGDC.funcQueue = nvidiaGDC.funcQueue || new nvidiaGDCFunctionQueue();
     
})(NVIDIAGDC);


</script>
</head>
    
	    
    	
    	
	    
    <body class="body-page  nv-page-body theme-en-us theme-deeplearning  enterprise page basicpage" style="overflow: hidden auto;">
    	
        
    	

                      

	<header id="main-header">
<div class="meganavigation navigation">
<!-- SVG SYMBOL DEFINITIONS -->
<svg class="hide" style="display: none;" xmlns="http://www.w3.org/2000/svg">
<symbol id="n24-nvidia-logo" viewBox="0 0 108.472 20">
<title id="nvidia_logo_desktop">NVIDIA Home</title>
<desc>NVIDIA Home</desc>
<path d="M1072.628,253.918v-.3h.192c.105,0,.248.008.248.136s-.073.163-.2.163h-.243m0,.211h.129l.3.524h.327l-.33-.545a.3.3,0,0,0,.311-.323c0-.285-.2-.377-.53-.377h-.482v1.245h.276v-.524m1.4-.1a1.2,1.2,0,1,0-1.2,1.157,1.14,1.14,0,0,0,1.2-1.157m-.347,0a.854.854,0,0,1-.855.891v0a.889.889,0,1,1,.855-.887Z" id="nvidia-logo-reg" transform="translate(-965.557 -237.878)"></path>
<path d="M463.9,151.934v13.127h3.707V151.934Zm-29.164-.018v13.145h3.74v-10.2l2.918.01a2.674,2.674,0,0,1,2.086.724c.586.625.826,1.632.826,3.476v5.995h3.624V157.8c0-5.183-3.3-5.882-6.536-5.882Zm35.134.018v13.127h6.013c3.2,0,4.249-.533,5.38-1.727a7.352,7.352,0,0,0,1.316-4.692,7.789,7.789,0,0,0-1.2-4.516c-1.373-1.833-3.352-2.191-6.306-2.191Zm3.677,2.858h1.594c2.312,0,3.808,1.039,3.808,3.733s-1.5,3.734-3.808,3.734h-1.594Zm-14.992-2.858-3.094,10.4-2.965-10.4h-4l4.234,13.127h5.343l4.267-13.127Zm25.749,13.127h3.708V151.935h-3.709ZM494.7,151.939l-5.177,13.117h3.656l.819-2.318h6.126l.775,2.318h3.969l-5.216-13.118Zm2.407,2.393,2.246,6.145h-4.562Z" id="nvidia-logo-NVIDIA" transform="translate(-399.551 -148.155)"></path>
<path d="M129.832,124.085v-1.807c.175-.013.353-.022.533-.028,4.941-.155,8.183,4.246,8.183,4.246s-3.5,4.863-7.255,4.863a4.553,4.553,0,0,1-1.461-.234v-5.478c1.924.232,2.31,1.082,3.467,3.01l2.572-2.169a6.81,6.81,0,0,0-5.042-2.462,9.328,9.328,0,0,0-1,.059m0-5.968v2.7c.177-.014.355-.025.533-.032,6.871-.232,11.348,5.635,11.348,5.635s-5.142,6.253-10.5,6.253a7.906,7.906,0,0,1-1.383-.122v1.668a9.1,9.1,0,0,0,1.151.075c4.985,0,8.59-2.546,12.081-5.559.578.463,2.948,1.591,3.435,2.085-3.319,2.778-11.055,5.018-15.44,5.018-.423,0-.829-.026-1.228-.064v2.344h18.947v-20Zm0,13.009v1.424c-4.611-.822-5.89-5.615-5.89-5.615a9.967,9.967,0,0,1,5.89-2.85v1.563h-.007a4.424,4.424,0,0,0-3.437,1.571s.845,3.035,3.444,3.908m-8.189-4.4a11.419,11.419,0,0,1,8.189-4.449v-1.463c-6.043.485-11.277,5.6-11.277,5.6s2.964,8.569,11.277,9.354v-1.555C123.731,133.451,121.643,126.728,121.643,126.728Z" data-name="Eye Mark" fill="#74b71b" id="nvidia-logo-eye-mark" transform="translate(-118.555 -118.117)"></path>
</symbol>
<symbol id="n24-menu" viewBox="0 0 24 24">
<title>Menu</title>
<desc>Menu icon</desc>
<defs>
<style>
.n24-icon-menu-bg {
	opacity: 0;
}

.n24-icon-menu-stroke {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-menu-group">
<g class="n24-icon-menu-bg" id="n24-icon-menu-boundary">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path></g>
<line class="n24-icon-menu-stroke" x1="4.5" x2="19.5" y1="7.5" y2="7.5"></line>
<line class="n24-icon-menu-stroke" x1="4.5" x2="19.5" y1="12" y2="12"></line>
<line class="n24-icon-menu-stroke" x1="4.5" x2="19.5" y1="16.5" y2="16.5"></line>
</g>
</symbol>
<symbol id="n32-menu" viewBox="0 0 32 32">
<title>Menu</title>
<desc>Menu icon</desc>
<defs>
<style>
.n32-icon-menu-cls-1, .n32-icon-menu-cls-3, .n32-icon-menu-cls-4 {
	fill: none;
}

.n32-icon-menu-cls-1, .n32-icon-menu-cls-4 {
	stroke: #666;
	stroke-width: 2px;
}

.n32-icon-menu-cls-1 {
	stroke-miterlimit: 10;
}

.n32-icon-menu-cls-2 {
	opacity: 0;
}
</style></defs>
<line class="n32-icon-menu-cls-1" data-name="Line 3b" id="n32-icon-menu-line-3b" x1="16" x2="24" y1="23" y2="23"></line>
<line class="n32-icon-menu-cls-1" data-name="Line 3a" id="n32-icon-menu-line-3a" x1="8" x2="16" y1="23" y2="23"></line>
<line class="n32-icon-menu-cls-1" data-name="Line 2b" id="n32-icon-menu-line-2b" x1="16" x2="24" y1="16" y2="16"></line>
<line class="n32-icon-menu-cls-1" data-name="Line 2a" id="n32-icon-menu-line-2a" x1="8" x2="16" y1="16" y2="16"></line>
<line class="n32-icon-menu-cls-1" data-name="Line 1b" id="n32-icon-menu-line-1b" x1="16" x2="24" y1="9" y2="9"></line>
<line class="n32-icon-menu-cls-1" data-name="Line 1a" id="n32-icon-menu-line-1a" x1="8" x2="16" y1="9" y2="9"></line>
<g class="n32-icon-menu-cls-2" id="Container">
<rect class="n32-icon-menu-cls-3" height="32" width="32"></rect>
<rect class="n32-icon-menu-cls-4" height="30" width="30" x="1" y="1"></rect>
</g>
</symbol>
<symbol id="n24-close-small" viewBox="0 0 24 24">
<title>Close</title>
<desc>Close icon</desc>
<defs>
<style>
.n24-icon-close-small-cls-1 {
	opacity: 0;
}

.n24-icon-close-small-cls-2 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-close-small">
<g id="boundary">
<g class="n24-icon-close-small-cls-1">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path>
</g>
</g>
<line class="n24-icon-close-small-cls-2" x1="7.50005" x2="16.50005" y1="7.50002" y2="16.50002"></line>
<line class="n24-icon-close-small-cls-2" x1="7.50005" x2="16.50005" y1="16.50002" y2="7.50002"></line>
</g>
</symbol>
<symbol id="n24-close" viewBox="0 0 24 24">
<title>Close</title>
<desc>Close icon</desc>
<defs>
<style>
.n24-icon-close-cls-1 {
	opacity: 0;
}

.n24-icon-close-cls-2 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-close">
<g id="boundary">
<g class="n24-icon-close-cls-1">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path>
</g>
</g>
<line class="n24-icon-close-cls-2" x1="4.5" x2="19.5" y1="4.5" y2="19.5"></line>
<line class="n24-icon-close-cls-2" x1="4.5" x2="19.5" y1="19.5" y2="4.5"></line>
</g>
</symbol>
<symbol id="n32-close" viewBox="0 0 32 32">
<title>Close</title>
<desc>Close icon</desc>
<defs>
<style>
.close-icon {
	fill: #666;
	fill-rule: evenodd;
}
</style></defs>
<path class="close-icon" d="M25,8.82,23.18,7,16,14.18,8.82,7,7,8.82,14.18,16,7,23.18,8.82,25,16,17.82,23.18,25,25,23.18,17.82,16Z" data-name="Close icon path" id="n32-icon-close-path"></path>
</symbol>
<symbol id="n24-caret-down" viewBox="0 0 24 24">
<title>Caret down icon</title>
<desc>Accordion is closed, click to open.</desc>
<defs>
<style>
.n24-icon-caret-down-cls-1 {
	opacity: 0;
}

.n24-icon-caret-down-cls-2 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-caret-down">
<g id="n24-icon-caret-down-boundary">
<g class="n24-icon-caret-down-cls-1">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path>
</g>
</g>
<polyline class="n24-icon-caret-down-cls-2" points="4.5 8.25 12 15.75 19.5 8.25"></polyline>
</g>
</symbol>
<symbol id="n32-caret-down" viewBox="0 0 32 32">
<title>Caret down icon</title>
<desc>Accordion is closed, click to open.</desc>
<path d="M1,0,8,7,1,14" data-name="Line 1" fill="none" id="n32-icon-caret-down-line-1" stroke="#666" stroke-width="2" transform="translate(22.5 11.5) rotate(90)"></path>
<g fill="none" id="n32-icon-caret-down-container" opacity="0" stroke="#666" stroke-width="2">
<rect height="32" stroke="none" width="32"></rect>
<rect fill="none" height="30" width="30" x="1" y="1"></rect>
</g>
</symbol>
<symbol id="n32-caret-up" viewBox="0 0 32 32">
<title>Caret up icon</title>
<desc>Accordion is open, click to close.</desc>
<path d="M1,0,8,7,1,14" data-name="Line 1" fill="none" id="n32-icon-caret-up-line-1" stroke="#666" stroke-width="2" transform="translate(8.5 20.5) rotate(-90)"></path>
<g fill="none" id="n32-icon-caret-up-container" opacity="0" stroke="#666" stroke-width="2">
<rect height="32" stroke="none" width="32"></rect>
<rect fill="none" height="30" width="30" x="1" y="1"></rect>
</g>
</symbol>
<symbol id="n24-caret-right-small" viewBox="0 0 24 24">
<title>Caret right icon</title>
<desc>Click to expand</desc>
<defs>
<style>
.n24-icon-caret-right-small-cls-1 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}

.n24-icon-caret-right-small-cls-2 {
	opacity: 0;
}
</style></defs>
<g id="n24-icon-caret-right-small">
<g class="n24-icon-caret-right-small-cls-2">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path>
</g>
<polyline class="n24-icon-caret-right-small-cls-1" points="9.75 16.5 14.25 12 9.75 7.5"></polyline>
</g>
</symbol>
<symbol id="n24-caret-right" viewBox="0 0 24 24">
<title>Caret right icon</title>
<desc>Click to expand</desc>
<defs>
<style>
.n24-icon-caret-right-bg {
	opacity: 0;
}

.n24-icon-caret-right-stroke {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-caret-right-icon">
<g class="n24-icon-caret-right-bg" id="n24-icon-caret-boundary">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path></g>
<polyline class="n24-icon-caret-right-stroke" points="8.25 19.5 15.75 12 8.25 4.5"></polyline>
</g>
</symbol>
<symbol id="n32-caret-right" viewBox="0 0 32 32">
<title>Caret right icon</title>
<desc>Click to expand menu.</desc>
<g fill="none" id="n32-icon-caret-right-bg" opacity="0" stroke="#666" stroke-width="2">
<rect height="32" stroke="none" width="32"></rect>
<rect fill="none" height="30" width="30" x="1" y="1"></rect>
</g>
<path d="M1,0,8,7,1,14" fill="none" id="n32-icon-caret-right-line-1" stroke="#666" stroke-width="2" transform="translate(11.5 9)"></path>
</symbol>
<symbol id="n24-caret-left-small" viewBox="0 0 24 24">
<title>Caret left icon</title>
<desc>Click to collapse menu.</desc>
<defs>
<style>
.n24-caret-left-small-cls-1 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}

.n24-caret-left-small-cls-2 {
	opacity: 0;
}
</style></defs>
<g id="n24-icon-caret-left-small">
<polyline class="n24-caret-left-small-cls-1" points="14.25 7.5 9.75 12 14.25 16.5"></polyline>
<g class="n24-caret-left-small-cls-2">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path>
</g>
</g>
</symbol>
<symbol id="n24-caret-left" viewBox="0 0 24 24">
<title>Caret left icon</title>
<desc>Click to collapse menu.</desc>
<defs>
<style>
.n24-icon-caret-left-bg {
	opacity: 0;
}

.n24-icon-caret-left-stroke {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-caret-left">
<g class="n24-icon-caret-left-bg" id="boundary">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path></g>
<polyline class="n24-icon-caret-left-stroke" points="15.75 4.5 8.25 12 15.75 19.5"></polyline>
</g>
</symbol>
<symbol id="n32-caret-left" viewBox="0 0 32 32">
<title>Caret left icon</title>
<desc>Click to collapse menu.</desc>
<path d="M1,0,8,7,1,14" data-name="line 1" fill="none" id="n32-caret-left-line-1" stroke="#666" stroke-width="2" transform="translate(20.5 23) rotate(180)"></path>
<g fill="none" id="n32-caret-left-container" opacity="0" stroke="#666" stroke-width="2">
<rect height="32" stroke="none" width="32"></rect>
<rect fill="none" height="30" width="30" x="1" y="1"></rect>
</g>
</symbol>
<symbol id="n24-cart" viewBox="0 0 24 24">
<title id="shopping_cart">Shopping Cart</title>
<desc>Click to see cart items</desc>
<defs>
<style>
.n24-icon-cart-bg {
	opacity: 0;
}

.n24-icon-cart-stroke {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-cart-icon">
<g class="n24-icon-cart-bg" id="n24-icon-cart-boundary">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path></g>
<polyline class="n24-icon-cart-stroke" points="1.5 3.75 4.894 3.75 7.707 14.25 16.5 14.25"></polyline>
<circle class="n24-icon-cart-stroke" cx="8.25" cy="18.75001" r="1.5"></circle>
<circle class="n24-icon-cart-stroke" cx="15.75" cy="18.75001" r="1.5"></circle>
<polyline class="n24-icon-cart-stroke" points="5.295 5.25 18.714 5.25 17.142 11.25 6.903 11.25"></polyline>
</g>
</symbol>
<symbol id="n24-search" viewBox="0 0 24 24">
<title id="search">Search icon</title>
<desc>Click to search</desc>
<defs>
<style>
.n24-icon-search-bg {
	opacity: 0;
}

.n24-icon-search-fill {
	fill: #666;
}

.n24-icon-search-stroke {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-search-icon">
<g class="n24-icon-search-bg" id="n24-icon-search-boundary">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path></g>
<path class="n24-icon-search-fill" d="M9.9,4.05A5.85,5.85,0,1,1,4.05,9.9,5.8566,5.8566,0,0,1,9.9,4.05m0-1.5A7.35,7.35,0,1,0,17.25,9.9,7.35,7.35,0,0,0,9.9,2.55Z"></path>
<line class="n24-icon-search-stroke" x1="15" x2="19.875" y1="15" y2="19.875"></line>
</g>
</symbol>
<symbol id="n24-user-circle" viewBox="0 0 24 24">
<defs>
<style>
.n24-user-circle-cls-1 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}

.n24-bounds {
	fill: none;
}
</style></defs>
<rect class="n24-bounds" height="24" id="n24-icon-user-circle-bounds" width="24"></rect>
<g id="n24-icon-user-circle">
<circle class="n24-user-circle-cls-1" cx="12" cy="12" id="user-circle" r="9.75"></circle>
<polyline class="n24-user-circle-cls-1" id="user-body" points="17.55 20.01 16.34 15.48 7.66 15.48 6.45 20.01"></polyline>
<circle class="n24-user-circle-cls-1" cx="12" cy="9.91" id="user-head" r="3.48"></circle>
</g>
</symbol>
</svg>
<nav class="global-nav" id="meganavigation55c1b63f_f63e_4bd0_bb34_3be93688ea7b">
<!-- Geo Locator Starts -->
<div class="geo-locator hide">
<div class="geo-locator-container">
<div class="geo-locator-text">
<p>Visit your regional NVIDIA website for local content, pricing, and where to buy partners specific to your country.</p>
</div>
<div class="geo-locator-actions">
<div class="geo-locator-dropdown">
<select aria-label="Select your country" id="country-selector">
<option data-country="ar" value="/es-la/">Argentina</option>
<option data-country="au" value="/en-au/">Australia</option>
<option data-country="be-nl" value="/nl-nl/">België (Belgium)</option>
<option data-country="be-fr" value="/fr-be/">Belgique (Belgium)</option>
<option data-country="br" value="/pt-br/">Brasil (Brazil)</option>
<option data-country="ca" value="/en-us/">Canada</option>
<option data-country="cz" value="/cs-cz/">Česká Republika (Czech Republic)</option>
<option data-country="cl" value="/es-la/">Chile</option>
<option data-country="co" value="/es-la/">Colombia</option>
<option data-country="dk" value="/da-dk/">Danmark (Denmark)</option>
<option data-country="de" value="/de-de/">Deutschland (Germany)</option>
<option data-country="es" value="/es-es/">España (Spain)</option>
<option data-country="fr" value="/fr-fr/">France</option>
<option data-country="in" value="/en-in/">India</option>
<option data-country="it" value="/it-it/">Italia (Italy)</option>
<option data-country="mx" value="/es-la/">México (Mexico)</option>
<option data-country="me" value="/en-me/">Middle East</option>
<option data-country="nl" value="/nl-nl/">Nederland (Netherlands)</option>
<option data-country="no" value="/nb-no/">Norge (Norway)</option>
<option data-country="at" value="/de-at/">Österreich (Austria)</option>
<option data-country="pe" value="/es-la/">Peru</option>
<option data-country="pl" value="/pl-pl/">Polska (Poland)</option>
<option data-country="eu" value="/en-eu/">Rest of Europe</option>
<option data-country="ro" value="/ro-ro/">România (Romania)</option>
<option data-country="sg" value="/en-sg/">Singapore</option>
<option data-country="fi" value="/fi-fi/">Suomi (Finland)</option>
<option data-country="se" value="/sv-se/">Sverige (Sweden)</option>
<option data-country="tr" value="/tr-tr/">Türkiye (Turkey)</option>
<option data-country="gb" value="/en-gb/">United Kingdom</option>
<option data-country="us" value="/en-us/">United States</option>
<option data-country="kr" value="/ko-kr/">대한민국 (South Korea)</option>
<option data-country="cn" value="/zh-cn/">中国大陆 (Mainland China)</option>
<option data-country="tw" value="/zh-tw/">台灣 (Taiwan)</option>
<option data-country="jp" value="/ja-jp/">日本 (Japan)</option>
</select>
<span class="fa-light fa-chevron-down"></span>
</div>
<div class="geo-locator-cta">
<div class="nv-button button nv-button-small nv-no-left-padding nv-no-right-padding nv-no-top-padding nv-no-bottom-padding">
<div class="nv-button-standard button-left button-lap-left button-tab-left button-mob-left">
<a class="btn-content btncta" href="/" rel="noopener noreferrer">
<span class="btn-text">Continue</span>
</a>
</div>
</div>
<button class="close-button">
<span class="fa-light fa-xmark-large"></span>
</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    (() => {
      const countrySelector = document.querySelector('#country-selector');
      const GEO_LOCATOR_COOKIE_NAME = 'geo_locator';
      const DISMISSAL_DAYS = 7;
      
      // Get cookie value by name
      const getCookie = (name) => {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        return parts.length === 2 ? parts.pop().split(";").shift() : null;
      };
      
      // Set cookie with expiration and domain
      const setCookie = (name, value, days) => {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = `expires=${date.toUTCString()}`;
        document.cookie = `${name}=${value};${expires};domain=.nvidia.com;path=/`;
      };
      
      // Get geo locator cookie data
      const getGeoLocatorCookie = () => {
        const cookieValue = getCookie(GEO_LOCATOR_COOKIE_NAME);
        if (!cookieValue) return null;
        try {
          return JSON.parse(cookieValue);
        } catch (e) {
          return null;
        }
      };
      
      // Set geo locator cookie data
      const setGeoLocatorCookie = (data) => {
        setCookie(GEO_LOCATOR_COOKIE_NAME, JSON.stringify(data), DISMISSAL_DAYS);
      };
      
      // Check if Geo Locator was dismissed
      const isDismissed = () => {
        const cookieData = getGeoLocatorCookie();
        return cookieData && cookieData.dismissed === true;
      };
      
      // Set dismissal status
      const setDismissed = () => {
        const existingData = getGeoLocatorCookie() || {};
        const updatedData = {
          ...existingData,
          dismissed: true,
          dismissedAt: new Date().toISOString()
        };
        setGeoLocatorCookie(updatedData);
      };
    
      // Update select option values based on <link rel="alternate"> in head.
      const updateOptionValuesFromHead = () => {
        const alternateLinks = document.querySelectorAll('head link[rel="alternate"][hreflang][href]');
        if (!alternateLinks.length) return;
        if (!countrySelector) return;
        Array.from(countrySelector.options).forEach(option => {
          const optCountry = option.getAttribute('data-country');
          if (!optCountry) return;
          alternateLinks.forEach(link => {
            const hreflang = link.getAttribute('hreflang');
            if (hreflang && hreflang.includes('-') && hreflang.toLowerCase().endsWith(`-${optCountry.toLowerCase()}`)) {
              option.value = link.getAttribute('href');
            }
          });
        });
      };
    
      // Fetch translations from the GraphQL endpoint.
      const fetchTranslations = () => 
        fetch('/graphql/execute.jsongeo-locator/translations')
          .then(response => response.json())
          .then(data => data.data.geoLocatorList.items)
          .catch(err => {
            console.error('Error fetching translations:', err);
            return [];
          });
      
      // Check current path against master.disableGeoLocRegExps
      const matchesDisableByRegex = (translations) => {
        const master = translations.find(item => item._variation === 'master');
        if (!master || !Array.isArray(master.disableGeoLocRegExps)) return false;

        const path = window.location.pathname;
        return master.disableGeoLocRegExps.some(pattern => {
          try {
            const rx = new RegExp(pattern);
            return rx.test(path);
          } catch (err) {
            console.error('Invalid regex in disableGeoLocRegExps:', pattern, err);
            return false;
          }
        });
      };

      const getUserGeoLocatorFlag = (translations, userRegion) => {
        const t = translations.find(item => {
          if (item._variation.includes('-')) {
            const regionPart = item._variation.split('-')[1].toUpperCase();
            return regionPart === userRegion.toUpperCase();
          }
          return false;
        });
        return t?.disableGeoLocatorUserRegion;
      };

      const getGeoLocatorFlag = (translations, pageRegion) => {
        const translation = translations.find(item => {
          if (item._variation.includes('-')) {
            const variantRegion = item._variation.split('-')[1].toUpperCase();
            return variantRegion === pageRegion.toUpperCase();
          }
          return false;
        });
        return translation?.disableGeoLocatorPageRegion;
      };
    
      // Select the correct translation by comparing last two characters of _variation with userRegion.
      const getTranslation = (translations, userRegion) => {
        let translation = translations.find(item => {
          if (item._variation.includes('-')) {
            const variantRegion = item._variation.split('-')[1].toUpperCase();
            return variantRegion === userRegion.toUpperCase();
          }
          return false;
        });
        return translation || translations.find(item => item._variation.toLowerCase() === 'master');
      };
    
      // Update the Geo Locator with the fetched translation and update UI.
      const updateGeoLocator = (translation, userRegion, lookupKey) => {
        if (!translation || translation?.disableGeoLocatorPageRegionFlag) return;
        
        // Check if Geo Locator was dismissed
        if (isDismissed()) {
          console.log('Geo Locator was dismissed by user. Will not show for 7 days.');
          return;
        }
        
        const geoLocator = document.querySelector('.geo-locator');
        if (!geoLocator) return;
        
        // Update the message text
        const geoLocatorText = geoLocator.querySelector('.geo-locator-text > p');
        if (geoLocatorText && translation.geoLocatorMessage) {
          geoLocatorText.textContent = translation.geoLocatorMessage.plaintext;
        }
        
        // Update the Continue button text
        const continueButton = geoLocator.querySelector('.geo-locator-cta .btn-content');
        if (continueButton) {
          continueButton.textContent = translation.continue;
        }
        
        // Update the country dropdown selection to match the user's region
        if (countrySelector) {
          // Use lookupKey if provided (for special cases like BE), otherwise use userRegion
          const countryKey = lookupKey || userRegion.toLowerCase();
          const optionToSelect = countrySelector.querySelector(`option[data-country="${countryKey}"]`);
          if (optionToSelect) {
            optionToSelect.selected = true;
            // Also update the Continue button's URL based on the selected option
            if (continueButton) {
              continueButton.href = optionToSelect.value;
            }
          }
        }
        
        // Remove the hide class to display the Geo Locator
        geoLocator.classList.remove('hide');
      };
    
      // Retrieve user's region from the cookie and page region from the xml:lang attribute.
      const userRegion = getCookie("c_code");
      const pageLocale = document.documentElement.getAttribute("xml:lang");
      let pageRegion = null;
      if (pageLocale) {
        const parts = pageLocale.split("-");
        if (parts.length > 1) pageRegion = parts[1].toUpperCase();
      }
    
      // Only proceed if both userRegion and pageRegion exist and they differ.
      if (userRegion && pageRegion && userRegion.toUpperCase() !== pageRegion) {
        // Special case: Skip Geo Locator for Canadian visitors on en-us pages to prevent infinite loop
        if (userRegion.toUpperCase() === 'CA' && pageLocale && pageLocale.toLowerCase() === 'en-us') {
          console.log('Skipping Geo Locator for Canadian visitors on en-us locale to prevent infinite loop.');
          return;
        }
        
        // Special case: Skip Geo Locator for Latin American visitors on es-la pages to prevent infinite loop
        const latinAmericanCountries = ['MX', 'CO', 'AR', 'PE', 'CL'];
        if (latinAmericanCountries.includes(userRegion.toUpperCase()) && pageLocale && pageLocale.toLowerCase() === 'es-la') {
          console.log(`Skipping Geo Locator for ${userRegion} visitors on es-la locale to prevent infinite loop.`);
          return;
        }
        
        // map BE to be-fr, otherwise use raw
        let lookupKey = userRegion.toLowerCase();
        if (lookupKey === 'be') lookupKey = 'be-fr';

        // if there's no matching dropdown entry, bail out
        const userOption = countrySelector.querySelector(`option[data-country="${lookupKey}"]`);
        // If we don't have a matching dropdown option, skip showing the Geo Locator
        if (!userOption) return;

        updateOptionValuesFromHead();
        fetchTranslations().then(translations => {
          if (matchesDisableByRegex(translations)) {
            console.log('Page path matches disableGeoLocRegExps, skipping Geo Locator.');
            return;
          }
          const pageFlag = getGeoLocatorFlag(translations, pageRegion);
          const userFlag = getUserGeoLocatorFlag(translations, userRegion);

          // only show if neither the page‐region nor the user‐region flag is set
          if (!pageFlag && !userFlag) {
            const translation = getTranslation(translations, userRegion);
            updateGeoLocator(translation, userRegion, lookupKey);
          }
        });
    
        // Update Continue button URL on dropdown change.
        if (countrySelector) {
          countrySelector.addEventListener('change', (e) => {
            const selectedUrl = e.target.value;
            const continueButton = document.querySelector('.geo-locator-cta .btn-content');
            if (continueButton) continueButton.href = selectedUrl;
          });
        }
    
        // Close button hides the Geo Locator.
        const closeButton = document.querySelector('.geo-locator .close-button');
        if (closeButton) {
          closeButton.addEventListener('click', () => {
            const geoLocator = document.querySelector('.geo-locator');
            if (geoLocator) {
              geoLocator.classList.add('hide');
              // Set dismissal cookie when user closes the Geo Locator
              setDismissed();
              console.log('Geo Locator dismissed. Will not show for 7 days.');
            }
          });
        }
      } else {
        // If there's no mismatch, do nothing or log as needed.
        console.log("User region and page region match, or data is missing. Geo Locator will not be shown.");
      }
    })();
</script>
<!-- Geo Locator Ends -->
<div class="nav-header desktop-nav">
<a class="skip-main" href="#page-content"><span>Skip to main content</span></a>
<div class="nav-header-container">
<div class="brand-container"><a alt="Artificial Intelligence Computing Leadership from NVIDIA" aria-labelledby="nvidia_logo_desktop" class="brand-link pull-left nvidia-logo" href="/" title="Artificial Intelligence Computing Leadership from NVIDIA">
<svg fill="none" height="35" viewBox="0 0 117 35" width="117" xmlns="http://www.w3.org/2000/svg">
<title>Artificial Intelligence Computing Leadership from NVIDIA</title>
<path d="M66.4201 15.476V29.238H70.2437V15.476H66.4201ZM36.3477 15.4573V29.238H40.2045V18.5408L43.2134 18.5513C44.2026 18.5513 44.8877 18.7928 45.3639 19.3097C45.9686 19.9653 46.2154 21.0212 46.2154 22.9532V29.238H49.9518V21.6243C49.9518 16.19 46.5447 15.4573 43.2122 15.4573H36.3477ZM72.5755 15.476V29.2368H78.7757C82.0795 29.2368 83.157 28.678 84.3241 27.4262C85.148 26.5465 85.6804 24.6168 85.6804 22.5075C85.6804 20.5732 85.2295 18.8477 84.4434 17.7732C83.0273 15.8517 80.987 15.476 77.9403 15.476H72.5755ZM76.367 18.472H78.0103C80.3949 18.472 81.9372 19.5605 81.9372 22.385C81.9372 25.2095 80.3949 26.2992 78.0103 26.2992H76.367V18.472ZM60.9085 15.476L57.7183 26.382L54.6613 15.476H50.5347L54.9011 29.2368H60.4104L64.8113 15.476H60.9096H60.9085ZM87.4591 29.2368H91.2827V15.476H87.458V29.2368H87.4591ZM98.176 15.4807L92.8377 29.2322H96.6073L97.4519 26.802H103.769L104.569 29.2322H108.661L103.283 15.4795H98.176V15.4807ZM100.657 17.9902L102.973 24.4325H98.2678L100.657 17.9902Z" fill="black"></path>
<path d="M11.6925 17.7697V15.8762C11.8738 15.8633 12.0563 15.8528 12.2422 15.847C17.3372 15.6837 20.68 20.2978 20.68 20.2978C20.68 20.2978 17.0699 25.3962 13.1992 25.3962C12.6415 25.3962 12.1423 25.3052 11.6925 25.1511V19.4077C13.6766 19.6515 14.0748 20.5417 15.2671 22.5623L17.919 20.2885C17.919 20.2885 15.9831 17.7067 12.7195 17.7067C12.3649 17.7067 12.0253 17.7323 11.6913 17.7685L11.6925 17.7697ZM11.6913 11.5128V14.342C11.8738 14.3268 12.0574 14.3152 12.241 14.3082C19.3259 14.0655 23.9425 20.2162 23.9425 20.2162C23.9425 20.2162 18.6408 26.7705 13.1166 26.7705C12.6105 26.7705 12.1366 26.7227 11.6913 26.6433V28.3922C12.0723 28.4412 12.4671 28.4703 12.8779 28.4703C18.0177 28.4703 21.7358 25.8021 25.3356 22.6428C25.9323 23.1281 28.3754 24.31 28.8781 24.828C25.4549 27.7412 17.4795 30.0885 12.9571 30.0885C12.521 30.0885 12.1022 30.0617 11.6913 30.022V32.479H31.2282V11.514H11.6925L11.6913 11.5128ZM11.6913 25.15V26.6433C6.93708 25.7812 5.6174 20.7575 5.6174 20.7575C5.6174 20.7575 7.89986 18.1862 11.6913 17.7697V19.4077C11.6913 19.4077 11.6867 19.4077 11.6845 19.4077C9.69462 19.165 8.14085 21.055 8.14085 21.055C8.14085 21.055 9.01183 24.2365 11.6925 25.1523L11.6913 25.15ZM3.24888 20.5417C3.24888 20.5417 6.06609 16.3148 11.6925 15.8773V14.3443C5.46134 14.853 0.0644531 20.2185 0.0644531 20.2185C0.0644531 20.2185 3.12036 29.2018 11.6925 30.0243V28.3945C5.40167 27.5895 3.24888 20.5417 3.24888 20.5417Z" fill="#76B900"></path>
</svg>
</a></div>
<!-- Mega menu code start -->
<div class="navoverlay"></div>
<input class="main-menu" id="nv-level1-tab1" name="nv-tab-level-1" type="radio" value="nv-level1-tab1">
<input class="main-menu" id="nv-level1-tab2" name="nv-tab-level-1" type="radio" value="nv-level1-tab2">
<input class="main-menu" id="nv-level1-tab3" name="nv-tab-level-1" type="radio" value="nv-level1-tab3">
<div class="nv-nav-container nv-menu">
<div class="menu-buttons-container">
<span class="menu-button main-menu-buttons-desktop">
<button class="menu-button caret-right hide">
<svg aria-controls="main-menu-navigation" aria-label="menu expand" class="n24-icon menu-button caret-right">
<use xlink:href="#n24-caret-right-small"></use></svg>
<span class="hide" id="mega-menu-expand-label">Main Menu</span>
</button>
<button aria-label="menu collapse" class="menu-button caret-left hide">
<svg class="n24-icon menu-button caret-left">
<use xlink:href="#n24-caret-left-small"></use></svg>
</button>
<button aria-label="menu close" class="menu-button close hide">
<svg class="n24-icon menu-button close">
<use xlink:href="#n24-close-small"></use></svg>
</button>
</span>
</div>
<ul aria-label="menu" class="nv-menu-list left" id="main-menu-navigation" role="menu" style="visibility: visible; max-width: 880px; white-space: nowrap;">
<li aria-expanded="false" aria-haspopup="true" class="nv-menu-item tmenu brand-nav-title" data-num="1" role="menuitem">
<label class="nv-menu-button menu-level-1 brand-nav-chevron" for="nv-level1-tab1" tabindex="0">
												Products
												
												
											</label>
<div class="nv-n-n25">
<div class="nv-menu3-container nv-level1-tab1 one-lvl">
<div class="nav-row-container">
<div class="level-menu3">

<div class="menu3-items">
		<div id="menu1-tab1" class="menu3-items-container active">
			<span class="h2-style">Products</span>
			<div class="menu3-item">
				<a class="menu3-item-card" href="/industries/healthcare-life-sciences/biopharma/" target="_self">
					<div class="menu3-item-card-content">
						<div class="nv-button button nv-button-text nv-button-caret">
							<div class="btn-content btncta">
								<span class="btn-text">BioNeMo</span>
							</div>
						</div>
						<p>AI-driven platform for life sciences research and discovery</p>
					</div>
				</a>
				<a class="menu3-item-card" href="/data-center/dgx-cloud/" target="_self">
					<div class="menu3-item-card-content">
						<div class="nv-button button nv-button-text nv-button-caret">
							<div class="btn-content btncta">
								<span class="btn-text">DGX Cloud</span>
							</div>
						</div>
						<p>NVIDIA’s AI factory in the cloud</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</li>
<li aria-expanded="false" aria-haspopup="true" class="nv-menu-item tmenu" data-num="2" role="menuitem">
<label class="nv-menu-button menu-level-1 brand-nav-chevron" for="nv-level1-tab2" tabindex="0">
												Solutions
												
												
											</label>
<div class="nv-n-n25">
<div class="nv-menu3-container nv-level1-tab2 one-lvl">
<div class="nav-row-container">
<div class="level-menu3">

<div class="menu3-items">
		<div id="menu2-tab1" class="menu3-items-container active">
			<span class="h2-style">Solutions</span>
			<div class="menu3-item">
				<a class="menu3-item-card" href="/solutions/ai/" target="_self">
					<div class="menu3-item-card-content">
						<div class="nv-button button nv-button-text nv-button-caret">
							<div class="btn-content btncta">
								<span class="btn-text">Overview</span>
							</div>
						</div>
						<p>NVIDIA technology is power powering solutions for every industry</p>
					</div>
				</a>
				<a class="menu3-item-card" href="/solutions/ai/agentic-ai/" target="_self">
					<div class="menu3-item-card-content">
						<div class="nv-button button nv-button-text nv-button-caret">
							<div class="btn-content btncta">
								<span class="btn-text">Agentic AI</span>
							</div>
						</div>
						<p>Build and run agentic AI workflows and microservices</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</li>
<li aria-expanded="false" aria-haspopup="true" class="nv-menu-item tmenu" data-num="3" role="menuitem">
<label class="nv-menu-button menu-level-1 brand-nav-chevron" for="nv-level1-tab3" tabindex="0">
												Industries
												
												
											</label>
<div class="nv-n-n25">
<div class="nv-menu3-container nv-level1-tab3 one-lvl">
<div class="nav-row-container">
<div class="level-menu3">
<div class="menu3-items">
<div class="menu3-items-container active" id="menu3-tab1">
<span class="h2-style">Industries</span>
<div class="menu3-item"><div class="menu3-item-card">
<a class="menu3-item-card-content" href="/industries/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Overview</span>
</div>
</div>
</a>
</div>
<div class="menu3-item-card">
<a class="menu3-item-card-content" href="/industries/aec/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Architecture, Engineering, Construction &amp; Operations</span>
</div>
</div>
</a>
</div></div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nv-menu-item tmenu more"><a href="#">…</a><ul class="dropdown"></ul></li><li class="menu-slider" role="presentation"></li>
</ul>
<ul aria-label="menu" class="nv-menu-list right" role="menu">

<li class="nv-menu-item" role="none"><a class="menu-button-link menu-level-1" href="/drivers/" role="menuitem" target="_self">Drivers</a>
</li>
<li class="nv-menu-item" role="none"><a class="menu-button-link menu-level-1" href="/support/" role="menuitem" target="_self">Support</a>
</li>
</ul>
</div>
<!-- Mega menu code ends -->
<div class="nav-tools-container">
<ul aria-label="Menu Tools" class="nav-header-list" role="list">

<li class="nav-header-item profile-item">
<div class="navglobicon dropdown-enabled" data-is-gatted="false" data-login-gate=" data-sso-enabled=" true"="" id="acc-menu-dropdown">
<ul>

</ul>
</div>
</li>
<li class="nav-header-item hide"><a href="#" id="nod-login" style="display: none"> <span>Log In</span>
</a> <a href="#" id="nod-logout" style="display: none"> <span>LogOut</span>
</a></li>
</ul>
</div>
</div>
</div>
<!-- Mobile navigation starts -->
<div class="mobile-nav">
<div class="nav-header">
<a class="skip-main" href="#page-content"><span>Skip to main content</span></a>
<div class="nav-header-container">
<div class="nav-tools-container">
<ul class="nav-header-list" role="list">
<li class="nav-header-item mobile-menu-button-item">
<button aria-controls="mobile-menu-navigation" aria-expanded="false" aria-label="Main Menu" class="menu-button mobile-menu-button toplevel" id="menu-toggle" tabindex="0">
<span id="mega-nav-open-menu-icon">
<svg class="n24-icon mega-nav-open-menu-icon">
<use xlink:href="#n24-menu"></use>
</svg>
</span>
<span class="hide" id="mega-nav-close-menu-icon">
<svg class="n24-icon mega-nav-close-menu-icon">
<use xlink:href="#n24-close"></use>
</svg>
</span>
</button>
</li>

<li class="nav-header-item hide nv-cart-item" id="nv-cart-item" role="status">
<span class="nav-badge cart-counter">0</span>
<a aria-expanded="false" aria-haspopup="true" aria-label="Shopping Cart" class="nav-cart-link toplevel" href="/" role="status">
<svg aria-labelledby="shopping_cart" class="n24-icon nvcarticon n24-cart" style="">
<use xlink:href="#n24-cart"></use>
</svg>
</a>
</li>

</ul>
</div>
</div>
</div>
<div class="mega-nav" id="mega-nav" role="navigation">
<div class="mega-menu" style="opacity: 1; height: 44px; left: 0px;">
<!-- SVG SYMBOL DEFINITIONS -->
<svg class="hide" style="display: none;" xmlns="http://www.w3.org/2000/svg">
<symbol id="n24-nvidia-logo" viewBox="0 0 108.472 20">
<title id="nvidia_logo">NVIDIA</title>
<desc>NVIDIA logo</desc>
<path d="M1072.628,253.918v-.3h.192c.105,0,.248.008.248.136s-.073.163-.2.163h-.243m0,.211h.129l.3.524h.327l-.33-.545a.3.3,0,0,0,.311-.323c0-.285-.2-.377-.53-.377h-.482v1.245h.276v-.524m1.4-.1a1.2,1.2,0,1,0-1.2,1.157,1.14,1.14,0,0,0,1.2-1.157m-.347,0a.854.854,0,0,1-.855.891v0a.889.889,0,1,1,.855-.887Z" id="nvidia-logo-reg" transform="translate(-965.557 -237.878)"></path>
<path d="M463.9,151.934v13.127h3.707V151.934Zm-29.164-.018v13.145h3.74v-10.2l2.918.01a2.674,2.674,0,0,1,2.086.724c.586.625.826,1.632.826,3.476v5.995h3.624V157.8c0-5.183-3.3-5.882-6.536-5.882Zm35.134.018v13.127h6.013c3.2,0,4.249-.533,5.38-1.727a7.352,7.352,0,0,0,1.316-4.692,7.789,7.789,0,0,0-1.2-4.516c-1.373-1.833-3.352-2.191-6.306-2.191Zm3.677,2.858h1.594c2.312,0,3.808,1.039,3.808,3.733s-1.5,3.734-3.808,3.734h-1.594Zm-14.992-2.858-3.094,10.4-2.965-10.4h-4l4.234,13.127h5.343l4.267-13.127Zm25.749,13.127h3.708V151.935h-3.709ZM494.7,151.939l-5.177,13.117h3.656l.819-2.318h6.126l.775,2.318h3.969l-5.216-13.118Zm2.407,2.393,2.246,6.145h-4.562Z" id="nvidia-logo-NVIDIA" transform="translate(-399.551 -148.155)"></path>
<path d="M129.832,124.085v-1.807c.175-.013.353-.022.533-.028,4.941-.155,8.183,4.246,8.183,4.246s-3.5,4.863-7.255,4.863a4.553,4.553,0,0,1-1.461-.234v-5.478c1.924.232,2.31,1.082,3.467,3.01l2.572-2.169a6.81,6.81,0,0,0-5.042-2.462,9.328,9.328,0,0,0-1,.059m0-5.968v2.7c.177-.014.355-.025.533-.032,6.871-.232,11.348,5.635,11.348,5.635s-5.142,6.253-10.5,6.253a7.906,7.906,0,0,1-1.383-.122v1.668a9.1,9.1,0,0,0,1.151.075c4.985,0,8.59-2.546,12.081-5.559.578.463,2.948,1.591,3.435,2.085-3.319,2.778-11.055,5.018-15.44,5.018-.423,0-.829-.026-1.228-.064v2.344h18.947v-20Zm0,13.009v1.424c-4.611-.822-5.89-5.615-5.89-5.615a9.967,9.967,0,0,1,5.89-2.85v1.563h-.007a4.424,4.424,0,0,0-3.437,1.571s.845,3.035,3.444,3.908m-8.189-4.4a11.419,11.419,0,0,1,8.189-4.449v-1.463c-6.043.485-11.277,5.6-11.277,5.6s2.964,8.569,11.277,9.354v-1.555C123.731,133.451,121.643,126.728,121.643,126.728Z" data-name="Eye Mark" fill="#74b71b" id="nvidia-logo-eye-mark" transform="translate(-118.555 -118.117)"></path>
</symbol>
</svg>
<div class="nv-n-n25">
<nav aria-label="Accordion Navigation" class="accordion-menu">
<div class="menu-item">
<button aria-controls="submenu-1" aria-expanded="false" class="accordion-btn" id="menu-btn-2">
											Products
											<span aria-hidden="true" class="caret"></span>
</button>
<!--
-->
<div aria-labelledby="menu-btn-1-1" class="submenu level-3-menu one-lvl" id="submenu-1-1" role="menu">
		<div class="menu-item">
			<div class="submenu level-3-menu-items" id="submenu-1-1-1" role="menu">
				<a class="level-3-menu-item" href="/industries/healthcare-life-sciences/biopharma/" target="_self">
					<div class="nv-button button nv-button-text nv-button-caret">
						<div class="btn-content btncta">
							<span class="btn-text">BioNeMo</span>
						</div>
					</div>
					<p>AI-driven platform for life sciences research and discovery</p>
				</a>
				<a class="level-3-menu-item" href="/data-center/dgx-cloud/" target="_self">
					<div class="nv-button button nv-button-text nv-button-caret">
						<div class="btn-content btncta">
							<span class="btn-text">DGX Cloud</span>
						</div>
					</div>
					<p>NVIDIA’s AI factory in the cloud</p>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="menu-item">
<button aria-controls="submenu-2" aria-expanded="false" class="accordion-btn" id="menu-btn-2">
											Solutions
											<span aria-hidden="true" class="caret"></span>
</button>
<!-- -->
<div aria-labelledby="menu-btn-1-2" class="submenu level-3-menu one-lvl" id="submenu-1-2" role="menu">
		<div class="menu-item">
			<div class="submenu level-3-menu-items" id="submenu-1-2-1" role="menu">
				<a class="level-3-menu-item" href="/solutions/ai/" target="_self">
					<div class="nv-button button nv-button-text nv-button-caret">
						<div class="btn-content btncta">
							<span class="btn-text">Overview</span>
						</div>
					</div>
					<p>NVIDIA technology is power powering solutions for every industry</p>
				</a>
				<a class="level-3-menu-item" href="/solutions/ai/agentic-ai/" target="_self">
					<div class="nv-button button nv-button-text nv-button-caret">
						<div class="btn-content btncta">
							<span class="btn-text">Agentic AI</span>
						</div>
					</div>
					<p>Build and run agentic AI workflows and microservices</p>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="menu-item">
<button aria-controls="submenu-3" aria-expanded="false" class="accordion-btn one-lvl-btn" id="menu-btn-2">
															Industries
															<span aria-hidden="true" class="caret"></span>
</button>
<div aria-labelledby="menu-btn-1-3" class="submenu level-3-menu one-lvl" id="submenu-1-3" role="menu">
<div class="menu-item">
<div class="submenu level-3-menu-items" id="submenu-1-3-1" role="menu">
<a class="level-3-menu-item" href="/industries/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Overview</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/aec/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Architecture, Engineering, Construction &amp; Operations</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/automotive/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Automotive</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/solutions/ai/cybersecurity/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Cybersecurity</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/energy/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Energy</span>
</div>
</div>
</a>

<a class="level-3-menu-item" href="/industries/healthcare-life-sciences/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Healthcare and Life Sciences</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/higher-education-research/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Higher Education</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/game-development/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Game Development</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/government/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Government</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/manufacturing/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Manufacturing</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/media-and-entertainment/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Media and Entertainment</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/restaurants/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Restaurants </span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/retail/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Retail and CPG</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/robotics/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Robotics</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/smart-cities-and-spaces/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Smart Cities</span>
</div>
</div>
</a>

<a class="level-3-menu-item" href="/industries/telecommunications/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Telecommunications</span>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
<li>
<div class="menu-right">
<ul aria-label="menu" role="menu">

<li class="menu-level-1" role="none">
<a class="mm-btn-link" href="/drivers/" role="menuitem" target="_self">Drivers</a>
</li>
<li class="menu-level-1" role="none">
<a class="mm-btn-link" href="/support/" role="menuitem" target="_self">Support</a>
</li>
</ul>
</div>
</li>
</nav>
</div>
</div>
</div>
<div class="mega-overlay hide" style="opacity: 0;"></div>
</div>
<!-- Mobile navigation ends -->
<div class="hide-unibrow" id="unibrow-container"></div>
<!-- Common sub nav and brand nav Starts -->
<!-- Common sub nav and brand nav ends -->
<div class="cmp-verticalnavigation__toc-mobile hide">
<div>
<div class="cmp-verticalnavigation__toc-mobile-active-item">
<span class="active-text"></span>
<span class="active-arrow"></span>
</div>
</div>
</div>
<script id="starfleet-script" src="../../assets/www.nvidia.com/assets/account-wrapper/starfleet.js"></script>
<script>	
	 	if(false){
			var searchPath = document.getElementById("search-path");
			searchPath.value = window.location.pathname;
     	}
	    NVIDIAGDC.funcQueue.addToQueue({ 
	        id : "meganavigation55c1b63f_f63e_4bd0_bb34_3be93688ea7b",
	        method : "navigation-megamenu",
	        params : [{
	            globalSite:true,
	            breadCrumbAdded: false,
	            enableSearchLibrary: true,
	            isSolr:false,
	            searchOptions: {
	                destination: "https://www.nvidia.com/en-us/search/",
	                apiUrl: "https://api-prod.nvidia.com/search/graphql",
	                triggerId: 'nvidia-search-box-link',
	                referenceId: 'nvidia-search-box-link'
	              }
	            }]
	    });
	    
	    NVIDIAGDC.isBrandPage = false;
		NVIDIAGDC.isMegaMenu = true;
		NVIDIAGDC.disableOldBrandNav = false;
		window.setHeaderObservers();
	</script>
</nav>
</div>
</header>

    	<noscript>
   <div class="no-js-warning">This site requires Javascript in order to view all its content. Please enable Javascript in order to access all the functionality of this web site. Here are the <a href="http://www.enable-javascript.com/" target="_blank">instructions how to enable JavaScript in your web browser.</a></div>
</noscript>
        
        
            

            
<div class="root responsivegrid">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 ">
    
    <div class="nv-container container responsivegrid aem-GridColumn aem-GridColumn--default--12">

    
	
    <div id="container-369d9e4161" class="v1-1 p-t-0 p-b-0  lap-p-t-0 
         lap-p-b-0  tab-p-t-0 tab-p-b-0
          mob-p-t-0 mob-p-b-0  
          
         with-video-as-bg 
         d-middle-align d-center-align 
         l-center-align l-middle-align t-center-align 
         t-middle-align m-bottom-align m-center-align 
         d-cont-h-m l-cont-h-m t-cont-h-m  
         d-content-align-center l-content-align-center t-content-align-center m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none">
      
      
      
	<div class="nv-video-as-bg nv-video-load-src d-video-center d-video-middle l-video-center l-video-middle t-video-center t-video-middle p-video-center  p-video-bottom     p-video-fit-cover ">
		<video id="video-container-369d9e4161" muted=" playsinline=" preload="meta" data-video-source="{&quot;desktop&quot;:[{&quot;src&quot;:&quot;https://images.nvidia.com/aem-dam/Solutions/cosmos/cosmos-banner-video-m460-desktop.mp4&quot;,&quot;type&quot;:&quot;video/mp4&quot;},{&quot;src&quot;:&quot;https://images.nvidia.com/aem-dam/Solutions/cosmos/cosmos-banner-video-m460-desktop.webm&quot;,&quot;type&quot;:&quot;video/webm&quot;}],&quot;laptop&quot;:[{&quot;src&quot;:&quot;https://images.nvidia.com/aem-dam/Solutions/cosmos/cosmos-banner-video-m460-laptop-1.mp4&quot;,&quot;type&quot;:&quot;video/mp4&quot;},{&quot;src&quot;:&quot;https://images.nvidia.com/aem-dam/Solutions/cosmos/cosmos-banner-video-m460-laptop-1.webm&quot;,&quot;type&quot;:&quot;video/webm&quot;}],&quot;tablet&quot;:[{&quot;src&quot;:&quot;https://images.nvidia.com/aem-dam/Solutions/cosmos/cosmos-banner-video-m420-tablet-1.mp4&quot;,&quot;type&quot;:&quot;video/mp4&quot;},{&quot;src&quot;:&quot;https://images.nvidia.com/aem-dam/Solutions/cosmos/cosmos-banner-video-m420-tablet-1.webm&quot;,&quot;type&quot;:&quot;video/webm&quot;}],&quot;mobile&quot;:[{&quot;src&quot;:&quot;https://images.nvidia.com/aem-dam/Solutions/cosmos/cosmos-banner-video-bm-uf-bottom-phone.mp4&quot;,&quot;type&quot;:&quot;video/mp4&quot;},{&quot;src&quot;:&quot;https://images.nvidia.com/aem-dam/Solutions/cosmos/cosmos-banner-video-bm-uf-bottom-phone.webm&quot;,&quot;type&quot;:&quot;video/webm&quot;}]}" loop=" class=" nv-video-src-loaded"=""><source src="https://images.nvidia.com/aem-dam/Solutions/cosmos/cosmos-banner-video-m460-laptop-1.webm" type="video/webm"><source src="https://images.nvidia.com/aem-dam/Solutions/cosmos/cosmos-banner-video-m460-laptop-1.mp4" type="video/mp4"></video>
		<script>
			window.initBuildVideo("container-369d9e4161");
		</script>
	</div>
	

      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="nv-container container responsivegrid aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">

    
	
    <div id="container-8ca7d93bd9" class="v1-1 p-t-0 p-b-0  lap-p-t-0 
         lap-p-b-0  tab-p-t-0 tab-p-b-0
          mob-p-t-15 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-center-align l-middle-align t-center-align 
         t-middle-align m-bottom-align m-center-align 
             
         d-content-align-center l-content-align-center t-content-align-top m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--6 aem-Grid--default--6 aem-Grid--phone--12 ">
    
    <div class="nv-text text aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
 
 	
    <div id="nv-text-92af1ec49f" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p><span><span class="p--large"><strong>Physical AI</strong></span></span></p>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-title text h--large aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">
  
    
      <div id="nv-title-cc8a5fb607" class="general-container-text            ">
        <div class="text-left lap-text-left tab-text-left mob-text-left">
          <h1 class="title ">
            
                      NVIDIA Cosmos
          
          </h1>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
 
 	
    <div id="nv-text-86a4b338e2" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p><span class="p--large">An open platform for physical AI with world foundation models (WFMs), video data processing libraries, video evaluation, and post-training frameworks.</span></p>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-teaser teaser nv-no-top-padding nv-no-bottom-padding aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">

  
<div id="nv-teaser-651ba47136" class="cmp-teaser     " data-title-style="manual">
        

  
   <div class="nv-teaser--holder">
    
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-left lap-text-left tab-text-left mob-text-left">
        
    

        
    

        
    

        
	
	
	
    <div class="cmp-teaser__action-container " data-ctaexpand="false">
        
    <a class="cmp-teaser__action-link nv-teaser-button  " target="_blank" id="teaser-651ba47136-cta-234a79bf3f" rel="noopener noreferrer" href="https://github.com/nvidia-cosmos">Download from GitHub
         
    </a>

    </div>
    
    
    

    </div>
    </div>
       

</div>

    
</div>
<div class="nv-text text aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
 
 	
    <div id="text-cta-row" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p><span style="color: rgb(0,0,0);"><a href="https://nvidia-cosmos.github.io/cosmos-cookbook/" target="_blank">Cookbook</a> &nbsp; | &nbsp; <a href="https://docs.nvidia.com/cosmos/?ncid=no-ncid" target="_blank">Documentation</a> &nbsp; | &nbsp;&nbsp;<a href="https://discord.com/invite/nvidiaomniverse" target="_blank">Discord</a></span></p>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-separator separator aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
  
  
<div id="nv-separator-2392fed694" class="cmp-separator">
     
     <style>
         
        
        
        
        
        @media screen and (max-width: 639px){
        	 #nv-separator-2392fed694{
                 height:calc(60.25vw + 15px);
            }
        }
         
    </style>
    
</div></div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-8ca7d93bd9 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-8ca7d93bd9 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-8ca7d93bd9 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-8ca7d93bd9 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-8ca7d93bd9 {
            
        }
    }
</style> 

</div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-369d9e4161 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-369d9e4161 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-369d9e4161 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-369d9e4161 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-369d9e4161 {
            
        }
    }
</style> 

</div>
<div class="nv-inpagenavigation responsivegrid aem-GridColumn aem-GridColumn--default--12">
  
  
  <div class="in-page-nav-outer-container">
    <div id="cosmos-subnav" class="general-nav-container">
      <ul class="in-page-nav-displayed-list" style="width: 711px;">
        <div class="nv-tabs__line" style="left: 0px; width: 51px;"></div>
        <li data-in-page-nav-item-index="0" class="in-page-nav-list-item-displayed in-page-nav-item-active">
          <a href="#models">Models</a>
        </li>
      
        
        <li data-in-page-nav-item-index="1" class="in-page-nav-list-item-displayed">
          <a href="#use-cases">Use Cases</a>
        </li>
      
        
        <li data-in-page-nav-item-index="2" class="in-page-nav-list-item-displayed">
          <a href="#starting-options">Starting Options</a>
        </li>
      
        
        <li data-in-page-nav-item-index="3" class="in-page-nav-list-item-displayed">
          <a href="#ecosystem">Ecosystem</a>
        </li>
      
        
        <li data-in-page-nav-item-index="4" class="in-page-nav-list-item-displayed">
          <a href="#next-steps">Next Steps</a>
        </li>
      
        
        <li data-in-page-nav-item-index="5" class="in-page-nav-list-item-displayed">
          <a href="#resources">Resources</a>
        </li>
      
        
        <li data-in-page-nav-item-index="6" class="in-page-nav-list-item-displayed">
          <a href="#faqs">FAQs</a>
        </li>
      </ul>
      <div class="in-page-nav-displayed-list-mob">
        <div>
          <ul class="in-page-nav-displayed-list-mob-current-item"><li data-in-page-nav-item-index="0">
          <a href="#models">Models</a>
        </li></ul>
        </div>
        <ul class="in-page-nav-displayed-list-mob-dropdown">
          <li data-in-page-nav-item-index="0" class="in-page-nav-item-active">
            <a href="#models">Models</a>
          </li>
        
          <li data-in-page-nav-item-index="1">
            <a href="#use-cases">Use Cases</a>
          </li>
        
          <li data-in-page-nav-item-index="2">
            <a href="#starting-options">Starting Options</a>
          </li>
        
          <li data-in-page-nav-item-index="3">
            <a href="#ecosystem">Ecosystem</a>
          </li>
        
          <li data-in-page-nav-item-index="4">
            <a href="#next-steps">Next Steps</a>
          </li>
        
          <li data-in-page-nav-item-index="5">
            <a href="#resources">Resources</a>
          </li>
        
          <li data-in-page-nav-item-index="6">
            <a href="#faqs">FAQs</a>
          </li>
        </ul>
      </div>
      <div class="in-page-nav-truncated-list-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.4 5" height="24" width="24" fill="#FFFFFF">
          <path d="M12613.6,1800.5a2.654,2.654,0,1,0-2.6,2.5A2.575,2.575,0,0,0,12613.6,1800.5Zm2.7,0a2.708,2.708,0,1,0,2.7-2.5A2.6,2.6,0,0,0,12616.3,1800.5Zm8.1,0a2.654,2.654,0,1,0,2.6-2.5A2.575,2.575,0,0,0,12624.4,1800.5Z" transform="translate(-12608.3 -1798)"></path>
        </svg>
        <ul class="in-page-nav-truncated-list">
          <li data-in-page-nav-item-index="0" class="in-page-nav-item-active">
            <a href="#models">Models</a>
          </li>
        
          <li data-in-page-nav-item-index="1">
            <a href="#use-cases">Use Cases</a>
          </li>
        
          <li data-in-page-nav-item-index="2">
            <a href="#starting-options">Starting Options</a>
          </li>
        
          <li data-in-page-nav-item-index="3">
            <a href="#ecosystem">Ecosystem</a>
          </li>
        
          <li data-in-page-nav-item-index="4">
            <a href="#next-steps">Next Steps</a>
          </li>
        
          <li data-in-page-nav-item-index="5">
            <a href="#resources">Resources</a>
          </li>
        
          <li data-in-page-nav-item-index="6">
            <a href="#faqs">FAQs</a>
          </li>
        </ul>
      </div>
      <div class="ip-nav-cta-cont">
        <div>
          
            <div><div class="nv-button button">
<div class="nv-button-standard              button-left button-lap-left button-tab-left button-mob-left">
  
  <a id="nv-button-5c185ab2d7" class="btn-content btncta    " target="_blank" data-cmp-clickable="false " rel="noopener noreferrer" href="https://github.com/nvidia-cosmos">
    
    

    <span class="btn-text">Download Now</span>
    
  </a>
</div>

</div>
</div>
          
        </div>
      </div>
    </div>
  </div>
  </div>
<div class="nv-container container responsivegrid aem-GridColumn aem-GridColumn--default--12">

    
	
		<div id="models" class="p-t-90 p-b-90  lap-p-t-90 
         lap-p-b-90  tab-p-t-60 tab-p-b-60
          mob-p-t-60 mob-p-b-60  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false" data-in-page-nav-item-index="1">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="nv-title text h--smallest aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--10 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--1">
  
    
      <div id="nv-title-d10580a8d9" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <p class="title ">
            
                      World Foundation Models
          
          </p>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-title text h--medium aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--10 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--1">
  
    
      <div id="nv-title-9f01561dcd" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h2 class="title ">
            
                      Open Models for World Generation and Understanding
          
          </h2>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-container container responsivegrid aem-GridColumn aem-GridColumn--default--12">

    
    
    
    <div id="container-c7f2dd4d57" class="v1-1 p-t-60 p-b-0  lap-p-t-60 
         lap-p-b-0  tab-p-t-30 tab-p-b-0 
          mob-p-t-30 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         " data-cmp-is="nv-container">
		
		
		
       
       
    	<div class="general-container nv-flexbox d-col-3 l-col-3 t-col-2 p-col-1 d-justify-left l-justify-left t-justify-left p-justify-left flex-align-stretch   d-content-align-top l-content-align-top t-content-align-top m-content-align-top    ">
	        
	        <div class="nv-container container responsivegrid">

    
	
    <div id="container-d977bb1af8" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-1a75babee7" class="cmp-embed">
    
    
     
<div class="nv-video-container" style="max-width:100%"> 
    <div class="video-player  player-controls">
        <video aria-label="External Video" data-modal-autoplay="false" preload="auto" muted=" controls=" loop=" autoplay=" "="">
                    <source src="https://images.nvidia.com/aem-dam/Solutions/cosmos/cosmos-predict.mp4" type="video/mp4">
        </video>
    </div>
</div>
    

</div>
</div>
<div class="nv-title text h--smallest aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-6b0144605a" class="general-container-text            ">
        <div class="text-left lap-text-left tab-text-left mob-text-left">
          <h3 class="title ">
            
                      Cosmos Predict
          
          </h3>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text aem-GridColumn aem-GridColumn--default--12">
 
 	
    <div id="nv-text-7718cc8422" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>Leading world generation model, adaptable to any physical AI task or environment.</p> 
<p>Generate 30s predictive video worlds from text, image, or video with 2B/14B models, or post-train on your data to create custom edge cases, closed-loop policies, and multiview, robot-centric simulations.</p>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-button button nv-button-text nv-button-caret aem-GridColumn aem-GridColumn--default--12">
<div class="nv-button-standard              button-left button-lap-left button-tab-left button-mob-left">
  
  <a id="nv-button-a752d209a0" class="btn-content btncta    " target="_blank" data-cmp-clickable="false " rel="noopener noreferrer" href="https://github.com/nvidia-cosmos/cosmos-predict2.5">
    
    

    <span class="btn-text">Get Started on GitHub</span>
    
  </a>
</div>

</div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-d977bb1af8 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-d977bb1af8 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-d977bb1af8 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-d977bb1af8 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-d977bb1af8 {
            
        }
    }
</style> 

</div>
<div class="nv-container container responsivegrid">

    
	
    <div id="container-44035a754e" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-b518fb038b" class="cmp-embed">
    
    
     
<div class="nv-video-container" style="max-width:100%"> 
    <div class="video-player  player-controls">
        <video aria-label="External Video" data-modal-autoplay="false" preload="auto" muted=" controls=" loop=" autoplay=" "="">
                    <source src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/nvidia-cosmos-transfer-new.mp4" type="video/mp4">
        </video>
    </div>
</div>
    

</div>
</div>
<div class="nv-title text h--smallest aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-54c226fd25" class="general-container-text            ">
        <div class="text-left lap-text-left tab-text-left mob-text-left">
          <h3 class="title ">
            
                      Cosmos Transfer
          
          </h3>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text aem-GridColumn aem-GridColumn--default--12">
 
 	
    <div id="nv-text-fc9c374a4e" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>Multicontrol model for simulation to photoreal transformation.</p> 
<p>Pair with physical AI simulation frameworks, such as CARLA or <a href="https://developer.nvidia.com/isaac/sim?ncid=no-ncid" target="_blank">NVIDIA Isaac Sim™</a>, to accelerate <a href="/glossary/synthetic-data-generation/">synthetic data generation</a> across various environments and lighting conditions.</p>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-button button nv-button-text nv-button-caret aem-GridColumn aem-GridColumn--default--12">
<div class="nv-button-standard              button-left button-lap-left button-tab-left button-mob-left">
  
  <a id="nv-button-fa218853e5" class="btn-content btncta    " target="_blank" data-cmp-clickable="false " rel="noopener noreferrer" href="https://github.com/nvidia-cosmos/cosmos-transfer2.5">
    
    

    <span class="btn-text">Get Started on GitHub</span>
    
  </a>
</div>

</div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-44035a754e {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-44035a754e {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-44035a754e {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-44035a754e {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-44035a754e {
            
        }
    }
</style> 

</div>
<div class="nv-container container responsivegrid">

    
	
    <div id="container-b5e8b106e9" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-e1be8d85e0" class="cmp-embed">
    
    
     
<div class="nv-video-container" style="max-width:100%"> 
    <div class="video-player  player-controls">
        <video aria-label="External Video" data-modal-autoplay="false" preload="auto" muted=" controls=" loop=" autoplay=" "="">
                    <source src="https://images.nvidia.com/aem-dam/Solutions/ai/cosmos/nvidia-cosmos-reason.mp4" type="video/mp4">
        </video>
    </div>
</div>
    

</div>
</div>
<div class="nv-title text h--smallest aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-040ce9a642" class="general-container-text            ">
        <div class="text-left lap-text-left tab-text-left mob-text-left">
          <h3 class="title ">
            
                      Cosmos Reason
          
          </h3>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text aem-GridColumn aem-GridColumn--default--12">
 
 	
    <div id="nv-text-45eb9c6f81" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>Leading vision language model (VLM) enabling robots and vision AI agents to reason like humans.</p> 
<p>Combines prior knowledge, physics, and common sense for real-time alerts and actionable insights across public safety, traffic monitoring, logistics, quality inspection, and physical AI.</p>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-button button nv-button-text nv-button-caret aem-GridColumn aem-GridColumn--default--12">
<div class="nv-button-standard              button-left button-lap-left button-tab-left button-mob-left">
  
  <a id="nv-button-c4656d5ac2" class="btn-content btncta    " target="_blank" data-cmp-clickable="false " rel="noopener noreferrer" href="https://github.com/nvidia-cosmos/cosmos-reason2">
    
    

    <span class="btn-text">Get Started on GitHub</span>
    
  </a>
</div>

</div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-b5e8b106e9 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-b5e8b106e9 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-b5e8b106e9 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-b5e8b106e9 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-b5e8b106e9 {
            
        }
    }
</style> 

</div>

	        
        </div>
         
    </div>

    
    

 

<style>
    #container-c7f2dd4d57 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-c7f2dd4d57 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-c7f2dd4d57 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-c7f2dd4d57 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-c7f2dd4d57 {
            
        }
    }
</style> 

</div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #models {
        background-color:#F7F7F7;
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #models {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #models {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #models {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #models {
            
        }
    }
</style>

</div>
<div class="nv-container container responsivegrid nv-container--theme-dark aem-GridColumn aem-GridColumn--default--12">

    
	
    <div id="container-8da14fbf40" class="v1-1 p-t-75 p-b-75  lap-p-t-75 
         lap-p-b-75  tab-p-t-45 tab-p-b-45
          mob-p-t-45 mob-p-b-45  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="nv-title text h--medium aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-b55b8fea8e" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h2 class="title ">
            
                      Data Processing and Evaluation
          
          </h2>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text aem-GridColumn aem-GridColumn--default--12">
 
 	
    <div id="nv-text-f781411fa9" class="general-container-text            ">
			<div class="text-center lap-text-center tab-text-center mob-text-center">
				<div class="description ">
                	<p>Speed up efficient dataset processing and evaluation.</p>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-image image aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--8 aem-GridColumn--offset--default--2 aem-GridColumn--offset--phone--0">

<div id="nv-image-280fe8b483" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/cosmos-curator-ces.jpg" data-cmp-widths="190,410,630,850,1070,1290" data-asset="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/cosmos-curator-ces.jpg" data-title="NVIDIA NeMo Curator" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="NVIDIA NeMo Curator" title="NVIDIA NeMo Curator" data-analytics="nv-image-280fe8b483" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/cosmos-curator-ces.jpg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-container container responsivegrid aem-GridColumn aem-GridColumn--default--12">

    
    
    
    <div id="container-e03cd0104d" class="v1-1 p-t-0 p-b-0  lap-p-t-0 
         lap-p-b-0  tab-p-t-0 tab-p-b-0 
          mob-p-t-0 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-stretch l-content-align-stretch t-content-align-stretch m-content-align-top 
         " data-cmp-is="nv-container">
		
		
		
       
       
    	<div class="general-container nv-flexbox d-col-3 l-col-3 t-col-1 p-col-1 d-justify-center l-justify-center t-justify-center p-justify-left    d-content-align-stretch l-content-align-stretch t-content-align-stretch m-content-align-top    ">
	        
	        <div class="nv-teaser teaser nv-no-top-padding nv-no-bottom-padding">

  
<div id="nv-teaser-f57733cea7" class="cmp-teaser     " data-title-style="manual" data-category="Developer Tools &amp; Techniques">
        

  
   <div class="nv-teaser--holder">
    
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-left lap-text-left tab-text-left mob-text-left">
        
    

        
    <h3 class="cmp-teaser__title h--smaller" data-titlerow="One" data-titlerowlaptop="One" data-titlerowtablet="One">
        Cosmos Curator
    </h3>

        
    <div class="cmp-teaser__description">
    	
       		<p>Quickly filter, annotate, and deduplicate large amounts of sensor data with Cosmos Curator.</p>
        
    </div>

        
	
	
	
    <div class="cmp-teaser__action-container " data-ctaexpand="false">
        
    <a class="cmp-teaser__action-link nv-teaser-text-link nv-teaser-cta-small " target="_blank" id="teaser-f57733cea7-cta-3f7f442755" rel="noopener noreferrer" href="https://github.com/nvidia-cosmos/cosmos-curate">Download Cosmos Curator on GitHub
       <span class="cmp-teaser__action-link-icon fa-solid fa-angle-right"></span>  
    </a>

    </div>
    
    
    

    </div>
    </div>
       

</div>

    
</div>
<div class="nv-teaser teaser nv-no-top-padding nv-no-bottom-padding">

  
<div id="nv-teaser-ccb5ac32ba" class="cmp-teaser     " data-title-style="manual" data-category="Developer Tools &amp; Techniques">
        

  
   <div class="nv-teaser--holder">
    
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-left lap-text-left tab-text-left mob-text-left">
        
    

        
    <h3 class="cmp-teaser__title h--smaller" data-titlerow="One" data-titlerowlaptop="One" data-titlerowtablet="One">
        Cosmos Dataset Search
    </h3>

        
    <div class="cmp-teaser__description">
    	
       		<p>Instantly query datasets and retrieve scenarios with NVIDIA Cosmos Dataset Search (CDS).</p>
        
    </div>

        
	
	
	
    <div class="cmp-teaser__action-container " data-ctaexpand="false">
        
    <a class="cmp-teaser__action-link nv-teaser-text-link nv-teaser-cta-small " target="_blank" id="teaser-ccb5ac32ba-cta-297ae66979" rel="noopener noreferrer" href="https://build.nvidia.com/nvidia/cosmos-dataset-search?ncid=no-ncid">Try Cosmos Dataset Search
       <span class="cmp-teaser__action-link-icon fa-solid fa-angle-right"></span>  
    </a>

    </div>
    
    
    

    </div>
    </div>
       

</div>

    
</div>
<div class="nv-teaser teaser nv-no-top-padding nv-no-bottom-padding">

  
<div id="nv-teaser-c6e01f8453" class="cmp-teaser     " data-title-style="manual" data-category="Developer Tools &amp; Techniques">
        

  
   <div class="nv-teaser--holder">
    
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-left lap-text-left tab-text-left mob-text-left">
        
    

        
    <h3 class="cmp-teaser__title h--smaller" data-titlerow="One" data-titlerowlaptop="One" data-titlerowtablet="One">
        Cosmos Evaluator
    </h3>

        
    <div class="cmp-teaser__description">
    	
       		<p>Review and score generative video outputs at scale using Cosmos Evaluator.</p>
        
    </div>

        
	
	
	
    <div class="cmp-teaser__action-container " data-ctaexpand="false">
        
    <a class="cmp-teaser__action-link nv-teaser-text-link nv-teaser-cta-small " target="_blank" id="teaser-c6e01f8453-cta-dbe2cae24b" rel="noopener noreferrer" href="https://github.com/nvidia-cosmos/cosmos-evaluator">Download Cosmos Evaluator on GitHub
       <span class="cmp-teaser__action-link-icon fa-solid fa-angle-right"></span>  
    </a>

    </div>
    
    
    

    </div>
    </div>
       

</div>

    
</div>

	        
        </div>
         
    </div>

    
    

 

<style>
    #container-e03cd0104d {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-e03cd0104d {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-e03cd0104d {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-e03cd0104d {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-e03cd0104d {
            
        }
    }
</style> 

</div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-8da14fbf40 {
        background-color:#000000;
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-8da14fbf40 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-8da14fbf40 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-8da14fbf40 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-8da14fbf40 {
            
        }
    }
</style> 

</div>
<div class="nv-container container responsivegrid nv-container--theme-light aem-GridColumn aem-GridColumn--default--12">

    
	
		<div id="use-cases" class="p-t-75 p-b-75  lap-p-t-75 
         lap-p-b-75  tab-p-t-45 tab-p-b-45
          mob-p-t-45 mob-p-b-45  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-center l-content-align-center t-content-align-center m-content-align-center 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false" data-in-page-nav-item-index="2">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="nv-title text h--smallest aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-bf36a3fe02" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <p class="title ">
            
                      Use Cases
          
          </p>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-title text h--medium aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-5939e1561d" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h2 class="title ">
            
                      How Cosmos Accelerates AI Across Industries
          
          </h2>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--10 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--1">
 
 	
    <div id="nv-text-0bedd27175" class="general-container-text   hide-on-desktop   hide-on-laptop   hide-on-tablet   hide-on-mob">
			<div class="text-center lap-text-center tab-text-center mob-text-center">
				<div class="description ">
                	<p><span class="p--large">Use Cosmos WFMs to simulate, reason, and generate data for downstream pipelines in robotics, autonomous vehicles, and industrial vision systems.</span></p>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-separator separator aem-GridColumn aem-GridColumn--default--12">
  
  
<div id="nv-separator-ab351a8981" class="cmp-separator">
     
     <style>
         
        
    	@media screen and (min-width:1350px){
            #nv-separator-ab351a8981{
                height:60px;
            }
        }
         
        
        @media screen and (min-width:1024px) and (max-width:1349px){
            #nv-separator-ab351a8981{
                 height:60px;
            }
        }
         
        
        @media screen and (min-width:640px) and (max-width:1023px){
        	 #nv-separator-ab351a8981{
                 height:30px;
            }
        }
         
        
        @media screen and (max-width: 639px){
        	 #nv-separator-ab351a8981{
                 height:30px;
            }
        }
         
    </style>
    
</div></div>
<div class="nv-tabs tabs panelcontainer aem-GridColumn aem-GridColumn--default--12">
 
<div id="nv-tabs-b263948dba" class="cmp-tabs tabs-layout cmp-tabs--border-group" data-cmp-id="nv-tabs-b263948dba" data-cmp-tab-title-width="fit-content">
     <div class="nv-tabs__content"></div>
     <div class="nv-tabs__container">
          
    <ol role="tablist" class="nv-tabs__tablist align-center" aria-multiselectable="false">
        <div class="nv-tabs__line nv-tabs__trans--enabled" style="width: 145px; left: 0px;"></div>
        
        <li role="tab" id="tabs-b263948dba-item-bc6de1fe69-tab" class="cmp-tabs__tab nv-tabs__tab--active" aria-controls="tabs-b263948dba-item-bc6de1fe69-tabpanel" tabindex="0" data-cmp-hook-tabs="tab" data-theme="nv-tabs__tab--undefined" aria-selected="true">
            <div>Robot Learning</div>
        </li>
    
        
        
        <li role="tab" id="tabs-b263948dba-item-d141309a24-tab" class="cmp-tabs__tab" aria-controls="tabs-b263948dba-item-d141309a24-tabpanel" tabindex="-1" data-cmp-hook-tabs="tab" data-theme="nv-tabs__tab--undefined" aria-selected="false">
            <div>Autonomous Vehicle Training</div>
        </li>
    
        
        
        <li role="tab" id="tabs-b263948dba-item-13f8280418-tab" class="cmp-tabs__tab" aria-controls="tabs-b263948dba-item-13f8280418-tabpanel" tabindex="-1" data-cmp-hook-tabs="tab" data-theme="nv-tabs__tab--undefined" aria-selected="false">
            <div>Video Analytics AI Agents</div>
        </li>
    </ol>

          
    </div>
    <div id="tabs-b263948dba-item-bc6de1fe69-tabpanel" role="tabpanel" aria-labelledby="tabs-b263948dba-item-bc6de1fe69-tab" tabindex="0" class="cmp-tabs__tabpanel cmp-tabs__tabpanel--active" data-cmp-hook-tabs="tabpanel"><div class="nv-container container responsivegrid">

    
	
		<div id="container-bc6de1fe69" class="    
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="nv-container container responsivegrid aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--default--4">

    
	
		<div id="container-ab6ac8a768" class="p-t-0 p-b-0  lap-p-t-0 
         lap-p-b-0  tab-p-t-0 tab-p-b-0
          mob-p-t-0 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-center l-content-align-center t-content-align-center m-content-align-center 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--4 aem-Grid--tablet--12 aem-Grid--default--4 aem-Grid--phone--12 ">
    
    <div class="nv-title text h--small aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--4">
  
    
      <div id="nv-title-996d3d00c1" class="general-container-text            ">
        <div class="text-left lap-text-left tab-text-left mob-text-left">
          <h3 class="title ">
            
                      Robot Learning
          
          </h3>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--4">
 
 	
    <div id="nv-text-d302de5b7c" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>Build custom world models for downstream tasks, environments, camera or sensor layouts, and policies.</p> 
<ul> 
 <li>Post-train Cosmos Predict for robot-specific views or control policies</li> 
 <li>Generate synthetic data across environments and lighting conditions with Cosmos Transfer</li> 
 <li>Post-train Cosmos Reason using the <a href="https://github.com/nvidia-cosmos/cosmos-rl" target="_blank">Cosmos RL</a> framework to build vision-language-action (VLA) models</li> 
 <li>Create an end-to-end synthetic data augmentation and evaluation pipeline using the <a href="https://nvidianews.nvidia.com/news/nvidia-announces-open-physical-ai-data-factory-blueprint-to-accelerate-robotics-vision-ai-agents-and-autonomous-vehicle-development?ncid=no-ncid" target="_blank">Physical AI Data Factory Blueprint</a> built on Cosmos</li> 
</ul>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-button button nv-button-text nv-button-small nv-button-caret aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--4">
<div class="nv-button-standard              button-left button-lap-left button-tab-left button-mob-left">
  
  <a id="nv-button-29f275cb3a" class="btn-content btncta    " target="_blank" data-cmp-clickable="false " rel="noopener noreferrer" href="https://nvidia-cosmos.github.io/cosmos-cookbook/gallery/robotics_inference.html">
    
    

    <span class="btn-text">See Examples</span>
    
  </a>
</div>

</div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #container-ab6ac8a768 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-ab6ac8a768 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-ab6ac8a768 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-ab6ac8a768 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-ab6ac8a768 {
            
        }
    }
</style>

</div>
<div class="nv-image image aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--8 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">

<div id="nv-image-07ee171e63" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/gr00t-dreams-tech-blog.jpg" data-cmp-widths="190,410,630,850,1070,1290" data-asset="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/gr00t-dreams-tech-blog.jpg" data-title="Train robot policies in simulation" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Train robot policies in simulation" title="Train robot policies in simulation" data-analytics="nv-image-07ee171e63" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/gr00t-dreams-tech-blog.jpg">

	    
	    
	    
	    
  </div>

    
</div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #container-bc6de1fe69 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-bc6de1fe69 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-bc6de1fe69 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-bc6de1fe69 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-bc6de1fe69 {
            
        }
    }
</style>

</div>
</div>
<div id="tabs-b263948dba-item-d141309a24-tabpanel" role="tabpanel" aria-labelledby="tabs-b263948dba-item-d141309a24-tab" tabindex="0" class="cmp-tabs__tabpanel" data-cmp-hook-tabs="tabpanel" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
		<div id="container-d141309a24" class="p-t-0 p-b-0  lap-p-t-0 
         lap-p-b-0  tab-p-t-0 tab-p-b-0
          mob-p-t-0 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="nv-container container responsivegrid aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--default--4">

    
	
		<div id="container-feb335c981" class="p-t-0 p-b-0  lap-p-t-0 
         lap-p-b-0  tab-p-t-0 tab-p-b-0
          mob-p-t-0 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-center l-content-align-center t-content-align-center m-content-align-center 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--4 aem-Grid--tablet--12 aem-Grid--default--4 aem-Grid--phone--12 ">
    
    <div class="nv-title text h--small aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--4">
  
    
      <div id="nv-title-27e4dcf95f" class="general-container-text            ">
        <div class="text-left lap-text-left tab-text-left mob-text-left">
          <h3 class="title ">
            
                      Autonomous Vehicle Training
          
          </h3>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--4">
 
 	
    <div id="nv-text-8e1c3fd80c" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>Generate custom, diverse, and high-fidelity sensor data for safely training, testing, and validating autonomous vehicles.</p> 
<ul> 
 <li>Amplify existing data diversity with new weather, lighting, and geolocation data using Cosmos Transfer</li> 
 <li>Expand into multi-sensor views using Cosmos Predict</li> 
 <li>Create an end-to-end synthetic data augmentation and evaluation pipeline using the <a href="https://nvidianews.nvidia.com/news/nvidia-announces-open-physical-ai-data-factory-blueprint-to-accelerate-robotics-vision-ai-agents-and-autonomous-vehicle-development?ncid=no-ncid" target="_blank">Physical AI Data Factory Blueprint</a> built on Cosmos</li> 
</ul>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-button button nv-button-text nv-button-small nv-button-caret aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--4">
<div class="nv-button-standard              button-left button-lap-left button-tab-left button-mob-left">
  
  <a id="nv-button-1acd23ad9c" class="btn-content btncta    " target="_blank" data-cmp-clickable="false " rel="noopener noreferrer" href="https://nvidia-cosmos.github.io/cosmos-cookbook/gallery/av_inference.html">
    
    

    <span class="btn-text">See Examples</span>
    
  </a>
</div>

</div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #container-feb335c981 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-feb335c981 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-feb335c981 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-feb335c981 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-feb335c981 {
            
        }
    }
</style>

</div>
<div class="nv-image image aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--8 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">

<div id="nv-image-08684663a9" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/nvidia-cosmo-synthetics-data-generation-auto-ari.jpg" data-cmp-widths="190,410,630,850,1070,1290" data-asset="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/nvidia-cosmo-synthetics-data-generation-auto-ari.jpg" data-title="Synthetic Data Generation" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Synthetic Data Generation" title="Synthetic Data Generation" data-analytics="nv-image-08684663a9" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/nvidia-cosmo-synthetics-data-generation-auto-ari.jpg">

	    
	    
	    
	    
  </div>

    
</div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #container-d141309a24 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-d141309a24 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-d141309a24 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-d141309a24 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-d141309a24 {
            
        }
    }
</style>

</div>
</div>
<div id="tabs-b263948dba-item-13f8280418-tabpanel" role="tabpanel" aria-labelledby="tabs-b263948dba-item-13f8280418-tab" tabindex="0" class="cmp-tabs__tabpanel" data-cmp-hook-tabs="tabpanel" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
		<div id="container-13f8280418" class="    
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="nv-container container responsivegrid aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--default--4">

    
	
		<div id="container-9bf33ff6cf" class="p-t-0 p-b-0  lap-p-t-0 
         lap-p-b-0  tab-p-t-0 tab-p-b-0
          mob-p-t-0 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-center l-content-align-center t-content-align-center m-content-align-center 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--4 aem-Grid--tablet--12 aem-Grid--default--4 aem-Grid--phone--12 ">
    
    <div class="nv-title text h--small aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--4">
  
    
      <div id="nv-title-9ed0bb5d5c" class="general-container-text            ">
        <div class="text-left lap-text-left tab-text-left mob-text-left">
          <h3 class="title ">
            
                      Video Analytics AI Agents
          
          </h3>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--4">
 
 	
    <div id="nv-text-6e5ff36a4a" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>Enhance automation, safety, and operational efficiency across industrial and urban environments.&nbsp;</p> 
<p>With Cosmos Reason, AI agents can analyze, summarize, and interact with real-time or recorded video streams to:</p> 
<ul> 
 <li>Deliver real-time question-answering and alerts</li> 
 <li>Provide rich contextual insights</li> 
 <li>Extract insights from large-scale video data with NVIDIA Blueprint for <a href="https://build.nvidia.com/nvidia/video-search-and-summarization?ncid=no-ncid" target="_blank">video search and summarization</a></li> 
</ul>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-button button nv-button-text nv-button-small nv-button-caret aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--4">
<div class="nv-button-standard              button-left button-lap-left button-tab-left button-mob-left">
  
  <a id="nv-button-034f9a8adc" class="btn-content btncta    " target="_self" data-cmp-clickable="false " href="/use-cases/video-analytics-ai-agents/">
    
    

    <span class="btn-text">Learn More</span>
    
  </a>
</div>

</div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #container-9bf33ff6cf {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-9bf33ff6cf {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-9bf33ff6cf {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-9bf33ff6cf {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-9bf33ff6cf {
            
        }
    }
</style>

</div>
<div class="nv-image image aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--8 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">

<div id="nv-image-2ddc97cda0" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/video-analytics-ai-agents.jpg" data-cmp-widths="190,410,630,850,1070,1290" data-asset="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/video-analytics-ai-agents.jpg" data-title="Worker in safety gear maintaining wind turbine" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Worker in safety gear maintaining wind turbine" title="Worker in safety gear maintaining wind turbine" data-analytics="nv-image-2ddc97cda0" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/video-analytics-ai-agents.jpg">

	    
	    
	    
	    
  </div>

    
</div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #container-13f8280418 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-13f8280418 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-13f8280418 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-13f8280418 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-13f8280418 {
            
        }
    }
</style>

</div>
</div>

    
</div></div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #use-cases {
        background-color:#fff;
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #use-cases {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #use-cases {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #use-cases {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #use-cases {
            
        }
    }
</style>

</div>
<div class="nv-container container responsivegrid aem-GridColumn aem-GridColumn--default--12">

    
	
    <div id="starting-options" class="v1-1 p-t-75 p-b-75  lap-p-t-75 
         lap-p-b-75  tab-p-t-45 tab-p-b-45
          mob-p-t-45 mob-p-b-45  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none" data-in-page-nav-item-index="3">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-title text h--smallest aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-518ea79745" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <p class="title ">
            
                      Starting Options
          
          </p>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-title text h--medium aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-0514dbc1cd" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h2 class="title ">
            
                      Get Started With NVIDIA Cosmos
          
          </h2>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-container container responsivegrid aem-GridColumn aem-GridColumn--default--12">

    
    
    
    <div id="container-7152028147" class="v1-1 p-t-45 p-b-0  lap-p-t-45 
         lap-p-b-0  tab-p-t-30 tab-p-b-0 
          mob-p-t-30 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-stretch l-content-align-stretch t-content-align-stretch m-content-align-stretch 
         " data-cmp-is="nv-container">
		
		
		
       
       
    	<div class="general-container nv-flexbox d-col-3 l-col-3 t-col-1 p-col-1 d-justify-left l-justify-left t-justify-left p-justify-left    d-content-align-stretch l-content-align-stretch t-content-align-stretch m-content-align-stretch    ">
	        
	        <div class="nv-teaser teaser nv-teaser--card nv-teaser--bg-white">

  
<div id="nv-teaser-20c5a0163d" class="cmp-teaser     " data-title-style="manual">
        

  
   <div class="nv-teaser--holder">
    
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-center lap-text-center tab-text-center mob-text-center" style="padding: 0px 20px; width: calc(100% - 40px);">
        
    

        
    <h4 class="cmp-teaser__title h--huge" data-titlerow="One" data-titlerowlaptop="One" data-titlerowtablet="One">
        1
    </h4>

        
    <div class="cmp-teaser__description">
    	
       		<p>Ready to build? Access open models and code directly.</p>
        
    </div>

        
	
	
	
    <div class="cmp-teaser__action-container " data-ctaexpand="false">
        
    <a class="cmp-teaser__action-link nv-teaser-secondary-button  " target="_blank" id="teaser-20c5a0163d-cta-141183ab22" rel="noopener noreferrer" href="https://github.com/nvidia-cosmos">View GitHub 
         
    </a>

    </div>
    
    
    

    </div>
    </div>
       

</div>

    
</div>
<div class="nv-teaser teaser nv-teaser--card nv-teaser--bg-white">

  
<div id="nv-teaser-f4f8ccbfbe" class="cmp-teaser     " data-title-style="manual">
        

  
   <div class="nv-teaser--holder">
    
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-center lap-text-center tab-text-center mob-text-center" style="padding: 0px 20px; width: calc(100% - 40px);">
        
    

        
    <h4 class="cmp-teaser__title h--huge" data-titlerow="One" data-titlerowlaptop="One" data-titlerowtablet="One">
        2
    </h4>

        
    <div class="cmp-teaser__description">
    	
       		<p>Not ready to build yet? Try Cosmos models in our hosted catalog.</p>
        
    </div>

        
	
	
	
    <div class="cmp-teaser__action-container " data-ctaexpand="false">
        
    <a class="cmp-teaser__action-link nv-teaser-secondary-button  " target="_blank" id="teaser-f4f8ccbfbe-cta-011cd07c99" rel="noopener noreferrer" href="https://build.nvidia.com/search?q=cosmos&amp;ncid=no-ncid">Try Now
         
    </a>

    </div>
    
    
    

    </div>
    </div>
       

</div>

    
</div>
<div class="nv-teaser teaser nv-teaser--card nv-teaser--bg-white">

  
<div id="nv-teaser-2b34e9a793" class="cmp-teaser     " data-title-style="manual">
        

  
   <div class="nv-teaser--holder">
    
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-center lap-text-center tab-text-center mob-text-center" style="padding: 0px 20px; width: calc(100% - 40px);">
        
    

        
    <h4 class="cmp-teaser__title h--huge" data-titlerow="One" data-titlerowlaptop="One" data-titlerowtablet="One">
        3
    </h4>

        
    <div class="cmp-teaser__description">
    	
       		<p>&nbsp;Need help? Start quickly with our hands-on model recipes.</p>
        
    </div>

        
	
	
	
    <div class="cmp-teaser__action-container " data-ctaexpand="false">
        
    <a class="cmp-teaser__action-link nv-teaser-secondary-button  " target="_blank" id="teaser-2b34e9a793-cta-a9bc017bb8" rel="noopener noreferrer" href="https://nvidia-cosmos.github.io/cosmos-cookbook/">Browse Cookbook
         
    </a>

    </div>
    
    
    

    </div>
    </div>
       

</div>

    
</div>

	        
        </div>
         
    </div>

    
    

 

<style>
    #container-7152028147 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-7152028147 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-7152028147 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-7152028147 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-7152028147 {
            
        }
    }
</style> 

</div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #starting-options {
        background-color:#F7F7F7;
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #starting-options {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #starting-options {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #starting-options {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #starting-options {
            
        }
    }
</style> 

</div>
<div class="nv-container container responsivegrid aem-GridColumn aem-GridColumn--default--12">

    
	
    <div id="container-33a173936c" class="v1-1 p-t-75 p-b-75 hide-on-desktop lap-p-t-75 
         lap-p-b-75 hide-on-laptop tab-p-t-45 tab-p-b-45
         hide-on-tablet mob-p-t-45 mob-p-b-45 hide-on-mob 
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--laptop--12 ">
    
    <div class="nv-title text h--smallest aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-0624400faf" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <p class="title ">
            
                      Trustworthy AI
          
          </p>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-title text h--medium aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-8bb59c8ae8" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h2 class="title ">
            
                      Supporting the Physical AI Community
          
          </h2>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text nv-no-bottom-padding aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--10 aem-GridColumn--offset--default--1">
 
 	
    <div id="nv-text-d5323c59f4" class="general-container-text            ">
			<div class="text-center lap-text-center tab-text-center mob-text-center">
				<div class="description ">
                	<p><span class="p--large">Cosmos models, guardrails, and tokenizers are available on Hugging Face and GitHub, with resources to tackle data scarcity in training physical AI models.</span></p>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-container container responsivegrid aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--laptop--none aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--offset--default--0 aem-GridColumn--laptop--12 aem-GridColumn--offset--laptop--0">

    
    
    
    <div id="container-8db592aab4" class="v1-1 p-t-30 p-b-0  lap-p-t-30 
         lap-p-b-0  tab-p-t-15 tab-p-b-0 
          mob-p-t-15 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         " data-cmp-is="nv-container">
		
		
		
       
       
    	<div class="general-container nv-flexbox d-col-6 l-col-6 t-col-4 p-col-2 d-justify-center l-justify-center t-justify-center p-justify-center flex-align-top   d-content-align-top l-content-align-top t-content-align-top m-content-align-top    ">
	        
	        <div class="nv-teaser teaser nv-teaser--card nv-teaser--bg-white">

  
<div id="nv-teaser-05938bc7f7" class="cmp-teaser     " data-title-style="dynamic" data-rendition-thumbnail.140.100="../../assets/www.nvidia.com/content/dam/logo-items/logo-github-2.svgjcr:content/renditions/cq5dam.thumbnail.140.100.png" data-rendition-thumbnail.48.48="../../assets/www.nvidia.com/content/dam/logo-items/logo-github-2.svgjcr:content/renditions/cq5dam.thumbnail.48.48.png" data-rendition-original="../../assets/www.nvidia.com/content/dam/logo-items/logo-github-2.svg" data-rendition-web.1280.1280="../../assets/www.nvidia.com/content/dam/logo-items/logo-github-2.svgjcr:content/renditions/cq5dam.web.1280.1280.jpeg" data-rendition-thumbnail.319.319="../../assets/www.nvidia.com/content/dam/logo-items/logo-github-2.svgjcr:content/renditions/cq5dam.thumbnail.319.319.png">
        

  
   <div class="nv-teaser--holder">
    <div class="cmp-teaser__image" data-type="renditionUpload" data-alt="Github" data-altvaluefromdam="false">

<div class="cmp-image             
        " itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/nvidiaGDC/us/en_US/ai/cosmos/_jcr_content/root/responsivegrid/nv_container_1161599331/nv_container/nv_teaser_copy.coreimg.svg.svg/1773370568408/logo-github-2.svg" data-asset="../../assets/www.nvidia.com/content/dam/logo-items/logo-github-2.svg" data-title="Github" data-cmp-type="renditionUpload">
     	<a class="cmp-image__link" href="https://github.com/nvidia-cosmos" target="_blank" data-cmp-hook-image="link" rel="noopener noreferrer">
           
		   
    <img class="cmp-image__image cmp-image__image--is-loading" itemprop="contentUrl" alt="Github" title="Github" data-analytics="nv-image-05938bc7f7" data-cmp-hook-image="image" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

	    </a>
	    
	    
	    
  </div>

    
</div>
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-left lap-text-left tab-text-left mob-text-left" style="padding: 0px 20px; width: calc(100% - 40px);">
        
    

        
    

        
    

        
	
	
	
    
    
    
    

    </div>
    </div>
       

</div>

    
</div>
<div class="nv-teaser teaser nv-teaser--card nv-teaser--bg-white">

  
<div id="nv-teaser-1761834e43" class="cmp-teaser     " data-title-style="dynamic" data-rendition-thumbnail.140.100="../../assets/www.nvidia.com/content/dam/logo-items/logo-hugging-face-new.svgjcr:content/renditions/cq5dam.thumbnail.140.100.png" data-rendition-thumbnail.48.48="../../assets/www.nvidia.com/content/dam/logo-items/logo-hugging-face-new.svgjcr:content/renditions/cq5dam.thumbnail.48.48.png" data-rendition-original="../../assets/www.nvidia.com/content/dam/logo-items/logo-hugging-face-new.svg" data-rendition-web.1280.1280="../../assets/www.nvidia.com/content/dam/logo-items/logo-hugging-face-new.svgjcr:content/renditions/cq5dam.web.1280.1280.jpeg" data-rendition-thumbnail.319.319="../../assets/www.nvidia.com/content/dam/logo-items/logo-hugging-face-new.svgjcr:content/renditions/cq5dam.thumbnail.319.319.png">
        

  
   <div class="nv-teaser--holder">
    <div class="cmp-teaser__image" data-type="renditionUpload" data-alt="Hugging Face" data-altvaluefromdam="false">

<div class="cmp-image             
        " itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/nvidiaGDC/us/en_US/ai/cosmos/_jcr_content/root/responsivegrid/nv_container_1161599331/nv_container/nv_teaser.coreimg.svg.svg/1773370568423/logo-hugging-face-new.svg" data-asset="../../assets/www.nvidia.com/content/dam/logo-items/logo-hugging-face-new.svg" data-title="Hugging Face" data-cmp-type="renditionUpload">
     	<a class="cmp-image__link" href="https://huggingface.co/nvidia" target="_blank" data-cmp-hook-image="link" rel="noopener noreferrer">
           
		   
    <img class="cmp-image__image cmp-image__image--is-loading" itemprop="contentUrl" alt="Hugging Face" title="Hugging Face" data-analytics="nv-image-1761834e43" data-cmp-hook-image="image" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

	    </a>
	    
	    
	    
  </div>

    
</div>
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-center lap-text-center tab-text-center mob-text-center" style="padding: 0px 20px; width: calc(100% - 40px);">
        
    

        
    

        
    

        
	
	
	
    
    
    
    

    </div>
    </div>
       

</div>

    
</div>

	        
        </div>
         
    </div>

    
    

 

<style>
    #container-8db592aab4 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-8db592aab4 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-8db592aab4 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-8db592aab4 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-8db592aab4 {
            
        }
    }
</style> 

</div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-33a173936c {
        background-color:#EEE;
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-33a173936c {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-33a173936c {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-33a173936c {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-33a173936c {
            
        }
    }
</style> 

</div>
<div class="nv-container container responsivegrid nv-container--theme-dark aem-GridColumn aem-GridColumn--default--12">

    
    
    
    <div id="container-c81bdb5013" class="v1-1 p-t-75 p-b-75  lap-p-t-75 
         lap-p-b-75  tab-p-t-45 tab-p-b-45 
          mob-p-t-45 mob-p-b-45  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         " data-cmp-is="nv-container">
		
		
		
       
       
    	<div class="general-container nv-flexbox d-col-2 l-col-2 t-col-2 p-col-1 d-justify-left l-justify-left t-justify-left p-justify-left flex-align-center p-column-reverse  d-content-align-top l-content-align-top t-content-align-top m-content-align-top    ">
	        
	        <div class="nv-container container responsivegrid">

    
	
    <div id="container-f1784444e8" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-title text h--smallest aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-15b04d7995" class="general-container-text            ">
        <div class="text-left lap-text-left tab-text-left mob-text-left">
          <p class="title ">
            
                      AI Infrastructure
          
          </p>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-title text h--medium aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-7544d2b063" class="general-container-text            ">
        <div class="text-left lap-text-left tab-text-left mob-text-left">
          <h2 class="title ">
            
                      Get the Best Performance With NVIDIA Blackwell
          
          </h2>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text aem-GridColumn aem-GridColumn--default--12">
 
 	
    <div id="nv-text-46b73ad3b7" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>NVIDIA RTX PRO 6000 Blackwell Series Servers accelerate physical AI development for robots, autonomous vehicles, and AI agents across training, synthetic data generation, simulation, and inference.</p> 
<p>Unlock peak performance for Cosmos world foundation models on NVIDIA Blackwell GB200 for industrial post-training and inference workloads.</p>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-button button nv-button-text nv-button-caret aem-GridColumn aem-GridColumn--default--12">
<div class="nv-button-standard              button-left button-lap-left button-tab-left button-mob-left">
  
  <a id="nv-button-e76d04d9aa" class="btn-content btncta    " target="_self" data-cmp-clickable="false " href="/data-center/rtx-pro-6000-blackwell-server-edition/">
    
    

    <span class="btn-text">Learn More</span>
    
  </a>
</div>

</div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-f1784444e8 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-f1784444e8 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-f1784444e8 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-f1784444e8 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-f1784444e8 {
            
        }
    }
</style> 

</div>
<div class="nv-image image">

<div id="nv-image-6fd7ff1e67" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/grace-gb200-1920x1080.jpg" data-cmp-widths="190,410,630,850,1070,1290" data-asset="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/grace-gb200-1920x1080.jpg" data-title="NVIDIA GB200 Grace Blackwell Superchip" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="NVIDIA GB200 Grace Blackwell Superchip" title="NVIDIA GB200 Grace Blackwell Superchip" data-analytics="nv-image-6fd7ff1e67" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/grace-gb200-1920x1080.jpg">

	    
	    
	    
	    
  </div>

    
</div>

	        
        </div>
         
    </div>

    
    

 

<style>
    #container-c81bdb5013 {
        background-color:#000000;
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-c81bdb5013 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-c81bdb5013 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-c81bdb5013 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-c81bdb5013 {
            
        }
    }
</style> 

</div>
<div class="nv-container container responsivegrid aem-GridColumn aem-GridColumn--default--12">

    
	
		<div id="ecosystem" class="p-t-75 p-b-75  lap-p-t-75 
         lap-p-b-75  tab-p-t-45 tab-p-b-45
          mob-p-t-45 mob-p-b-45  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false" data-in-page-nav-item-index="4">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="nv-title text h--smallest aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-46f57f3d4a" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <p class="title ">
            
                      Ecosystem
          
          </p>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-title text h--medium aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-a42749e85d" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h2 class="title ">
            
                      Adopted by Leading Physical AI Innovators
          
          </h2>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-text text aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--10 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--1">
 
 	
    <div id="nv-text-766dc395ab" class="general-container-text            ">
			<div class="text-center lap-text-center tab-text-center mob-text-center">
				<div class="description ">
                	<p><span class="p--large">Model developers from the robotics, autonomous vehicles, and vision AI industries are using Cosmos to accelerate physical AI development.</span></p>
                </div>
			</div>
	</div>

    

</div>
<div class="nv-container container responsivegrid aem-GridColumn aem-GridColumn--default--12">

    
    
    
    <div id="container-b3b39959b8" class="p-t-0 p-b-0  lap-p-t-0 
         lap-p-b-0  tab-p-t-0 tab-p-b-0 
          mob-p-t-0 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         " data-cmp-is="nv-container" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false">

		
		
		
       
       
    	<div class="general-container nv-flexbox d-col-6 l-col-6 t-col-4 p-col-2 d-justify-center l-justify-center t-justify-center p-justify-center flex-align-top  ">
	        
	        <div class="nv-image image">

<div id="nv-image-0f8e159096" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/1x-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/1x-logo.svg" data-title="1X Technologies logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="1X Technologies logo" title="1X Technologies logo" data-analytics="nv-image-0f8e159096" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/1x-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-06facebfab" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/agibot-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/agibot-logo.svg" data-title="Agile Robots logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Agile Robots logo" title="Agile Robots logo" data-analytics="nv-image-06facebfab" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/agibot-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-f22f8f6004" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/agile-robots-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/agile-robots-logo.svg" data-title="Agile Robots logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Agile Robots logo" title="Agile Robots logo" data-analytics="nv-image-f22f8f6004" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/agile-robots-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-c6c5486b88" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/agility-robotics-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/agility-robotics-logo.svg" data-title="Agility Robotics logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Agility Robotics logo" title="Agility Robotics logo" data-analytics="nv-image-c6c5486b88" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/agility-robotics-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-232dd9cd07" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/ambient-ai-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/ambient-ai-logo.svg" data-title="Ambient AI" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Ambient AI" title="Ambient AI" data-analytics="nv-image-232dd9cd07" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/ambient-ai-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-345e6dc9cd" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/nvidiaGDC/us/en_US/ai/cosmos/_jcr_content/root/responsivegrid/nv_container_2060460585/nv_container/nv_image_53093496.coreimg.svg.svg/1773370569092/avathon-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/avathon-logo.svg" data-title="Avathon" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image cmp-image__image--is-loading" itemprop="contentUrl" alt="Avathon" title="Avathon" data-analytics="nv-image-345e6dc9cd" data-cmp-hook-image="image" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-3a3430923c" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/carla-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/carla-logo.svg" data-title="Carla" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Carla" title="Carla" data-analytics="nv-image-3a3430923c" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/carla-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-00f01b7582" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/centific-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/centific-logo.svg" data-title="Centific" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Centific" title="Centific" data-analytics="nv-image-00f01b7582" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/centific-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-5dcb025735" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/field-ai-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/field-ai-logo.svg" data-title="Field AI" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Field AI" title="Field AI" data-analytics="nv-image-5dcb025735" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/field-ai-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-d75348b949" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/figure-ai-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/figure-ai-logo.svg" data-title="Figure AI logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Figure AI logo" title="Figure AI logo" data-analytics="nv-image-d75348b949" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/figure-ai-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-a0f67f7b0d" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/nvidiaGDC/us/en_US/ai/cosmos/_jcr_content/root/responsivegrid/nv_container_2060460585/nv_container/nv_image_843066756.coreimg.svg.svg/1773370569148/foretellix-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/foretellix-logo.svg" data-title="Foretellix logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image cmp-image__image--is-loading" itemprop="contentUrl" alt="Foretellix logo" title="Foretellix logo" data-analytics="nv-image-a0f67f7b0d" data-cmp-hook-image="image" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-303696e449" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/galbot-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/galbot-logo.svg" data-title="Galbot logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Galbot logo" title="Galbot logo" data-analytics="nv-image-303696e449" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/galbot-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-ed40768ea5" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/gatik-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/gatik-logo.svg" data-title="Gatik" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Gatik" title="Gatik" data-analytics="nv-image-ed40768ea5" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/gatik-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-517490f29a" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/logo-general-motors.svg" data-asset="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/logo-general-motors.svg" data-title="General Motors logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="General Motors logo" title="General Motors logo" data-analytics="nv-image-517490f29a" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/logo-general-motors.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-caff7a4301" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/hexagon-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/hexagon-logo.svg" data-title="Hexagon" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Hexagon" title="Hexagon" data-analytics="nv-image-caff7a4301" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/hexagon-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-9f395b0d9c" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/intbot-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/intbot-logo.svg" data-title="IntBot logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="IntBot logo" title="IntBot logo" data-analytics="nv-image-9f395b0d9c" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/intbot-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-c233032118" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/inverted-ai-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/inverted-ai-logo.svg" data-title="Inverted AI" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Inverted AI" title="Inverted AI" data-analytics="nv-image-c233032118" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/inverted-ai-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-37cb77b2cd" class="cmp-image             
     d-align-center l-align-center t-align-center m-align-center" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/li-auto-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/li-auto-logo.svg" data-title="Li Auto" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Li Auto" title="Li Auto" data-analytics="nv-image-37cb77b2cd" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/li-auto-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-8f2c2b303d" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/linker-vision-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/linker-vision-logo.svg" data-title="Linker Vision" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Linker Vision" title="Linker Vision" data-analytics="nv-image-8f2c2b303d" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/linker-vision-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-2e13cb3d98" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/magna-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/magna-logo.svg" data-title="Magna" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Magna" title="Magna" data-analytics="nv-image-2e13cb3d98" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/magna-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-970c318e63" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/mentee-robotics-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/mentee-robotics-logo.svg" data-title="Mentee Robotics" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Mentee Robotics" title="Mentee Robotics" data-analytics="nv-image-970c318e63" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/mentee-robotics-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-99e64a0cee" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/milestone-logo-black.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/milestone-logo-black.svg" data-title="Milestone Systems" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Milestone Systems" title="Milestone Systems" data-analytics="nv-image-99e64a0cee" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/milestone-logo-black.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-01d989489a" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/neura-robotics-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/neura-robotics-logo.svg" data-title="Neura Robotics logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Neura Robotics logo" title="Neura Robotics logo" data-analytics="nv-image-01d989489a" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/neura-robotics-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-0f9a343d7b" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logo-items/logo-nexar.svg" data-asset="../../assets/www.nvidia.com/content/dam/logo-items/logo-nexar.svg" data-title="Nexar" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Nexar" title="Nexar" data-analytics="nv-image-0f9a343d7b" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logo-items/logo-nexar.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-c6807b0478" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logo-items/logo-oxa.svg" data-asset="../../assets/www.nvidia.com/content/dam/logo-items/logo-oxa.svg" data-title="Oxa" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Oxa" title="Oxa" data-analytics="nv-image-c6807b0478" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logo-items/logo-oxa.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-47108aed43" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logo-items/logo-parallel-domain.svg" data-asset="../../assets/www.nvidia.com/content/dam/logo-items/logo-parallel-domain.svg" data-title="Parallel Domain" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Parallel Domain" title="Parallel Domain" data-analytics="nv-image-47108aed43" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logo-items/logo-parallel-domain.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-e994eee8d6" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/logo-plus.svg" data-asset="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/logo-plus.svg" data-title="Plus" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Plus" title="Plus" data-analytics="nv-image-e994eee8d6" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/ai/cosmos/logo-plus.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-9d0042329f" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/skild-ai-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/skild-ai-logo.svg" data-title="Skild AI logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Skild AI logo" title="Skild AI logo" data-analytics="nv-image-9d0042329f" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/skild-ai-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-efd9868109" class="cmp-image             
     d-align-center l-align-center t-align-center m-align-center" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/toyota-research-institute-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/toyota-research-institute-logo.svg" data-title="Toyota Research Institute" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Toyota Research Institute" title="Toyota Research Institute" data-analytics="nv-image-efd9868109" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/toyota-research-institute-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-be4d755790" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/uber-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/uber-logo.svg" data-title="Uber logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Uber logo" title="Uber logo" data-analytics="nv-image-be4d755790" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/uber-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-113f82b89e" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/startups/premier/logos/vast-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/startups/premier/logos/vast-logo.svg" data-title="VAST Data" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="VAST Data" title="VAST Data" data-analytics="nv-image-113f82b89e" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/startups/premier/logos/vast-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-3169b5b583" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/virtual-incision-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/virtual-incision-logo.svg" data-title="Virtual Incision logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Virtual Incision logo" title="Virtual Incision logo" data-analytics="nv-image-3169b5b583" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/virtual-incision-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-ee13431502" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/vorwerk-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/vorwerk-logo.svg" data-title="VorWerk logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="VorWerk logo" title="VorWerk logo" data-analytics="nv-image-ee13431502" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/vorwerk-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-6cc522d925" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/gtc/sponsor-logos/gtc24-spring-partner-logo-voxel51-1250x703.svg" data-asset="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/gtc/sponsor-logos/gtc24-spring-partner-logo-voxel51-1250x703.svg" data-title="Voxel51" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Voxel51" title="Voxel51" data-analytics="nv-image-6cc522d925" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/gtc/sponsor-logos/gtc24-spring-partner-logo-voxel51-1250x703.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-5de6dfaeb1" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/networking/products/supernic/logo-wistron.svg" data-asset="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/networking/products/supernic/logo-wistron.svg" data-title="Wistron logo" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="Wistron logo" title="Wistron logo" data-analytics="nv-image-5de6dfaeb1" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/networking/products/supernic/logo-wistron.svg">

	    
	    
	    
	    
  </div>

    
</div>
<div class="nv-image image">

<div id="nv-image-c31d0f94ca" class="cmp-image             
     d-align-left l-align-left t-align-left m-align-left" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="" data-cmp-lazythreshold="300" data-cmp-src="../../assets/www.nvidia.com/content/dam/logos/x-humanoid-logo.svg" data-asset="../../assets/www.nvidia.com/content/dam/logos/x-humanoid-logo.svg" data-title="X-humanoid" data-cmp-type="renditionUpload">
     	
           
		   
    <img class="cmp-image__image" itemprop="contentUrl" alt="X-humanoid" title="X-humanoid" data-analytics="nv-image-c31d0f94ca" data-cmp-hook-image="image" src="../../assets/www.nvidia.com/content/dam/logos/x-humanoid-logo.svg">

	    
	    
	    
	    
  </div>

    
</div>

	        
        </div>
         
    </div>

    
    

 
<style>
    #container-b3b39959b8 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-b3b39959b8 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-b3b39959b8 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-b3b39959b8 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-b3b39959b8 {
            
        }
    }
</style>

</div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #ecosystem {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #ecosystem {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #ecosystem {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #ecosystem {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #ecosystem {
            
        }
    }
</style>

</div>
<div class="nv-container container responsivegrid nv-container--theme-dark aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12">

    
	
		<div id="next-steps" class="p-t-75 p-b-45  lap-p-t-75 
         lap-p-b-45  tab-p-t-45 tab-p-b-30
          mob-p-t-45 mob-p-b-30  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false" data-in-page-nav-item-index="5">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 ">
    
    <div class="nv-title text h--smallest aem-GridColumn--tablet--12 aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-9462eab85b" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h2 class="title ">
            
                      Next Steps
          
          </h2>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-container container responsivegrid aem-GridColumn--tablet--10 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--offset--tablet--1">

    
    
    
    <div id="container-1b05591bfb" class="p-t-0 p-b-0  lap-p-t-0 
         lap-p-b-0  tab-p-t-0 tab-p-b-0 
          mob-p-t-0 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         " data-cmp-is="nv-container" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false">

		
		
		
       
       
    	<div class="general-container nv-flexbox d-col-2 l-col-2 t-col-1 p-col-1 d-justify-left l-justify-left t-justify-left p-justify-left flex-align-stretch  ">
	        
	        <div class="nv-container container responsivegrid">

    
	
		<div id="container-ed618c1ad5" class="    
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-teaser teaser aem-GridColumn aem-GridColumn--default--12">

  
<div id="nv-teaser-89395f9132" class="cmp-teaser     " data-title-style="manual">
        

  
   <div class="nv-teaser--holder">
    
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-left lap-text-left tab-text-left mob-text-left">
        
    

        
    <h3 class="cmp-teaser__title h--medium" data-titlerow="One" data-titlerowlaptop="One" data-titlerowtablet="One">
        Join the Cosmos Community
    </h3>

        
    <div class="cmp-teaser__description">
    	
       		<p><span class="p--large">Connect with Cosmos experts, engage with fellow developers, provide model feedback, and access continued learning through livestreams and recipes.</span></p>
        
    </div>

        
	
	
	
    <div class="cmp-teaser__action-container " data-ctaexpand="false">
        
    <a class="cmp-teaser__action-link nv-teaser-button  " target="_blank" id="teaser-89395f9132-cta-255a84e68f" rel="noopener noreferrer" href="https://discord.com/invite/nvidiaomniverse">Join Now
         
    </a>

    </div>
    
    
    

    </div>
    </div>
       

</div>

    
</div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #container-ed618c1ad5 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-ed618c1ad5 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-ed618c1ad5 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-ed618c1ad5 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-ed618c1ad5 {
            
        }
    }
</style>

</div>
<div class="nv-container container responsivegrid">

    
    
    
    <div id="container-ee88fe6c96" class="p-t-0 p-b-0  lap-p-t-0 
         lap-p-b-0  tab-p-t-0 tab-p-b-0 
          mob-p-t-0 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         " data-cmp-is="nv-container" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false">

		
		
		
       
       
    	<div class="general-container nv-flexbox d-col-2 l-col-2 t-col-1 p-col-1 d-justify-left l-justify-left t-justify-left p-justify-left flex-align-top  ">
	        
	        <div class="nv-teaser teaser">

  
<div id="nv-teaser-948377fba8" class="cmp-teaser     " data-title-style="manual">
        

  
   <div class="nv-teaser--holder">
    
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-left lap-text-left tab-text-left mob-text-left">
        
    

        
    <h4 class="cmp-teaser__title h--smaller" data-titlerow="One" data-titlerowlaptop="One" data-titlerowtablet="One">
        Cosmos Cookbook
    </h4>

        
    <div class="cmp-teaser__description">
    	
       		<p>A comprehensive guide for working with the NVIDIA Cosmos ecosystem for real-world, domain-specific applications across robotics, simulation, autonomous systems, and physical scene understanding.</p>
        
    </div>

        
	
	
	
    <div class="cmp-teaser__action-container " data-ctaexpand="false">
        
    <a class="cmp-teaser__action-link nv-teaser-text-link nv-teaser-cta-small " target="_blank" id="teaser-948377fba8-cta-3eb589bf03" rel="noopener noreferrer" href="https://nvidia-cosmos.github.io/cosmos-cookbook/">Learn More
       <span class="cmp-teaser__action-link-icon fa-solid fa-angle-right"></span>  
    </a>

    </div>
    
    
    

    </div>
    </div>
       

</div>

    
</div>
<div class="nv-teaser teaser">

  
<div id="nv-teaser-aa3aad3e03" class="cmp-teaser     " data-title-style="manual">
        

  
   <div class="nv-teaser--holder">
    
	
	</div>

  

        
    <div class="general-container-text        ">
    <div class="text-left lap-text-left tab-text-left mob-text-left">
        
    

        
    <h4 class="cmp-teaser__title h--smaller" data-titlerow="One" data-titlerowlaptop="One" data-titlerowtablet="One">
        Build Video Analytics AI Agents
    </h4>

        
    <div class="cmp-teaser__description">
    	
       		<p>Use Cosmos Reason with NVIDIA Blueprint for video search and summarization (VSS) to build AI agents for scalable, real-time video understanding.</p>
        
    </div>

        
	
	
	
    <div class="cmp-teaser__action-container " data-ctaexpand="false">
        
    <a class="cmp-teaser__action-link nv-teaser-text-link nv-teaser-cta-small " target="_blank" id="teaser-aa3aad3e03-cta-36ec123c6b" rel="noopener noreferrer" href="https://build.nvidia.com/nvidia/video-search-and-summarization?ncid=no-ncid">Try now
       <span class="cmp-teaser__action-link-icon fa-solid fa-angle-right"></span>  
    </a>

    </div>
    
    
    

    </div>
    </div>
       

</div>

    
</div>

	        
        </div>
         
    </div>

    
    

 
<style>
    #container-ee88fe6c96 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-ee88fe6c96 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-ee88fe6c96 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-ee88fe6c96 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-ee88fe6c96 {
            
        }
    }
</style>

</div>

	        
        </div>
         
    </div>

    
    

 
<style>
    #container-1b05591bfb {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-1b05591bfb {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-1b05591bfb {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-1b05591bfb {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-1b05591bfb {
            
        }
    }
</style>

</div>
<div class="nv-rawhtml aem-GridColumn--tablet--12 aem-GridColumn aem-GridColumn--default--12">

	
	
    <div id="nv-rawhtml-c1c47fc4ea" class="general-container-text            ">
    	
		

    <div> <style>
@media (max-width: 639px) {
    #next-steps .nv-container .nv-flexbox.p-col-1 > :not(.nv-container) {
        padding-top: 0px;
        padding-bottom: 0px;
  }
}

@media (min-width: 640px) and (max-width: 1023px) {
    #next-steps .nv-container .nv-flexbox.t-col-1 > :not(.nv-container) {
        padding-top: 0px;
        padding-bottom: 0px;
    }
  }
</style></div>	

    </div>
</div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #next-steps {
        background-color:#222222;
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #next-steps {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #next-steps {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #next-steps {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #next-steps {
            
        }
    }
</style>

</div>
<div class="nv-container container responsivegrid aem-GridColumn aem-GridColumn--default--12">

    
	
    <div id="resources" class="v1-1 p-t-75 p-b-0  lap-p-t-75 
         lap-p-b-0  tab-p-t-45 tab-p-b-0
          mob-p-t-45 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none" data-in-page-nav-item-index="6">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-title text h--smallest aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-0c059dbbf0" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <p class="title ">
            
                      Resources
          
          </p>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-title text h--medium aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-904b2a6279" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h2 class="title ">
            
                      The Latest From Cosmos Developers
          
          </h2>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-separator separator aem-GridColumn aem-GridColumn--default--12">
  
  
<div id="nv-separator-81196034c7" class="cmp-separator">
     
     <style>
         
        
    	@media screen and (min-width:1350px){
            #nv-separator-81196034c7{
                height:30px;
            }
        }
         
        
        @media screen and (min-width:1024px) and (max-width:1349px){
            #nv-separator-81196034c7{
                 height:30px;
            }
        }
         
        
        @media screen and (min-width:640px) and (max-width:1023px){
        	 #nv-separator-81196034c7{
                 height:30px;
            }
        }
         
        
        @media screen and (max-width: 639px){
        	 #nv-separator-81196034c7{
                 height:30px;
            }
        }
         
    </style>
    
</div></div>
<div class="nv-tabs tabs panelcontainer aem-GridColumn aem-GridColumn--default--12">
 
<div id="nv-tabs-192178105f" class="cmp-tabs tabs-layout cmp-tabs--border-group" data-cmp-id="nv-tabs-192178105f" data-cmp-tab-title-width="fit-content">
     <div class="nv-tabs__content"></div>
     <div class="nv-tabs__container">
          
    <ol role="tablist" class="nv-tabs__tablist align-center" aria-multiselectable="false">
        <div class="nv-tabs__line nv-tabs__trans--enabled" style="width: 124px; left: 0px;"></div>
        
        <li role="tab" id="tabs-192178105f-item-2bf816686e-tab" class="cmp-tabs__tab nv-tabs__tab--active" aria-controls="tabs-192178105f-item-2bf816686e-tabpanel" tabindex="0" data-cmp-hook-tabs="tab" data-theme="nv-tabs__tab--undefined" aria-selected="true">
            <div>Latest News</div>
        </li>
    
        
        
        <li role="tab" id="tabs-192178105f-item-7aa8cea3c9-tab" class="cmp-tabs__tab" aria-controls="tabs-192178105f-item-7aa8cea3c9-tabpanel" tabindex="-1" data-cmp-hook-tabs="tab" data-theme="nv-tabs__tab--undefined" aria-selected="false">
            <div>Sessions</div>
        </li>
    
        
        
        <li role="tab" id="tabs-192178105f-item-381924f13f-tab" class="cmp-tabs__tab" aria-controls="tabs-192178105f-item-381924f13f-tabpanel" tabindex="-1" data-cmp-hook-tabs="tab" data-theme="nv-tabs__tab--undefined" aria-selected="false">
            <div>Demos</div>
        </li>
    </ol>

          
    </div>
    <div id="tabs-192178105f-item-2bf816686e-tabpanel" role="tabpanel" aria-labelledby="tabs-192178105f-item-2bf816686e-tab" tabindex="0" class="cmp-tabs__tabpanel cmp-tabs__tabpanel--active" data-cmp-hook-tabs="tabpanel"><div class="nv-container container responsivegrid">

    
	
    <div id="container-2bf816686e" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-newsfeed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-newsfeed-058276fc06" class="nv-newsfeed-comp     " data-cmp-is="nv-newsfeed-component" data-cmp-feedcount="3" data-cmp-feedsource="tagged-blogs-feed" data-cmp-feedurl="//blogs.nvidia.com/blog/tag/Cosmos/feed/" data-cmp-tileorientation="latest-news--large" data-cmp-newskeywords="Cosmos" data-cmp-readmore="Read More" data-cmp-istechblog=" data-cmp-techblogfeedurl=" https:="" developer.nvidia.com="" blog="" wp-json="" faceted-search="" v1="" select="" ?page="0&amp;sort=post_date&amp;sortDir=desc&amp;faceted_search_products_str=Cosmos&quot;" data-cmp-techblogcount="3" data-cmp-gridlayout="three-grid" data-cmp-pressreleasefeedurl="https://nvidianews.nvidia.com/cats/press_release.xml" data-cmp-pressreleasecount="3" data-cmp-graphql-url="https://api-prod.nvidia.com/services/content-hub/graphql" data-cmp-single-slide="false">
  
  <div class="nv-newsfeed-title-container ">
    
    <div class="nv-see-all-links">
      
        <a href="/ai/cosmos/" target="_blank" class="latest-news__see-all"><span class="latest-news__see-all-text">See All Tech Blogs</span><span class="far fa-angle-right fa-fw"></span></a>
      
      
        <a href="/blog/blog/tag/cosmos/" target="_blank" class="latest-news__see-all"><span class="latest-news__see-all-text">See All Topic News</span><span class="far fa-angle-right fa-fw"></span></a>
      
      
    </div>
  </div>
  <div class="news-feed nv--tagged-blogs-feed ">
    	<div class="latest-news latest-news--large three-grid">
        	<div class="latest-news__items">
				<div class="latest-news__item ">						
					<div class="latest-news__item__key-visual"><a href="/blog/blog/google-cloud-developer-community-ai-builders/" target="_blank"><img src="../../assets/blogs.nvidia.com/wp-content/uploads/2026/05/google-cloud-nvidia-1920x1080-1.jpg" alt="NVIDIA and Google Cloud Empower the Next Wave of AI Builders" title="NVIDIA and Google Cloud Empower the Next Wave of AI Builders"></a></div>
					<a href="/blog/blog/google-cloud-developer-community-ai-builders/" target="_blank"><div class="latest-news__item__body">							
						<div class="latest-news__item__body__date">May 20, 2026</div>
						<div class="latest-news__item__body__title">NVIDIA and Google Cloud Empower the Next Wave of AI Builders</div>
						<div class="latest-news__item__body__description">At this year’s Google I/O conference, NVIDIA and Google Cloud are accelerating the work of more than 100,000 developers in the companies’ joint developer community, which provides curated learning paths, hands-on labs and events that help them build using the full-stack NVIDIA AI platform on Google Cloud.&nbsp; Launched at Google I/O last year, the community […]</div>
						<!--/* <div class="latest-news__item_readmore"><a href="/ai/cosmos/https:&/" target="_blank">Read More<span class="fas fa-angle-right fa-fw"></span></a></div> */-->
					</div></a>
				</div><div class="latest-news__item ">						
					<div class="latest-news__item__key-visual"><a href="/blog/blog/manufacturing-simulation-first/" target="_blank"><img src="../../assets/blogs.nvidia.com/wp-content/uploads/2026/04/april-ito-1920x1080-1.jpg" alt="Into the Omniverse: Manufacturing’s Simulation-First Era Has Arrived" title="Into the Omniverse: Manufacturing’s Simulation-First Era Has Arrived"></a></div>
					<a href="/blog/blog/manufacturing-simulation-first/" target="_blank"><div class="latest-news__item__body">							
						<div class="latest-news__item__body__date">April 28, 2026</div>
						<div class="latest-news__item__body__title">Into the Omniverse: Manufacturing’s Simulation-First Era Has Arrived</div>
						<div class="latest-news__item__body__description">Manufacturing’s traditional design-build-test cycle rested on a single assumption: Real-world testing was the only reliable test environment.&nbsp;</div>
						<!--/* <div class="latest-news__item_readmore"><a href="/ai/cosmos/https:&/" target="_blank">Read More<span class="fas fa-angle-right fa-fw"></span></a></div> */-->
					</div></a>
				</div><div class="latest-news__item ">						
					<div class="latest-news__item__key-visual"><a href="/blog/blog/google-cloud-agentic-physical-ai-factories/" target="_blank"><img src="../../assets/blogs.nvidia.com/wp-content/uploads/2026/04/google-cloud-nvidia.jpg" alt="NVIDIA and Google Cloud Collaborate to Advance Agentic and Physical AI" title="NVIDIA and Google Cloud Collaborate to Advance Agentic and Physical AI"></a></div>
					<a href="/blog/blog/google-cloud-agentic-physical-ai-factories/" target="_blank"><div class="latest-news__item__body">							
						<div class="latest-news__item__body__date">April 22, 2026</div>
						<div class="latest-news__item__body__title">NVIDIA and Google Cloud Collaborate to Advance Agentic and Physical AI</div>
						<div class="latest-news__item__body__description">NVIDIA and Google Cloud have collaborated for more than a decade, co‑engineering a full‑stack AI platform that spans every technology layer — from performance‑optimized libraries and frameworks to enterprise‑grade cloud services.&nbsp; This foundation enables developers, startups and enterprises to push agentic and physical AI out of the lab and into production — from agents that […]</div>
						<!--/* <div class="latest-news__item_readmore"><a href="/ai/cosmos/https:&/" target="_blank">Read More<span class="fas fa-angle-right fa-fw"></span></a></div> */-->
					</div></a>
				</div>
        	</div>
    	</div>
	</div>
  
</div>
</div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-2bf816686e {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-2bf816686e {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-2bf816686e {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-2bf816686e {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-2bf816686e {
            
        }
    }
</style> 

</div>
</div>
<div id="tabs-192178105f-item-7aa8cea3c9-tabpanel" role="tabpanel" aria-labelledby="tabs-192178105f-item-7aa8cea3c9-tab" tabindex="0" class="cmp-tabs__tabpanel" data-cmp-hook-tabs="tabpanel" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-7aa8cea3c9" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-separator separator aem-GridColumn aem-GridColumn--default--12">
  
  
<div id="nv-separator-d1131391bf" class="cmp-separator">
     
     <style>
         
        
    	@media screen and (min-width:1350px){
            #nv-separator-d1131391bf{
                height:30px;
            }
        }
         
        
        @media screen and (min-width:1024px) and (max-width:1349px){
            #nv-separator-d1131391bf{
                 height:30px;
            }
        }
         
        
        @media screen and (min-width:640px) and (max-width:1023px){
        	 #nv-separator-d1131391bf{
                 height:30px;
            }
        }
         
        
        @media screen and (max-width: 639px){
        	 #nv-separator-d1131391bf{
                 height:30px;
            }
        }
         
    </style>
    
</div></div>
<div class="nv-button button nv-button-text nv-button-small nv-button-caret nv-no-top-padding aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--offset--default--0">
<div class="nv-button-standard              button-right button-lap-right button-tab-right button-mob-right">
  
  <a id="see-all-btn-tab2" class="btn-content btncta    " target="_self" data-cmp-clickable="false " href="/on-demand/playlist/playList-d71fe16e-07d7-4c9c-a34e-e03e3c9a3b4d/">
    
    

    <span class="btn-text">See All</span>
    
  </a>
</div>

</div>
<div class="nv-rawhtml aem-GridColumn aem-GridColumn--default--12">

	
	
    <div id="nv-rawhtml-5da9e1c83d" class="general-container-text            ">
    	
		

    <div> <style>
    .cleanslate .gallery-wrapper .contents .header {display:none;}
    
    </style> 
<script src="../../assets/www.nvidia.com/assets/nvod/nvod-login.js"></script> 
<script src="../../assets/api-prod.nvidia.com/search/nvidia-search-library.js"></script><div id="nvidia-gallery-widget1" class="widget"><div class="nvidia-search-widget"><div class="cleanslate"><div class="gallery-widget"><div class="gallery-wrapper"><div class="contents"><div><div class="header"><h3 class="heading "></h3><div class="header-actions"><div class="see-all"><a href="/on-demand/playlist/playList-d71fe16e-07d7-4c9c-a34e-e03e3c9a3b4d/" target="">See All</a></div><div class="nav-buttons"><div class="prev"><button type="button" class=" data-testid=" prev"="" aria-label="previous"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 24h24V0H0Z" style="fill: none; opacity: 0.87;"></path><path d="m18.16 20.13-1.77 1.77-9.9-9.9 9.9-9.9 1.77 1.77L10.03 12l8.13 8.13Z" transform="translate(-.65)" style="fill: currentcolor;"></path></svg></button></div><div class="next"><button type="button" class=" data-testid=" next"="" aria-label="next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M24 24H0V0h24Z" style="fill: none; opacity: 0.87;"></path><path d="m6.49 20.13 1.77 1.77 9.9-9.9-9.9-9.9-1.77 1.77L14.62 12l-8.13 8.13Z" style="fill: currentcolor;"></path></svg></button></div></div></div></div><div class="gallery"><div class="slick-slider gallery-carousel slick-initialized" dir="ltr"><div class="slick-list"><div class="slick-track" style="width: 5576px; opacity: 1; transform: translate3d(0px, 0px, 0px);"><div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtc25-s72431/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">35:31</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_efbo8hxm/width/400/" title="An Introduction to NVIDIA Cosmos World Foundation Models" alt="An Introduction to NVIDIA Cosmos World Foundation Models" class="thumbnail in"></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r0:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span><span class="session-type" title="Highly Rated">Highly Rated</span></div></div><div title="An Introduction to NVIDIA Cosmos World Foundation Models" class="title">An Introduction to NVIDIA Cosmos World Foundation Models</div><div class="speakers">Ming-Yu Liu, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>NVIDIA Cosmos is transforming how robots and autonomous vehicles learn, accelerating physics-aware synthetic<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtc25-s73198/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">37:55</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_f53ym18q/width/400/" title="NVIDIA Cosmos World Foundation Models for Autonomous Driving Development" alt="NVIDIA Cosmos World Foundation Models for Autonomous Driving Development" class="thumbnail in"></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r1:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span></div></div><div title="NVIDIA Cosmos World Foundation Models for Autonomous Driving Development" class="title">NVIDIA Cosmos World Foundation Models for Autonomous Driving Development</div><div class="speakers">Sanja Fidler, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>NVIDIA Cosmos is a platform that aims to accelerate physical AI development. We'll discuss how the Cosmos World<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtcparis25-gp1036/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">53:17</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_f6vffguu/width/400/" title="An Introduction to Humanoid Robotics" alt="An Introduction to Humanoid Robotics" class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r2:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span></div></div><div title="An Introduction to Humanoid Robotics" class="title">An Introduction to Humanoid Robotics</div><div class="speakers">Joel Jang, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>General-purpose humanoid robots are built to quickly adapt to human-centric urban and industrial work spaces,<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtcparis25-gp1072/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">41:57</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_0e3rp32p/width/400/" title="Bringing Physical AI to Cities" alt="Bringing Physical AI to Cities" class="thumbnail in"></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r3:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span></div></div><div title="Bringing Physical AI to Cities" class="title">Bringing Physical AI to Cities</div><div class="speakers">Adam Ryason, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>Advanced computer vision models are leveraged in cities to facilitate data analytics for real-time responses to<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="4" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtc25-dd40001/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">37:49</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_rhfoqro0/width/400/" title="Developing Next-Gen AVs with Physical AI-Powered World Foundation Models" alt="Developing Next-Gen AVs with Physical AI-Powered World Foundation Models" class="thumbnail in"></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r4:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type developer-day" title="Developer Day">Developer Day</span><span class="session-type" title="Featured">Featured</span></div></div><div title="Developing Next-Gen AVs with Physical AI-Powered World Foundation Models" class="title">Developing Next-Gen AVs with Physical AI-Powered World Foundation Models</div><div class="speakers">Norm Marks (Worldwide Field Ops) , NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>This session demonstrates how NVIDIA is leveraging our Cosmos World Model Development platform and end-to-<span class="LinesEllipsis-unit">end</span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="5" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtc25-s72707/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">42:13</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_2vwdivoo/width/400/" title="From Research to Production: Transforming AV Technology With AI" alt="From Research to Production: Transforming AV Technology With AI" class="thumbnail in"></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r5:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span></div></div><div title="From Research to Production: Transforming AV Technology With AI" class="title">From Research to Production: Transforming AV Technology With AI</div><div class="speakers">Boris Ivanovic, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>Learn how AI is transforming the development of autonomous vehicle (AV) technology, both in the data<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="6" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtc25-dd40002/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">33:56</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_mxt0mmwe/width/400/" title="Advancing AV Development With Sensor Simulation and Cosmos" alt="Advancing AV Development With Sensor Simulation and Cosmos" class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r6:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span></div></div><div title="Advancing AV Development With Sensor Simulation and Cosmos" class="title">Advancing AV Development With Sensor Simulation and Cosmos</div><div class="speakers">Gautham Sholingar, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>Learn how the NVIDIA Omniverse Blueprint for AV Simulation and Cosmos are enabling AV developers to <span class="LinesEllipsis-unit">enhance</span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtc25-s72758/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">30:01</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_hgiwcldj/width/400/" title="Agentic AI for Physical Operations" alt="Agentic AI for Physical Operations" class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r7:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span></div></div><div title="Agentic AI for Physical Operations" class="title">Agentic AI for Physical Operations</div><div class="speakers">Roopa Prabhu, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div> Envision an AI agent designed to interact with your warehouse—a complex logistical environment of<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="8" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtc25-dlit74500/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">01:26:47</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_6wlidmp7/width/400/" title="An Introduction to NVIDIA Cosmos for Physical AI" alt="An Introduction to NVIDIA Cosmos for Physical AI" class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r8:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span><span class="session-type" title="Highly Rated">Highly Rated</span></div></div><div title="An Introduction to NVIDIA Cosmos for Physical AI" class="title">An Introduction to NVIDIA Cosmos for Physical AI</div><div class="speakers">Asawaree Bhide, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>In this introductory, hands-on course, learners will explore NVIDIA Cosmos™, a platform of generative world<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="9" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtc25-s74608/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">31:54</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_03ph4qz2/width/400/" title="Future-Ready Factories: The AI-First Revolution in Manufacturing (Presented by TCS)" alt="Future-Ready Factories: The AI-First Revolution in Manufacturing (Presented by TCS)" class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r9:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span></div></div><div title="Future-Ready Factories: The AI-First Revolution in Manufacturing (Presented by TCS)" class="title">Future-Ready Factories: The AI-First Revolution in Manufacturing (Presented by TCS)</div><div class="speakers">Laksh Parthasarathy, Tata Consultancy Services</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>A machine halts. A defect spreads. A supply chain stalls. Traditional factories react — fixing issues after they occur.<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="10" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtc25-s72590/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">01:41:20</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_v8vsbvmz/width/400/" title="An Introduction to Building Humanoid Robots" alt="An Introduction to Building Humanoid Robots" class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:ra:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span><span class="session-type" title="Highly Rated">Highly Rated</span></div></div><div title="An Introduction to Building Humanoid Robots" class="title">An Introduction to Building Humanoid Robots</div><div class="speakers">Jim Fan, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div> Developers are building more intelligent, responsive, and efficient humanoid robots capable of transforming<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="11" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/siggraph25-s05/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">28:45</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_b0zetru9/width/400/" title="Beyond Rendering: Why Graphics is Needed For Physical AI" alt="Beyond Rendering: Why Graphics is Needed For Physical AI" class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:rb:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span></div></div><div title="Beyond Rendering: Why Graphics is Needed For Physical AI" class="title">Beyond Rendering: Why Graphics is Needed For Physical AI</div><div class="speakers">Ming-Yu Liu, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>As machines begin to operate autonomously in the physical world' from robotics to autonomous vehicles<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="12" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/other25-nv-0004/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">01:26:53</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_716znm4g/width/400/" title="Physical AI Developer Updates | October Edition" alt="Physical AI Developer Updates | October Edition" class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:rc:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span></div></div><div title="Physical AI Developer Updates | October Edition" class="title">Physical AI Developer Updates | October Edition</div><div class="speakers">Neel Patel, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>A partner-exclusive series delivering product updates, feature deep-dives, and technical insights direct from<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="13" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/aidaytokyo25-ad111030/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">39:06</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_8ubj3br4/width/400/" title="Omniverse Blueprintを活用しクラウドとAIでスケールするOmniverseデジタルツインの最前線" alt="Omniverse Blueprintを活用しクラウドとAIでスケールするOmniverseデジタルツインの最前線" class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:rd:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span></div></div><div title="Omniverse Blueprintを活用しクラウドとAIでスケールするOmniverseデジタルツインの最前線" class="title">Omniverse Blueprintを活用しクラウドとAIでスケールするOmniverseデジタルツインの最前線</div><div class="speakers">Takashi Umezawa, エヌビディア合同会社</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>本セッションでは、Physical AIの概要、OmniverseとCosmosの仕組み、Omniverse Blueprintの主な特徴や活<span class="LinesEllipsis-unit">用</span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="14" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/aidaytokyo25-ad111025/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">35:45</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_fw0ryb0m/width/400/" title="ロボット基盤モデルと仮想学習環境で進化する Physical AI" alt="ロボット基盤モデルと仮想学習環境で進化する Physical AI" class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:re:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talk" title="Talk">Talk</span></div></div><div title="ロボット基盤モデルと仮想学習環境で進化する Physical AI" class="title">ロボット基盤モデルと仮想学習環境で進化する Physical AI</div><div class="speakers">佐々木 陽 , 株式会社FaBo  </div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>本講演では、現実世界における知覚・判断・行動を統合的に実現するロボティクスの最前線、「Physical AI」の発展に<span class="LinesEllipsis-unit">つ</span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="15" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtcdc25-dct51187/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">01:43:08</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_thogaglu/width/400/" title="An Introduction to NVIDIA Cosmos for Physical AI" alt="An Introduction to NVIDIA Cosmos for Physical AI" class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:rf:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type training-lab" title="Training Lab">Training Lab</span></div></div><div title="An Introduction to NVIDIA Cosmos for Physical AI" class="title">An Introduction to NVIDIA Cosmos for Physical AI</div><div class="speakers">Diego Garzon, NVIDIA</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>In this introductory, hands-on course, learners will explore NVIDIA Cosmos, a platform of generative world<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div><div data-index="16" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 328px;"><div><div class="item-col" tabindex="-1" style="width: 100%; display: inline-block;"><div class="card"><a href="/on-demand/session/gtcdc25-dc51152/" target=""><div class="animated-thumbnail"><div class="main-thumbnail "><div class="item-image"><div class="video-duration-container">40:20</div><img src="/assets/cdnsecakmi.kaltura.com/p/2935771/thumbnail/entry_id/1_i2r6xmek/width/400/" title="Scalable Robot Intelligence Framework—Any Robot. Any Task. One Brain." alt="Scalable Robot Intelligence Framework—Any Robot. Any Task. One Brain." class="thumbnail "></div></div><div class="item-image"><div class="thumbnail-slices-container"> </div></div></div><div class="item-info "><div><div class="more"><button type="button" class="icon-btn" data-testid="more" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:rg:" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M0 0h24v24H0Z" style="fill: none;"></path><path d="M12 8a2 2 0 1 0-2-2 2.006 2.006 0 0 0 2 2Zm0 2a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Zm0 6a2 2 0 1 0 2 2 2.006 2.006 0 0 0-2-2Z" style="fill: currentcolor;"></path></svg></button></div><div class="session-tags"><span class="session-type talks-or-panels" title="Talks or Panels">Talks or Panels</span></div></div><div title="Scalable Robot Intelligence Framework—Any Robot. Any Task. One Brain." class="title">Scalable Robot Intelligence Framework—Any Robot. Any Task. One Brain.</div><div class="speakers">Deepak Pathak, Skild AI</div><div class="summary"><div class="LinesEllipsis LinesEllipsis--clamped "><div>Humanoid intelligence requires robots that can move, manipulate, and adapt like humans. The challenge is scale:<span class="LinesEllipsis-unit"> </span><span><wbr><span class="LinesEllipsis-ellipsis">…</span></span></div></div></div></div></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div> 
<script>
    var destinationSite = window.location.origin;
      var site = destinationSite;
    NvidiaSearchLibrary.GalleryWidget.mount({
                elementId: 'nvidia-gallery-widget1',
                searchInput: {},
               // site: site,
              //  language: $('html').attr('lang'),
                voltronApiUrl: 'https://api-prod.nvidia.com/services/nod/api/v1/',
                apiUrl:'https://api-prod.nvidia.com/search/graphql',
                playlistId: 'playList-d71fe16e-07d7-4c9c-a34e-e03e3c9a3b4d',
                isFeatured: true,
                header: '',
              //  destinationSite: destinationSite,
                destination: 'https://www.nvidia.com/en-us/on-demand/playlist/playList-d71fe16e-07d7-4c9c-a34e-e03e3c9a3b4d/',
                onLogin: () => { },
                onLogout: () => {  },
                widgetPlacementId: 'nvod-training-featured-1',
         
            });
    
    </script></div>	

    </div>
</div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-7aa8cea3c9 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-7aa8cea3c9 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-7aa8cea3c9 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-7aa8cea3c9 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-7aa8cea3c9 {
            
        }
    }
</style> 

</div>
</div>
<div id="tabs-192178105f-item-381924f13f-tabpanel" role="tabpanel" aria-labelledby="tabs-192178105f-item-381924f13f-tab" tabindex="0" class="cmp-tabs__tabpanel" data-cmp-hook-tabs="tabpanel" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-381924f13f" class="v1-1 p-t-0 p-b-0  lap-p-t-0 
         lap-p-b-0  tab-p-t-0 tab-p-b-0
          mob-p-t-0 mob-p-b-0  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-separator separator aem-GridColumn aem-GridColumn--default--12">
  
  
<div id="nv-separator-6502995fd6" class="cmp-separator">
     
     <style>
         
        
    	@media screen and (min-width:1350px){
            #nv-separator-6502995fd6{
                height:30px;
            }
        }
         
        
        @media screen and (min-width:1024px) and (max-width:1349px){
            #nv-separator-6502995fd6{
                 height:30px;
            }
        }
         
        
        @media screen and (min-width:640px) and (max-width:1023px){
        	 #nv-separator-6502995fd6{
                 height:30px;
            }
        }
         
        
        @media screen and (max-width: 639px){
        	 #nv-separator-6502995fd6{
                 height:30px;
            }
        }
         
    </style>
    
</div></div>
<div class="nv-button button nv-button-text nv-button-small nv-button-caret nv-no-top-padding aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--offset--default--0">
<div class="nv-button-standard              button-right button-lap-right button-tab-right button-mob-right">
  
  <a id="nv-button-5d35c06aec" class="btn-content btncta    " target="_blank" data-cmp-clickable="false " rel="noopener noreferrer" href="https://www.youtube.com/playlist?list=PL3jK4xNnlCVc76KbwP4IeLlsFF0F1l7AP">
    
    

    <span class="btn-text">See All</span>
    
  </a>
</div>

</div>
<div class="nv-carousel carousel panelcontainer nv-carousel--hide-indicators aem-GridColumn aem-GridColumn--default--12">
  
<div id="carousel-1608fdff61" class="cmp-carousel     " role="group" aria-roledescription="carousel" data-cmp-autoplay=" data-cmp-delay=" 5000"="" data-cmp-autoscroll="false" data-cmp-scroll-width="450px" data-cmp-scroll-height="250px" data-cmp-scroll-direction="left" data-cmp-scroll-delay="5000" data-cmp-scroll-disabled="false" style="--carousel-item--fixed-width--desktop: 450px; --carousel-item--fixed-width-firstitem--desktop: 450px; --carousel-slide-transition-delay: 5000ms;" data-cmp-is="carousel">
     
     
     
     
        
     
    
   <div class="cmp-carousel__content " aria-atomic="false" aria-live="off">
         <div class="cmp-carousel__slides fixed-width">
            <div id="carousel-1608fdff61-item-b01bee73ab-tabpanel" class="cmp-carousel__item cmp-carousel__item--active" role="tabpanel" aria-roledescription="slide" aria-label="Slide 1 of 11" data-cmp-slide-no="1" data-cmp-hook-carousel="item"><div class="nv-container container responsivegrid">

    
	
    <div id="container-b01bee73ab" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-6ac5c83718" class="cmp-embed">
    
    
    

<div class="youtube-video-player nv-yt-embed nv-yt-embed--active" style="max-width:100%" data-video-id="tGyJO3yR0vU" data-thumbnail="https://img.youtube.com/vi/tGyJO3yR0vU/maxresdefault.jpg">

   
   

   
   <div class="nv-yt-embed__consent-poster">
      <img src="/assets/img.youtube.com/vi/tGyJO3yR0vU/maxresdefault.jpg" alt="YouTube Video" class="nv-yt-embed__consent-poster-img" loading="lazy">
      <button class="nv-yt-embed__consent-poster-play" type="button" aria-label="Play video">
         
         <svg class="nv-yt-embed__consent-play-icon" width="75.17" height="75.17" viewBox="0 0 237 237" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z" fill="white"></path>
            <path d="M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z" fill="rgb(99,99,99)"></path>
         </svg>
         
      </button>
   </div>

   
   
   <div class="nv-yt-embed__consent-overlay" role="dialog" aria-label="Consent for Optional Cookies">
      <div class="nv-yt-embed__consent-overlay-content" tabindex="-1">
         <div role="heading" aria-level="3" class="nv-yt-embed__consent-title">Consent for Optional Cookies</div>
         <p class="nv-yt-embed__consent-description"><a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer">YouTube sets performance, advertising, and other optional cookies</a> when you watch embedded videos. To watch this video, you need to turn on optional cookies for the site. By clicking “Accept and Play Video,” you will automatically turn on advertising and other optional cookies for the site and accept our <a href="/about-nvidia/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service</a> (which contains important waivers). Please see our <a href="/about-nvidia/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="/about-nvidia/cookie-policy/" target="_blank" rel="noopener noreferrer">Cookie Policy</a> for more information.</p>
         <div class="nv-yt-embed__consent-buttons">
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-cancel"><span class="btn-text">Cancel</span></button>
            </div></div>
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-accept"><span class="btn-text">Accept and Play Video</span></button>
            </div></div>
         </div>
         <p class="nv-yt-embed__consent-alternative">Alternatively, you can <a href="https://www.youtube.com/watch?v=tGyJO3yR0vU" target="_blank" rel="noopener noreferrer">watch this video on YouTube</a>.</p>
      </div>
   </div>

   <div class="iframe-wrapper">
    <iframe src="https://www.youtube.com/embed/tGyJO3yR0vU?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1" frameborder="0" allowfullscreen=" allow=" accelerometer;="" autoplay;="" encrypted-media;="" gyroscope;="" picture-in-picture"="" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}.play-button-container{display:flex;justify-content:center;cursor:pointer;}.play-button{width:75px;height:75px;opacity:0.5;}.play-button-container:hover .play-button{opacity:0.9;}</style><a href='https://www.youtube.com/embed/tGyJO3yR0vU?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1'><img src='https://img.youtube.com/vi/tGyJO3yR0vU/maxresdefault.jpg' alt=''><span class='play-button-container'><span class='play-button'><svg width='75' height='75' viewBox='0 0 237 237' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z' fill='white'></path><path d='M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z' fill='rgb(99,99,99)'></path></svg></span></span></a>" loading="lazy" aria-label="YouTube Video" data-modal-autoplay="false"></iframe>
    
    </div>
   </div>

    

</div>
</div>
<div class="nv-title text h--smallest nv-no-top-padding aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-2ac4fd44ed" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h3 class="title ">
            
                      Ensuring Safe Autonomous Driving With NVIDIA Halos
          
          </h3>
        </div>
       </div>
      
    

  
  </div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-b01bee73ab {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-b01bee73ab {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-b01bee73ab {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-b01bee73ab {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-b01bee73ab {
            
        }
    }
</style> 

</div>
</div>
<div id="carousel-1608fdff61-item-c6e2500664-tabpanel" class="cmp-carousel__item cmp-carousel__item--visuallyhidden" role="tabpanel" aria-roledescription="slide" aria-label="Slide 2 of 11" data-cmp-slide-no="2" data-cmp-hook-carousel="item" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-c6e2500664" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-9d9d8f0158" class="cmp-embed">
    
    
    

<div class="youtube-video-player nv-yt-embed nv-yt-embed--active" style="max-width:100%" data-video-id="GsB7tGB5g-o" data-thumbnail="https://img.youtube.com/vi/GsB7tGB5g-o/maxresdefault.jpg">

   
   

   
   <div class="nv-yt-embed__consent-poster">
      <img src="/assets/img.youtube.com/vi/GsB7tGB5g-o/maxresdefault.jpg" alt="YouTube Video" class="nv-yt-embed__consent-poster-img" loading="lazy">
      <button class="nv-yt-embed__consent-poster-play" type="button" aria-label="Play video">
         
         <svg class="nv-yt-embed__consent-play-icon" width="75.17" height="75.17" viewBox="0 0 237 237" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z" fill="white"></path>
            <path d="M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z" fill="rgb(99,99,99)"></path>
         </svg>
         
      </button>
   </div>

   
   
   <div class="nv-yt-embed__consent-overlay" role="dialog" aria-label="Consent for Optional Cookies">
      <div class="nv-yt-embed__consent-overlay-content" tabindex="-1">
         <div role="heading" aria-level="3" class="nv-yt-embed__consent-title">Consent for Optional Cookies</div>
         <p class="nv-yt-embed__consent-description"><a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer">YouTube sets performance, advertising, and other optional cookies</a> when you watch embedded videos. To watch this video, you need to turn on optional cookies for the site. By clicking “Accept and Play Video,” you will automatically turn on advertising and other optional cookies for the site and accept our <a href="/about-nvidia/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service</a> (which contains important waivers). Please see our <a href="/about-nvidia/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="/about-nvidia/cookie-policy/" target="_blank" rel="noopener noreferrer">Cookie Policy</a> for more information.</p>
         <div class="nv-yt-embed__consent-buttons">
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-cancel"><span class="btn-text">Cancel</span></button>
            </div></div>
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-accept"><span class="btn-text">Accept and Play Video</span></button>
            </div></div>
         </div>
         <p class="nv-yt-embed__consent-alternative">Alternatively, you can <a href="https://www.youtube.com/watch?v=GsB7tGB5g-o" target="_blank" rel="noopener noreferrer">watch this video on YouTube</a>.</p>
      </div>
   </div>

   <div class="iframe-wrapper">
    <iframe src="https://www.youtube.com/embed/GsB7tGB5g-o?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1" frameborder="0" allowfullscreen=" allow=" accelerometer;="" autoplay;="" encrypted-media;="" gyroscope;="" picture-in-picture"="" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}.play-button-container{display:flex;justify-content:center;cursor:pointer;}.play-button{width:75px;height:75px;opacity:0.5;}.play-button-container:hover .play-button{opacity:0.9;}</style><a href='https://www.youtube.com/embed/GsB7tGB5g-o?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1'><img src='https://img.youtube.com/vi/GsB7tGB5g-o/maxresdefault.jpg' alt=''><span class='play-button-container'><span class='play-button'><svg width='75' height='75' viewBox='0 0 237 237' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z' fill='white'></path><path d='M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z' fill='rgb(99,99,99)'></path></svg></span></span></a>" loading="lazy" aria-label="YouTube Video" data-modal-autoplay="false"></iframe>
    
    </div>
   </div>

    

</div>
</div>
<div class="nv-title text h--smallest nv-no-top-padding aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-822f9d635e" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h3 class="title ">
            
                      Scaling AV Data With Omniverse and Cosmos
          
          </h3>
        </div>
       </div>
      
    

  
  </div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-c6e2500664 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-c6e2500664 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-c6e2500664 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-c6e2500664 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-c6e2500664 {
            
        }
    }
</style> 

</div>
</div>
<div id="carousel-1608fdff61-item-4ce600680d-tabpanel" class="cmp-carousel__item cmp-carousel__item--visuallyhidden" role="tabpanel" aria-roledescription="slide" aria-label="Slide 3 of 11" data-cmp-slide-no="3" data-cmp-hook-carousel="item" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-4ce600680d" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-4746686479" class="cmp-embed">
    
    
    

<div class="youtube-video-player nv-yt-embed nv-yt-embed--active" style="max-width:100%" data-video-id="K_Lwzy72jM8" data-thumbnail="https://img.youtube.com/vi/K_Lwzy72jM8/maxresdefault.jpg">

   
   

   
   <div class="nv-yt-embed__consent-poster">
      <img src="/assets/img.youtube.com/vi/K_Lwzy72jM8/maxresdefault.jpg" alt="YouTube Video" class="nv-yt-embed__consent-poster-img" loading="lazy">
      <button class="nv-yt-embed__consent-poster-play" type="button" aria-label="Play video">
         
         <svg class="nv-yt-embed__consent-play-icon" width="75.17" height="75.17" viewBox="0 0 237 237" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z" fill="white"></path>
            <path d="M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z" fill="rgb(99,99,99)"></path>
         </svg>
         
      </button>
   </div>

   
   
   <div class="nv-yt-embed__consent-overlay" role="dialog" aria-label="Consent for Optional Cookies">
      <div class="nv-yt-embed__consent-overlay-content" tabindex="-1">
         <div role="heading" aria-level="3" class="nv-yt-embed__consent-title">Consent for Optional Cookies</div>
         <p class="nv-yt-embed__consent-description"><a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer">YouTube sets performance, advertising, and other optional cookies</a> when you watch embedded videos. To watch this video, you need to turn on optional cookies for the site. By clicking “Accept and Play Video,” you will automatically turn on advertising and other optional cookies for the site and accept our <a href="/about-nvidia/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service</a> (which contains important waivers). Please see our <a href="/about-nvidia/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="/about-nvidia/cookie-policy/" target="_blank" rel="noopener noreferrer">Cookie Policy</a> for more information.</p>
         <div class="nv-yt-embed__consent-buttons">
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-cancel"><span class="btn-text">Cancel</span></button>
            </div></div>
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-accept"><span class="btn-text">Accept and Play Video</span></button>
            </div></div>
         </div>
         <p class="nv-yt-embed__consent-alternative">Alternatively, you can <a href="https://www.youtube.com/watch?v=K_Lwzy72jM8" target="_blank" rel="noopener noreferrer">watch this video on YouTube</a>.</p>
      </div>
   </div>

   <div class="iframe-wrapper">
    <iframe src="https://www.youtube.com/embed/K_Lwzy72jM8?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1" frameborder="0" allowfullscreen=" allow=" accelerometer;="" autoplay;="" encrypted-media;="" gyroscope;="" picture-in-picture"="" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}.play-button-container{display:flex;justify-content:center;cursor:pointer;}.play-button{width:75px;height:75px;opacity:0.5;}.play-button-container:hover .play-button{opacity:0.9;}</style><a href='https://www.youtube.com/embed/K_Lwzy72jM8?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1'><img src='https://img.youtube.com/vi/K_Lwzy72jM8/maxresdefault.jpg' alt=''><span class='play-button-container'><span class='play-button'><svg width='75' height='75' viewBox='0 0 237 237' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z' fill='white'></path><path d='M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z' fill='rgb(99,99,99)'></path></svg></span></span></a>" loading="lazy" aria-label="YouTube Video" data-modal-autoplay="false"></iframe>
    
    </div>
   </div>

    

</div>
</div>
<div class="nv-title text h--smallest nv-no-top-padding aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-3071b8808e" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h3 class="title ">
            
                      How Simulation Enables Safer Autonomous Vehicles | Foretellix
          
          </h3>
        </div>
       </div>
      
    

  
  </div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-4ce600680d {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-4ce600680d {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-4ce600680d {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-4ce600680d {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-4ce600680d {
            
        }
    }
</style> 

</div>
</div>
<div id="carousel-1608fdff61-item-40a6b41cf9-tabpanel" class="cmp-carousel__item cmp-carousel__item--visuallyhidden" role="tabpanel" aria-roledescription="slide" aria-label="Slide 4 of 11" data-cmp-slide-no="4" data-cmp-hook-carousel="item" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-40a6b41cf9" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-cbde2541d2" class="cmp-embed">
    
    
    

<div class="youtube-video-player nv-yt-embed nv-yt-embed--active" style="max-width:100%" data-video-id="HVp2LZ1UUN4" data-thumbnail="https://img.youtube.com/vi/HVp2LZ1UUN4/maxresdefault.jpg">

   
   

   
   <div class="nv-yt-embed__consent-poster">
      <img src="/assets/img.youtube.com/vi/HVp2LZ1UUN4/maxresdefault.jpg" alt="YouTube Video" class="nv-yt-embed__consent-poster-img" loading="lazy">
      <button class="nv-yt-embed__consent-poster-play" type="button" aria-label="Play video">
         
         <svg class="nv-yt-embed__consent-play-icon" width="75.17" height="75.17" viewBox="0 0 237 237" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z" fill="white"></path>
            <path d="M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z" fill="rgb(99,99,99)"></path>
         </svg>
         
      </button>
   </div>

   
   
   <div class="nv-yt-embed__consent-overlay" role="dialog" aria-label="Consent for Optional Cookies">
      <div class="nv-yt-embed__consent-overlay-content" tabindex="-1">
         <div role="heading" aria-level="3" class="nv-yt-embed__consent-title">Consent for Optional Cookies</div>
         <p class="nv-yt-embed__consent-description"><a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer">YouTube sets performance, advertising, and other optional cookies</a> when you watch embedded videos. To watch this video, you need to turn on optional cookies for the site. By clicking “Accept and Play Video,” you will automatically turn on advertising and other optional cookies for the site and accept our <a href="/about-nvidia/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service</a> (which contains important waivers). Please see our <a href="/about-nvidia/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="/about-nvidia/cookie-policy/" target="_blank" rel="noopener noreferrer">Cookie Policy</a> for more information.</p>
         <div class="nv-yt-embed__consent-buttons">
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-cancel"><span class="btn-text">Cancel</span></button>
            </div></div>
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-accept"><span class="btn-text">Accept and Play Video</span></button>
            </div></div>
         </div>
         <p class="nv-yt-embed__consent-alternative">Alternatively, you can <a href="https://www.youtube.com/watch?v=HVp2LZ1UUN4" target="_blank" rel="noopener noreferrer">watch this video on YouTube</a>.</p>
      </div>
   </div>

   <div class="iframe-wrapper">
    <iframe src="https://www.youtube.com/embed/HVp2LZ1UUN4?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1" frameborder="0" allowfullscreen=" allow=" accelerometer;="" autoplay;="" encrypted-media;="" gyroscope;="" picture-in-picture"="" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}.play-button-container{display:flex;justify-content:center;cursor:pointer;}.play-button{width:75px;height:75px;opacity:0.5;}.play-button-container:hover .play-button{opacity:0.9;}</style><a href='https://www.youtube.com/embed/HVp2LZ1UUN4?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1'><img src='https://img.youtube.com/vi/HVp2LZ1UUN4/maxresdefault.jpg' alt=''><span class='play-button-container'><span class='play-button'><svg width='75' height='75' viewBox='0 0 237 237' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z' fill='white'></path><path d='M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z' fill='rgb(99,99,99)'></path></svg></span></span></a>" loading="lazy" aria-label="YouTube Video" data-modal-autoplay="false"></iframe>
    
    </div>
   </div>

    

</div>
</div>
<div class="nv-title text h--smallest nv-no-top-padding aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-1efd6019ae" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h3 class="title ">
            
                      Accelerating AV Development With NVIDIA Omniverse and Cosmos
          
          </h3>
        </div>
       </div>
      
    

  
  </div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-40a6b41cf9 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-40a6b41cf9 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-40a6b41cf9 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-40a6b41cf9 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-40a6b41cf9 {
            
        }
    }
</style> 

</div>
</div>
<div id="carousel-1608fdff61-item-e56b3be745-tabpanel" class="cmp-carousel__item cmp-carousel__item--visuallyhidden" role="tabpanel" aria-roledescription="slide" aria-label="Slide 5 of 11" data-cmp-slide-no="5" data-cmp-hook-carousel="item" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-e56b3be745" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-483f0e0f97" class="cmp-embed">
    
    
    

<div class="youtube-video-player nv-yt-embed nv-yt-embed--active" style="max-width:100%" data-video-id="S4tvirlG8sQ" data-thumbnail="https://img.youtube.com/vi/S4tvirlG8sQ/maxresdefault.jpg">

   
   

   
   <div class="nv-yt-embed__consent-poster">
      <img src="/assets/img.youtube.com/vi/S4tvirlG8sQ/maxresdefault.jpg" alt="YouTube Video" class="nv-yt-embed__consent-poster-img" loading="lazy">
      <button class="nv-yt-embed__consent-poster-play" type="button" aria-label="Play video">
         
         <svg class="nv-yt-embed__consent-play-icon" width="75.17" height="75.17" viewBox="0 0 237 237" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z" fill="white"></path>
            <path d="M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z" fill="rgb(99,99,99)"></path>
         </svg>
         
      </button>
   </div>

   
   
   <div class="nv-yt-embed__consent-overlay" role="dialog" aria-label="Consent for Optional Cookies">
      <div class="nv-yt-embed__consent-overlay-content" tabindex="-1">
         <div role="heading" aria-level="3" class="nv-yt-embed__consent-title">Consent for Optional Cookies</div>
         <p class="nv-yt-embed__consent-description"><a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer">YouTube sets performance, advertising, and other optional cookies</a> when you watch embedded videos. To watch this video, you need to turn on optional cookies for the site. By clicking “Accept and Play Video,” you will automatically turn on advertising and other optional cookies for the site and accept our <a href="/about-nvidia/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service</a> (which contains important waivers). Please see our <a href="/about-nvidia/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="/about-nvidia/cookie-policy/" target="_blank" rel="noopener noreferrer">Cookie Policy</a> for more information.</p>
         <div class="nv-yt-embed__consent-buttons">
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-cancel"><span class="btn-text">Cancel</span></button>
            </div></div>
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-accept"><span class="btn-text">Accept and Play Video</span></button>
            </div></div>
         </div>
         <p class="nv-yt-embed__consent-alternative">Alternatively, you can <a href="https://www.youtube.com/watch?v=S4tvirlG8sQ" target="_blank" rel="noopener noreferrer">watch this video on YouTube</a>.</p>
      </div>
   </div>

   <div class="iframe-wrapper">
    <iframe src="https://www.youtube.com/embed/S4tvirlG8sQ?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1" frameborder="0" allowfullscreen=" allow=" accelerometer;="" autoplay;="" encrypted-media;="" gyroscope;="" picture-in-picture"="" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}.play-button-container{display:flex;justify-content:center;cursor:pointer;}.play-button{width:75px;height:75px;opacity:0.5;}.play-button-container:hover .play-button{opacity:0.9;}</style><a href='https://www.youtube.com/embed/S4tvirlG8sQ?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1'><img src='https://img.youtube.com/vi/S4tvirlG8sQ/maxresdefault.jpg' alt=''><span class='play-button-container'><span class='play-button'><svg width='75' height='75' viewBox='0 0 237 237' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z' fill='white'></path><path d='M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z' fill='rgb(99,99,99)'></path></svg></span></span></a>" loading="lazy" aria-label="YouTube Video" data-modal-autoplay="false"></iframe>
    
    </div>
   </div>

    

</div>
</div>
<div class="nv-title text h--smallest nv-no-top-padding aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-8575ab819d" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h3 class="title ">
            
                      How Robots Learn to Be Robots: Training, Simulation, and Real World Deployment
          
          </h3>
        </div>
       </div>
      
    

  
  </div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-e56b3be745 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-e56b3be745 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-e56b3be745 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-e56b3be745 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-e56b3be745 {
            
        }
    }
</style> 

</div>
</div>
<div id="carousel-1608fdff61-item-cff1836e39-tabpanel" class="cmp-carousel__item cmp-carousel__item--visuallyhidden" role="tabpanel" aria-roledescription="slide" aria-label="Slide 6 of 11" data-cmp-slide-no="6" data-cmp-hook-carousel="item" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-cff1836e39" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-dcae03f70e" class="cmp-embed">
    
    
    

<div class="youtube-video-player nv-yt-embed nv-yt-embed--active" style="max-width:100%" data-video-id="8Mwrfvq-GeY" data-thumbnail="https://img.youtube.com/vi/8Mwrfvq-GeY/maxresdefault.jpg">

   
   

   
   <div class="nv-yt-embed__consent-poster">
      <img src="/assets/img.youtube.com/vi/8Mwrfvq-GeY/maxresdefault.jpg" alt="YouTube Video" class="nv-yt-embed__consent-poster-img" loading="lazy">
      <button class="nv-yt-embed__consent-poster-play" type="button" aria-label="Play video">
         
         <svg class="nv-yt-embed__consent-play-icon" width="75.17" height="75.17" viewBox="0 0 237 237" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z" fill="white"></path>
            <path d="M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z" fill="rgb(99,99,99)"></path>
         </svg>
         
      </button>
   </div>

   
   
   <div class="nv-yt-embed__consent-overlay" role="dialog" aria-label="Consent for Optional Cookies">
      <div class="nv-yt-embed__consent-overlay-content" tabindex="-1">
         <div role="heading" aria-level="3" class="nv-yt-embed__consent-title">Consent for Optional Cookies</div>
         <p class="nv-yt-embed__consent-description"><a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer">YouTube sets performance, advertising, and other optional cookies</a> when you watch embedded videos. To watch this video, you need to turn on optional cookies for the site. By clicking “Accept and Play Video,” you will automatically turn on advertising and other optional cookies for the site and accept our <a href="/about-nvidia/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service</a> (which contains important waivers). Please see our <a href="/about-nvidia/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="/about-nvidia/cookie-policy/" target="_blank" rel="noopener noreferrer">Cookie Policy</a> for more information.</p>
         <div class="nv-yt-embed__consent-buttons">
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-cancel"><span class="btn-text">Cancel</span></button>
            </div></div>
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-accept"><span class="btn-text">Accept and Play Video</span></button>
            </div></div>
         </div>
         <p class="nv-yt-embed__consent-alternative">Alternatively, you can <a href="https://www.youtube.com/watch?v=8Mwrfvq-GeY" target="_blank" rel="noopener noreferrer">watch this video on YouTube</a>.</p>
      </div>
   </div>

   <div class="iframe-wrapper">
    <iframe src="https://www.youtube.com/embed/8Mwrfvq-GeY?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1" frameborder="0" allowfullscreen=" allow=" accelerometer;="" autoplay;="" encrypted-media;="" gyroscope;="" picture-in-picture"="" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}.play-button-container{display:flex;justify-content:center;cursor:pointer;}.play-button{width:75px;height:75px;opacity:0.5;}.play-button-container:hover .play-button{opacity:0.9;}</style><a href='https://www.youtube.com/embed/8Mwrfvq-GeY?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1'><img src='https://img.youtube.com/vi/8Mwrfvq-GeY/maxresdefault.jpg' alt=''><span class='play-button-container'><span class='play-button'><svg width='75' height='75' viewBox='0 0 237 237' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z' fill='white'></path><path d='M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z' fill='rgb(99,99,99)'></path></svg></span></span></a>" loading="lazy" aria-label="YouTube Video" data-modal-autoplay="false"></iframe>
    
    </div>
   </div>

    

</div>
</div>
<div class="nv-title text h--smallest nv-no-top-padding aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-0b9dc4e4a0" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h3 class="title ">
            
                      How Robot Brains Dream and Explore Unseen Worlds
          
          </h3>
        </div>
       </div>
      
    

  
  </div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-cff1836e39 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-cff1836e39 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-cff1836e39 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-cff1836e39 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-cff1836e39 {
            
        }
    }
</style> 

</div>
</div>
<div id="carousel-1608fdff61-item-0a13811a66-tabpanel" class="cmp-carousel__item cmp-carousel__item--visuallyhidden" role="tabpanel" aria-roledescription="slide" aria-label="Slide 7 of 11" data-cmp-slide-no="7" data-cmp-hook-carousel="item" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-0a13811a66" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-d349ef6fad" class="cmp-embed">
    
    
    

<div class="youtube-video-player nv-yt-embed nv-yt-embed--active" style="max-width:100%" data-video-id="9k3Y6KRGPxo" data-thumbnail="https://img.youtube.com/vi/9k3Y6KRGPxo/maxresdefault.jpg">

   
   

   
   <div class="nv-yt-embed__consent-poster">
      <img src="/assets/img.youtube.com/vi/9k3Y6KRGPxo/maxresdefault.jpg" alt="YouTube Video" class="nv-yt-embed__consent-poster-img" loading="lazy">
      <button class="nv-yt-embed__consent-poster-play" type="button" aria-label="Play video">
         
         <svg class="nv-yt-embed__consent-play-icon" width="75.17" height="75.17" viewBox="0 0 237 237" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z" fill="white"></path>
            <path d="M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z" fill="rgb(99,99,99)"></path>
         </svg>
         
      </button>
   </div>

   
   
   <div class="nv-yt-embed__consent-overlay" role="dialog" aria-label="Consent for Optional Cookies">
      <div class="nv-yt-embed__consent-overlay-content" tabindex="-1">
         <div role="heading" aria-level="3" class="nv-yt-embed__consent-title">Consent for Optional Cookies</div>
         <p class="nv-yt-embed__consent-description"><a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer">YouTube sets performance, advertising, and other optional cookies</a> when you watch embedded videos. To watch this video, you need to turn on optional cookies for the site. By clicking “Accept and Play Video,” you will automatically turn on advertising and other optional cookies for the site and accept our <a href="/about-nvidia/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service</a> (which contains important waivers). Please see our <a href="/about-nvidia/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="/about-nvidia/cookie-policy/" target="_blank" rel="noopener noreferrer">Cookie Policy</a> for more information.</p>
         <div class="nv-yt-embed__consent-buttons">
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-cancel"><span class="btn-text">Cancel</span></button>
            </div></div>
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-accept"><span class="btn-text">Accept and Play Video</span></button>
            </div></div>
         </div>
         <p class="nv-yt-embed__consent-alternative">Alternatively, you can <a href="https://www.youtube.com/watch?v=9k3Y6KRGPxo" target="_blank" rel="noopener noreferrer">watch this video on YouTube</a>.</p>
      </div>
   </div>

   <div class="iframe-wrapper">
    <iframe src="https://www.youtube.com/embed/9k3Y6KRGPxo?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1" frameborder="0" allowfullscreen=" allow=" accelerometer;="" autoplay;="" encrypted-media;="" gyroscope;="" picture-in-picture"="" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}.play-button-container{display:flex;justify-content:center;cursor:pointer;}.play-button{width:75px;height:75px;opacity:0.5;}.play-button-container:hover .play-button{opacity:0.9;}</style><a href='https://www.youtube.com/embed/9k3Y6KRGPxo?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1'><img src='https://img.youtube.com/vi/9k3Y6KRGPxo/maxresdefault.jpg' alt=''><span class='play-button-container'><span class='play-button'><svg width='75' height='75' viewBox='0 0 237 237' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z' fill='white'></path><path d='M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z' fill='rgb(99,99,99)'></path></svg></span></span></a>" loading="lazy" aria-label="YouTube Video" data-modal-autoplay="false"></iframe>
    
    </div>
   </div>

    

</div>
</div>
<div class="nv-title text h--smallest nv-no-top-padding aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-361e068718" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h3 class="title ">
            
                      Build and Test Smart City AI Agents in Digital Twins
          
          </h3>
        </div>
       </div>
      
    

  
  </div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-0a13811a66 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-0a13811a66 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-0a13811a66 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-0a13811a66 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-0a13811a66 {
            
        }
    }
</style> 

</div>
</div>
<div id="carousel-1608fdff61-item-29bdc6222a-tabpanel" class="cmp-carousel__item cmp-carousel__item--visuallyhidden" role="tabpanel" aria-roledescription="slide" aria-label="Slide 8 of 11" data-cmp-slide-no="8" data-cmp-hook-carousel="item" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-29bdc6222a" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-84b3e0cf75" class="cmp-embed">
    
    
    

<div class="youtube-video-player nv-yt-embed nv-yt-embed--active" style="max-width:100%" data-video-id="9Uch931cDx8" data-thumbnail="https://img.youtube.com/vi/9Uch931cDx8/maxresdefault.jpg">

   
   

   
   <div class="nv-yt-embed__consent-poster">
      <img src="/assets/img.youtube.com/vi/9Uch931cDx8/maxresdefault.jpg" alt="YouTube Video" class="nv-yt-embed__consent-poster-img" loading="lazy">
      <button class="nv-yt-embed__consent-poster-play" type="button" aria-label="Play video">
         
         <svg class="nv-yt-embed__consent-play-icon" width="75.17" height="75.17" viewBox="0 0 237 237" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z" fill="white"></path>
            <path d="M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z" fill="rgb(99,99,99)"></path>
         </svg>
         
      </button>
   </div>

   
   
   <div class="nv-yt-embed__consent-overlay" role="dialog" aria-label="Consent for Optional Cookies">
      <div class="nv-yt-embed__consent-overlay-content" tabindex="-1">
         <div role="heading" aria-level="3" class="nv-yt-embed__consent-title">Consent for Optional Cookies</div>
         <p class="nv-yt-embed__consent-description"><a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer">YouTube sets performance, advertising, and other optional cookies</a> when you watch embedded videos. To watch this video, you need to turn on optional cookies for the site. By clicking “Accept and Play Video,” you will automatically turn on advertising and other optional cookies for the site and accept our <a href="/about-nvidia/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service</a> (which contains important waivers). Please see our <a href="/about-nvidia/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="/about-nvidia/cookie-policy/" target="_blank" rel="noopener noreferrer">Cookie Policy</a> for more information.</p>
         <div class="nv-yt-embed__consent-buttons">
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-cancel"><span class="btn-text">Cancel</span></button>
            </div></div>
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-accept"><span class="btn-text">Accept and Play Video</span></button>
            </div></div>
         </div>
         <p class="nv-yt-embed__consent-alternative">Alternatively, you can <a href="https://www.youtube.com/watch?v=9Uch931cDx8" target="_blank" rel="noopener noreferrer">watch this video on YouTube</a>.</p>
      </div>
   </div>

   <div class="iframe-wrapper">
    <iframe src="https://www.youtube.com/embed/9Uch931cDx8?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1" frameborder="0" allowfullscreen=" allow=" accelerometer;="" autoplay;="" encrypted-media;="" gyroscope;="" picture-in-picture"="" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}.play-button-container{display:flex;justify-content:center;cursor:pointer;}.play-button{width:75px;height:75px;opacity:0.5;}.play-button-container:hover .play-button{opacity:0.9;}</style><a href='https://www.youtube.com/embed/9Uch931cDx8?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1'><img src='https://img.youtube.com/vi/9Uch931cDx8/maxresdefault.jpg' alt=''><span class='play-button-container'><span class='play-button'><svg width='75' height='75' viewBox='0 0 237 237' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z' fill='white'></path><path d='M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z' fill='rgb(99,99,99)'></path></svg></span></span></a>" loading="lazy" aria-label="YouTube Video" data-modal-autoplay="false"></iframe>
    
    </div>
   </div>

    

</div>
</div>
<div class="nv-title text h--smallest nv-no-top-padding aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-98ced4733b" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h3 class="title ">
            
                      NVIDIA Cosmos: A World Foundation Model Platform for Physical AI
          
          </h3>
        </div>
       </div>
      
    

  
  </div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-29bdc6222a {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-29bdc6222a {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-29bdc6222a {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-29bdc6222a {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-29bdc6222a {
            
        }
    }
</style> 

</div>
</div>
<div id="carousel-1608fdff61-item-47e5f676be-tabpanel" class="cmp-carousel__item cmp-carousel__item--visuallyhidden" role="tabpanel" aria-roledescription="slide" aria-label="Slide 9 of 11" data-cmp-slide-no="9" data-cmp-hook-carousel="item" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-47e5f676be" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-cf18dc09dd" class="cmp-embed">
    
    
    

<div class="youtube-video-player nv-yt-embed nv-yt-embed--active" style="max-width:100%" data-video-id="ZSxYgW-zHiU" data-thumbnail="https://img.youtube.com/vi/ZSxYgW-zHiU/maxresdefault.jpg">

   
   

   
   <div class="nv-yt-embed__consent-poster">
      <img src="/assets/img.youtube.com/vi/ZSxYgW-zHiU/maxresdefault.jpg" alt="YouTube Video" class="nv-yt-embed__consent-poster-img" loading="lazy">
      <button class="nv-yt-embed__consent-poster-play" type="button" aria-label="Play video">
         
         <svg class="nv-yt-embed__consent-play-icon" width="75.17" height="75.17" viewBox="0 0 237 237" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z" fill="white"></path>
            <path d="M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z" fill="rgb(99,99,99)"></path>
         </svg>
         
      </button>
   </div>

   
   
   <div class="nv-yt-embed__consent-overlay" role="dialog" aria-label="Consent for Optional Cookies">
      <div class="nv-yt-embed__consent-overlay-content" tabindex="-1">
         <div role="heading" aria-level="3" class="nv-yt-embed__consent-title">Consent for Optional Cookies</div>
         <p class="nv-yt-embed__consent-description"><a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer">YouTube sets performance, advertising, and other optional cookies</a> when you watch embedded videos. To watch this video, you need to turn on optional cookies for the site. By clicking “Accept and Play Video,” you will automatically turn on advertising and other optional cookies for the site and accept our <a href="/about-nvidia/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service</a> (which contains important waivers). Please see our <a href="/about-nvidia/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="/about-nvidia/cookie-policy/" target="_blank" rel="noopener noreferrer">Cookie Policy</a> for more information.</p>
         <div class="nv-yt-embed__consent-buttons">
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-cancel"><span class="btn-text">Cancel</span></button>
            </div></div>
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-accept"><span class="btn-text">Accept and Play Video</span></button>
            </div></div>
         </div>
         <p class="nv-yt-embed__consent-alternative">Alternatively, you can <a href="https://www.youtube.com/watch?v=ZSxYgW-zHiU" target="_blank" rel="noopener noreferrer">watch this video on YouTube</a>.</p>
      </div>
   </div>

   <div class="iframe-wrapper">
    <iframe src="https://www.youtube.com/embed/ZSxYgW-zHiU?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1" frameborder="0" allowfullscreen=" allow=" accelerometer;="" autoplay;="" encrypted-media;="" gyroscope;="" picture-in-picture"="" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}.play-button-container{display:flex;justify-content:center;cursor:pointer;}.play-button{width:75px;height:75px;opacity:0.5;}.play-button-container:hover .play-button{opacity:0.9;}</style><a href='https://www.youtube.com/embed/ZSxYgW-zHiU?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1'><img src='https://img.youtube.com/vi/ZSxYgW-zHiU/maxresdefault.jpg' alt=''><span class='play-button-container'><span class='play-button'><svg width='75' height='75' viewBox='0 0 237 237' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z' fill='white'></path><path d='M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z' fill='rgb(99,99,99)'></path></svg></span></span></a>" loading="lazy" aria-label="YouTube Video" data-modal-autoplay="false"></iframe>
    
    </div>
   </div>

    

</div>
</div>
<div class="nv-title text h--smallest nv-no-top-padding aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-fdfe824108" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h3 class="title ">
            
                      Generating Synthetic Data for Physical AI With NVIDIA Cosmos
          
          </h3>
        </div>
       </div>
      
    

  
  </div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-47e5f676be {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-47e5f676be {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-47e5f676be {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-47e5f676be {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-47e5f676be {
            
        }
    }
</style> 

</div>
</div>
<div id="carousel-1608fdff61-item-828b0a58da-tabpanel" class="cmp-carousel__item cmp-carousel__item--visuallyhidden" role="tabpanel" aria-roledescription="slide" aria-label="Slide 10 of 11" data-cmp-slide-no="10" data-cmp-hook-carousel="item" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-828b0a58da" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-4c67afcbc8" class="cmp-embed">
    
    
    

<div class="youtube-video-player nv-yt-embed nv-yt-embed--active" style="max-width:100%" data-video-id="zUX-7XgAJN8" data-thumbnail="https://img.youtube.com/vi/zUX-7XgAJN8/maxresdefault.jpg">

   
   

   
   <div class="nv-yt-embed__consent-poster">
      <img src="/assets/img.youtube.com/vi/zUX-7XgAJN8/maxresdefault.jpg" alt="YouTube Video" class="nv-yt-embed__consent-poster-img" loading="lazy">
      <button class="nv-yt-embed__consent-poster-play" type="button" aria-label="Play video">
         
         <svg class="nv-yt-embed__consent-play-icon" width="75.17" height="75.17" viewBox="0 0 237 237" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z" fill="white"></path>
            <path d="M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z" fill="rgb(99,99,99)"></path>
         </svg>
         
      </button>
   </div>

   
   
   <div class="nv-yt-embed__consent-overlay" role="dialog" aria-label="Consent for Optional Cookies">
      <div class="nv-yt-embed__consent-overlay-content" tabindex="-1">
         <div role="heading" aria-level="3" class="nv-yt-embed__consent-title">Consent for Optional Cookies</div>
         <p class="nv-yt-embed__consent-description"><a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer">YouTube sets performance, advertising, and other optional cookies</a> when you watch embedded videos. To watch this video, you need to turn on optional cookies for the site. By clicking “Accept and Play Video,” you will automatically turn on advertising and other optional cookies for the site and accept our <a href="/about-nvidia/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service</a> (which contains important waivers). Please see our <a href="/about-nvidia/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="/about-nvidia/cookie-policy/" target="_blank" rel="noopener noreferrer">Cookie Policy</a> for more information.</p>
         <div class="nv-yt-embed__consent-buttons">
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-cancel"><span class="btn-text">Cancel</span></button>
            </div></div>
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-accept"><span class="btn-text">Accept and Play Video</span></button>
            </div></div>
         </div>
         <p class="nv-yt-embed__consent-alternative">Alternatively, you can <a href="https://www.youtube.com/watch?v=zUX-7XgAJN8" target="_blank" rel="noopener noreferrer">watch this video on YouTube</a>.</p>
      </div>
   </div>

   <div class="iframe-wrapper">
    <iframe src="https://www.youtube.com/embed/zUX-7XgAJN8?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1" frameborder="0" allowfullscreen=" allow=" accelerometer;="" autoplay;="" encrypted-media;="" gyroscope;="" picture-in-picture"="" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}.play-button-container{display:flex;justify-content:center;cursor:pointer;}.play-button{width:75px;height:75px;opacity:0.5;}.play-button-container:hover .play-button{opacity:0.9;}</style><a href='https://www.youtube.com/embed/zUX-7XgAJN8?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1'><img src='https://img.youtube.com/vi/zUX-7XgAJN8/maxresdefault.jpg' alt=''><span class='play-button-container'><span class='play-button'><svg width='75' height='75' viewBox='0 0 237 237' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z' fill='white'></path><path d='M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z' fill='rgb(99,99,99)'></path></svg></span></span></a>" loading="lazy" aria-label="YouTube Video" data-modal-autoplay="false"></iframe>
    
    </div>
   </div>

    

</div>
</div>
<div class="nv-title text h--smallest nv-no-top-padding aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-1bc049d2e2" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h3 class="title ">
            
                      Autonomous Vehicle Simulation With NVIDIA Omniverse and Cosmos
          
          </h3>
        </div>
       </div>
      
    

  
  </div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-828b0a58da {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-828b0a58da {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-828b0a58da {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-828b0a58da {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-828b0a58da {
            
        }
    }
</style> 

</div>
</div>
<div id="carousel-1608fdff61-item-a272f0de28-tabpanel" class="cmp-carousel__item cmp-carousel__item--visuallyhidden" role="tabpanel" aria-roledescription="slide" aria-label="Slide 11 of 11" data-cmp-slide-no="11" data-cmp-hook-carousel="item" aria-hidden="true"><div class="nv-container container responsivegrid">

    
	
    <div id="container-a272f0de28" class="v1-1     
            
             
          
          
           
            
            
             
             
         
          " data-cmp-is="nv-container">
      
      
      
      

      
      
      <div class="general-container">
        

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="nv-embed embed aem-GridColumn aem-GridColumn--default--12">

<div id="nv-embed-44c21298d4" class="cmp-embed">
    
    
    

<div class="youtube-video-player nv-yt-embed nv-yt-embed--active" style="max-width:100%" data-video-id="wjCVFfmsai0" data-thumbnail="https://img.youtube.com/vi/wjCVFfmsai0/maxresdefault.jpg">

   
   

   
   <div class="nv-yt-embed__consent-poster">
      <img src="/assets/img.youtube.com/vi/wjCVFfmsai0/maxresdefault.jpg" alt="YouTube Video" class="nv-yt-embed__consent-poster-img" loading="lazy">
      <button class="nv-yt-embed__consent-poster-play" type="button" aria-label="Play video">
         
         <svg class="nv-yt-embed__consent-play-icon" width="75.17" height="75.17" viewBox="0 0 237 237" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z" fill="white"></path>
            <path d="M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z" fill="rgb(99,99,99)"></path>
         </svg>
         
      </button>
   </div>

   
   
   <div class="nv-yt-embed__consent-overlay" role="dialog" aria-label="Consent for Optional Cookies">
      <div class="nv-yt-embed__consent-overlay-content" tabindex="-1">
         <div role="heading" aria-level="3" class="nv-yt-embed__consent-title">Consent for Optional Cookies</div>
         <p class="nv-yt-embed__consent-description"><a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer">YouTube sets performance, advertising, and other optional cookies</a> when you watch embedded videos. To watch this video, you need to turn on optional cookies for the site. By clicking “Accept and Play Video,” you will automatically turn on advertising and other optional cookies for the site and accept our <a href="/about-nvidia/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service</a> (which contains important waivers). Please see our <a href="/about-nvidia/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="/about-nvidia/cookie-policy/" target="_blank" rel="noopener noreferrer">Cookie Policy</a> for more information.</p>
         <div class="nv-yt-embed__consent-buttons">
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-cancel"><span class="btn-text">Cancel</span></button>
            </div></div>
            <div class="nv-button nv-button-small"><div class="nv-button-standard">
               <button type="button" class="btn-content nv-yt-embed__consent-accept"><span class="btn-text">Accept and Play Video</span></button>
            </div></div>
         </div>
         <p class="nv-yt-embed__consent-alternative">Alternatively, you can <a href="https://www.youtube.com/watch?v=wjCVFfmsai0" target="_blank" rel="noopener noreferrer">watch this video on YouTube</a>.</p>
      </div>
   </div>

   <div class="iframe-wrapper">
    <iframe src="https://www.youtube.com/embed/wjCVFfmsai0?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1" frameborder="0" allowfullscreen=" allow=" accelerometer;="" autoplay;="" encrypted-media;="" gyroscope;="" picture-in-picture"="" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}.play-button-container{display:flex;justify-content:center;cursor:pointer;}.play-button{width:75px;height:75px;opacity:0.5;}.play-button-container:hover .play-button{opacity:0.9;}</style><a href='https://www.youtube.com/embed/wjCVFfmsai0?origin=https%3A%2F%2Fwww.nvidia.com&amp;hl=en&amp;mute=1&amp;autoplay=1&amp;loop=0&amp;controls=1&amp;enablejsapi=1'><img src='https://img.youtube.com/vi/wjCVFfmsai0/maxresdefault.jpg' alt=''><span class='play-button-container'><span class='play-button'><svg width='75' height='75' viewBox='0 0 237 237' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 118.25C0 52.9423 52.9423 0 118.25 0C183.558 0 236.5 52.9423 236.5 118.25C236.5 183.558 183.558 236.5 118.25 236.5C52.9423 236.5 0 183.558 0 118.25Z' fill='white'></path><path d='M179.037 118.25L77.6562 59.1115V177.389L179.037 118.25Z' fill='rgb(99,99,99)'></path></svg></span></span></a>" loading="lazy" aria-label="YouTube Video" data-modal-autoplay="false"></iframe>
    
    </div>
   </div>

    

</div>
</div>
<div class="nv-title text h--smallest nv-no-top-padding aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-83298fc042" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h3 class="title ">
            
                      Using NVIDIA Cosmos World Foundation Models for Physical AI Development
          
          </h3>
        </div>
       </div>
      
    

  
  </div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-a272f0de28 {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-a272f0de28 {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-a272f0de28 {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-a272f0de28 {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-a272f0de28 {
            
        }
    }
</style> 

</div>
</div>

         </div>

    

        <button class="cmp-carousel__action cmp-carousel__action--previous" type="button" aria-label="Previous" data-cmp-hook-carousel="previous">
                <span class="cmp-carousel__action-icon fa-regular fa-chevron-left"></span>
                <span class="cmp-carousel__action-text">Previous</span>
            </button>
            
            <button class="cmp-carousel__action cmp-carousel__action--next" type="button" aria-label="Next" data-cmp-hook-carousel="next">
                <span class="cmp-carousel__action-icon fa-regular fa-chevron-right"></span>
                <span class="cmp-carousel__action-text">Next</span>
            </button>

        
            
      <ol class="cmp-carousel__indicators" role="tablist" aria-label="Choose a slide to display" data-cmp-hook-carousel="indicators">
            <li id="carousel-1608fdff61-item-b01bee73ab-tab" class="cmp-carousel__indicator cmp-carousel__indicator--active" role="tab" aria-controls="carousel-1608fdff61-item-b01bee73ab-tabpanel" aria-label="Slide 1" data-cmp-hook-carousel="indicator" aria-selected="true" tabindex="0">container 1</li>
<li id="carousel-1608fdff61-item-c6e2500664-tab" class="cmp-carousel__indicator" role="tab" aria-controls="carousel-1608fdff61-item-c6e2500664-tabpanel" aria-label="Slide 2" data-cmp-hook-carousel="indicator" aria-selected="false" tabindex="-1">container 2</li>
<li id="carousel-1608fdff61-item-4ce600680d-tab" class="cmp-carousel__indicator" role="tab" aria-controls="carousel-1608fdff61-item-4ce600680d-tabpanel" aria-label="Slide 3" data-cmp-hook-carousel="indicator" aria-selected="false" tabindex="-1">container 3</li>
<li id="carousel-1608fdff61-item-40a6b41cf9-tab" class="cmp-carousel__indicator" role="tab" aria-controls="carousel-1608fdff61-item-40a6b41cf9-tabpanel" aria-label="Slide 4" data-cmp-hook-carousel="indicator" aria-selected="false" tabindex="-1">container 3</li>
<li id="carousel-1608fdff61-item-e56b3be745-tab" class="cmp-carousel__indicator" role="tab" aria-controls="carousel-1608fdff61-item-e56b3be745-tabpanel" aria-label="Slide 5" data-cmp-hook-carousel="indicator" aria-selected="false" tabindex="-1">container 3</li>
<li id="carousel-1608fdff61-item-cff1836e39-tab" class="cmp-carousel__indicator" role="tab" aria-controls="carousel-1608fdff61-item-cff1836e39-tabpanel" aria-label="Slide 6" data-cmp-hook-carousel="indicator" aria-selected="false" tabindex="-1">container 3</li>
<li id="carousel-1608fdff61-item-0a13811a66-tab" class="cmp-carousel__indicator" role="tab" aria-controls="carousel-1608fdff61-item-0a13811a66-tabpanel" aria-label="Slide 7" data-cmp-hook-carousel="indicator" aria-selected="false" tabindex="-1">container 3</li>
<li id="carousel-1608fdff61-item-29bdc6222a-tab" class="cmp-carousel__indicator" role="tab" aria-controls="carousel-1608fdff61-item-29bdc6222a-tabpanel" aria-label="Slide 8" data-cmp-hook-carousel="indicator" aria-selected="false" tabindex="-1">container 3</li>
<li id="carousel-1608fdff61-item-47e5f676be-tab" class="cmp-carousel__indicator" role="tab" aria-controls="carousel-1608fdff61-item-47e5f676be-tabpanel" aria-label="Slide 9" data-cmp-hook-carousel="indicator" aria-selected="false" tabindex="-1">container 3</li>
<li id="carousel-1608fdff61-item-828b0a58da-tab" class="cmp-carousel__indicator" role="tab" aria-controls="carousel-1608fdff61-item-828b0a58da-tabpanel" aria-label="Slide 10" data-cmp-hook-carousel="indicator" aria-selected="false" tabindex="-1">container 3</li>
<li id="carousel-1608fdff61-item-a272f0de28-tab" class="cmp-carousel__indicator" role="tab" aria-controls="carousel-1608fdff61-item-a272f0de28-tabpanel" aria-label="Slide 11" data-cmp-hook-carousel="indicator" aria-selected="false" tabindex="-1">container 3</li>

        </ol>
    </div>
    
    
</div></div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #container-381924f13f {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #container-381924f13f {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #container-381924f13f {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #container-381924f13f {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #container-381924f13f {
            
        }
    }
</style> 

</div>
</div>

    
</div></div>
<div class="nv-rawhtml aem-GridColumn aem-GridColumn--default--12">

	
	
    <div id="nv-rawhtml-f074978695" class="general-container-text            ">
    	
		

    <div> <style>
[id^="see-all-btn-tab"] .btn-text { padding-right: 35px; }

.video-gallery-container .nv-title { color: #fff; }
.nv-video-gallery .vg-video-item-title { text-align: center; }
.nv-video-gallery .vg-play-button:before { color: #fff; }
</style></div>	

    </div>
</div>

    
</div>

      </div>
      
    </div>
    

    
    
    

 

<style>
    #resources {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #resources {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #resources {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #resources {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #resources {
            
        }
    }
</style> 

</div>
<div class="nv-container container responsivegrid aem-GridColumn aem-GridColumn--default--12">

    
	
		<div id="faqs" class="p-t-75 p-b-75  lap-p-t-75 
         lap-p-b-75  tab-p-t-45 tab-p-b-45
          mob-p-t-45 mob-p-b-45  
          
          
         d-top-align d-left-align 
         l-left-align l-top-align t-left-align 
         t-top-align m-top-align m-left-align 
             
         d-content-align-top l-content-align-top t-content-align-top m-content-align-top 
         
          " data-cmp-is="nv-container" data-cmp-breadcrumbcolor="none" data-cmp-disablemidgroundautoheight="false" data-cmp-disablevideoautoheight="false" data-in-page-nav-item-index="7">

         
         

    	

        <div class="general-container">
        	

<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="nv-title text h--medium aem-GridColumn aem-GridColumn--default--12">
  
    
      <div id="nv-title-bb698bb6a1" class="general-container-text            ">
        <div class="text-center lap-text-center tab-text-center mob-text-center">
          <h2 class="title ">
            
                      Frequently Asked Questions
          
          </h2>
        </div>
       </div>
      
    

  
  </div>
<div class="nv-separator separator aem-GridColumn aem-GridColumn--default--12">
  
  
<div id="nv-separator-df23a3ac44" class="cmp-separator">
     
     <style>
         
        
    	@media screen and (min-width:1350px){
            #nv-separator-df23a3ac44{
                height:30px;
            }
        }
         
        
        @media screen and (min-width:1024px) and (max-width:1349px){
            #nv-separator-df23a3ac44{
                 height:30px;
            }
        }
         
        
        @media screen and (min-width:640px) and (max-width:1023px){
        	 #nv-separator-df23a3ac44{
                 height:30px;
            }
        }
         
        
        @media screen and (max-width: 639px){
        	 #nv-separator-df23a3ac44{
                 height:30px;
            }
        }
         
    </style>
    
</div></div>
<div class="nv-accordion accordion panelcontainer h--smallest aem-GridColumn--tablet--10 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--10 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--1 aem-GridColumn--offset--tablet--1">

<div id="nv-accordion-bceb606109" class="cmp-accordion     
      text-left lap-text-left tab-text-left mob-text-left">
    <div class="cmp-accordion__item" data-cmp-hook-accordion="item" id="nv-accordion-bceb606109-item-18d77555ca">
        <h3 class="cmp-accordion__header">
            <button id="nv-accordion-bceb606109-item-18d77555ca-button" class="cmp-accordion__button" aria-controls="nv-accordion-bceb606109-item-18d77555ca-panel" data-cmp-hook-accordion="button" aria-expanded="false">
                <span class="cmp-accordion__title">What’s new in NVIDIA Cosmos WFMs?</span>
                <span class="cmp-accordion__icon fa-light fa-sharp fa-angle-down"></span>
            </button>
        </h3>
        <div data-cmp-hook-accordion="panel" id="nv-accordion-bceb606109-item-18d77555ca-panel" class="cmp-accordion__panel cmp-accordion__panel--hidden" role="region" aria-labelledby="nv-accordion-bceb606109-item-18d77555ca-button" aria-hidden="true"><div class="nv-text text">
 
 	
    <div id="nv-text-18d77555ca" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>[January 22, 2026] Released research on <a href="https://research.nvidia.com/labs/dir/cosmos-policy/cosmos_policy_index.html?ncid=no-ncid" target="_blank">Cosmos Policy</a> that builds on Cosmos Predict-2 for visuomotor control and planning.</p> 
<p>[February 9, 2026] Enhanced compute support, quantization and CUDA compatibility for new <a href="https://github.com/nvidia-cosmos/cosmos-reason2" target="_blank">Cosmos Reason 2</a>.</p> 
<p>[December 19, 2025] Released Cosmos-Predict2.5-2B Diffusers support via <a href="https://huggingface.co/docs/diffusers/main/en/api/pipelines/cosmos#diffusers.Cosmos2_5_PredictBasePipeline" target="_blank">Hugging Face</a>, Cosmos-Predict2.5-2B Text2World <a href="https://huggingface.co/nvidia/Cosmos-Predict2.5-2B/tree/main/base/distilled" target="_blank">distilled checkpoint</a> on Hugging Face and Distillation <a href="https://github.com/nvidia-cosmos/cosmos-predict2.5/blob/main/docs/distillation.md" target="_blank">guide</a>.</p> 
<p>[December 19, 2025] Released Image2Image and ImagePrompt capabilities for Cosmos Transfer 2.5. See the inference guide <a href="https://github.com/nvidia-cosmos/cosmos-transfer2.5/blob/main/docs/inference_image.md" target="_blank">here</a>.</p> 
<p>Explore GitHub for <a href="https://github.com/nvidia-cosmos" target="_blank">more</a>.</p>
                </div>
			</div>
	</div>

    

</div>
</div>
    </div>
<div class="cmp-accordion__item" data-cmp-hook-accordion="item" id="nv-accordion-bceb606109-item-f097ec9e0d">
        <h3 class="cmp-accordion__header">
            <button id="nv-accordion-bceb606109-item-f097ec9e0d-button" class="cmp-accordion__button" aria-controls="nv-accordion-bceb606109-item-f097ec9e0d-panel" data-cmp-hook-accordion="button" aria-expanded="false">
                <span class="cmp-accordion__title">What is the licensing model for Cosmos world foundation models?</span>
                <span class="cmp-accordion__icon fa-light fa-sharp fa-angle-down"></span>
            </button>
        </h3>
        <div data-cmp-hook-accordion="panel" id="nv-accordion-bceb606109-item-f097ec9e0d-panel" class="cmp-accordion__panel cmp-accordion__panel--hidden" role="region" aria-labelledby="nv-accordion-bceb606109-item-f097ec9e0d-button" aria-hidden="true"><div class="nv-text text">
 
 	
    <div id="nv-text-f097ec9e0d" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>Cosmos WFMs are available under an <a href="https://developer.download.nvidia.com/licenses/nvidia-open-model-license-agreement-june-2024.pdf?ncid=no-ncid" target="_blank">NVIDIA Open Model License</a> for all.</p>
                </div>
			</div>
	</div>

    

</div>
</div>
    </div>
<div class="cmp-accordion__item" data-cmp-hook-accordion="item" id="nv-accordion-bceb606109-item-01b962c7a9">
        <h3 class="cmp-accordion__header">
            <button id="nv-accordion-bceb606109-item-01b962c7a9-button" class="cmp-accordion__button" aria-controls="nv-accordion-bceb606109-item-01b962c7a9-panel" data-cmp-hook-accordion="button" aria-expanded="false">
                <span class="cmp-accordion__title">How do I post-train Cosmos models for my downstream applications?</span>
                <span class="cmp-accordion__icon fa-light fa-sharp fa-angle-down"></span>
            </button>
        </h3>
        <div data-cmp-hook-accordion="panel" id="nv-accordion-bceb606109-item-01b962c7a9-panel" class="cmp-accordion__panel cmp-accordion__panel--hidden" role="region" aria-labelledby="nv-accordion-bceb606109-item-01b962c7a9-button" aria-hidden="true"><div class="nv-text text">
 
 	
    <div id="nv-text-01b962c7a9" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>Refer to the new <a href="https://nvidia-cosmos.github.io/cosmos-cookbook/" target="_blank">Cosmos Cookbook</a>, which contains step-by-step recipes and post-training scripts to quickly build, customize, and deploy NVIDIA’s Cosmos world foundation models for robotics and autonomous systems.&nbsp; </p>
                </div>
			</div>
	</div>

    

</div>
</div>
    </div>
<div class="cmp-accordion__item" data-cmp-hook-accordion="item" id="nv-accordion-bceb606109-item-5ef5bc2150">
        <h3 class="cmp-accordion__header">
            <button id="nv-accordion-bceb606109-item-5ef5bc2150-button" class="cmp-accordion__button" aria-controls="nv-accordion-bceb606109-item-5ef5bc2150-panel" data-cmp-hook-accordion="button" aria-expanded="false">
                <span class="cmp-accordion__title">Can I build a world model from scratch using tools from the Cosmos platform and my custom or in-house foundation model?</span>
                <span class="cmp-accordion__icon fa-light fa-sharp fa-angle-down"></span>
            </button>
        </h3>
        <div data-cmp-hook-accordion="panel" id="nv-accordion-bceb606109-item-5ef5bc2150-panel" class="cmp-accordion__panel cmp-accordion__panel--hidden" role="region" aria-labelledby="nv-accordion-bceb606109-item-5ef5bc2150-button" aria-hidden="true"><div class="nv-text text">
 
 	
    <div id="nv-text-5ef5bc2150" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>Yes, you can leverage Cosmos to build from scratch with your preferred foundation model or model architecture. You can start by using <a href="https://github.com/nvidia-cosmos/cosmos-curate" target="_blank">Cosmos Curator</a> for video data preprocessing. Then compress and decode your data with <a href="https://developer.nvidia.com/blog/state-of-the-art-multimodal-generative-ai-model-development-with-nvidia-nemo/?ncid=no-ncid" target="_blank">Cosmos tokenizer</a>. Once you have processed the data, you can train or fine-tune your model.&nbsp;</p> 
<p>Using <a href="https://build.nvidia.com/search?q=%22cosmos%22+-nemotron&amp;ncid=no-ncid" target="_blank">NVIDIA NIM™ microservices</a>, you can easily integrate your physical AI models into your applications across cloud, data centers, and workstations.</p> 
<p>You can also use <a href="/data-center/dgx-cloud/">NVIDIA DGX Cloud</a> to train AI models and deploy them anywhere at scale.</p>
                </div>
			</div>
	</div>

    

</div>
</div>
    </div>
<div class="cmp-accordion__item" data-cmp-hook-accordion="item" id="nv-accordion-bceb606109-item-381df9b954">
        <h3 class="cmp-accordion__header">
            <button id="nv-accordion-bceb606109-item-381df9b954-button" class="cmp-accordion__button" aria-controls="nv-accordion-bceb606109-item-381df9b954-panel" data-cmp-hook-accordion="button" aria-expanded="false">
                <span class="cmp-accordion__title">What are the differences between Cosmos Predict, Cosmos Transfer, and Cosmos Reason, and how do they work together?</span>
                <span class="cmp-accordion__icon fa-light fa-sharp fa-angle-down"></span>
            </button>
        </h3>
        <div data-cmp-hook-accordion="panel" id="nv-accordion-bceb606109-item-381df9b954-panel" class="cmp-accordion__panel cmp-accordion__panel--hidden" role="region" aria-labelledby="nv-accordion-bceb606109-item-381df9b954-button" aria-hidden="true"><div class="nv-text text">
 
 	
    <div id="nv-text-381df9b954" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>All three are WFMs with distinct roles:</p> 
<ul> 
 <li>Cosmos Predict generates diverse video scenes from text, image, or video prompts—ideal for post-training on subjects like robots or self-driving cars.</li> 
 <li>Cosmos Transfer applies multi-control style transfer—changing lighting and environments—on physics-based videos, often created in simulators like NVIDIA Omniverse™.</li> 
 <li>Cosmos Reason answers queries by reasoning over video and image inputs. Cosmos Reason can generate new and diverse text prompts from one starting video for Cosmos Predict, or critique and annotate synthetic data from Predict and Transfer.</li> 
</ul>
                </div>
			</div>
	</div>

    

</div>
</div>
    </div>
<div class="cmp-accordion__item" data-cmp-hook-accordion="item" id="nv-accordion-bceb606109-item-14d4dc5115">
        <h3 class="cmp-accordion__header">
            <button id="nv-accordion-bceb606109-item-14d4dc5115-button" class="cmp-accordion__button" aria-controls="nv-accordion-bceb606109-item-14d4dc5115-panel" data-cmp-hook-accordion="button" aria-expanded="false">
                <span class="cmp-accordion__title">What is the difference between Cosmos and Omniverse? </span>
                <span class="cmp-accordion__icon fa-light fa-sharp fa-angle-down"></span>
            </button>
        </h3>
        <div data-cmp-hook-accordion="panel" id="nv-accordion-bceb606109-item-14d4dc5115-panel" class="cmp-accordion__panel cmp-accordion__panel--hidden" role="region" aria-labelledby="nv-accordion-bceb606109-item-14d4dc5115-button" aria-hidden="true"><div class="nv-text text">
 
 	
    <div id="nv-text-14d4dc5115" class="general-container-text            ">
			<div class="text-left lap-text-left tab-text-left mob-text-left">
				<div class="description ">
                	<p>Omniverse creates realistic 3D simulations of real-world tasks by using different generative APIs, SDKs, and NVIDIA RTX rendering technology.</p> 
<p>Developers can input Omniverse simulations as instruction videos to Cosmos Transfer models to generate controllable photoreal synthetic data.</p> 
<p>Together, Omniverse provides the simulation environment before and after training, while Cosmos provides the foundation models to generate video data and train physical AI models.</p> 
<p>Learn more about <a href="/omniverse/">NVIDIA Omniverse</a>.</p>
                </div>
			</div>
	</div>

    

</div>
</div>
    </div>

    
</div>
</div>

    
</div>

        </div>
        
    </div>
    

    
    
    

 
<style>
    #faqs {
        
    }

    /* Mobile: up to 639px */
    @media only screen and (max-width: 639px) {
        #faqs {
            
        }
    }

    /* Tablet: 640px to 1023px */
    @media only screen and (min-width: 640px) and (max-width: 1023px) {
        #faqs {
            
        }
    }

    /* Laptop: 1024px to 1349px */
    @media only screen and (min-width: 1024px) and (max-width: 1349px) {
        #faqs {
            
        }
    }

    /* Desktop: 1350px and up */
    @media only screen and (min-width: 1350px) {
        #faqs {
            
        }
    }
</style>

</div>
<div class="nv-rawhtml aem-GridColumn aem-GridColumn--default--12">

	
	
    <div id="nv-rawhtml-27603a4bcc" class="general-container-text            ">
    	
		

    <div> </div>	

    </div>
</div>

    
</div>
</div>
<div class="footer aem-GridColumn aem-GridColumn--default--12">
<div>
<div class="page-footer-wrapper" id="brandFooter">
<div class="page-footer">
<div class="page-footer__links">
<div class="page-footer-link-set set-3">
<div class="page-footer-link-set__title">Company Information</div>
<ul class="page-footer-link-set__links">
<li>
<a href="/about-nvidia/" target="_self">About Us</a>
</li>

<li>
<a href="/research/" target="_self">Research</a>
</li>

<li>
<a href="/technologies/" target="_self">Technologies</a>
</li>

</ul>
</div>
<div class="page-footer-link-set set-3">
<div class="page-footer-link-set__title">News and Events</div>
<ul class="page-footer-link-set__links">

<li>
<a href="/" target="_blank">Company Blog</a>
</li>

<li>
<a href="/preferences/email-signup/" target="_self">Stay Informed</a>
</li>
<li>
<a href="/events/" target="_self">Events Calendar</a>
</li>

<li>
<a href="/on-demand/" target="_self">NVIDIA On-Demand</a>
</li>
</ul>
</div>
<div class="page-footer-link-set set-3">
<div class="page-footer-link-set__title">Popular Links</div>
<ul class="page-footer-link-set__links">

<li>
<a href="/startups/" target="_self">Startups and VCs</a>
</li>

<li>
<a href="/learn/organizations/" target="_self">Technical Training</a>
</li>
<li>
<a href="/support/enterprise/advisory-services/" target="_self">Professional Services for Data Science</a>
</li>
</ul>
</div>
</div>
<div class="page-footer__subscribe">
<div class="cq-dd-paragraph"><div class="nv_rawhtml nv-rawhtml">
<div class="general-container-text" id="nv-rawhtml-51422112d4">
<div> <style>
.subscribe-container {
	width: 100%;
	margin: 0 auto;
}
.subscribe-container .center-content {
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: flex-start;
	margin: 0;
	gap: 25px;
}
.subscribe-logo {
	display: flex;
	align-items: center;
}
.subscribe-logo svg {
	display: block;
}
.subscribe-text {
	font-size: 18px;
	color: white;
	font-weight: 500;
	display: flex;
	align-items: center;
	margin-left: 0;
}
.subscribe-container .button {
	display: flex;
	align-items: center;
	margin-left: 0;
	margin-top: 0;
}
.subscribe-container .btncta::after {
	display: none !important;
}
.subscribe-container .nv-button {
	background-color: #76b900;
	padding: 8px 24px !important;
	border-radius: 0;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	height: 38px;
	box-sizing: border-box;
}
.subscribe-container .nv-button a.btncta {
	color: #000 !important;
	text-decoration: none;
	font-weight: 700;
	font-size: 14px;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	width: 100%;
	height: 100%;
	pointer-events: none;
	cursor: default;
}

/* Social container styling overrides */
.page-footer__social {
	display: flex !important;
	align-items: center !important;
	justify-content: flex-end !important;
	gap: 15px !important;
	width: auto !important;
	float: none !important;
	margin: 0 !important;
	padding: 0 !important;
}
.page-footer__social__label {
	color: #999 !important;
	font-size: 16px !important;
	margin-right: 20px !important;
	margin-bottom: 0 !important;
	display: inline-block !important;
	font-weight: 500;
}
.page-footer__social__link {
	display: inline-flex !important;
	align-items: center !important;
	justify-content: center !important;
	text-decoration: none !important;
	width: 24px !important;
	height: 24px !important;
}
.page-footer__social__link svg {
	fill: #999;
	transition: fill 0.3s ease-in-out;
}
.page-footer__social__link:hover svg {
	fill: #fff;
}

/* Grid layout for the footer bottom bar on desktop */
@media screen and (min-width: 1024px) {
.page-footer {
	display: grid !important;
	grid-template-columns: 1fr 1fr !important;
	align-items: center !important;
	padding-bottom: 40px !important;
}
.page-footer__links {
	grid-column: 1 / span 2 !important;
	width: 100% !important;
}
.page-footer__subscribe {
	grid-column: 1 !important;
	width: 100% !important;
	display: flex !important;
	align-items: center !important;
	justify-content: flex-start !important;
	height: auto !important;
	margin: 0 !important;
}
.page-footer__social {
	grid-column: 2 !important;
	width: 100% !important;
	display: flex !important;
	align-items: center !important;
	justify-content: flex-end !important;
	height: auto !important;
	margin: 0 !important;
}
}

@media screen and (max-width: 1023px) {
.page-footer__subscribe {
	width: 100% !important;
	margin-bottom: 30px !important;
}
.page-footer__social {
	width: 100% !important;
	justify-content: center !important;
}
.subscribe-container .center-content {
	justify-content: center;
}
}

@media screen and (max-width: 639px) {
.subscribe-container .center-content {
	flex-direction: column;
	gap: 15px;
	text-align: center;
}
.page-footer__social {
	flex-wrap: wrap !important;
	justify-content: center !important;
}
}
</style><div class="subscribe-container">
<div class="center-content">
<div class="subscribe-logo">
<svg height="36" viewBox="0 0 48 36" width="48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<image data-name="icon mail copy" height="36" id="icon_mail_copy" width="48" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAkCAMAAAD4m0k4AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEWHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgAAAADqIFB3AAAAiHRSTlMAPqKqqKucL9zD8v383e77xqnO2fBFYfRSbfUDDgIPDF6QUA0SWJMIQI4qAQQznT8XHW7k6DEKadYFCUq3z1kGMqPt6XokK4fz55glwVQLX828VR6L4PeUNT2h/td9FUmv+tIWdtukcdCsTmU0md9/iY8HWr60TYLl2kOt+DoaE0djybDCPJ8umjQepgAAAAFiS0dEiRxhJswAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfgChgTJSW4Gs96AAABYklEQVQ4y2NgZGJmIRqwsrEzcHSQBDgZuDo6uHmIBNwdHbwMfB38AoKsRAEWIZ4OYaAGEVEGIoGYOFgDlwSxGiSlKNAgLYNXqaycLKoGeQVFJWXc6lVU1STUUTRodHTwaGppY1euo6vX0SGii6JBXwQYKcJiBtjUGxoZAyVNTFE0mJlbgOJRUN8SXbmVtQ1IxtbOHi2UHBydgOLOLq6o6t3cPYDCnl7eWIJVTABklI+vH5Jn/QOAQvyBQdjjITgkFCgdFh4BUx8ZFQ0UiImNwxlx8QmJQBVJ5slg/SmpQI5UWiS+mFZJzwC5KxOYvLLAnhXItiKQNHJyQb7Myy9wBoVBoRbhtFRUXALLLaVlqFGJK/F5l1eAlFemBONJfKigqpq/hqkWQxhP8q5T9a1nIEUDdjCqYVBpEGkgVkMjRAN/E2szUYA5A1QYg4t7bqIATzSouE8lrUJpYWhtI6XKym0HAEPUyge2kF93AAAAAElFTkSuQmCC"></image>
</svg>
</div>
<div class="subscribe-text">
<span>Sign Up for NVIDIA News</span>
</div>
<div class="button">
<div class="nv-button btn-content" style="padding: 0px;">
<a class="btn-content btncta" href="javascript:void(0)" style="pointer-events: none; cursor: default;">
<div class="btn-text">
      Subscribe
     </div> </a>
</div>
</div>
</div>
</div></div>
</div>
</div>
</div>
</div>
<div class="page-footer__social"><div class="page-footer__social__label">Follow NVIDIA  </div>
<a class="page-footer__social__link facebook" href="https://www.facebook.com/" target="_blank" title="Follow Facebook"><svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg></a>
<a class="page-footer__social__link instagram" href="https://www.instagram.com/" target="_blank" title="Follow Instagram"><svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"></path></svg></a>
<a class="page-footer__social__link linkedin" href="https://www.linkedin.com/" target="_blank" title="Follow LinkedIn"><svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M22.23 0H1.77C.8 0 0 .77 0 1.72v20.56C0 23.23.8 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.2 0 22.23 0zM7.12 20.45H3.56V9H7.12v11.45zM5.34 7.43c-1.14 0-2.06-.92-2.06-2.06 0-1.14.92-2.06 2.06-2.06 1.14 0 2.06.92 2.06 2.06 0 1.14-.92 2.06-2.06 2.06zm15.11 13.02h-3.56v-5.6c0-1.34-.03-3.05-1.86-3.05-1.86 0-2.14 1.45-2.14 2.95v5.7h-3.56V9h3.42v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29z"></path></svg></a>
<a class="page-footer__social__link twitter" href="https://twitter.com/" target="_blank" title="Follow Twitter"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg></a>
<a class="page-footer__social__link youtube" href="https://www.youtube.com/" target="_blank" title="Follow YouTube"><svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M23.498 6.163a3.003 3.003 0 00-2.11-2.11C19.53 3.545 12 3.545 12 3.545s-7.53 0-9.388.508a3.003 3.003 0 00-2.11 2.11C0 8.017 0 12 0 12s0 3.983.502 5.837a3.003 3.003 0 002.11 2.11c1.858.508 9.388.508 9.388.508s7.53 0 9.388-.508a3.002 3.002 0 002.11-2.11C24 15.983 24 12 24 12s0-3.983-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg></a>
</div>
</div>
</div>
</div>
<div>
<div class="global-footer-container">
<div class="global-footer" id="globalFooter">
<svg class="global-footer__logo" enable-background="new 0 407.8 1000 184.4" viewBox="0 407.8 1000 184.4" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
<title>NVIDIA</title>
<g id="nvidia-logo">
<path d="M987.1 555.7v-2.8h1.7c0.9 0 2.3 0.1 2.3 1.2 0 1.2-0.7 1.5-1.8 1.5H987.1M987.1 557.6h1.2l2.8 4.8h3l-3.1-5c1.5-0.1 2.9-0.8 2.9-3 0-2.7-1.8-3.5-4.9-3.5h-4.4v11.5h2.6L987.1 557.6M1000 556.7c0-6.8-5.2-10.7-11.1-10.7 -5.8 0-11.1 3.9-11.1 10.7 0 6.8 5.2 10.7 11.1 10.7S1000 563.5 1000 556.7M996.8 556.7c0 4.9-3.6 8.2-7.9 8.2l0 0c-4.4 0-7.9-3.3-7.9-8.2 0-4.9 3.6-8.2 7.9-8.2C993.2 548.6 996.8 551.9 996.8 556.7z"></path>
<path d="M593.2 442.7v121.1h34.2V442.7H593.2zM324.4 442.5v121.2h34.5v-94.1l26.9 0.1c8.8 0 15 2.2 19.2 6.7 5.4 5.7 7.6 15.1 7.6 32v55.3H446v-66.9c0-47.8-30.5-54.3-60.2-54.3C385.8 442.5 324.4 442.5 324.4 442.5zM648.3 442.7v121.1h55.4c29.5 0 39.2-4.9 49.6-15.9 7.4-7.7 12.1-24.7 12.1-43.3 0-17-4-32.2-11.1-41.7 -12.5-16.9-30.8-20.2-58.1-20.2H648.3zM682.2 469h14.7c21.3 0 35.1 9.5 35.1 34.4 0 24.8-13.7 34.4-35.1 34.4h-14.7V469zM544 442.7l-28.5 95.9 -27.3-95.9h-36.9l39 121.1h49.2l39.3-121.1H544zM781.4 563.7h34.2v-121h-34.2V563.7zM877.2 442.7l-47.7 121h33.7l7.6-21.3h56.5l7.2 21.3h36.6l-48.2-121H877.2zM899.4 464.8l20.7 56.6H878L899.4 464.8z"></path>
<path d="M103.9 462.8v-16.6c1.6-0.1 3.3-0.2 4.9-0.2 45.6-1.4 75.4 39.1 75.4 39.1s-32.2 44.8-66.8 44.8c-5 0-9.4-0.8-13.4-2.2v-50.5c17.7 2.2 21.3 10 32 27.7l23.7-20c0 0-17.3-22.7-46.5-22.7C110 462.3 106.9 462.5 103.9 462.8M103.9 407.8v24.8c1.6-0.1 3.3-0.2 4.9-0.3 63.3-2.2 104.6 51.9 104.6 51.9s-47.4 57.7-96.7 57.7c-4.5 0-8.7-0.4-12.7-1.1v15.4c3.4 0.4 7 0.7 10.6 0.7 46 0 79.2-23.5 111.4-51.2 5.3 4.3 27.2 14.7 31.7 19.2 -30.6 25.6-101.9 46.3-142.3 46.3 -3.9 0-7.6-0.2-11.3-0.6v21.6h174.7V407.8H103.9zM103.9 527.8v13.1c-42.5-7.6-54.3-51.8-54.3-51.8s20.4-22.6 54.3-26.3v14.4c0 0 0 0-0.1 0 -17.7-2.2-31.7 14.5-31.7 14.5S80 519.6 103.9 527.8M28.4 487.2c0 0 25.2-37.1 75.5-41v-13.5C48.2 437.2 0 484.4 0 484.4s27.3 79 103.9 86.3v-14.4C47.7 549.2 28.4 487.2 28.4 487.2z"></path>
</g>
</svg>
<div class="global-footer__region hide">
<a href="/location-selector/" target="_self">
<span class="global-footer__region__label">
	           United States
	        </span>
</a>
</div>
<ul class="global-footer__links">

</ul>
<div class="global-footer__copyright">Copyright © 2026 NVIDIA Corporation</div>
<script> $(function() {    if (window.location.href.indexOf("/industries/finance") > -1) {
 if(!$('#main-header').find(".sub-brand-nav").length){ $( "#unibrow-container" ).after('<div class="sub-brand-nav"><div class="sub-brand-nav-container"><div class="brand-nav-left" style="width: auto;"><div id="sub-brand"><a class="sub-brand-name " href="/industries/"><span class="sub-brand-label size-small">Industries</span></a></div></div><div class="brand-nav-right financectadiv"><a href="#finance-subscribe" data-analytics="btn-manual:" data-title="Subscribe" data-href="#finance-subscribe" target="overlay" class="financecta breadcrumb-page-link model-popup cta link-btn btn-manual lb_iframe brand-green regular-btn " onclick="NVIDIAGDC.button.click(this, $(this).data(&quot;href&quot;),true, function() { ;return NVIDIAGDC.button.callbacks(this); }); return false;"><div class="btn"><span><strong>Subscribe Now</strong></span></div></a> </div></div></div>') ; } 
 $("body").removeClass("nv-megamenu");
}else{
if (window.location.href.indexOf("/industries/") > -1) {
if(!$('#main-header').find(".sub-brand-nav").length){ $( "#unibrow-container" ).after('<div class="sub-brand-nav"><div class="sub-brand-nav-container"><div class="brand-nav-left"><div id="sub-brand"><a class="sub-brand-name " href="/industries/"><span class="sub-brand-label size-small">Industries</span></a></div></div></div></div>') ; } 
 $("body").removeClass("nv-megamenu");
}
}
 }); </script>
<style>
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab8:checked~.menu3-container .nv-level3-tab8 {
  background-color:#eee;
  opacity:1;
  -webkit-transform:rotateX(0);
  transform:rotateX(0);
  transition:.2s ease-out;
  -webkit-transition:.2s ease-out;
  -o-transition:.2s ease-out;
  visibility:visible;
  width:100%
}
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab8:checked ~ .nv-level2-list-container .nv-menu-level2-list .slider-menu {
  opacity: 1;
}
</style>
</div>
</div>
</div>
<style>
    .image-container{
        position:relative;
    }
.image-credit {
    color: #ccc;
    font-size: 11px;
    line-height: 1.4em;
    position:absolute;
}
.image-credit.credit--dark{
    color: #333;
}
    .image-credit.position--top-left{
        top:12px;
        left:15px;
    } 
    .image-credit.position--top-right{
        top:12px;
        right:15px;
    } 
    .image-credit.position--bottom-left{
        bottom:27px;
        left:15px;
    } 
    .image-credit.position--bottom-right{
        bottom:27px;
        right:15px;
    } 
</style>
<script>
$(document).ready(function(){
    $('.image-credit').each(function(){
        var imageOuter = $(this).parent().parent().prev().children('.image-container').append(this);
    })
})
</script>
<style>
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab8:checked~.menu3-container .nv-level3-tab8 {
  background-color:#eee;
  opacity:1;
  -webkit-transform:rotateX(0);
  transform:rotateX(0);
  transition:.2s ease-out;
  -webkit-transition:.2s ease-out;
  -o-transition:.2s ease-out;
  visibility:visible;
  width:100%
}
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab8:checked ~ .nv-level2-list-container .nv-menu-level2-list .slider-menu {
  opacity: 1;
}

.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab9:checked~.menu3-container .nv-level3-tab9 {
  background-color:#eee;
  opacity:1;
  -webkit-transform:rotateX(0);
  transform:rotateX(0);
  transition:.2s ease-out;
  -webkit-transition:.2s ease-out;
  -o-transition:.2s ease-out;
  visibility:visible;
  width:100%
}
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab9:checked ~ .nv-level2-list-container .nv-menu-level2-list .slider-menu {
  opacity: 1;
}

.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab10:checked~.menu3-container .nv-level3-tab10 {
  background-color:#eee;
  opacity:1;
  -webkit-transform:rotateX(0);
  transform:rotateX(0);
  transition:.2s ease-out;
  -webkit-transition:.2s ease-out;
  -o-transition:.2s ease-out;
  visibility:visible;
  width:100%
}
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab10:checked ~ .nv-level2-list-container .nv-menu-level2-list .slider-menu {
  opacity: 1;
}
</style>
<script defer=" src=" ..="" assets="" www.nvidia.com="" content="" dam="" en-zz="" solutions="" librarian="" bundle-search-prod-pub-v3.1.js"=""></script>
<div id="librarian-search"><div></div></div>
<script defer="">
window.addEventListener('load', () => {
    LIBRARIAN.Home.mount({
                elementId: 'librarian-search',
                searchPage: false,
                placeholder:'',
                site : 'https://www.nvidia.com',
                generateSummary: false,
                page:"",  
                searchRedirectPath: '',
                preSelectedFilters: '',
                retainFilters: false,
                suggestedSearchPills: []
	})
});
</script>
</div>

    
</div>
</div>

            
    
    
<script src="../../assets/www.nvidia.com/etc.clientlibs/nvidiaweb/clientlibs/clientlib-site.min.893cfee860d5277f6bad0372ec8a2411.js"></script>
<script src="../../assets/www.nvidia.com/etc.clientlibs/nvidiaweb/clientlibs/clientlib-base.min.c615b422b69815dda8c5379a2b245500.js"></script>

    
	
	    
    

	
	
	
	
	

	
		<div id="country-selector-modal">
			<div class="cs-modal-content">
				<div class="cs-title h4">Select Location</div>
				<div class="region-section"><div class="region-title">The Americas</div><ul><li class="country-locale-name"><span><a href="/es-la/ai/cosmos/" title="Argentina" data-clocale="es-la">Argentina</a></span></li><li class="country-locale-name"><span><a href="/pt-br/ai/cosmos/" title="Brasil (Brazil)" data-clocale="pt-br">Brasil (Brazil)</a></span></li><li class="country-locale-name"><span><a href="/ai/cosmos/" title="Canada" data-clocale="en-ca">Canada</a></span></li><li class="country-locale-name"><span><a href="/es-la/ai/cosmos/" title="Chile" data-clocale="es-la">Chile</a></span></li><li class="country-locale-name"><span><a href="/es-la/ai/cosmos/" title="Colombia" data-clocale="es-la">Colombia</a></span></li><li class="country-locale-name"><span><a href="/es-la/ai/cosmos/" title="México (Mexico)" data-clocale="es-la">México (Mexico)</a></span></li><li class="country-locale-name"><span><a href="/es-la/ai/cosmos/" title="Peru" data-clocale="es-la">Peru</a></span></li><li class="country-locale-name"><span><a href="/ai/cosmos/" title="United States" data-clocale="en-us">United States</a></span></li></ul></div><div class="region-section"><div class="region-title">Europe</div><ul><li class="country-locale-name"><span><a href="/nl-nl/" title="België (Belgium)" data-clocale="nl-nl">België (Belgium)</a></span></li><li class="country-locale-name"><span><a href="/fr-be/" title="Belgique (Belgium)" data-clocale="fr-be">Belgique (Belgium)</a></span></li><li class="country-locale-name"><span><a href="/cs-cz/" title="Česká Republika (Czech Republic)" data-clocale="cs-cz">Česká Republika (Czech Republic)</a></span></li><li class="country-locale-name"><span><a href="/da-dk/" title="Danmark (Denmark)" data-clocale="da-dk">Danmark (Denmark)</a></span></li><li class="country-locale-name"><span><a href="/de-de/ai/cosmos/" title="Deutschland (Germany)" data-clocale="de-de">Deutschland (Germany)</a></span></li><li class="country-locale-name"><span><a href="/es-es/ai/cosmos/" title="España (Spain)" data-clocale="es-es">España (Spain)</a></span></li><li class="country-locale-name"><span><a href="/fr-fr/ai/cosmos/" title="France" data-clocale="fr-fr">France</a></span></li><li class="country-locale-name"><span><a href="/it-it/ai/cosmos/" title="Italia (Italy)" data-clocale="it-it">Italia (Italy)</a></span></li><li class="country-locale-name"><span><a href="/nl-nl/" title="Nederland (Netherlands)" data-clocale="nl-nl">Nederland (Netherlands)</a></span></li><li class="country-locale-name"><span><a href="/nb-no/" title="Norge (Norway)" data-clocale="nb-no">Norge (Norway)</a></span></li><li class="country-locale-name"><span><a href="/de-at/" title="Österreich (Austria)" data-clocale="de-at">Österreich (Austria)</a></span></li><li class="country-locale-name"><span><a href="/pl-pl/" title="Polska (Poland)" data-clocale="pl-pl">Polska (Poland)</a></span></li><li class="country-locale-name"><span><a href="/ro-ro/" title="România (Romania)" data-clocale="ro-ro">România (Romania)</a></span></li><li class="country-locale-name"><span><a href="/fi-fi/" title="Suomi (Finland)" data-clocale="fi-fi">Suomi (Finland)</a></span></li><li class="country-locale-name"><span><a href="/sv-se/" title="Sverige (Sweden)" data-clocale="sv-se">Sverige (Sweden)</a></span></li><li class="country-locale-name"><span><a href="/tr-tr/" title="Türkiye (Turkey)" data-clocale="tr-tr">Türkiye (Turkey)</a></span></li><li class="country-locale-name"><span><a href="/en-gb/ai/cosmos/" title="United Kingdom" data-clocale="en-gb">United Kingdom</a></span></li><li class="country-locale-name"><span><a href="/en-eu/ai/cosmos/" title="Rest of Europe" data-clocale="en-eu">Rest of Europe</a></span></li></ul></div><div class="region-section"><div class="region-title">Asia</div><ul><li class="country-locale-name"><span><a href="/en-au/ai/cosmos/" title="Australia" data-clocale="en-au">Australia</a></span></li><li class="country-locale-name"><span><a href="https://www.nvidia.cn/ai/cosmos/?ncid=no-ncid" title="中国大陆 (Mainland China)" data-clocale="zh-cn">中国大陆 (Mainland China)</a></span></li><li class="country-locale-name"><span><a href="/en-in/ai/cosmos/" title="India" data-clocale="en-in">India</a></span></li><li class="country-locale-name"><span><a href="/ja-jp/ai/cosmos/" title="日本 (Japan)" data-clocale="ja-jp">日本 (Japan)</a></span></li><li class="country-locale-name"><span><a href="/ko-kr/ai/cosmos/" title="대한민국 (South Korea)" data-clocale="ko-kr">대한민국 (South Korea)</a></span></li><li class="country-locale-name"><span><a href="/en-sg/ai/cosmos/" title="Singapore" data-clocale="en-sg">Singapore</a></span></li><li class="country-locale-name"><span><a href="/zh-tw/ai/cosmos/" title="台灣 (Taiwan)" data-clocale="zh-tw">台灣 (Taiwan)</a></span></li></ul></div><div class="region-section"><div class="region-title">Middle East</div><ul><li class="country-locale-name"><span><a href="/en-me/" title="Middle East" data-clocale="en-me">Middle East</a></span></li></ul></div><div id="cs-end"></div>
			</div>
		</div>
		<script type="text/javascript" src="../../assets/www.nvidia.com/content/dam/en-zz/Solutions/country-selector/countrySelector.js"></script>
	
	
	<script>
		$(function(){
			$(window).bind('load', function(){
				var ubContainer="";
				if(typeof t_ubContainer !== 'undefined' && t_ubContainer.length>0){
					ubContainer = t_ubContainer;
					var cookieKey = "";
					if(typeof t_cookieKey !== 'undefined' && t_cookieKey.length>0){
						cookieKey = t_cookieKey
					}
					var ubcookie = "";
					if(cookieKey.length>0){
						ubcookie = Cookies.get(cookieKey)!=='undefined'?Cookies.get(cookieKey):"";
					} else {
						ubcookie = "";
					}
					// var ubcookie = Cookies.get(cookieKey);
					var isCookie = typeof ubcookie !== 'undefined'?ubcookie:"";
					if(!isCookie){
						if(isCookie.length<1){
							if ($('#unibrow-container').length >0){
								$('#unibrow-container').removeClass('hide-unibrow');
								$('#unibrow-container').append(ubContainer);

								// Marquee initialization (only when .unibrow-marquee class is present)
								if ($('#unibrow-style.unibrow-marquee').length > 0) {
									// Apply configurable scroll speed from API variable
									var scrollSpeed = 15;
									if (typeof t_ubScrollSpeed !== 'undefined' && !isNaN(t_ubScrollSpeed)) {
										scrollSpeed = t_ubScrollSpeed;
									}
									document.documentElement.style.setProperty('--unibrow-scroll-speed', scrollSpeed + 's');

									// Clone text twice (3 copies total) for seamless continuous scroll
									var $track = $('.unibrow-scroll-track');
									if ($track.length > 0) {
										var $original = $track.find('.unibrow-scroll-text');
										var $clone1 = $original.clone().attr('aria-hidden', 'true');
										var $clone2 = $original.clone().attr('aria-hidden', 'true');
										$track.append($clone1).append($clone2);
									}
								}

								if ($(".sub-brand-nav").length >0){
									$(".sub-brand-nav").addClass('unibrow-top');
								}
								var ubsc = $(window).width();
								if(ubsc < NVIDIAGDC.tabletBreakpoint){
									var ml = $('#unibrow-container'),
									mcurHeight = ml.height(),
									mautoHeight = ml.css('height', 'auto').height();
									ml.height(mcurHeight).css('height', mautoHeight+10+'px');
								} else if(ubsc==NVIDIAGDC.desktopBreakpoint-1){
									var el = $('#unibrow-container'),
									tbcurHeight = el.height(),
									tbautoHeight = el.css('height', 'auto').height();
									el.height(tbcurHeight).css('height', tbautoHeight+11+'px');
								} else if(ubsc > NVIDIAGDC.tabletBreakpoint && ubsc < NVIDIAGDC.desktopBreakpoint){
									var ml = $('#unibrow-container'),
									tcurHeight = ml.height(),
									tautoHeight = ml.css('height', 'auto').height();
									ml.height(tcurHeight).css('height', tautoHeight+10+'px');
								} else {
									var el = $('#unibrow-container'),
									curHeight = el.height(),
									autoHeight = el.css('height', 'auto').height();
									el.height(curHeight).css('height', autoHeight+11+'px');
								}
								
								// Trigger custom event when unibrow is loaded
								if ($('#unibrow-container').height() > 0) {
									window.dispatchEvent(new CustomEvent("nvOnUnibrowLoaded"));
								}

								if($(".unibrow-close").length >0){
									$( ".unibrow-close" ).click(function(e) {
										e.preventDefault();
										//$(".unibrow-top").animate({'marginTop': '0px'}, { duration: animationCloseTime, queue: false });
										$(".unibrow-top").css('marginTop', '0px');
										//$("#unibrow-container").animate({'height': '0px'}, { duration: animationCloseTime, queue: false });
										$("#unibrow-container").css('height', '0px');
										$("#unibrow-style-outer").remove();
										$('.sub-brand-nav').removeClass('unibrow-top');
										if(ubsc < NVIDIAGDC.tabletBreakpoint){
											$(".subnav").css('marginTop', '');
										} else if(ubsc > NVIDIAGDC.tabletBreakpoint && ubsc < NVIDIAGDC.desktopBreakpoint){
											$(".subnav").css('marginTop', '');
										}
										if(typeof t_cookieKey !== 'undefined' && t_cookieKey.length>0){
											var cookieVal = "";
											var cookieExpires = 0;
											if(typeof t_cookieVal !== 'undefined' && t_cookieVal.length>0){
												cookieVal = t_cookieVal;
											}
											if(typeof t_cookieExpires !== 'undefined'){ cookieExpires = t_cookieExpires; }
											var expires = (new Date(Date.now()+ 86400*1000)).toUTCString();
											document.cookie = cookieKey + "=" +  cookieVal + "; expires=" + cookieExpires + ";path=/;";
										}
		                                $("#unibrow-container").addClass('hide-unibrow');
										if($(".subnav").length>0){
											$(".subnav").removeClass('unibrow-subnav');
										}
										$(".nv-page-body > .root").css("marginTop","");
										if($(".stbrdcrmbblock").length>0){
											$(".stbrdcrmbblock").css("top","");
		                                    $(".stbrdcrmbblock").css("position", "");
		                                    $(".stbrdcrmbblock").addClass("stbrdcrmbshadow");
										}

										// Trigger custom event when unibrow is loaded
										window.dispatchEvent(new CustomEvent("nvOnUnibrowClose"));
									});
								}
							}
						}
						
					}
				}
			});
		});
		
		var position = $(window).scrollTop();
		
		$(window).scroll(function() {
			if($(".hide-unibrow").length<1 && $(".stbrdcrmbblock.stbrdcrmbstick").length>0) {
				var scroll = $(window).scrollTop();
				if (scroll > position) {
					if($(window).width() < NVIDIAGDC.tabletBreakpoint){
						$(".stbrdcrmbblock").css("top", parseInt($(".global-nav").css("height"))+56+"px");
					} else if($(window).width() > NVIDIAGDC.tabletBreakpoint && $(window).width() < NVIDIAGDC.desktopBreakpoint){
						$(".stbrdcrmbblock").css("top", parseInt($(".global-nav").css("height"))+46+"px");
					} else if($(window).width() == NVIDIAGDC.desktopBreakpoint) {
						$(".stbrdcrmbblock").css("top", parseInt($(".global-nav").css("height"))-46+"px");
					} else {
						$(".stbrdcrmbblock").css("top", parseInt($(".global-nav").css("height"))+"px");
					}
					$(".stbrdcrmbblock").addClass("stbrdcrmbstick");
		            //console.log('scrollDown');
				} else {
					if($(window).width() < NVIDIAGDC.tabletBreakpoint){
						$(".stbrdcrmbblock").css("top", parseInt($(".global-nav").css("height"))+46+56+"px");
					} else if($(window).width() > NVIDIAGDC.tabletBreakpoint && $(window).width() < NVIDIAGDC.desktopBreakpoint){
						$(".stbrdcrmbblock").css("top", parseInt($(".global-nav").css("height"))+46+46+"px");
					} else if($(window).width() == NVIDIAGDC.desktopBreakpoint) {
						$(".stbrdcrmbblock").css("top", parseInt($(".global-nav").css("height"))+"px");
					} else {
						$(".stbrdcrmbblock").css("top", parseInt($(".global-nav").css("height"))+46+"px");
					}
					$(".stbrdcrmbblock").addClass("stbrdcrmbstickwthhead");
		            //console.log('scrollUp');
				}
				position = scroll;
			}
		});
	</script>

    

    

    
    

            

        
    
    
    
    

<script>
!function(w,d){if(!w.rdt){var p=w.rdt=function(){p.sendEvent?p.sendEvent.apply(p,arguments):p.callQueue.push(arguments)};p.callQueue=[];var t=d.createElement("script");t.src="https://www.redditstatic.com/ads/pixel.js",t.async=!0;var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(t,s)}}(window,document);rdt('init','t2_1w5wxf9o');rdt('track', 'PageVisit');
</script><script>
try {
  
    //GTC Update
    $(document).on('click', '.gtcRegistration-form .button, .gtcRegistration-complete .btn',function(){
    var getVal=$(this).text().trim();
    ClickOmniTrack('this', 'event10', 'button:section:', getVal);
    });
  
    $(document).on('click', '.nvidia-header__contact img',function(){
    var getVal="GTC Registration:Email";
    ClickOmniTrack('this', 'event10', 'button:section:', getVal);
    });

} catch (e) {}
</script><script>
//nav bar 
// Capture search term on form submission
$(document).on('submit', '#librarian-search-form', function(event) {
    var searchTerm = $(this).find('input[type="text"]').val();
    ClickOmniSearch(this,'event10,event21','link:search:success:',searchTerm);
});

$(document).on('click', '.librarian-suggestedPillsWrapper .librarian-suggestedPillsContainer .librarian-suggestedPills', function(event) {
    var searchTerm = $(this).text().trim();
    ClickOmniSearch(this,'event10,event21','link:suggested search term pill:',searchTerm);
});
</script><script>
var __nspid = "di9mb6";
var __nsptags = [];

var j = document.createElement("script");
j.type = "text/javascript";
j.async = true;
j.src = "http" + (document.location.protocol === "https:" ? "s://cs" : "://c") + ".ns1p.net/p.js?a=" + __nspid;
document.body.appendChild(j);

</script><script type="text/javascript" async=" src=" assets="" cs.ns1p.net="" p.js"=""></script><script>
try {
    $('.nav-header a.nav-search-link').click(function() {
        ClickOmniTrack(true, 'event10', 'img:header:', 'search');
    });
    $('.brand-container a.brand-link').click(function() {
        ClickOmniTrack(true, 'event10', 'logo:header:', 'nvidia')
    });
    $('.brand-container a.dropdown-arrow').click(function() {
        ClickOmniTrack(true, 'event10', 'link:header:nav:', 'nvidia-dropdown')
    });
    $('.menu-container .global-nav-link').click(function() {
        var $this = $(this);
        var getCal = $this.children('img.global-nav-image');
        if (getCal.length > 0) {
            ClickOmniTrackNav(true, 'event10,event11', 'img:header:nav:dropdown:' + $this.parents('.xl-8').find('.nav-section-title .body-text').text() + ':', $this.children('.global-nav-title').text());
        } else {
            ClickOmniTrackNav(true, 'event10,event11', 'link:header:nav:dropdown:' + $this.parents('.xl-4').find('.nav-section-title .body-text').text() + ':', $this.text());
        }
    });
    $('.nav-tools-container a.nav-profile-link').click(function() {
        ClickOmniTrack(true, 'event10', 'img:header:nav:', 'my account')
    });
    $('.sub-brand-nav a.sub-brand-name #sub-brand-logo').click(function() {
        var getAttr = $(this).attr('src');
        var getVal = getAttr.substring(getAttr.lastIndexOf('/') + 1).split('-Logo')[0];
        ClickOmniTrack(true, 'event10', 'logo:header:', getVal);
    });
    if (document.URL.indexOf('www.nvidiaaiconference.com') > -1) {
        $('.sub-brand-nav a.sub-brand-link,#sub-brand .sub-brand-name').click(function() {
            var getTxt = $(this).text().trim();
            ClickOmniTrackNav(true, 'event10,event11', 'link:header:nav:', getTxt)
        })
    }
} catch (e) {}
</script></body></html>