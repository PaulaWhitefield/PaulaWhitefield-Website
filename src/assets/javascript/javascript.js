var colorMode = getColorMode();
var colorModeToggled = false;

if( window.matchMedia )
{
  outputColorSchemePrompt();
}

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
  colorMode = event.matches ? "dark" : "light";
  
  if( colorModeToggled )
    colorMode = colorMode == "dark" ? "light" : "dark";
  
  outputColorSchemePrompt();
});

function getColorMode()
{
  if( window.matchMedia )
  {
    if( window.matchMedia('(prefers-color-scheme: dark)').matches )
      return "dark";
    else
      return "light";
  }
  return false;
}

function outputColorSchemePrompt()
{
  if( ! colorMode )
    return;
  
  var colorSchemePrompt = document.getElementById( 'colorSchemePrompt' );
  
  if( ! colorModeToggled )
    colorSchemePrompt.innerHTML = '<p>Did you know, this site is also available in <a href="javascript: toggleColorMode();">' + ( colorMode == "dark" ? "Light" : "Dark" ) +' Mode</a>?</p>';
  else
    colorSchemePrompt.innerHTML = '<p>You are previewing ' + ( colorMode == "dark" ? "Dark" : "Light" ) + ' Mode.<br>Switch back to <a href="javascript: toggleColorMode();">' + ( colorMode == "dark" ? "Light" : "Dark" ) + ' Mode</a>?</p>';
}

function toggleColorMode()
{
  document.body.classList.toggle( 'toggle-color-mode' );
  
  colorMode = ( colorMode == "dark" ? "light" : "dark" );
  colorModeToggled = !colorModeToggled;
  outputColorSchemePrompt();
}