function generateRanges() {
    const base_deduction = 180;
    const increment = 22.5;
    const ranges = [];
    let current_max = 4249;
    let current_deduction = base_deduction;

    while (current_max < 29750) {
        ranges.push({ max: current_max, base_deduction: current_deduction });
        current_max += 500; 
        current_deduction += increment; 
    }

    ranges.push({ max: Infinity, base_deduction: 1350 });

    return ranges;
}

function computeDeduction(value) {
    const ranges = generateRanges();

    for (let i = 0; i < ranges.length; i++) {
        if (value <= ranges[i].max) {
            return ranges[i].base_deduction;
        }
    }

    return 0;
}