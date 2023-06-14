function handlePositionItems() {
    let positionItems = document.querySelectorAll('.position-item');

    let currentlySelected = document.querySelector('.president');
    
    for (const item of positionItems) {
        item.addEventListener('click', event => {
            event.preventDefault();
    
            console.log('CLICKED');
            
            currentlySelected.style.color = getComputedStyle(currentlySelected).getPropertyValue('border-color');
            currentlySelected.style.backgroundColor = '#fff';
    
            item.style.backgroundColor = getComputedStyle(item).getPropertyValue('border-color');
            item.style.color = '#fff';
    
            currentlySelected = item;

            viewPositionDetails(currentlySelected);
        });
    }
}

function viewPositionDetails(selected) {
    const image = document.querySelector('.position-card img');
    const positionName = document.querySelector('.position-name');
    const term = document.querySelector('.term');
    const func = document.querySelector('.function');
    const qualifications = document.querySelector('.qualifications');
    
    if (selected.classList.contains('president')) {
        image.setAttribute('src', '/onlinevoting/resources/images/president-seal.png');
        positionName.textContent = 'President';
        term.innerHTML = `<strong>Term</strong>: 6 years; may not run for re-election`;
        func.innerHTML = `<strong>Function</strong>: The president is the head of state and of government, and functions as the commander-in-chief of the Armed Forces of the Philippines. As chief executive, the president exercises control over all the executive departments, bureaus, and offices, and general supervision over local governments. The president appoints government officials, including the cabinet, the justices of the Supreme Court and heads of constitutional commissions, subject to confirmation requirements.`;
    } else if (selected.classList.contains('vice-president')) {
        image.setAttribute('src', '/onlinevoting/resources/images/vice-president-seal.png');
        positionName.textContent = 'Vice President';
        term.innerHTML = `<strong>Term</strong>: 6 years; may run for one re-election and shall not serve more than two consecutive terms`;
        func.innerHTML = `<strong>Function</strong>: The vice president succeeds the president in case of death, disability, or resignation. The vice president may be appointed to a cabinet position by the president without need for confirmation, concurrently serving as a secretary.`;
    } else if (selected.classList.contains('senators')) {      
        image.setAttribute('src', '/onlinevoting/resources/images/senate-seal.png');
        positionName.textContent = 'Senators';
        term.innerHTML = `<strong>Term</strong>: 6 years, may run for releection but may not serve more than two consecutive terms`;
        func.innerHTML = `<strong>Function</strong>: The Senate is the upper house of Congress; the House of Representatives is the lower house. Congress holds legislative power, except to the extent reserved to the people by the provision on initiative and referendum. The Senate is the sole that ratifies treaties and convenes the impeach court.`;
        qualifications.innerHTML = `
            <li>(1) Natural born and registered voter of the Philippines</li>
            <li>(2) A registered voter</li>
            <li>(3) Able to read & write</li>
            <li>(4) 35 years of age on the day of the election</li>
            <li>(5) Resident of the Philippines for not less than two years before election day</li>
        `;
    }
}

handlePositionItems();

function countCheckedSenators() {
    document.querySelectorAll('.vote-container input[type="checkbox"]')
    .forEach(item => {
        item.addEventListener('change', function(event) {
            if (item.checked) {
                if (document.querySelectorAll('.vote-container input[type="checkbox"]:checked').length > 12) {
                    document.querySelector('.modal').classList.toggle('hide');
                    document.querySelector('.frame').classList.toggle('hide');
                }                    
                console.log('FIRED');
            }
        });
    });
}

countCheckedSenators();

document.querySelector('.button').addEventListener('click', function(event) {
    document.querySelector('.modal').classList.toggle('hide');
    document.querySelector('.frame').classList.toggle('hide');
});


function checkSidebarSelected() {
    
}