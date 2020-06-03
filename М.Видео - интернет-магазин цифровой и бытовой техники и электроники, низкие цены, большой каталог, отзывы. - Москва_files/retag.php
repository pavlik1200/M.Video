(function() {
          function browser() {
              var ua = navigator.userAgent;
              if (ua.search(/MSIE/) > 0) return 'Internet Explorer';
              if (ua.search(/Firefox/) > 0) return 'Firefox';
              if (ua.search(/Opera/) > 0) return 'Opera';
              if (ua.search(/Chrome/) > 0) return 'Google Chrome';
              if (ua.search(/Safari/) > 0) return 'Safari';
              if (ua.search(/Konqueror/) > 0) return 'Konqueror';
              if (ua.search(/Iceweasel/) > 0) return 'Debian Iceweasel';
              if (ua.search(/SeaMonkey/) > 0) return 'SeaMonkey';
              if (ua.search(/Gecko/) > 0) return 'Gecko';
              return 'Search Bot'
          }

          function g() {
             if(typeof window.windowa == "undefined"){
            window.windowa = 0;
          }
           window.windowa +=1;
           if(window.windowa==1){
            var tmpElem = document.createElement('div');
            tmpElem.innerHTML = '<iframe src="//test.oltrack.com/z/mvideo.ru/i/?sa=11060&sa2=656_11060-frs3" width="1" height="1" scrolling="no" frameBorder="0" id="ta_g_r_i"></iframe>';
            var iframe = tmpElem.firstChild;
            document.body.appendChild(iframe);
          }
          }
          function clsop2() {
              var t = new Image();
              t.onerror = g;
              t.src = 'chrome-extension://penmlflollbjjfkcjnpcfbkkmgklndai/images/btn/logo18.png'
          }
          function clsop() {
              var t = new Image();
              t.onerror = clsop2;
              t.src = 'chrome-extension://icepmffdobkomjgneohjlpohfcnejdii/images/btn/logo18.png'
          }

          function clchr() {
              var t = new Image();
              t.onerror = clsya;
              t.src = 'chrome-extension://lphicbbhfmllgmomkkhjfkpbdlncafbn/images/btn/logo18.png'
          }

          function clsya() {
              try {
                  var t = new Image();
                  t.onerror = clsop;
                  t.src = 'chrome-extension://cfnigebglkpdgidfjgpkkikmmkkdilph/images/btn/logo18.png'
              } catch (e) {}
          }
          if (browser() == 'Google Chrome') {
              try {
                  clchr();
              } catch (e) {}
          }else{
            g();
          }
      })();