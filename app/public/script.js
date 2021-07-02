function getHost(){
    return location.hostname + ( ( location.port.length === 0 ) ? '' : ':' + location.port );
}