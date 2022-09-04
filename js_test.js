const f5washingMachine_box1 = document.getElementById('wash-box-5-1');
const f5washingMachine_1 = document.getElementById('washingMachine-5-1');
const f5washingMachine_box2 = document.getElementById('wash-box-5-2');
const f5washingMachine_2 = document.getElementById('washingMachine-5-2');

const f5shower_box1 = document.getElementById('bath-box-5-1');
const f5shower_1 = document.getElementById('bath-5-1');
const f5shower_box2 = document.getElementById('bath-box-5-2');
const f5shower_2 = document.getElementById('bath-5-2');
const f5shower_box3 = document.getElementById('bath-box-5-3');
const f5shower_3 = document.getElementById('bath-5-3');
const f5shower_box4 = document.getElementById('bath-box-5-4');
const f5shower_4 = document.getElementById('bath-5-4');
const f5shower_box5 = document.getElementById('bath-box-5-5');
const f5shower_5 = document.getElementById('bath-5-5');
const f5shower_box6 = document.getElementById('bath-box-5-6');
const f5shower_6 = document.getElementById('bath-5-6');

const f5disabled_box1 = document.getElementById('dis-box-5-1');
const f5disabled_1 = document.getElementById('disabled-5-1');
const f5dryerMachine_box1 = document.getElementById('dry-box-5-1');
const f5dryerMachine_1 = document.getElementById('dryerMachine-5-1');

const f5wc_1 = document.getElementById('wc-5-1');
const f5wc_2 = document.getElementById('wc-5-2');
const f5wc_3 = document.getElementById('wc-5-3');
f5washingMachine_box1_usage = 9;
f5washingMachine_box2_usage = 11;
f5shower_1_usage = 11;
f5shower_2_usage = 11;
f5shower_3_usage = 11;
f5shower_4_usage = 11;
f5shower_5_usage = 11;
f5shower_6_usage = 11;
f5disabled_1_usage = 9;
f5dryerMachine_1_usage = 11;


f5wc_1_usage = 11;
f5wc_2_usage = 9;
f5wc_3_usage = 11;
if (parseInt(f5washingMachine_box1_usage) > 10) {
    f5washingMachine_box1.style.background = 'yellow';
    f5washingMachine_1.style.fill = '#4071F5';
} else {
    f5washingMachine_1.style.fill = '#faf5f5';
    f5washingMachine_box1.style.background = '#609755';
}

if (parseInt(f5washingMachine_box2_usage) > 10) {
    f5washingMachine_box2.style.background = 'yellow';
    f5washingMachine_2.style.fill = '#4071F5';
} else {
    f5washingMachine_2.style.fill = '#faf5f5';
    f5washingMachine_box2.style.background = '#609755';
}

if (parseInt(f5shower_1_usage) > 10) {
    f5shower_1.style.opacity = 1;
    f5shower_box1.style.background = 'yellow';
} else {
    f5shower_1.style.opacity = 0.1;
    f5shower_box1.style.background = '#609755';
}

if (parseInt(f5shower_2_usage) > 10) {
    f5shower_2.style.opacity = 1;
    f5shower_box2.style.background = 'yellow';
} else {
    f5shower_2.style.opacity = 0.1;
    f5shower_box2.style.background = '#609755';
}

if (parseInt(f5shower_3_usage) > 10) {
    f5shower_3.style.opacity = 1;
    f5shower_box3.style.background = 'yellow';
} else {
    f5shower_3.style.opacity = 0.1;
    f5shower_box3.style.background = '#609755';
}
if (parseInt(f5shower_4_usage) > 10) {
    f5shower_4.style.opacity = 1;
    f5shower_box4.style.background = 'yellow';
} else {
    f5shower_4.style.opacity = 0.1;
    f5shower_box4.style.background = '#609755';
}
if (parseInt(f5shower_5_usage) > 10) {
    f5shower_5.style.opacity = 1;
    f5shower_box5.style.background = 'yellow';
} else {
    f5shower_5.style.opacity = 0.1;
    f5shower_box5.style.background = '#609755';
}
if (parseInt(f5shower_6_usage) > 10) {
    f5shower_6.style.opacity = 1;
    f5shower_box6.style.background = 'yellow';
} else {
    f5shower_6.style.opacity = 0.1;
    f5shower_box6.style.background = '#609755';
}
if (parseInt(f5disabled_1_usage) > 10) {
    f5disabled_1.style.opacity = 1;
    f5disabled_box1.style.background = 'yellow';
} else {
    f5disabled_1.style.opacity = 0.1;
    f5disabled_box1.style.background = '#609755';
}

if (parseInt(f5dryerMachine_1_usage) > 10) {
    f5dryerMachine_1.style.animation = 'dash 1.4s linear infinite';
    f5dryerMachine_box1.style.background = 'yellow';
} else {
    f5dryerMachine_box1.style.background = '#609755';
}

if (parseInt(f5wc_1_usage) > 10) {
    f5wc_1.style.opacity = 0.8;
} else {
    f5wc_1.style.opacity = 0.1;
}
if (parseInt(f5wc_2_usage) > 10) {
    f5wc_2.style.opacity = 0.8;
} else {
    f5wc_2.style.opacity = 0.1;
}
if (parseInt(f5wc_3_usage) > 10) {
    f5wc_3.style.opacity = 0.8;
} else {
    f5wc_3.style.opacity = 0.1;
}
