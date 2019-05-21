// import React, { Component } from 'react';
import React, { useState } from 'react';
// import logo from './logo.svg';
import './App.css';
import Person from './Person/Person';

const FunctionalComponent = props => {
  
  const [ personsState, setPersonsState] = useState({
    persons: [
      { name: 'Charles Swindoll', age: "Life is 10% of What Happens to Me and 90% of How I 'React' to It"},
      { name: 'Steve Jobs', age: 'Have the courage to follow your heart and intuition. They somehow know what your truly want to become. '},
      { name: 'Albert Einstein', age: 'We have to do the best we are capable of. This is our sacred human responsibility.'}
    ],
    udderstate: 'udder value'
  });
  
  const switchNameHandler = (newName) => {
    // DO NOT DO DIS ----> personsState.persons[0].name = 'Reactrog';
    setPersonsState({
      persons: [
        { name: newName, age: 'NEVER GIVE UP'},
        { name: 'Steve Jobs', age: 'NEVER GIVE UP'},
        { name: 'Albert Einstein', age: 'NEVER GIVE UP'}
      ]
    });
  };
  
  return (
    <div className="App">
      <header className="App-header">
        {/* <img src={logo} className="App-logo" alt="logo" /> */}
        <h1 className="App-title"><code>hello world</code></h1>
      </header>
      <p className="App-intro">
        To get started, edit <code>src/App.js</code> and save to reload.
      </p>
      
      {/* IF YOU PUT PARENTHESIS at END OF switchNameHandler'()' IT WOULD EXECUTE ON DOM RENDER! */}
      <button onClick={switchNameHandler.bind(this, 'Maximilian')}>Flip</button>
      
      {/* <Person name='Temp' type='F'> children are anything between opening and closing component tag. You should use function components as often as possible because you should use state with care.  </Person> */}
      <Person 
        name={personsState.persons[0].name}
        age={personsState.persons[0].age}
        click={switchNameHandler.bind(this, 'Max!!!!')} />
      <Person name={personsState.persons[1].name} age={personsState.persons[1].age} />
      <Person name={personsState.persons[2].name} age={personsState.persons[2].age} />
      
      
    
    </div>
  );
}

export default FunctionalComponent;
