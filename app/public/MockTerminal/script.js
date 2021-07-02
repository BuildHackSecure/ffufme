const MockTerminal = function(settings){

    settings.element.classList.add('mock-terminal');
    let terminal_header = document.createElement('DIV');
    terminal_header.classList.add('mock-terminal-header');
    terminal_header.innerHTML='<div class="btn-1"></div><div class="btn-2"></div><div class="btn-3"></div>'+ settings.server;
    let terminal_body = document.createElement('DIV');
    terminal_body.classList.add('mock-terminal-body');

    if( settings.hasOwnProperty('hide-line') ){
        terminal_body.innerHTML=settings.cmd;
    }else{
        terminal_body.innerHTML='<span class="host">' + settings.server + '</span>:<span class="dir">~</span># '+ settings.cmd;
    }
    settings.element.appendChild(terminal_header);
    settings.element.appendChild(terminal_body);

}