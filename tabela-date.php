


<table class="doctable-table">
       
         <thead>
          <tr>
           <th>Caractere</th>
           <th>Descrição</th>
           <th>Exemplo de valores retornados</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td style="text-align: center;"><em class="emphasis">Dia</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><em>d</em></td>
           <td>Dia do mês, 2 dígitos com zero à esquerda</td>
           <td><em>01</em> até <em>31</em></td>
          </tr>

          <tr>
           <td><em>D</em></td>
           <td>Uma representação textual de um dia, três letras</td>
           <td><em>Mon</em> até <em>Sun</em></td>
          </tr>

          <tr>
           <td><em>j</em></td>
           <td>Dia do mês sem zero à esquerda</td>
           <td><em>1</em> até <em>31</em></td>
          </tr>

          <tr>
           <td><em>l</em> ('L' minúsculo)</td>
           <td>A representação textual completa do dia da semana</td>
           <td><em>Sunday</em> até <em>Saturday</em></td>
          </tr>

          <tr>
           <td><em>N</em></td>
           <td>Representação numérica ISO-8601 do dia da semana (adicionado no
           PHP 5.1.0)</td>
           <td><em>1</em> (para Segunda) até <em>7</em> (para Domingo)</td>
          </tr>

          <tr>
           <td><em>S</em></td>
           <td>Sufixo ordinal inglês para o dia do mês, 2 caracteres</td>
           <td>
            <em>st</em>, <em>nd</em>, <em>rd</em> ou
            <em>th</em>. Funciona bem com <em>j</em>
           </td>
          </tr>

          <tr>
           <td><em>w</em></td>
           <td>Representação numérica do dia da semana</td>
           <td><em>0</em> (para domingo) até <em>6</em> (para sábado)</td>
          </tr>

          <tr>
           <td><em>z</em></td>
           <td>O dia do ano (iniciando em 0)</td>
           <td><em>0</em> até <em>365</em></td>
          </tr>

          <tr>
           <td style="text-align: center;"><em class="emphasis">Semana</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><em>W</em></td>
           <td>Número do ano da semana ISO-8601, começa na Segunda (adicionado no PHP 4.1.0)</td>
           <td>Exemplo: <em>42</em> (a 42ª semana do ano)</td>
          </tr>

          <tr>
           <td style="text-align: center;"><em class="emphasis">Mês</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><em>F</em></td>
           <td>Um representação completa de um mês, como January ou March</td>
           <td><em>January</em> até <em>December</em></td>
          </tr>

          <tr>
           <td><em>m</em></td>
           <td>Representação numérica de um mês, com zero à esquerda</td>
           <td><em>01</em> a <em>12</em></td>
          </tr>

          <tr>
           <td><em>M</em></td>
           <td>Uma representação textual curta de um mês, três letras</td>
           <td><em>Jan</em> a <em>Dec</em></td>
          </tr>

          <tr>
           <td><em>n</em></td>
           <td>Representação numérica de um mês, sem zero à esquerda</td>
           <td><em>1</em> a <em>12</em></td>
          </tr>

          <tr>
           <td><em>t</em></td>
           <td>Número de dias de um dado mês</td>
           <td><em>28</em> até <em>31</em></td>
          </tr>

          <tr>
           <td style="text-align: center;"><em class="emphasis">Ano</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><em>L</em></td>
           <td>Se está em um ano bissexto</td>
           <td><em>1</em> se está em ano bissexto, <em>0</em>, caso contrário.</td>
          </tr>

          <tr>
           <td><em>o</em></td>
           <td>Número do ano ISO-8601. Este tem o mesmo valor como
            <em>Y</em>, exceto que se o número da semana ISO
            (<em>W</em>) pertence ao anterior ou próximo ano, o ano
            é usado ao invés. (adicionado no PHP 5.1.0)</td>
           <td>Exemplos: <em>1999</em> ou <em>2003</em></td>
          </tr>

          <tr>
           <td><em>Y</em></td>
           <td>Uma representação de ano completa, 4 dígitos</td>
           <td>Exemplos: <em>1999</em> ou <em>2003</em></td>
          </tr>

          <tr>
           <td><em>y</em></td>
           <td>Uma representação do ano com dois dígitos</td>
           <td>Exemplos: <em>99</em> ou <em>03</em></td>
          </tr>

          <tr>
           <td style="text-align: center;"><em class="emphasis">Tempo</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><em>a</em></td>
           <td>Antes/Depois de meio-dia em minúsculo</td>
           <td><em>am</em> or <em>pm</em></td>
          </tr>

          <tr>
           <td><em>A</em></td>
           <td>Antes/Depois de meio-dia em maiúsculo</td>
           <td><em>AM</em> or <em>PM</em></td>
          </tr>

          <tr>
           <td><em>B</em></td>
           <td>Swatch Internet time</td>
           <td><em>000</em> até <em>999</em></td>
          </tr>

          <tr>
           <td><em>g</em></td>
           <td>Formato 12-horas de uma hora sem zero à esquerda</td>
           <td><em>1</em> até <em>12</em></td>
          </tr>

          <tr>
           <td><em>G</em></td>
           <td>Formato 24-horas de uma hora sem zero à esquerda</td>
           <td><em>0</em> até <em>23</em></td>
          </tr>

          <tr>
           <td><em>h</em></td>
           <td>Formato 12-horas de uma hora com zero à esquerda</td>
           <td><em>01</em> até <em>12</em></td>
          </tr>

          <tr>
           <td><em>H</em></td>
           <td>Formato 24-horas de uma hora com zero à esquerda</td>
           <td><em>00</em> até <em>23</em></td>
          </tr>

          <tr>
           <td><em>i</em></td>
           <td>Minutos com zero à esquerda</td>
           <td><em>00</em> até <em>59</em></td>
          </tr>

          <tr>
           <td><em>s</em></td>
           <td>Segundos, com zero à esquerda</td>
           <td><em>00</em> até <em>59</em></td>
          </tr>

          <tr>
           <td><em>u</em></td>
           <td>
            Microssegundos (adicionado no PHP 5.2.2). Note que a função
            <span class="function"><strong>date()</strong></span> sempre gerará
            <em>000000</em>, já que aceita um parâmetro <span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>,
            enquanto que <span class="methodname"><a href="datetime.format.php" class="methodname">DateTime::format()</a></span> possui
            suporte a microssegundos se <a href="class.datetime.php" class="classname">DateTime</a> foi
            criado com microssegundos.
           </td>
           <td>Example: <em>654321</em></td>
          </tr>

          <tr>
           <td style="text-align: center;"><em class="emphasis">Fuso horário</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><em>e</em></td>
           <td>Identificador do fuso horário (adicionado no PHP 5.1.0)</td>
           <td>Exemplos: <em>UTC</em>, <em>GMT</em>, <em>Atlantic/Azores</em></td>
          </tr>

          <tr>
           <td><em>I</em> (i maiúsculo)</td>
           <td>Se a data está ou não no horário de verão</td>
           <td><em>1</em> se horário de verão, <em>0</em>, caso contrário.</td>
          </tr>

          <tr>
           <td><em>O</em></td>
           <td>Deslocamento ao Horário de Greenwish (GMT) em horas</td>
           <td>Exemplo: <em>+0200</em></td>
          </tr>

          <tr>
           <td><em>P</em></td>
           <td>Deslocamento ao Horário de Greenwish (GMT) com dois pontos entre horas e minutos (adicionado no PHP 5.1.3)</td>
           <td>Exemplo: <em>+02:00</em></td>
          </tr>

          <tr>
           <td><em>T</em></td>
           <td>Abreviação do fuso horário</td>
           <td>Exemplos: <em>EST</em>, <em>MDT</em> ...</td>
          </tr>

          <tr>
           <td><em>Z</em></td>
           <td>Deslocamento, em segundos, do fuso horário. O deslocamento para fusos horários a oeste de UTC sempre será
           negativa, e para aqueles à leste de UTC sempre será positiva.</td>
           <td><em>-43200</em> até <em>50400</em></td>
          </tr>

          <tr>
           <td style="text-align: center;"><em class="emphasis">Data/Hora completa</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><em>c</em></td>
           <td>Data ISO 8601 (adicionado no PHP 5)</td>
           <td>2004-02-12T15:19:21+00:00</td>
          </tr>

          <tr>
           <td><em>r</em></td>
           <td><a href="http://www.faqs.org/rfcs/rfc2822" class="link external">»&nbsp;RFC 2822</a> formatted date</td>
           <td>Exemplo: <em>Thu, 21 Dec 2000 16:01:07 +0200</em></td>
          </tr>

          <tr>
           <td><em>U</em></td>
           <td>Segundos desde Unix Epoch (January 1 1970 00:00:00 GMT)</td>
           <td>Veja também <span class="function"><a href="function.time.php" class="function">time()</a></span></td>
          </tr>

         </tbody>
        
       </table>