function SystemCommand(sendData, ptrFuncName, jData) {
    var strUrl = 'http://' + jData.IP + ':' + jData.HTTP_Port + '/cgi-bin/SysCommand.cgi?TYPE=jsonp';

    var sendData = {
                "username" : jData.Account,
                "password" : jData.Password,
                "data" : sendData
    };

    $.ajax({
        url: strUrl,
        type: "GET",
        data: {"jsonData": JSON.stringify(sendData)},
        dataType: 'jsonp',
        jsonp: 'callback',
        async: true,
        cache: false,
        success: function(rtnData) {
            console.log('SystemCommand() :: Success :: async -> SysCommand.cgi');
            ptrFuncName(rtnData);
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log('SystemCommand() :: Error :: async -> SysCommand.cgi' + ' ' + xhr.status + ' ' + thrownError);
          }
      });
      return null;
  };
