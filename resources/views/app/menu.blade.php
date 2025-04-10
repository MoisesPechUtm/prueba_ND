
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
              <span class="app-brand-logo demo">
              
              </span>
              <span class="app-brand-text demo menu-text fw-bold" >Hospital Nativo</span>
            </a>

          </div>

          <div class="menu-inner-shadow"></div>

          
          <ul class="menu-inner py-1">

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Catalogos</span>
            </li>
          
            <!-- Pacientes -->

            <li class="menu-item">
              <a 
              href="{{ route('paciente.getApiListado') }}"             
                class="menu-link">
                <svg class='menu-icon' height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M480-560q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T560-720q0-33-23.5-56.5T480-800q-33 0-56.5 23.5T400-720q0 33 23.5 56.5T480-640ZM160-80v-271q0-34 17-62.5t47-44.5q51-26 115.5-44T480-520q76 0 140.5 18T736-458q30 16 47 44.5t17 62.5v191q0 33-23.5 56.5T720-80H390q-46 0-78-32t-32-78q0-46 32-78t78-32h113l62-132q-20-4-41-6t-44-2q-72 0-128 17.5T261-386q-10 5-15.5 14.5T240-351v271h-80Zm230-80h48l28-60h-76q-12 0-21 9t-9 21q0 12 9 21t21 9Zm136 0h194v-191q0-11-5.5-20.5T700-386q-12-6-26-12.5T644-411L526-160Zm-46-560Zm0 426Z"/></svg>
                <div class="text-truncate" data-i18n="Email">Pacientes</div>
              </a>
            </li>

            <!-- Hospitales -->

            <li class="menu-item">
              <a 
                href="{{ route('hospital.getApiListado') }}"
                
                class="menu-link">
                <svg  class='menu-icon' height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M420-280h120v-100h100v-120H540v-100H420v100H320v120h100v100ZM160-120v-480l320-240 320 240v480H160Zm80-80h480v-360L480-740 240-560v360Zm240-270Z"/></svg>
                <div class="text-truncate" data-i18n="Email">Hospitales</div>
              </a>
            </li>

            <!-- Tutores -->

            <li class="menu-item">
              <a 
                href="{{ route('tutor.getApiListado') }}"
                
                class="menu-link">
                <svg  class='menu-icon' height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M720-720q-33 0-56.5-23.5T640-800q0-33 23.5-56.5T720-880q33 0 56.5 23.5T800-800q0 33-23.5 56.5T720-720ZM680-80v-320q0-40-20.5-72T607-522l35-103q8-25 29.5-40t48.5-15q27 0 48.5 15t29.5 40l102 305H800v240H680ZM500-500q-25 0-42.5-17.5T440-560q0-25 17.5-42.5T500-620q25 0 42.5 17.5T560-560q0 25-17.5 42.5T500-500ZM220-720q-33 0-56.5-23.5T140-800q0-33 23.5-56.5T220-880q33 0 56.5 23.5T300-800q0 33-23.5 56.5T220-720ZM140-80v-280H80v-240q0-33 23.5-56.5T160-680h120q33 0 56.5 23.5T360-600v240h-60v280H140Zm300 0v-160h-40v-160q0-25 17.5-42.5T460-460h80q25 0 42.5 17.5T600-400v160h-40v160H440Z"/></svg>
                <div class="text-truncate" data-i18n="Email">Tutores</div>
              </a>
            </li>



          </ul>
        </aside>