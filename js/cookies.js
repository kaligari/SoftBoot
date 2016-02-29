var cookiePopupMsg = '';
cookiePopupMsg = 'Używamy plików cookies, aby ułatwić Ci korzystanie z naszego serwisu oraz do celów statystycznych. ';
cookiePopupMsg += 'Korzystając z naszej strony wyrażasz zgodę na wykorzystywanie przez nas plików cookies. <br />';
cookiePopupMsg += 'Jeśli nie blokujesz tych plików, to zgadzasz się na ich użycie oraz zapisanie w pamięci urządzenia. ';
cookiePopupMsg += 'Pamiętaj, że możesz samodzielnie zarządzać cookies, zmieniając ustawienia przeglądarki. ';
cookiePopupMsg += ' <a href="javascript:void(0)" onclick="cookiePopupHide()"><b>[x]&nbsp;Zamknij</b></a>';

var cookiePopupCSS = '';
cookiePopupCSS += "#cookie_popup         {opacity:1; width:100%; border-bottom:1px solid #c0c0c0; background:#aaa; font:normal normal 11px Tahoma; padding:5px; text-align:center; line-height:1.2; color:#fff; position:fixed; bottom:0px; left:0; z-index:1010}";
cookiePopupCSS += "#cookie_popup a       {color:#323232; font:normal normal 11px Tahoma; text-decoration:none;}";
cookiePopupCSS += "#cookie_popup a:hover {text-decoration:underline; color:#323232}";

function setCookie(name, value, expires, path, domain, secure) {
    document.cookie = name + "=" + escape(value) + ((expires) ? "; expires=" + expires : "") + ((path) ? "; path=" + path : "") + ((domain) ? "; domain=" + domain : "") + ((secure) ? "; secure" : "")
};

function getCookie(name) {
    var cookie = " " + document.cookie;
    var search = " " + name + "=";
    var setStr = null;
    var offset = 0;
    var end = 0;
    if (cookie.length > 0) {
        offset = cookie.indexOf(search);
        if (offset != -1) {
            offset += search.length;
            end = cookie.indexOf(";", offset);
            if (end == -1) {
                end = cookie.length
            }
            setStr = unescape(cookie.substring(offset, end))
        }
    }
    if (setStr == 'false') {
        setStr = false
    }
    if (setStr == 'true') {
        setStr = true
    }
    if (setStr == 'null') {
        setStr = null
    }
    return (setStr)
};

function cookiePopupMake() {
    var styleElem = document.createElement('style');
    styleElem.type = 'text/css';
    if (styleElem.styleSheet) {
        styleElem.styleSheet.cssText = cookiePopupCSS
    } else {
        styleElem.appendChild(document.createTextNode(cookiePopupCSS))
    }
    var head = document.getElementsByTagName('head')[0];
    head.appendChild(styleElem);
    var div = document.createElement('div');
    div.setAttribute('id', 'cookie_popup');
    div.innerHTML = cookiePopupMsg;
    if (document.body.firstChild) {
        document.body.insertBefore(div, document.body.firstChild)
    } else {
        document.body.appendChild(div)
    }
}

function cookiePopupHide() {
var today = new Date();
var expire = new Date();
expire.setTime(today.getTime() + 3600000*24*30);
    setCookie('cookie_agree', 1, expire.toUTCString(), '/');
    document.getElementById('cookie_popup').style.display = 'none'
};

function cookiePopupCheck() {
    if (getCookie('cookie_agree') == 1) {} else {
        cookiePopupMake()
    }
};

cookiePopupCheck();