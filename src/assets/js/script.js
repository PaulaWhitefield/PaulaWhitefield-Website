var lastStarPosition = {
    x: 0,
    y: 0,
}

var starConfig = {
    minimumDistanceInPixels: 80,
    minimumTimeInMilliseconds: 250,
    lifespanInMilliseconds: 1500,
    sizesInPixels: [ 24, 16, 32 ],
    sizeInPixels: 24,
    svgs: [ 'white', 'yellow', 'aqua', 'red', 'slateblue' ],
    animations: [ 'star-fall-1', 'star-fall-2', 'star-fall-3' ],
}

var starCalcs = {
    lastPosition: {
        x: 0,
        y: 0,
    },
    distanceInPixels: ( lastPosition, currentPosition ) => Math.hypot( lastPosition.x - currentPosition.x, lastPosition.y - currentPosition.y ),
    elapsedTime: ( start, end ) => end - start,
    currentTimeInMilliseconds: 0,
    lastTimeInMilliseconds: 0,
}

window.onmousemove = e =>
{
    starCalcs.currentPosition = {
        x: e.pageX,
        y: e.pageY,
    }

    starCalcs.currentTimeInMilliseconds = new Date().getTime();

    var starBools = {
        isEnoughDistance: starCalcs.distanceInPixels( starCalcs.lastPosition, starCalcs.currentPosition ) >= starConfig.minimumDistanceInPixels,
        isNotEnoughDistance: starCalcs.distanceInPixels( starCalcs.lastPosition, starCalcs.currentPosition ) < starConfig.minimumDistanceInPixels,
        enoughTimeHasElapsed: starCalcs.elapsedTime( starCalcs.lastTimeInMilliseconds, starCalcs.currentTimeInMilliseconds ) >= starConfig.minimumTimeInMilliseconds,
        notEnoughTimeHasElapsed: starCalcs.elapsedTime( starCalcs.lastTimeInMilliseconds, starCalcs.currentTimeInMilliseconds ) < starConfig.minimumTimeInMilliseconds,
    }

    if( starBools.isNotEnoughDistance && starBools.notEnoughTimeHasElapsed )
        return;

    starConfig.sizeInPixels = selectRandom( starConfig.sizesInPixels );
    
    var star = document.createElement( 'span' );

    star.style.width = starConfig.sizeInPixels + 'px';
    star.style.height = starConfig.sizeInPixels + 'px';
    star.style.position = 'absolute';
    star.style.top = starCalcs.currentPosition.y + 'px';
    star.style.left = starCalcs.currentPosition.x + 'px';
    star.style.backgroundImage = "url('/assets/images/svgs/star-alt-3-" + selectRandom( starConfig.svgs ) + ".svg')";
    star.style.backgroundSize = 'cover';
    star.style.animationDuration = starConfig.lifespanInMilliseconds + 'ms';
    star.style.animationFillMode = 'forwards';
    star.style.animationName = selectRandom( starConfig.animations );

    document.body.appendChild( star );
    
    starCalcs.lastPosition = {
        x: e.pageX,
        y: e.pageY,
    }

    starCalcs.lastTimeInMilliseconds = new Date().getTime();

    setTimeout(() => document.body.removeChild( star ), starConfig.lifespanInMilliseconds );
}

function selectRandom( list )
{
    return list[ Math.floor( Math.random() * list.length ) ];
}
